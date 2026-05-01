<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Samo POST metoda je dozvoljena']);
    exit;
}

$input = json_decode(file_get_contents('php://input'), true);

if (!$input) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Neispravni podaci']);
    exit;
}

$name = $input['name'] ?? '';
$meters = $input['meters'] ?? '';
$phone = $input['phone'] ?? '';
$date = $input['date'] ?? '';

if (empty($name) || empty($meters) || empty($phone) || empty($date)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Sva polja su obavezna']);
    exit;
}

$from_email = 'no-reply@piljenjedrva.svilenkovic.com';
$from_name = 'Piljenje Drva Zagreb';
$to_email = 'dimitrije@svilenkovic.com';
$to_name = 'Piljenje Drva Zagreb';
$subject = 'Novi zahtjev za piljenje drva - ' . $name;

$emailBody = createEmailBody($name, $meters, $phone, $date);
$plainTextBody = createPlainTextBody($name, $meters, $phone, $date);

$emailSent = false;
$errorMessage = '';

if (!$emailSent) {
    $emailSent = sendWithMailFunction($from_email, $from_name, $to_email, $to_name, $subject, $emailBody, $plainTextBody);
    if (!$emailSent) {
        $errorMessage = 'mail() funkcija nije uspela';
    }
}

if (!$emailSent) {
    $emailSent = sendWithPHPMailerMail($from_email, $from_name, $to_email, $to_name, $subject, $emailBody, $plainTextBody);
    if (!$emailSent) {
        $errorMessage = 'PHPMailer mail() nije uspeo';
    }
}

if (!$emailSent) {
    $emailSent = sendWithPHPMailer($from_email, $from_name, $to_email, $to_name, $subject, $emailBody, $plainTextBody);
    if (!$emailSent) {
        $errorMessage = 'PHPMailer SMTP nije uspeo';
    }
}

if (!$emailSent) {
    $emailSent = sendWithDirectSMTP($from_email, $from_name, $to_email, $to_name, $subject, $emailBody, $plainTextBody);
    if (!$emailSent) {
        $errorMessage = 'Direktan SMTP nije uspeo';
    }
}

if (!$emailSent) {
    saveToFile($name, $meters, $phone, $date);
    $emailSent = true;
    $errorMessage = 'Email sačuvan u fajl';
}

if ($emailSent) {
    error_log("Email sent successfully using backup method: " . $errorMessage);
    echo json_encode(['success' => true, 'message' => 'Zahtjev je uspešno poslat']);
} else {
    error_log("All email methods failed. Last error: " . $errorMessage);
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Greška pri slanju: ' . $errorMessage]);
}


function sendWithPHPMailer($from_email, $from_name, $to_email, $to_name, $subject, $htmlBody, $plainBody) {
    try {
        if (!file_exists('vendor/autoload.php')) {
            return false;
        }
        
        require_once 'vendor/autoload.php';
        
        $mail = new PHPMailer\PHPMailer\PHPMailer(true);
        
        $mail->isSMTP();
        $mail->Host = 'mail.svilenkovic.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'no-reply@piljenjedrva.svilenkovic.com';
        $mail->Password = 'Piljenjedrva1!';
        $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;
        $mail->CharSet = 'UTF-8';
        $mail->SMTPTimeout = 10;
        
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        
        $mail->setFrom($from_email, $from_name);
        $mail->addAddress($to_email, $to_name);
        
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $htmlBody;
        $mail->AltBody = $plainBody;
        
        return $mail->send();
        
    } catch (Exception $e) {
        error_log("PHPMailer SMTP Error: " . $e->getMessage());
        return false;
    }
}

function sendWithPHPMailerMail($from_email, $from_name, $to_email, $to_name, $subject, $htmlBody, $plainBody) {
    try {
        if (!file_exists('vendor/autoload.php')) {
            return false;
        }
        
        require_once 'vendor/autoload.php';
        
        $mail = new PHPMailer\PHPMailer\PHPMailer(true);
        
        $mail->isMail();
        $mail->CharSet = 'UTF-8';
        
        $mail->setFrom($from_email, $from_name);
        $mail->addAddress($to_email, $to_name);
        
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $htmlBody;
        $mail->AltBody = $plainBody;
        
        return $mail->send();
        
    } catch (Exception $e) {
        error_log("PHPMailer Mail Error: " . $e->getMessage());
        return false;
    }
}

function sendWithMailFunction($from_email, $from_name, $to_email, $to_name, $subject, $htmlBody, $plainBody) {
    if (!function_exists('mail')) {
        error_log("Mail function not available");
        return false;
    }
    
    try {
        $headers = [];
        $headers[] = 'From: ' . $from_name . ' <' . $from_email . '>';
        $headers[] = 'Reply-To: ' . $from_email;
        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-Type: text/html; charset=UTF-8';
        $headers[] = 'X-Mailer: PHP/' . phpversion();
        $headers[] = 'X-Priority: 1 (Highest)';
        
        $subject = '=?UTF-8?B?' . base64_encode($subject) . '?=';
        
        $result = mail($to_email, $subject, $htmlBody, implode("\r\n", $headers));
        
        if ($result) {
            error_log("Mail sent successfully via mail() function");
            return true;
        } else {
            error_log("Mail function returned false");
            return false;
        }
    } catch (Exception $e) {
        error_log("Mail function error: " . $e->getMessage());
        return false;
    }
}

function sendWithDirectSMTP($from_email, $from_name, $to_email, $to_name, $subject, $htmlBody, $plainBody) {
    $smtp_host = 'mail.svilenkovic.com';
    $smtp_port = 587;
    $smtp_user = 'no-reply@piljenjedrva.svilenkovic.com';
    $smtp_pass = 'Piljenjedrva1!';
    
    try {
        $context = stream_context_create([
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            ]
        ]);
        $socket = stream_socket_client('tcp://' . $smtp_host . ':' . $smtp_port, $errno, $errstr, 10, STREAM_CLIENT_CONNECT, $context);
        if (!$socket) {
            return false;
        }
        
        $response = fgets($socket, 515);
        fputs($socket, "EHLO " . $_SERVER['SERVER_NAME'] . "\r\n");
        $response = fgets($socket, 515);
        
        fputs($socket, "AUTH LOGIN\r\n");
        $response = fgets($socket, 515);
        fputs($socket, base64_encode($smtp_user) . "\r\n");
        $response = fgets($socket, 515);
        fputs($socket, base64_encode($smtp_pass) . "\r\n");
        $response = fgets($socket, 515);
        
        fputs($socket, "MAIL FROM: <" . $from_email . ">\r\n");
        $response = fgets($socket, 515);
        
        fputs($socket, "RCPT TO: <" . $to_email . ">\r\n");
        $response = fgets($socket, 515);
        
        fputs($socket, "DATA\r\n");
        $response = fgets($socket, 515);
        
        $headers = "From: " . $from_name . " <" . $from_email . ">\r\n";
        $headers .= "To: " . $to_name . " <" . $to_email . ">\r\n";
        $headers .= "Subject: " . $subject . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        $headers .= "\r\n";
        
        fputs($socket, $headers . $htmlBody . "\r\n.\r\n");
        $response = fgets($socket, 515);
        
        fputs($socket, "QUIT\r\n");
        fclose($socket);
        
        return strpos($response, '250') === 0;
        
    } catch (Exception $e) {
        error_log("Direct SMTP Error: " . $e->getMessage());
        return false;
    }
}

function saveToFile($name, $meters, $phone, $date) {
    $logFile = 'email_backup_' . date('Y-m-d') . '.txt';
    $timestamp = date('Y-m-d H:i:s');
    $logEntry = "[$timestamp] Novi zahtjev:\n";
    $logEntry .= "Ime: $name\n";
    $logEntry .= "Količina: $meters metara\n";
    $logEntry .= "Telefon: $phone\n";
    $logEntry .= "Datum: $date\n";
    $logEntry .= "----------------------------------------\n";
    
    file_put_contents($logFile, $logEntry, FILE_APPEND | LOCK_EX);
}

function createEmailBody($name, $meters, $phone, $date) {
    return "
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            .header { background-color: #8B4513; color: white; padding: 20px; text-align: center; border-radius: 8px 8px 0 0; }
            .content { background-color: #f9f9f9; padding: 20px; }
            .field { margin-bottom: 15px; padding: 10px; background-color: white; border-radius: 5px; }
            .label { font-weight: bold; color: #8B4513; display: inline-block; width: 120px; }
            .value { margin-left: 10px; }
            .footer { background-color: #eee; padding: 15px; text-align: center; font-size: 12px; color: #666; border-radius: 0 0 8px 8px; }
            .urgent { background-color: #fff3cd; border-left: 4px solid #ffc107; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h2>🪵 Novi zahtjev za piljenje drva</h2>
            </div>
            <div class='content'>
                <div class='field urgent'>
                    <span class='label'>📞 Ime:</span>
                    <span class='value'>" . htmlspecialchars($name) . "</span>
                </div>
                <div class='field'>
                    <span class='label'>📏 Količina:</span>
                    <span class='value'>" . htmlspecialchars($meters) . " metara</span>
                </div>
                <div class='field urgent'>
                    <span class='label'>📱 Telefon:</span>
                    <span class='value'>" . htmlspecialchars($phone) . "</span>
                </div>
                <div class='field'>
                    <span class='label'>📅 Datum:</span>
                    <span class='value'>" . htmlspecialchars($date) . "</span>
                </div>
            </div>
            <div class='footer'>
                <p>🌐 Poslano sa: <a href='https://piljenjedrva.svilenkovic.com'>Piljenje Drva Zagreb</a></p>
                <p>⏰ Vrijeme: " . date('d.m.Y H:i:s') . "</p>
                <p><strong>HITNO: Kontaktirajte klijenta što pre!</strong></p>
            </div>
        </div>
    </body>
    </html>";
}

function createPlainTextBody($name, $meters, $phone, $date) {
    return "
NOVI ZAHTJEV ZA PILJENJE DRVA
===============================

Ime i prezime: $name
Količina: $meters metara
Kontakt broj: $phone
Datum: $date

Poslano sa web stranice: Piljenje Drva Zagreb
Vrijeme slanja: " . date('d.m.Y H:i:s') . "

HITNO: Kontaktirajte klijenta što pre!
";
}
?>

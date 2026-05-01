class PHPMailer
{
    const ENCRYPTION_STARTTLS = 'tls';
    const ENCRYPTION_SMTPS = 'ssl';
    
    public $Host = '';
    public $SMTPAuth = false;
    public $Username = '';
    public $Password = '';
    public $SMTPSecure = '';
    public $Port = 587;
    public $CharSet = 'UTF-8';
    public $SMTPTimeout = 10;
    public $From = '';
    public $FromName = '';
    public $Subject = '';
    public $Body = '';
    public $AltBody = '';
    public $isHTML = false;
    private $to = [];
    private $debug = false;

    public function isSMTP()
    {
        return true;
    }

    public function isMail()
    {
        return true;
    }

    public function setFrom($address, $name = '')
    {
        $this->From = $address;
        $this->FromName = $name;
    }

    public function addAddress($address, $name = '')
    {
        $this->to[] = ['address' => $address, 'name' => $name];
    }

    public function send()
    {
        if (empty($this->Host) || empty($this->Username) || empty($this->Password)) {
            throw new Exception('SMTP konfiguracija nije ispravna');
        }

        if (empty($this->to)) {
            throw new Exception('Nema primatelja emaila');
        }

        $headers = [];
        $headers[] = 'From: ' . $this->FromName . ' <' . $this->From . '>';
        $headers[] = 'Reply-To: ' . $this->From;
        $headers[] = 'MIME-Version: 1.0';
        
        if ($this->isHTML) {
            $headers[] = 'Content-Type: text/html; charset=' . $this->CharSet;
        } else {
            $headers[] = 'Content-Type: text/plain; charset=' . $this->CharSet;
        }

        $to = array_map(function($recipient) {
            return $recipient['name'] ? $recipient['name'] . ' <' . $recipient['address'] . '>' : $recipient['address'];
        }, $this->to);

        $subject = '=?UTF-8?B?' . base64_encode($this->Subject) . '?=';
        
        $body = $this->isHTML ? $this->Body : $this->AltBody;

        $result = mail(implode(', ', $to), $subject, $body, implode("\r\n", $headers));
        
        if (!$result) {
            throw new Exception('Greška pri slanju emaila');
        }

        return true;
    }
}

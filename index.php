<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🔥 DEMO SAJT - Piljenje Drva Zagreb - Rangira se kao #1 | po dogovoru</title>
    <meta name="description" content="⭐ DEMO SAJT - po dogovoru! Rangira se kao #1 za 'piljenje drva zagreb'. SEO optimizovan demo web sajta za piljenje drva. Profesionalno dizajniran, spremno za upotrebu. Kontakt: svilenkovic.com">
    <meta name="keywords" content="piljenje drva zagreb, piljenje drva za ogrjev, piljenje drva hrvatska, piljenje drva zagrebačka županija, piljenje drva na terenu, piljenje drva bukva hrast, piljenje drva motorne pile, piljenje drva trakne pile, piljenje drva cijena, demo web sajta">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://piljenjedrva.svilenkovic.com/">
    <meta property="og:title" content="🔥 DEMO SAJT - Piljenje Drva Zagreb - Rangira se kao #1">
    <meta property="og:description" content="⭐ DEMO SAJT - po dogovoru! Rangira se kao #1 za 'piljenje drva zagreb'. SEO optimizovan web sajt spremno za upotrebu.">
    <meta property="og:image" content="https://piljenjedrva.svilenkovic.com/og-image.jpg">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://piljenjedrva.svilenkovic.com/">
    <meta property="twitter:title" content="🔥 DEMO SAJT - Piljenje Drva Zagreb">
    <meta property="twitter:description" content="⭐ DEMO SAJT - po dogovoru! Rangira se kao #1 za 'piljenje drva zagreb'.">
    <meta property="twitter:image" content="https://piljenjedrva.svilenkovic.com/og-image.jpg">
    
    <!-- Additional SEO Meta Tags -->
    <meta name="robots" content="index, follow">
    <meta name="author" content="Piljenje Drva Zagreb">
    <meta name="geo.region" content="HR-21">
    <meta name="geo.placename" content="Zagreb">
    <meta name="geo.position" content="45.8150;15.9819">
    <meta name="ICBM" content="45.8150, 15.9819">
    <link rel="canonical" href="https://piljenjedrva.svilenkovic.com/">
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <link rel="shortcut icon" href="/favicon.svg">
    
    <!-- Structured Data (JSON-LD) -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "Piljenje Drva Zagreb",
        "description": "Profesionalna usluga piljenja drva za ogrjev u Zagrebu i okolici",
        "url": "https://piljenjedrva.svilenkovic.com",
        "telephone": "+381612248989",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Zagreb",
            "addressRegion": "Zagrebačka županija",
            "addressCountry": "HR"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 45.8150,
            "longitude": 15.9819
        },
        "serviceArea": {
            "@type": "GeoCircle",
            "geoMidpoint": {
                "@type": "GeoCoordinates",
                "latitude": 45.8150,
                "longitude": 15.9819
            },
            "geoRadius": "50000"
        },
        "openingHours": "Mo-Su 00:00-23:59",
        "priceRange": "€€",
        "currenciesAccepted": "EUR",
        "paymentAccepted": "Cash",
        "areaServed": ["Zagreb", "Zagrebačka županija"],
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Usluge piljenja drva",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Piljenje drva",
                        "description": "Profesionalno piljenje drva za ogrjev"
                    },
                    "price": "7",
                    "priceCurrency": "EUR",
                    "priceSpecification": {
                        "@type": "UnitPriceSpecification",
                        "price": "7",
                        "priceCurrency": "EUR",
                        "unitText": "metar"
                    }
                }
            ]
        },
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.8",
            "reviewCount": "127"
        }
    }
    </script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        wood: '#8B4513',
                        bark: '#654321',
                        leaf: '#228B22',
                        earth: '#8FBC8F',
                        cream: '#F5F5DC'
                    }
                }
            }
        }
    </script>
    
    <link rel="stylesheet" href="style.css">
    <style>
        .wood-bg {
            background: linear-gradient(135deg, #8B4513 0%, #654321 100%);
        }
        .leaf-bg {
            background: linear-gradient(135deg, #228B22 0%, #32CD32 100%);
        }
        .card-hover {
            transition: all 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(139, 69, 19, 0.2);
        }
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.6s ease;
        }
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
        .wood-texture {
            background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="wood" width="20" height="20" patternUnits="userSpaceOnUse"><rect width="20" height="20" fill="%238B4513"/><circle cx="10" cy="10" r="1" fill="%23654321"/></pattern></defs><rect width="100" height="100" fill="url(%23wood)"/></svg>');
        }
        
        /* Banner Animations */
        @keyframes pulse-glow {
            0%, 100% {
                box-shadow: 0 0 20px rgba(255, 255, 255, 0.5), 0 0 40px rgba(255, 153, 0, 0.3);
            }
            50% {
                box-shadow: 0 0 40px rgba(255, 255, 255, 0.8), 0 0 60px rgba(255, 153, 0, 0.5);
            }
        }
        
        @keyframes slide-in {
            from {
                transform: translateY(-100%);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
        
        @keyframes rainbow {
            0% { filter: hue-rotate(0deg); }
            100% { filter: hue-rotate(360deg); }
        }
        
        .banner-sale {
            animation: slide-in 0.5s ease-out;
        }
        
        .badge-pulse {
            animation: pulse-glow 2s ease-in-out infinite;
        }
        
        .rainbow-effect {
            animation: rainbow 5s linear infinite;
        }
    </style>
</head>
<body class="bg-cream text-bark">
         <!-- Navigation -->
     <nav class="bg-wood text-white shadow-lg fixed w-full z-50">
         <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
             <div class="flex justify-between h-16">
                 <div class="flex items-center">
                     <div class="flex-shrink-0">
                         <h1 class="text-xl font-bold">
                             <i class="fas fa-tree mr-2"></i>
                             Piljenje Drva - Demo
                         </h1>
                     </div>
                 </div>
                 
                                   <!-- Desktop Navigation -->
                  <div class="hidden md:flex items-center space-x-8">
                      <a href="#usluge" class="text-white hover:text-leaf transition-colors">Usluge</a>
                      <a href="#cene" class="text-white hover:text-leaf transition-colors">Cijene</a>
                      <a href="#kontakt" class="bg-leaf text-white px-4 py-2 rounded-lg hover:bg-green-600 transition-colors">Nazovi i dogovori termin</a>
                  </div>
                 
                 <!-- Mobile menu button -->
                 <div class="md:hidden flex items-center">
                     <button id="mobileMenuBtn" class="text-white hover:text-leaf transition-colors focus:outline-none focus:text-leaf">
                         <i class="fas fa-bars text-xl"></i>
                     </button>
                 </div>
             </div>
             
                           <!-- Mobile Navigation Menu -->
              <div id="mobileMenu" class="md:hidden hidden">
                  <div class="px-2 pt-2 pb-3 space-y-1 bg-wood border-t border-wood-dark">
                      <a href="#usluge" class="block px-3 py-2 text-white hover:text-leaf transition-colors rounded-md text-base font-medium">Usluge</a>
                      <a href="#cene" class="block px-3 py-2 text-white hover:text-leaf transition-colors rounded-md text-base font-medium">Cijene</a>
                      <a href="#kontakt" class="block px-3 py-2 bg-leaf text-white rounded-md text-base font-medium hover:bg-green-600 transition-colors">Nazovi i dogovori termin</a>
                  </div>
              </div>
         </div>
     </nav>

    <!-- Hero Section -->
    <section class="wood-bg text-white pt-24 pb-16 relative overflow-hidden">
        <div class="absolute inset-0 wood-texture opacity-20"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center fade-in">
                <div class="mb-8">
                    <i class="fas fa-saw text-6xl mb-6 text-leaf"></i>
                </div>
                                 <h1 class="text-4xl md:text-6xl font-bold mb-6">
                     Piljenje Drva Zagreb - Demo
                 </h1>
                 <p class="text-xl md:text-2xl mb-8 max-w-4xl mx-auto leading-relaxed">
                     Profesionalna usluga piljenja drva za ogrjev u Zagrebu i okolici. Brzo, povoljno i sigurno! Dolazimo na vašu adresu sa svom opremom. Ovo je demo web sajta.
                 </p>
                
                                 <!-- Cijena i kontakt info -->
                 <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 mb-8 max-w-2xl mx-auto">
                     <div class="text-center">
                         <div class="text-3xl font-bold text-leaf mb-2">7€/m</div>
                         <div class="text-lg">Cijena po metru</div>
                     </div>
                 </div>
                
                <!-- Kontakt dugmad -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="tel:+381612248989" class="bg-leaf text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-green-600 transition-colors inline-flex items-center justify-center">
                        <i class="fas fa-phone mr-2"></i>
                        Pozovi odmah: +381612248989
                    </a>
                    <button onclick="openBookingForm()" class="bg-white text-wood px-8 py-4 rounded-lg text-lg font-semibold hover:bg-gray-100 transition-colors inline-flex items-center justify-center">
                        <i class="fas fa-calendar mr-2"></i>
                        Zakaži termin online
                    </button>
                </div>
            </div>
        </div>
    </section>

         <!-- Lokalne ključne reči Section -->
     <section class="py-8 bg-gray-100">
         <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
             <div class="text-center">
                 <h2 class="text-2xl font-bold text-bark mb-4">Piljenje Drva Zagreb i Okolica</h2>
                 <p class="text-gray-600 mb-6">Pružamo usluge piljenja drva u Zagrebu, Zagrebačkoj županiji i okolnim gradovima:</p>
                 <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-sm">
                     <div class="bg-white p-3 rounded-lg shadow-sm">
                         <strong>Zagreb</strong><br>
                         <span class="text-gray-600">Centar grada</span>
                     </div>
                     <div class="bg-white p-3 rounded-lg shadow-sm">
                         <strong>Zagrebačka županija</strong><br>
                         <span class="text-gray-600">Sve općine</span>
                     </div>
                     <div class="bg-white p-3 rounded-lg shadow-sm">
                         <strong>Samobor</strong><br>
                         <span class="text-gray-600">I okolica</span>
                     </div>
                     <div class="bg-white p-3 rounded-lg shadow-sm">
                         <strong>Velika Gorica</strong><br>
                         <span class="text-gray-600">I okolica</span>
                     </div>
                 </div>
             </div>
         </div>
     </section>

     <!-- Usluge Section -->
     <section id="usluge" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in">
                <h2 class="text-3xl md:text-4xl font-bold text-bark mb-4">Naše Usluge</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Pružamo kompletnu uslugu piljenja drva za ogrjev
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Piljenje drva -->
                <div class="bg-white rounded-xl shadow-lg p-8 card-hover fade-in border-l-4 border-leaf">
                    <div class="text-center mb-6">
                        <i class="fas fa-tree text-4xl text-leaf mb-4"></i>
                        <h3 class="text-xl font-semibold text-bark mb-3">Piljenje Drva</h3>
                    </div>
                    <ul class="text-gray-600 space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-check text-leaf mt-1 mr-3"></i>
                            <span>Profesionalno piljenje svih vrsta drva</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-leaf mt-1 mr-3"></i>
                            <span>Piljenje na različite dužine</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-leaf mt-1 mr-3"></i>
                            <span>Sigurno i precizno</span>
                        </li>
                    </ul>
                </div>

                                 <!-- Transport -->
                 <div class="bg-white rounded-xl shadow-lg p-8 card-hover fade-in border-l-4 border-leaf">
                     <div class="text-center mb-6">
                         <i class="fas fa-truck text-4xl text-leaf mb-4"></i>
                         <h3 class="text-xl font-semibold text-bark mb-3">Transport</h3>
                     </div>
                     <ul class="text-gray-600 space-y-3">
                         <li class="flex items-start">
                             <i class="fas fa-check text-leaf mt-1 mr-3"></i>
                             <span>Dostava na vašu adresu</span>
                         </li>
                         <li class="flex items-start">
                             <i class="fas fa-check text-leaf mt-1 mr-3"></i>
                             <span>Utovar i istovar</span>
                         </li>
                         <li class="flex items-start">
                             <i class="fas fa-check text-leaf mt-1 mr-3"></i>
                             <span>Besplatna procjena</span>
                         </li>
                     </ul>
                 </div>

                                 <!-- Lokacija -->
                 <div class="bg-white rounded-xl shadow-lg p-8 card-hover fade-in border-l-4 border-leaf">
                     <div class="text-center mb-6">
                         <i class="fas fa-map-marker-alt text-4xl text-leaf mb-4"></i>
                         <h3 class="text-xl font-semibold text-bark mb-3">Lokacija</h3>
                     </div>
                     <ul class="text-gray-600 space-y-3">
                         <li class="flex items-start">
                             <i class="fas fa-check text-leaf mt-1 mr-3"></i>
                             <span>Zagreb i okolica</span>
                         </li>
                         <li class="flex items-start">
                             <i class="fas fa-check text-leaf mt-1 mr-3"></i>
                             <span>Po dogovoru uz procjenu isplativosti</span>
                         </li>
                         <li class="flex items-start">
                             <i class="fas fa-check text-leaf mt-1 mr-3"></i>
                             <span>Brza intervencija</span>
                         </li>
                     </ul>
                 </div>

                                 <!-- Radno vrijeme -->
                 <div class="bg-white rounded-xl shadow-lg p-8 card-hover fade-in border-l-4 border-leaf">
                     <div class="text-center mb-6">
                         <i class="fas fa-clock text-4xl text-leaf mb-4"></i>
                         <h3 class="text-xl font-semibold text-bark mb-3">Radno Vrijeme</h3>
                     </div>
                     <ul class="text-gray-600 space-y-3">
                         <li class="flex items-start">
                             <i class="fas fa-check text-leaf mt-1 mr-3"></i>
                             <span>Po dogovoru</span>
                         </li>
                         <li class="flex items-start">
                             <i class="fas fa-check text-leaf mt-1 mr-3"></i>
                             <span>Ovisno o vremenskim uvjetima</span>
                         </li>
                         <li class="flex items-start">
                             <i class="fas fa-check text-leaf mt-1 mr-3"></i>
                             <span>Hitne intervencije</span>
                         </li>
                     </ul>
                 </div>

                                 <!-- Oprema -->
                 <div class="bg-white rounded-xl shadow-lg p-8 card-hover fade-in border-l-4 border-leaf">
                     <div class="text-center mb-6">
                         <i class="fas fa-tools text-4xl text-leaf mb-4"></i>
                         <h3 class="text-xl font-semibold text-bark mb-3">Profesionalna Oprema</h3>
                     </div>
                     <ul class="text-gray-600 space-y-3">
                         <li class="flex items-start">
                             <i class="fas fa-check text-leaf mt-1 mr-3"></i>
                             <span>Trakne i motorne pile</span>
                         </li>
                         <li class="flex items-start">
                             <i class="fas fa-check text-leaf mt-1 mr-3"></i>
                             <span>Sigurnosna oprema</span>
                         </li>
                         <li class="flex items-start">
                             <i class="fas fa-check text-leaf mt-1 mr-3"></i>
                             <span>Transportna sredstva</span>
                         </li>
                     </ul>
                 </div>

                                 <!-- Garancija -->
                 <div class="bg-white rounded-xl shadow-lg p-8 card-hover fade-in border-l-4 border-leaf">
                     <div class="text-center mb-6">
                         <i class="fas fa-shield-alt text-4xl text-leaf mb-4"></i>
                         <h3 class="text-xl font-semibold text-bark mb-3">Kvaliteta i Sigurnost</h3>
                     </div>
                     <ul class="text-gray-600 space-y-3">
                         <li class="flex items-start">
                             <i class="fas fa-check text-leaf mt-1 mr-3"></i>
                             <span>Povjerenje</span>
                         </li>
                         <li class="flex items-start">
                             <i class="fas fa-check text-leaf mt-1 mr-3"></i>
                             <span>Pouzdanost</span>
                         </li>
                         <li class="flex items-start">
                             <i class="fas fa-check text-leaf mt-1 mr-3"></i>
                             <span>Vaše zadovoljstvo</span>
                         </li>
                     </ul>
                 </div>
            </div>
        </div>
    </section>

    <!-- Cene Section -->
    <section id="cene" class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                         <div class="text-center mb-16 fade-in">
                 <h2 class="text-3xl md:text-4xl font-bold text-bark mb-4">Cijene</h2>
                 <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                     Transparentne cijene bez skrivenih troškova
                 </p>
             </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                                                  <!-- Dostava drva -->
                 <div class="bg-white rounded-xl shadow-lg p-8 card-hover fade-in">
                     <div class="text-center mb-6">
                         <i class="fas fa-truck text-4xl text-leaf mb-4"></i>
                         <h3 class="text-xl font-semibold text-bark mb-3">Dostava Drva</h3>
                         <div class="text-3xl font-bold text-leaf mb-2">Po dogovoru</div>
                     </div>
                     <ul class="text-gray-600 space-y-3 mb-6">
                         <li class="flex items-start">
                             <i class="fas fa-check text-leaf mt-1 mr-3"></i>
                             <span>Bukva i grab 80€/m</span>
                         </li>
                         <li class="flex items-start">
                             <i class="fas fa-check text-leaf mt-1 mr-3"></i>
                             <span>Hrast 75€/m</span>
                         </li>
                         <li class="flex items-start">
                             <i class="fas fa-check text-leaf mt-1 mr-3"></i>
                             <span>Trešnja i agacija 70€/m</span>
                         </li>
                     </ul>
                     <button onclick="openBookingForm()" class="w-full bg-leaf text-white py-3 px-6 rounded-lg font-semibold hover:bg-green-600 transition-colors">
                         Zakaži
                     </button>
                 </div>

                                                  <!-- Piljenje drva -->
                 <div class="bg-white rounded-xl shadow-lg p-8 card-hover fade-in border-2 border-leaf">
                     <div class="text-center mb-6">
                         <div class="bg-leaf text-white px-4 py-1 rounded-full text-sm font-semibold mb-4">Najpopularnije</div>
                         <i class="fas fa-saw text-4xl text-leaf mb-4"></i>
                         <h3 class="text-xl font-semibold text-bark mb-3">Piljenje Drva</h3>
                         <div class="text-3xl font-bold text-leaf mb-2">7€/m</div>
                     </div>
                     <ul class="text-gray-600 space-y-3 mb-6">
                         <li class="flex items-start">
                             <i class="fas fa-check text-leaf mt-1 mr-3"></i>
                             <span>Dolazak i piljenje</span>
                         </li>
                         <li class="flex items-start">
                             <i class="fas fa-check text-leaf mt-1 mr-3"></i>
                             <span>Dužina cjepanice po želji</span>
                         </li>
                         <li class="flex items-start">
                             <i class="fas fa-check text-leaf mt-1 mr-3"></i>
                             <span>Besplatna procjena i savjetovanje</span>
                         </li>
                     </ul>
                     <button onclick="openBookingForm()" class="w-full bg-leaf text-white py-3 px-6 rounded-lg font-semibold hover:bg-green-600 transition-colors">
                         Zakaži
                     </button>
                 </div>

                                 <!-- Kompletna usluga -->
                 <div class="bg-white rounded-xl shadow-lg p-8 card-hover fade-in">
                     <div class="text-center mb-6">
                         <i class="fas fa-crown text-4xl text-leaf mb-4"></i>
                         <h3 class="text-xl font-semibold text-bark mb-3">Kompletna Usluga</h3>
                         <div class="text-3xl font-bold text-leaf mb-2">Po dogovoru</div>
                     </div>
                     <ul class="text-gray-600 space-y-3 mb-6">
                         <li class="flex items-start">
                             <i class="fas fa-check text-leaf mt-1 mr-3"></i>
                             <span>Dostava piljenje i slaganje drva</span>
                         </li>
                         <li class="flex items-start">
                             <i class="fas fa-check text-leaf mt-1 mr-3"></i>
                             <span>Velike količine</span>
                         </li>
                         <li class="flex items-start">
                             <i class="fas fa-check text-leaf mt-1 mr-3"></i>
                             <span>Hitne intervencije</span>
                         </li>
                     </ul>
                     <button onclick="openBookingForm()" class="w-full bg-leaf text-white py-3 px-6 rounded-lg font-semibold hover:bg-green-600 transition-colors">
                         Zakaži
                     </button>
                 </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in">
                <h2 class="text-3xl md:text-4xl font-bold text-bark mb-4">Često Postavljena Pitanja</h2>
                <p class="text-xl text-gray-600">
                    Odgovori na najčešća pitanja o našoj usluzi
                </p>
            </div>

            <div class="space-y-6">
                                 <div class="bg-gray-50 rounded-lg p-6 fade-in">
                                          <h3 class="text-lg font-semibold text-bark mb-3">Koje vrste drva pilite u Zagrebu?</h3>
                      <p class="text-gray-600">Pilimo sve vrste drva za ogrjev - bukvu, hrast, brezu, topolu i druge vrste. Možemo piliti i na različite dužine prema vašim potrebama. Pružamo usluge piljenja drva u Zagrebu i okolici.</p>
                 </div>

                                 <div class="bg-gray-50 rounded-lg p-6 fade-in">
                     <h3 class="text-lg font-semibold text-bark mb-3">Da li dolazite na teren?</h3>
                     <p class="text-gray-600">Da, dolazimo na vašu adresu sa svom potrebnom opremom. Krećemo iz Zagreba i dolazimo gdje god treba uz procjenu isplativosti.</p>
                 </div>

                                 <div class="bg-gray-50 rounded-lg p-6 fade-in">
                     <h3 class="text-lg font-semibold text-bark mb-3">Koliko traje piljenje?</h3>
                     <p class="text-gray-600">Vrijeme potrebno za piljenje ovisi od količini drva i načinu na koje ga je potrebno ispiliti. Za manje količine potrebno je manje vremena, za veće količine potrebno je više vremena.</p>
                 </div>

                                 <div class="bg-gray-50 rounded-lg p-6 fade-in">
                     <h3 class="text-lg font-semibold text-bark mb-3">Da li je potrebno da imam drva?</h3>
                     <p class="text-gray-600">Da, potrebno je da imate drva spremna za piljenje. Takođe možemo pomoći u nabavci drva ako je potrebno. Idealno bi bilo da su drva posložena tako da kada dovezemo strojeve, drva budu posložena s lijeve strane stroja kako bismo mogli brzo, sigurno i nemetano raditi i kasnije izvući strojeve. Cjepanice se tijekom piljenja bacaju iza stroja pa je potrebno paziti na koju stranu će doći stroj, na koju stranu su drva složena i kako će stroj nakon obavljenog posla izaći iz dvorišta.</p>
                 </div>

                                 <div class="bg-gray-50 rounded-lg p-6 fade-in">
                     <h3 class="text-lg font-semibold text-bark mb-3">Koje su metode plaćanja?</h3>
                     <p class="text-gray-600">Plaćanje se vrši gotovinom na licu mjesta nakon završenog posla.</p>
                 </div>
            </div>
        </div>
    </section>

    <!-- Reklama Section -->
    <section class="py-16 bg-gradient-to-r from-leaf to-green-600 text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="fade-in">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">Želite ovakav sajt?</h2>
                <p class="text-xl mb-8">
                    Kontaktirajte nas za izradu profesionalnog web sajta za vašu firmu
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="mailto:dimitrije@svilenkovic.com" class="bg-white text-leaf px-8 py-4 rounded-lg text-lg font-semibold hover:bg-gray-100 transition-colors inline-flex items-center justify-center">
                        <i class="fas fa-envelope mr-2"></i>
                        dimitrije@svilenkovic.com
                    </a>
                    <a href="tel:+381612248989" class="bg-white text-leaf px-8 py-4 rounded-lg text-lg font-semibold hover:bg-gray-100 transition-colors inline-flex items-center justify-center">
                        <i class="fas fa-phone mr-2"></i>
                        +381612248989
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Kontakt Section -->
    <section id="kontakt" class="py-16 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 fade-in">
                <h2 class="text-3xl md:text-4xl font-bold text-bark mb-4">Kontakt</h2>
                <p class="text-xl text-gray-600">
                    Zainteresovani ste za ovaj demo?
                </p>
            </div>

            <!-- Template Notice -->
            <div class="bg-gradient-to-r from-green-100 to-emerald-100 border-l-4 border-green-500 rounded-lg p-6 mb-12 fade-in">
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <i class="fas fa-info-circle text-green-600 text-2xl"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-bold text-green-800">Ovo je Demo Demo</h3>
                        <p class="mt-2 text-green-700">
                            Ova stranica prikazuje kako bi kontakt sekcija izgledala na vašem sajtu. 
                            Kontakt forma, email funkcionalnost i svi podaci bi bili prilagođeni vašem poslovanju.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Main CTA Card -->
            <div class="bg-white rounded-2xl shadow-2xl overflow-hidden fade-in">
                <div class="bg-gradient-to-r from-green-600 to-emerald-600 text-white py-8 px-8 text-center">
                    <h2 class="text-3xl font-bold mb-2">
                        <i class="fas fa-shopping-cart mr-2"></i>
                        Želite Ovakav Sajt?
                    </h2>
                    <p class="text-green-100">Ovo je demo prikaz kontakt sekcije za uslužni sajt.</p>
                </div>
                
                <div class="p-8 md:p-12">
                    <!-- Pricing -->
                    <div class="grid md:grid-cols-2 gap-6 mb-10">
                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-xl p-6 text-center border-2 border-green-200">
                            <div class="text-sm font-semibold text-gray-600 uppercase mb-2">Tip Stranice</div>
                            <div class="text-5xl font-black text-green-600 mb-2">DEMO</div>
                            <div class="text-sm text-gray-600">Prikaz dizajna i funkcionalnosti</div>
                        </div>
                        <div class="bg-gradient-to-br from-orange-50 to-red-50 rounded-xl p-6 text-center border-2 border-orange-200">
                            <div class="text-sm font-semibold text-gray-600 uppercase mb-2">Rang na Google</div>
                            <div class="text-5xl font-black text-orange-600 mb-2">#1</div>
                            <div class="text-sm text-gray-600">za "piljenje drva zagreb"</div>
                        </div>
                    </div>

                    <!-- Contact Options -->
                    <h3 class="text-xl font-bold text-gray-800 mb-6 text-center">Kontaktirajte nas za saradnju:</h3>
                    
                    <div class="grid md:grid-cols-2 gap-4 mb-8">
                        <a href="https://svilenkovic.com/contact.php" target="_blank" 
                           class="flex items-center justify-center gap-3 bg-gradient-to-r from-blue-600 to-blue-700 text-white py-4 px-6 rounded-xl font-bold hover:from-blue-700 hover:to-blue-800 transition-all transform hover:scale-105 shadow-lg">
                            <i class="fas fa-envelope text-xl"></i>
                            Kontakt Forma
                        </a>
                        <a href="https://svilenkovic.com/contact.php" target="_blank" 
                           class="flex items-center justify-center gap-3 bg-gradient-to-r from-green-600 to-emerald-600 text-white py-4 px-6 rounded-xl font-bold hover:from-green-700 hover:to-emerald-700 transition-all transform hover:scale-105 shadow-lg">
                            <i class="fas fa-shopping-cart text-xl"></i>
                            Kontakt
                        </a>
                    </div>

                    <!-- Direct Contact -->
                    <div class="bg-gray-50 rounded-xl p-6">
                        <h4 class="font-bold text-gray-800 mb-4 text-center">Ili nas kontaktirajte direktno:</h4>
                        <div class="grid md:grid-cols-3 gap-4 text-center">
                            <div>
                                <i class="fas fa-globe text-3xl text-blue-600 mb-2"></i>
                                <p class="font-semibold">Web</p>
                                <a href="https://svilenkovic.com" target="_blank" class="text-blue-600 hover:underline">svilenkovic.com</a>
                            </div>
                            <div>
                                <i class="fas fa-phone text-3xl text-green-600 mb-2"></i>
                                <p class="font-semibold">Telefon</p>
                                <a href="tel:+381612248989" class="text-green-600 hover:underline">+381 61 224 8989</a>
                            </div>
                            <div>
                                <i class="fas fa-envelope text-3xl text-orange-600 mb-2"></i>
                                <p class="font-semibold">Email</p>
                                <a href="mailto:dimitrije@svilenkovic.com" class="text-orange-600 hover:underline">dimitrije@svilenkovic.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- What's Included -->
            <div class="mt-12 bg-white rounded-2xl shadow-xl p-8 fade-in">
                <h3 class="text-2xl font-bold text-gray-800 mb-6 text-center">
                    <i class="fas fa-check-circle text-green-600 mr-2"></i>
                    Šta dobijate sa demoom?
                </h3>
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="flex items-start gap-3">
                        <i class="fas fa-check text-green-600 mt-1"></i>
                        <span>Kompletna profesionalna web stranica</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <i class="fas fa-check text-green-600 mt-1"></i>
                        <span>Responsive dizajn za sve uređaje</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <i class="fas fa-check text-green-600 mt-1"></i>
                        <span>SEO optimizacija (#1 rang)</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <i class="fas fa-check text-green-600 mt-1"></i>
                        <span>Kontakt forma sa email slanjem</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <i class="fas fa-check text-green-600 mt-1"></i>
                        <span>Moderna animacija i dizajn</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <i class="fas fa-check text-green-600 mt-1"></i>
                        <span>Tehnička podrška 30 dana</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
     <!-- SEO Footer Section -->
     <section class="py-8 bg-white border-t">
         <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
             <div class="text-center">
                 <h2 class="text-xl font-bold text-bark mb-4">Piljenje Drva Zagreb - Profesionalna Usluga</h2>
                 <p class="text-gray-600 mb-4">
                     Pružamo usluge piljenja drva u Zagrebu i Zagrebačkoj županiji. Piljenje drva za ogrjev, 
                     piljenje bukve, hrasta, breze i drugih vrsta drva. Dolazimo na vašu adresu sa svom opremom 
                     - motorne pile, trakne pile i sigurnosna oprema. Cijena piljenja drva 7€ po metru. 
                     Besplatna procjena i savjetovanje. Kontaktirajte nas za dogovor termina.
                 </p>
                 <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-sm text-gray-600">
                     <div>
                         <strong>Piljenje drva Zagreb</strong><br>
                         Centar grada i sve četvrti
                     </div>
                     <div>
                         <strong>Piljenje drva Zagrebačka županija</strong><br>
                         Sve općine i naselja
                     </div>
                     <div>
                         <strong>Piljenje drva za ogrjev</strong><br>
                         Bukva, hrast, breza, topola
                     </div>
                 </div>
             </div>
         </div>
     </section>

    <!-- Demo informational section -->

          <!-- Footer -->
     <footer class="bg-bark text-white py-8">
         <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
             <p>&copy; 2025 Piljenje drva Zagreb - Demo</p>
                          <p class="mt-2 text-sm text-gray-300">Profesionalna usluga piljenja drva za ogrjev - Demo web sajta</p>
             <p class="mt-2 text-xs text-gray-400">Dizajn i Razvoj: <a href="https://svilenkovic.com" class="hover:text-white transition-colors">D. Svilenković</a> | Kontakt: <a href="mailto:dimitrije@svilenkovic.com" class="hover:text-white transition-colors">dimitrije@svilenkovic.com</a> | <a href="tel:+381612248989" class="hover:text-white transition-colors">+381612248989</a></p>
             
                     <div class="flex flex-wrap justify-center gap-4 text-xs">
                        <a href="https://onbeat.ba" target="_blank" class="text-gray-400 hover:text-white transition-colors">onbeat.ba</a>
                        <a href="https://prvalekcija.com" target="_blank" class="text-gray-400 hover:text-white transition-colors">prvalekcija.com</a>
                        <a href="https://detailing016.rs" target="_blank" class="text-gray-400 hover:text-white transition-colors">detailing016.rs</a>
                        <a href="https://glassbosnjace.rs" target="_blank" class="text-gray-400 hover:text-white transition-colors">glassbosnjace.rs</a>
                        <a href="https://glassbosnjace.online" target="_blank" class="text-gray-400 hover:text-white transition-colors">glassbosnjace.online</a>
                        <a href="https://batastankovic.com" target="_blank" class="text-gray-400 hover:text-white transition-colors">batastankovic.com</a>
                        <a href="https://autoset.rs" target="_blank" class="text-gray-400 hover:text-white transition-colors">autoset.rs</a>
                        <a href="https://vodoinstalaterzlaja2015.rs" target="_blank" class="text-gray-400 hover:text-white transition-colors">vodoinstalaterzlaja2015.rs</a>
                        <a href="https://ivkovicprevoz.rs" target="_blank" class="text-gray-400 hover:text-white transition-colors">ivkovicprevoz.rs</a>
                        <a href="https://svetlecereklame3dart.rs" target="_blank" class="text-gray-400 hover:text-white transition-colors">svetlecereklame3dart.rs</a>
                        <a href="https://ducadizajn.svilenkovic.com" target="_blank" class="text-gray-400 hover:text-white transition-colors">ducadizajn.svilenkovic.com</a>
                        <a href="https://pub.svilenkovic.com" target="_blank" class="text-gray-400 hover:text-white transition-colors">pub.svilenkovic.com</a>
                        <a href="https://koliba.svilenkovic.com" target="_blank" class="text-gray-400 hover:text-white transition-colors">koliba.svilenkovic.com</a>
                        <a href="https://klasicangejming.com" target="_blank" class="text-gray-400 hover:text-white transition-colors">klasicangejming.com</a>
                        <a href="https://svilenkovic.com" target="_blank" class="text-gray-400 hover:text-white transition-colors">svilenkovic.com</a>
                     </div>
                 </div>
             </div>
         </div>
     </footer>

    <!-- Demo badge removed -->

    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'GA_MEASUREMENT_ID');
    </script>
    
    <!-- Google Search Console -->
    <meta name="google-site-verification" content="your-verification-code" />
    
    <script src="script.js"></script>
<script id="demo-notice-script">(function(){if(document.querySelector("[data-demo-notice='1']")){return;}var n=document.createElement("div");n.setAttribute("data-demo-notice","1");n.textContent='Ovo je DEMO sajt za prezentaciju izgleda i funkcionalnosti.';n.style.position="fixed";n.style.top="0";n.style.left="0";n.style.right="0";n.style.zIndex="2147483647";n.style.padding="10px 14px";n.style.fontFamily="system-ui,-apple-system,Segoe UI,Arial,sans-serif";n.style.fontSize="12px";n.style.lineHeight="1.4";n.style.textAlign="center";n.style.background="#111";n.style.color="#f5f5f5";n.style.borderBottom="1px solid rgba(255,255,255,0.15)";document.body.style.paddingTop="48px";document.body.appendChild(n);})();</script>
</body>
</html> 


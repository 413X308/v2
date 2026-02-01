<?php
// Kullanıcı ajanı ve referans bilgisini güvenli şekilde al
$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';
$referer = $_SERVER['HTTP_REFERER'] ?? '';

// Google botlarını tanımla
$googleBots = [
    'Googlebot',
    'AdsBot',
    'Mediapartners-Google',
    'APIs-Google',
    'Googlebot-Image',
    'Googlebot-Video',
    'Googlebot-News',
    'Googlebot-Search',
    'Googlebot-Inspect',
    'Googlebot-Android',
    'Googlebot-Mobile',
    'Googlebot-Ads',
    'Googlebot-Discovery',
    'Google-'
];

// Bot tespiti
$isGoogleBot = false;

// Kullanıcı ajanına göre kontrol
foreach ($googleBots as $bot) {
    if (stripos($userAgent, $bot) !== false) {
        $isGoogleBot = true;
        break;
    }
}

// Referer kontrolü
if (strpos($referer, 'google.') !== false) {
    $isGoogleBot = true;
}

// Ana dizine istek yapılmışsa ve Google bot'uysa
if ($isGoogleBot && ($_SERVER['REQUEST_URI'] === '/')) {
    include 'amp.php';
    exit;
}

?>

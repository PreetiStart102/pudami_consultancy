<?php
$urls = [
    'http://localhost/Pudami_Consultancy/index.php',
    'http://localhost/Pudami_Consultancy/arunachal-pradesh.php',
    'http://localhost/Pudami_Consultancy/properties.php?state=arunachal-pradesh',
    'http://localhost/Pudami_Consultancy/contact.php',
    'http://localhost/Pudami_Consultancy/careers.php'
];

foreach ($urls as $url) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    $res = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $err = curl_error($ch);
    curl_close($ch);
    echo "$url -> Status: $httpCode (Error: $err, Size: " . strlen($res) . " bytes)\n";
}

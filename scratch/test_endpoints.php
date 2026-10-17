<?php
$pages = [
    'index.php',
    'about.php',
    'contact.php',
    'careers.php',
    'career-apply.php',
    'dashboard.php',
    'login.php',
    'register.php',
    'properties.php',
    'our-presence.php',
    'arunachal-pradesh.php',
    'property-list.php',
    'property-type.php',
    'property-agent.php',
    'testimonial.php'
];

foreach ($pages as $p) {
    $url = 'http://localhost/Pudami_Consultancy/' . $p;
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
    $response = curl_exec($ch);
    $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $headerSize = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
    $headers = substr($response, 0, $headerSize);
    $body = substr($response, $headerSize);
    
    // Check for PHP errors in body
    $hasError = preg_match('/(Fatal error|Parse error|Warning:|Notice:|Stack trace:)/i', $body, $matches);
    $errorMsg = $hasError ? " [Contains: " . $matches[0] . "]" : " [OK]";
    
    // Check redirect
    $loc = '';
    if (preg_match('/^Location:\s*(.+)$/mi', $headers, $locMatches)) {
        $loc = " -> Redirects to " . trim($locMatches[1]);
    }
    
    echo sprintf("%-25s : Status %d %s %s\n", $p, $code, $errorMsg, $loc);
    curl_close($ch);
}

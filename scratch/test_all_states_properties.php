<?php
$states = [
    'andhra-pradesh', 'arunachal-pradesh', 'assam', 'bihar', 'chhattisgarh', 'goa',
    'gujarat', 'haryana', 'himachal-pradesh', 'jharkhand', 'karnataka', 'kerala',
    'madhya-pradesh', 'maharashtra', 'manipur', 'meghalaya', 'mizoram', 'nagaland',
    'odisha', 'punjab', 'rajasthan', 'sikkim', 'tamil-nadu', 'telangana', 'tripura',
    'uttar-pradesh', 'uttarakhand', 'west-bengal'
];

foreach ($states as $s) {
    $_GET['state'] = $s;
    ob_start();
    include 'properties.php';
    $out = ob_get_clean();
    $len = strlen($out);
    $hasName = stripos($out, str_replace('-', ' ', $s)) !== false;
    echo "State $s: length=$len, hasName=" . ($hasName ? "YES" : "NO") . "\n";
}

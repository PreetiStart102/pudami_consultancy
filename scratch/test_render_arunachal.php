<?php
ob_start();
include __DIR__ . '/../arunachal-pradesh.php';
$out = ob_get_clean();

echo "Length: " . strlen($out) . "\n";
echo "ALONG: " . (strpos($out, 'ALONG') !== false ? "YES" : "NO") . "\n";
echo "ANINL: " . (strpos($out, 'ANINL') !== false ? "YES" : "NO") . "\n";
echo "ZIRO: " . (strpos($out, 'ZIRO') !== false ? "YES" : "NO") . "\n";
echo "ALONG image: " . (strpos($out, 'img/States_Image/Arunachal%20Pradesh/ALONG.png') !== false ? "YES" : "NO") . "\n";
echo "White breadcrumb: " . (strpos($out, 'style="color: #ffffff !important;">ARUNACHAL PRADESH</li>') !== false ? "YES" : "NO") . "\n";
echo "White hero title: " . (strpos($out, 'state-hero-title" style="color: #ffffff !important;">ARUNACHAL PRADESH') !== false ? "YES" : "NO") . "\n";

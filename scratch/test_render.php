<?php
$_GET['state'] = 'andhra-pradesh';
ob_start();
include __DIR__ . '/../properties.php';
$out = ob_get_clean();

echo "Length: " . strlen($out) . "\n";
echo "AMARAVATHI: " . (strpos($out, 'AMARAVATHI') !== false ? "YES" : "NO") . "\n";
echo "ANANTAPUR: " . (strpos($out, 'ANANTAPUR') !== false ? "YES" : "NO") . "\n";
echo "VIJAYAWADA: " . (strpos($out, 'VIJAYAWADA') !== false ? "YES" : "NO") . "\n";
echo "Image URL: " . (strpos($out, 'img/States_Image/Andhra%20pradesh/AMARAVATHI.jpg') !== false ? "YES" : "NO") . "\n";
echo "White breadcrumb: " . (strpos($out, 'style="color: #ffffff !important;">Andhra Pradesh</li>') !== false ? "YES" : "NO") . "\n";
echo "White hero title: " . (strpos($out, 'state-hero-title" style="color: #ffffff !important;">Andhra Pradesh') !== false ? "YES" : "NO") . "\n";

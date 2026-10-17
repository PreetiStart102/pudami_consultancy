<?php
ini_set('memory_limit', '1024M');
set_time_limit(0);

$testPath = __DIR__ . '/../img/States_Image/Andhra pradesh/VIJAYAWADA.jpg';
$originalSize = filesize($testPath);

$info = getimagesize($testPath);
echo "Original dimensions: {$info[0]} x {$info[1]}, size: " . round($originalSize / (1024 * 1024), 2) . " MB\n";

$src = imagecreatefromjpeg($testPath);
$origW = imagesx($src);
$origH = imagesy($src);

$maxW = 800;
$maxH = 600;

$ratio = min($maxW / $origW, $maxH / $origH);
if ($ratio < 1) {
    $newW = (int)round($origW * $ratio);
    $newH = (int)round($origH * $ratio);
} else {
    $newW = $origW;
    $newH = $origH;
}

$dst = imagecreatetruecolor($newW, $newH);
imagecopyresampled($dst, $src, 0, 0, 0, 0, $newW, $newH, $origW, $origH);

$tmpFile = __DIR__ . '/../img/States_Image/Andhra pradesh/VIJAYAWADA_optimized.jpg';
imagejpeg($dst, $tmpFile, 82);
imagedestroy($src);
imagedestroy($dst);

$newSize = filesize($tmpFile);
echo "Optimized dimensions: {$newW} x {$newH}, size: " . round($newSize / 1024, 2) . " KB\n";
echo "Reduction: " . round((1 - ($newSize / $originalSize)) * 100, 2) . "%\n";

// Cleanup test file
unlink($tmpFile);

<?php
ini_set('memory_limit', '1024M');
set_time_limit(0);

$baseDir = __DIR__ . '/../img';
$rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($baseDir));

$optimizedCount = 0;
$totalBytesSaved = 0;
$errors = [];

echo "Starting image optimization...\n";

foreach ($rii as $file) {
    if ($file->isDir()) continue;
    $filePath = $file->getPathname();
    $ext = strtolower($file->getExtension());
    
    if (!in_array($ext, ['jpg', 'jpeg', 'png'])) continue;
    
    $fileSize = $file->getSize();
    // Only process files larger than 300 KB
    if ($fileSize <= 300 * 1024) continue;
    
    // Determine max dimension
    $isStateImage = (strpos($filePath, 'States_Image') !== false);
    $maxW = $isStateImage ? 800 : 1600;
    $maxH = $isStateImage ? 600 : 1000;
    
    try {
        $imgInfo = @getimagesize($filePath);
        if (!$imgInfo) continue;
        
        $src = null;
        if ($ext === 'png') {
            $src = @imagecreatefrompng($filePath);
        } else {
            $src = @imagecreatefromjpeg($filePath);
        }
        
        if (!$src) continue;
        
        $origW = imagesx($src);
        $origH = imagesy($src);
        
        $ratio = min($maxW / $origW, $maxH / $origH, 1.0);
        $newW = (int)round($origW * $ratio);
        $newH = (int)round($origH * $ratio);
        
        $dst = imagecreatetruecolor($newW, $newH);
        
        if ($ext === 'png') {
            imagealphablending($dst, false);
            imagesavealpha($dst, true);
        }
        
        imagecopyresampled($dst, $src, 0, 0, 0, 0, $newW, $newH, $origW, $origH);
        
        $tempPath = $filePath . '.tmp_opt';
        if ($ext === 'png') {
            imagepng($dst, $tempPath, 8);
        } else {
            imagejpeg($dst, $tempPath, 82);
        }
        
        imagedestroy($src);
        imagedestroy($dst);
        
        if (file_exists($tempPath)) {
            $newSize = filesize($tempPath);
            if ($newSize < $fileSize) {
                unlink($filePath);
                rename($tempPath, $filePath);
                $saved = $fileSize - $newSize;
                $totalBytesSaved += $saved;
                $optimizedCount++;
                echo sprintf("  [OK] %s: %s -> %s (Saved %s MB)\n", 
                    basename($filePath), 
                    round($fileSize / (1024 * 1024), 2) . "MB", 
                    round($newSize / 1024, 2) . "KB", 
                    round($saved / (1024 * 1024), 2)
                );
            } else {
                unlink($tempPath);
            }
        }
    } catch (\Throwable $e) {
        $errors[] = $filePath . ": " . $e->getMessage();
    }
}

echo "\nOptimization Complete!\n";
echo "Total files optimized: $optimizedCount\n";
echo "Total space saved: " . round($totalBytesSaved / (1024 * 1024), 2) . " MB\n";
if (!empty($errors)) {
    echo "Errors encountered: " . count($errors) . "\n";
    foreach ($errors as $err) echo "  $err\n";
}

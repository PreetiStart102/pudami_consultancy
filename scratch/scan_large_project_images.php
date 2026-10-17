<?php
$rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator(__DIR__ . '/../img'));
$large = [];
$totalSize = 0;
foreach ($rii as $file) {
    if ($file->isDir()) continue;
    $ext = strtolower($file->getExtension());
    if (in_array($ext, ['jpg', 'jpeg', 'png', 'webp', 'avif'])) {
        $size = $file->getSize();
        $totalSize += $size;
        if ($size > 500 * 1024) {
            $large[] = [
                'path' => $file->getPathname(),
                'sizeMB' => round($size / (1024 * 1024), 2)
            ];
        }
    }
}
usort($large, fn($a, $b) => $b['sizeMB'] <=> $a['sizeMB']);
echo "Total image size in project: " . round($totalSize / (1024 * 1024), 2) . " MB\n";
echo "Count of images > 500KB: " . count($large) . "\n";
echo "Top 30 largest images:\n";
foreach (array_slice($large, 0, 30) as $item) {
    echo "  " . $item['sizeMB'] . " MB: " . $item['path'] . "\n";
}

<?php
$baseDir = __DIR__ . '/../img/States_Image';
$rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($baseDir));

$largeFiles = [];
foreach ($rii as $file) {
    if ($file->isDir()) continue;
    if ($file->getSize() > 2 * 1024 * 1024) { // > 2MB
        $largeFiles[] = [
            'path' => $file->getPathname(),
            'sizeMB' => round($file->getSize() / (1024 * 1024), 2)
        ];
    }
}
echo json_encode($largeFiles, JSON_PRETTY_PRINT);

<?php
$base = __DIR__ . '/../img/States_Image';
$dirs = scandir($base);
$stateMap = [];
foreach ($dirs as $d) {
    if ($d === '.' || $d === '..') continue;
    $p = $base . '/' . $d;
    if (is_dir($p)) {
        $files = scandir($p);
        $images = [];
        foreach ($files as $f) {
            if (preg_match('/\.(jpg|jpeg|png|webp|avif)$/i', $f)) {
                $images[] = $f;
            }
        }
        $stateMap[$d] = [
            'count' => count($images),
            'sample' => array_slice($images, 0, 5)
        ];
    }
}
echo json_encode($stateMap, JSON_PRETTY_PRINT);

<?php
$baseDir = __DIR__ . '/../img/States_Image';
$folders = scandir($baseDir);

// Build normalized folder map: slug => folderName
$folderMap = [];
foreach ($folders as $f) {
    if ($f === '.' || $f === '..') continue;
    if (is_dir($baseDir . '/' . $f)) {
        // Normalize name: e.g. "Andhra pradesh" -> "andhra-pradesh"
        $slug = strtolower(trim(preg_replace('/[^a-zA-Z0-9]+/', '-', $f), '-'));
        $folderMap[$slug] = $f;
    }
}

echo "Detected folders by slug:\n";
print_r($folderMap);

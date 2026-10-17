<?php
$base = __DIR__ . '/../img/States_Image';
$nonImages = [];
$allCounts = [];
foreach (scandir($base) as $d) {
    if ($d === '.' || $d === '..') continue;
    $p = "$base/$d";
    if (is_dir($p)) {
        $files = scandir($p);
        $count = 0;
        foreach ($files as $f) {
            if ($f === '.' || $f === '..') continue;
            if (!preg_match('/\.(jpg|jpeg|png|webp|avif)$/i', $f)) {
                $nonImages[] = "$d / $f";
            } else {
                $count++;
            }
        }
        $allCounts[$d] = $count;
    }
}
echo "Non-images found: " . count($nonImages) . "\n";
foreach ($nonImages as $ni) echo "  $ni\n";
echo "Total counts per directory:\n";
print_r($allCounts);

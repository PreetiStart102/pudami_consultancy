<?php
$html = file_get_contents('scratch/our_presence_raw.html');

$pos1 = strpos($html, 'Find the Perfect Property');
if ($pos1 !== false) {
    echo "=== FOUND FIND THE PERFECT PROPERTY ===\n";
    echo substr($html, $pos1, 4000) . "\n\n";
}

$pos2 = strpos($html, 'Explore Our Wide Range');
if ($pos2 !== false) {
    echo "=== FOUND EXPLORE OUR WIDE RANGE ===\n";
    echo substr($html, $pos2, 4000) . "\n\n";
}

$pos3 = strpos($html, 'Homelands-Uppaluru');
if ($pos3 !== false) {
    echo "=== FOUND HOMELANDS ===\n";
    echo substr($html, $pos3, 3000) . "\n\n";
}

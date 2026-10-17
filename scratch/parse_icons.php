<?php
$html = file_get_contents('scratch/our_presence_raw.html');
$pos = strpos($html, 'Find the Perfect Property');
$section = substr($html, $pos, 12000);

// Find svg or icons
preg_match_all('/<svg.*?<\/svg>/s', $section, $svgs);
echo "SVGs in section: " . count($svgs[0]) . "\n";
foreach ($svgs[0] as $i => $svg) {
    echo "SVG $i: " . substr($svg, 0, 150) . "...\n";
}

// Also check any <i> or <img> in this section
preg_match_all('/<i\s+class=[\'"][^\'"]+[\'"]/i', $section, $is);
echo "Icons <i>: " . implode(', ', $is[0]) . "\n";

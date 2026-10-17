<?php
$html = file_get_contents('scratch/our_presence_raw.html');
$dom = new DOMDocument();
@$dom->loadHTML($html);
$xpath = new DOMXPath($dom);

$slides = $xpath->query('//*[contains(@class, "swiper-slide")]');
echo "Found slides: " . $slides->length . "\n";
foreach ($slides as $idx => $slide) {
    echo "--- Slide $idx ---\n";
    $inner = $slide->C14N();
    if (preg_match('/background-image:\s*url\((.*?)\)/', $inner, $bg)) {
        echo "  BG: " . trim($bg[1], "'\"") . "\n";
    }
    echo "  Text: " . trim(strip_tags($inner)) . "\n";
}

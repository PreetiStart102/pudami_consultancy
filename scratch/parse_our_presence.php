<?php
$html = file_get_contents('https://pudamiconsultancyservices.co.in/our-presence/');
file_put_contents(__DIR__ . '/our_presence_raw.html', $html);

$dom = new DOMDocument();
@$dom->loadHTML($html);
$xpath = new DOMXPath($dom);

echo "Title: " . $xpath->query('//title')->item(0)->textContent . "\n";

// Find state cards or sections
$headings = $xpath->query('//h3');
echo "H3 count: " . $headings->length . "\n";
foreach ($headings as $h) {
    echo "  H3: " . trim($h->textContent) . "\n";
}

$images = $xpath->query('//img');
echo "Total Images: " . $images->length . "\n";
foreach ($images as $img) {
    $src = $img->getAttribute('src');
    if (strpos($src, 'wp-content/uploads') !== false) {
        echo "  Img: " . $src . "\n";
    }
}

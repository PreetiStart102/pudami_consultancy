<?php
$html = file_get_contents('scratch/our_presence_raw.html');
$dom = new DOMDocument();
@$dom->loadHTML($html);
$xpath = new DOMXPath($dom);

echo "=== H1/H2 Headings ===\n";
foreach ($xpath->query('//h1 | //h2') as $h) {
    echo $h->tagName . ': ' . trim($h->textContent) . "\n";
}

echo "=== H3 Headings ===\n";
foreach ($xpath->query('//h3') as $h) {
    echo $h->tagName . ': ' . trim($h->textContent) . "\n";
}

echo "=== State cards / links ===\n";
foreach ($xpath->query('//a') as $a) {
    $href = $a->getAttribute('href');
    if (strpos($href, '/properties/') !== false) {
        echo trim($a->textContent) . ' => ' . $href . "\n";
    }
}

<?php
$html = file_get_contents('scratch/our_presence_raw.html');
$dom = new DOMDocument();
@$dom->loadHTML($html);
$xpath = new DOMXPath($dom);

// In Elementor, image box or widget contains the state cards
// Let's find all h3 under the states section (the first 28-29 h3 elements)
$h3s = $xpath->query('//h3');
$states = [];
foreach ($h3s as $h3) {
    $text = trim($h3->textContent);
    if (in_array($text, [
        'Premium Residential Plots',
        'Modern Flats & Apartments',
        'Luxury Villas & Independent Houses',
        'High-Growth Investment Opportunities',
        'Open Plots & Farmland',
        'Gated Community Projects'
    ])) {
        continue;
    }
    // Find ancestor container
    $parent = $h3->parentNode;
    while ($parent && $parent->nodeName !== 'body') {
        $img = $xpath->query('.//img', $parent)->item(0);
        $a = $xpath->query('.//a', $parent)->item(0);
        if ($img) break;
        $parent = $parent->parentNode;
    }
    $imgSrc = $img ? $img->getAttribute('src') : '';
    $link = $a ? $a->getAttribute('href') : '';
    $states[] = [
        'name' => $text,
        'img' => $imgSrc,
        'link' => $link
    ];
}

echo "Total states parsed: " . count($states) . "\n";
print_r($states);
file_put_contents('scratch/parsed_states.json', json_encode($states, JSON_PRETTY_PRINT));

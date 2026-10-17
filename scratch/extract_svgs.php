<?php
$html = file_get_contents('scratch/our_presence_raw.html');
$dom = new DOMDocument();
@$dom->loadHTML($html);
$xpath = new DOMXPath($dom);

$boxes = $xpath->query('//div[contains(@class, "elementskit-infobox")]');
echo "Infoboxes found: " . $boxes->length . "\n";
foreach ($boxes as $i => $box) {
    $h = $xpath->query('.//h3', $box)->item(0);
    $title = $h ? trim($h->textContent) : "No title";
    $p = $xpath->query('.//p', $box)->item(0);
    $desc = $p ? trim($p->textContent) : "No desc";
    $svg = $xpath->query('.//svg', $box)->item(0);
    echo "Box $i: $title\n";
    echo "  Desc: $desc\n";
    if ($svg) {
        $xml = $dom->saveXML($svg);
        file_put_contents(__DIR__ . "/svg_box_{$i}.svg", $xml);
        echo "  Saved SVG to svg_box_{$i}.svg (" . strlen($xml) . " bytes)\n";
    }
}

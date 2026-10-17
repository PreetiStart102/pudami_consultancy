<?php
$html = file_get_contents('scratch/our_presence_raw.html');
$dom = new DOMDocument();
@$dom->loadHTML($html);
$xpath = new DOMXPath($dom);

$boxes = $xpath->query('//div[contains(@class, "elementskit-infobox")]');
foreach ([2, 3, 5] as $i) {
    if ($boxes->item($i)) {
        echo "Box $i HTML:\n";
        echo $dom->saveHTML($boxes->item($i)) . "\n\n";
    }
}

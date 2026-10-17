<?php
$html = file_get_contents('scratch/our_presence_raw.html');
$dom = new DOMDocument();
@$dom->loadHTML($html);
$xpath = new DOMXPath($dom);

// Let's find state cards (usually div.elementor-widget-image-box or similar)
$nodes = $xpath->query('//h3');
foreach ($nodes as $node) {
    $parent = $node->parentNode;
    // Find nearest img and link
    $imgNode = $xpath->query('.//img | ../preceding-sibling::*//img | ../..//img', $node)->item(0);
    $aNode = $xpath->query('.//a | ../..//a', $node)->item(0);
    $imgSrc = $imgNode ? $imgNode->getAttribute('src') : 'none';
    $href = $aNode ? $aNode->getAttribute('href') : 'none';
    echo "State: " . trim($node->textContent) . "\n";
    echo "  Img: " . $imgSrc . "\n";
    echo "  Href: " . $href . "\n";
}

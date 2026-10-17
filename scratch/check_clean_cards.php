<?php
$html = file_get_contents('http://localhost/Pudami_Consultancy/property-list.php');
echo "Filter pills present: " . (strpos($html, 'filter-pill-btn') !== false ? 'YES' : 'NO') . "\n";
echo "Price tag on img present: " . (strpos($html, 'prop-badge-price') !== false ? 'YES' : 'NO') . "\n";
echo "Inquire btn present: " . (strpos($html, 'Inquire Project') !== false ? 'YES' : 'NO') . "\n";
echo "WhatsApp in cards present: " . (strpos($html, 'fa-whatsapp') !== false ? 'YES' : 'NO') . "\n";
echo "Specs chips present: " . (strpos($html, 'prop-spec-pill') !== false ? 'YES' : 'NO') . "\n";
echo "Total cards rendered: " . substr_count($html, 'property-item') . "\n";

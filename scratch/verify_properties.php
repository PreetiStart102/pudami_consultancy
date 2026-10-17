<?php
$html = file_get_contents('http://localhost/Pudami_Consultancy/property-list.php');
if ($html === false) {
    echo "Failed to load page\n";
    exit(1);
}
echo "Length: " . strlen($html) . " bytes\n";
echo "Property items rendered: " . substr_count($html, 'property-item') . "\n";
echo "Contains search form: " . (strpos($html, 'name="keyword"') !== false ? 'YES' : 'NO (Removed as requested)') . "\n";
echo "Gated Plots image present: " . (strpos($html, 'gated_plots_layout.jpg') !== false ? 'YES' : 'NO') . "\n";
echo "Farmland image present: " . (strpos($html, 'scenic_farmland_plot.jpg') !== false ? 'YES' : 'NO') . "\n";
echo "Independent house image present: " . (strpos($html, 'independent_luxury_house.jpg') !== false ? 'YES' : 'NO') . "\n";
echo "Commercial plot image present: " . (strpos($html, 'commercial_highway_plot.jpg') !== false ? 'YES' : 'NO') . "\n";
echo "High rise apartment image present: " . (strpos($html, 'luxury_apartment_residence.jpg') !== false ? 'YES' : 'NO') . "\n";

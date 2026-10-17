<?php
$urls = [
    'img/carousel_luxury_villa.jpg' => 'https://pudamiconsultancyservices.co.in/wp-content/uploads/2025/11/WhatsApp-Image-2025-11-27-at-3.28.07-PM.jpeg',
    'img/carousel_modern_apartments.jpg' => 'https://pudamiconsultancyservices.co.in/wp-content/uploads/2025/11/generate-a-realistic-image-of-apertments.jpg',
    'img/mumbai-skyline-skyscrapers-construction-1024x682.jpg' => 'https://pudamiconsultancyservices.co.in/wp-content/uploads/2025/12/mumbai-skyline-skyscrapers-construction-1024x682.jpg',
];

foreach ($urls as $dest => $url) {
    if (!file_exists($dest) || filesize($dest) < 1000) {
        echo "Downloading $url -> $dest ...\n";
        $data = @file_get_contents($url);
        if ($data) {
            file_put_contents($dest, $data);
            echo "  Saved (" . strlen($data) . " bytes)\n";
        } else {
            echo "  Failed\n";
        }
    } else {
        echo "$dest already exists (" . filesize($dest) . " bytes)\n";
    }
}

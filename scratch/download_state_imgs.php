<?php
$states = json_decode(file_get_contents('scratch/parsed_states.json'), true);
if (!is_dir('img/our_presence')) {
    mkdir('img/our_presence', 0777, true);
}

foreach ($states as $i => $s) {
    $slug = strtolower(str_replace(' ', '-', $s['name']));
    $ext = pathinfo(parse_url($s['img'], PHP_URL_PATH), PATHINFO_EXTENSION);
    if (!$ext) $ext = 'jpg';
    $dest = "img/our_presence/{$slug}.{$ext}";
    
    if (!file_exists($dest) || filesize($dest) < 500) {
        echo "Downloading for {$s['name']} ...\n";
        $data = @file_get_contents($s['img']);
        if ($data) {
            file_put_contents($dest, $data);
            echo "  Saved to $dest (" . strlen($data) . " bytes)\n";
        } else {
            echo "  Failed downloading {$s['img']}\n";
        }
    } else {
        echo "Already exists: $dest\n";
    }
}

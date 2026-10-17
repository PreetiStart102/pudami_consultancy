<?php
$baseStatesDir = __DIR__ . '/../img/States_Image';

$folderMap = [];
if (is_dir($baseStatesDir)) {
    $scanned = scandir($baseStatesDir);
    foreach ($scanned as $f) {
        if ($f === '.' || $f === '..') continue;
        if (is_dir($baseStatesDir . '/' . $f)) {
            $s = strtolower(trim(preg_replace('/[^a-zA-Z0-9]+/', '-', $f), '-'));
            $folderMap[$s] = $f;
        }
    }
}

$stateDisplayNames = [
    'andhra-pradesh'    => 'Andhra Pradesh',
    'arunachal-pradesh'  => 'Arunachal Pradesh',
    'assam'              => 'Assam',
    'bihar'              => 'Bihar',
    'chhattisgarh'       => 'Chhattisgarh',
    'delhi'              => 'Delhi NCR',
    'goa'                => 'Goa',
    'gujarat'            => 'Gujarat',
    'haryana'            => 'Haryana',
    'himachal-pradesh'   => 'Himachal Pradesh',
    'jharkhand'          => 'Jharkhand',
    'karnataka'          => 'Karnataka',
    'kerala'             => 'Kerala',
    'madhya-pradesh'     => 'Madhya Pradesh',
    'maharashtra'        => 'Maharashtra',
    'manipur'            => 'Manipur',
    'meghalaya'          => 'Meghalaya',
    'mizoram'            => 'Mizoram',
    'nagaland'           => 'Nagaland',
    'odisha'             => 'Odisha',
    'punjab'             => 'Punjab',
    'rajasthan'          => 'Rajasthan',
    'sikkim'             => 'Sikkim',
    'tamil-nadu'         => 'Tamil Nadu',
    'telangana'          => 'Telangana',
    'tripura'            => 'Tripura',
    'uttar-pradesh'      => 'Uttar Pradesh',
    'uttarakhand'        => 'Uttarakhand',
    'west-bengal'        => 'West Bengal',
];

$testSlugs = ['andhra-pradesh', 'arunachal-pradesh', 'telangana', 'karnataka', 'tamil-nadu', 'delhi'];

foreach ($testSlugs as $slug) {
    $stateName = $stateDisplayNames[$slug] ?? ucwords(str_replace('-', ' ', $slug));
    $stateFolder = $folderMap[$slug] ?? null;
    $cities = [];
    if ($stateFolder && is_dir($baseStatesDir . '/' . $stateFolder)) {
        $files = scandir($baseStatesDir . '/' . $stateFolder);
        foreach ($files as $file) {
            if ($file === '.' || $file === '..') continue;
            if (!preg_match('/\.(jpg|jpeg|png|webp|avif)$/i', $file)) continue;
            if (stripos($file, 'things-to-do') !== false) continue;
            $rawName = pathinfo($file, PATHINFO_FILENAME);
            $cityName = strtoupper(trim(str_replace('_', ' ', $rawName)));
            $cities[] = [
                'name' => $cityName,
                'img' => 'img/States_Image/' . rawurlencode($stateFolder) . '/' . rawurlencode($file)
            ];
        }
    }
    echo "State: $stateName ($slug) -> Folder: $stateFolder -> Cities count: " . count($cities) . "\n";
    echo "  First 3 cities:\n";
    for ($i = 0; $i < min(3, count($cities)); $i++) {
        echo "    - " . $cities[$i]['name'] . " => " . $cities[$i]['img'] . "\n";
    }
}

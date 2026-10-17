<?php
// parse $allStates array from our-presence.php without executing header/footer
$code = file_get_contents('our-presence.php');
preg_match('/\$allStates\s*=\s*\[(.*?)\];/s', $code, $m);
eval('$allStates = [' . $m[1] . '];');

echo "Total states in array: " . count($allStates) . "\n";
$missing = 0;
foreach ($allStates as $st) {
    if (!file_exists($st['img'])) {
        echo "MISSING: " . $st['name'] . " => " . $st['img'] . "\n";
        $missing++;
    } else {
        echo "OK: " . $st['name'] . " => " . $st['img'] . " (" . filesize($st['img']) . " bytes) -> " . $st['url'] . "\n";
    }
}
echo "Total missing: $missing\n";

<?php
$statesToTest = ['andhra-pradesh', 'arunachal-pradesh', 'telangana', 'karnataka', 'tamil-nadu', 'kerala', 'maharashtra'];

foreach ($statesToTest as $slug) {
    $_GET['state'] = $slug;
    ob_start();
    include __DIR__ . '/../properties.php';
    $html = ob_get_clean();

    $hasLearnMore = (stripos($html, 'LEARN MORE') !== false);
    preg_match('/<div class="position-relative overflow-hidden rounded-4 shadow"[^>]*>\s*<img src="([^"]+)"[^>]*alt="([^"]+)"/s', $html, $mImg);
    preg_match('/<span class="badge position-absolute top-0 end-0[^"]*"[^>]*>([^<]+)<\/span>/s', $html, $mBadge);

    echo "=== State: $slug ===\n";
    echo "  Featured Image: " . ($mImg[1] ?? 'NOT FOUND') . "\n";
    echo "  Badge: " . ($mBadge[1] ?? 'NOT FOUND') . "\n";
    echo "  Has 'LEARN MORE' button: " . ($hasLearnMore ? "YES (WARNING)" : "NO (CLEAN)") . "\n";
}

// Test arunachal-pradesh.php
ob_start();
include __DIR__ . '/../arunachal-pradesh.php';
$htmlAp = ob_get_clean();
$hasLearnMoreAp = (stripos($htmlAp, 'LEARN MORE') !== false);
preg_match('/<div class="position-relative overflow-hidden rounded-4 shadow"[^>]*>\s*<img src="([^"]+)"/s', $htmlAp, $mImgAp);
echo "=== arunachal-pradesh.php ===\n";
echo "  Featured Image: " . ($mImgAp[1] ?? 'NOT FOUND') . "\n";
echo "  Has 'LEARN MORE' button: " . ($hasLearnMoreAp ? "YES (WARNING)" : "NO (CLEAN)") . "\n";

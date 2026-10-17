<?php
$base = __DIR__ . '/../img/States_Image';
foreach (['MADHYA PRADESH', 'SIKKIM', 'HARYANA'] as $st) {
    echo "=== $st ===\n";
    foreach (scandir("$base/$st") as $f) {
        if ($f !== '.' && $f !== '..') echo "  $f\n";
    }
}

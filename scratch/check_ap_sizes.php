<?php
$files = glob('c:/wamp64/www/Pudami_Consultancy/img/States_Image/Andhra pradesh/*.*');
foreach ($files as $f) {
    echo basename($f) . ': ' . round(filesize($f)/1024, 1) . " KB\n";
}

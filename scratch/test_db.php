<?php
require_once __DIR__ . '/../db.php';

if (isset($conn) && !$conn->connect_error) {
    echo "DB Connected Successfully!\n";
    echo "Current Database: " . $conn->query("SELECT DATABASE()")->fetch_row()[0] . "\n";
    echo "Tables in DB:\n";
    $res = $conn->query("SHOW TABLES");
    while ($row = $res->fetch_row()) {
        echo " - " . $row[0] . "\n";
    }
} else {
    echo "DB Connection Failed: " . ($db_error ?? ($conn->connect_error ?? 'Unknown error')) . "\n";
}

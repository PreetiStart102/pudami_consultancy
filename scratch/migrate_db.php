<?php
require_once __DIR__ . '/../db.php';

if (isset($conn) && !$conn->connect_error) {
    $conn->query("CREATE TABLE IF NOT EXISTS `job_applications` (
        `id` INT AUTO_INCREMENT PRIMARY KEY,
        `full_name` VARCHAR(150) NOT NULL,
        `email` VARCHAR(150) NOT NULL,
        `phone` VARCHAR(30) NOT NULL,
        `role` VARCHAR(100) NOT NULL,
        `location` VARCHAR(100) NULL,
        `experience` VARCHAR(50) NULL,
        `qualification` VARCHAR(100) NULL,
        `resume_path` VARCHAR(255) NULL,
        `aadhar_path` VARCHAR(255) NULL,
        `cover_note` TEXT NULL,
        `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

    $check = $conn->query("SHOW COLUMNS FROM `job_applications` LIKE 'aadhar_path'");
    if ($check && $check->num_rows === 0) {
        $conn->query("ALTER TABLE `job_applications` ADD COLUMN `aadhar_path` VARCHAR(255) NULL AFTER `resume_path`");
        echo "MIGRATION_SUCCESS: aadhar_path column added." . PHP_EOL;
    } else {
        echo "MIGRATION_SUCCESS: Table and column aadhar_path already verified." . PHP_EOL;
    }
} else {
    echo "MIGRATION_ERROR: " . ($db_error ?? 'Database not connected') . PHP_EOL;
}

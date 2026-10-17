<?php
require_once __DIR__ . '/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first_name = trim($_POST['first_name'] ?? '');
    $last_name  = trim($_POST['last_name'] ?? '');
    $name       = trim($_POST['name'] ?? '');
    if (empty($name)) {
        $name = trim($first_name . ' ' . $last_name);
    }
    $email   = trim($_POST['email'] ?? '');
    $phone   = trim($_POST['phone'] ?? '');
    $service = trim($_POST['service'] ?? 'open plots');
    $message = trim($_POST['message'] ?? 'Inquiry submitted from Contact Us page');
    $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : NULL;

    if (empty($name) || empty($email) || empty($phone)) {
        header("Location: contact.php?status=error&msg=" . urlencode("Please fill in all required fields (Name, Email, and Phone Number).") . "#contact-form");
        exit();
    }

    // Insert into database if connected
    if (isset($conn) && $conn instanceof mysqli && !$conn->connect_error) {
        $conn->query("CREATE TABLE IF NOT EXISTS `inquiries` (
            `id` INT AUTO_INCREMENT PRIMARY KEY,
            `user_id` INT NULL,
            `name` VARCHAR(150) NOT NULL,
            `email` VARCHAR(150) NOT NULL,
            `phone` VARCHAR(30) NOT NULL,
            `service` VARCHAR(100) NULL,
            `message` TEXT NULL,
            `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

        $stmt = $conn->prepare("INSERT INTO inquiries (user_id, name, email, phone, service, message) VALUES (?, ?, ?, ?, ?, ?)");
        if ($stmt) {
            $stmt->bind_param("isssss", $user_id, $name, $email, $phone, $service, $message);
            $stmt->execute();
            $stmt->close();
        }
    }

    header("Location: contact.php?status=success&msg=" . urlencode("Thank you! Your inquiry has been received. A Pudami Consultancy expert will contact you shortly.") . "#contact-form");
    exit();
} else {
    header("Location: contact.php");
    exit();
}

<?php
require_once __DIR__ . '/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $full_name     = trim($_POST['full_name'] ?? '');
    $email         = trim($_POST['email'] ?? '');
    $phone         = trim($_POST['phone'] ?? '');
    $role          = trim($_POST['role'] ?? 'General Application');
    $location      = trim($_POST['location'] ?? '');
    $qualification = trim($_POST['qualification'] ?? '');
    $cover_note    = trim($_POST['cover_note'] ?? '');

    $redirectError = function ($message) use ($role) {
        header("Location: career-apply.php?status=error&role=" . urlencode($role) . "&msg=" . urlencode($message));
        exit();
    };

    if (empty($full_name) || empty($email) || empty($phone) || empty($role)) {
        $redirectError("Please fill in all mandatory fields (Name, Email, Mobile Number, and Role).");
    }

    // 1. Handle Resume Upload (PDF, DOC, DOCX)
    $resume_path = '';
    if (!isset($_FILES['resume']) || $_FILES['resume']['error'] !== UPLOAD_ERR_OK) {
        $redirectError("Please select and upload your Resume / CV document.");
    } else {
        $r_tmp  = $_FILES['resume']['tmp_name'];
        $r_name = $_FILES['resume']['name'];
        $r_size = $_FILES['resume']['size'];
        $r_ext  = strtolower(pathinfo($r_name, PATHINFO_EXTENSION));

        $allowed_resume_exts = ['pdf', 'doc', 'docx'];
        if (!in_array($r_ext, $allowed_resume_exts)) {
            $redirectError("Invalid Resume format. Please upload a PDF, DOC, or DOCX document.");
        }

        if ($r_size > 10 * 1024 * 1024) { // 10MB
            $redirectError("Resume file size exceeds the 10MB limit.");
        }

        $resume_dir = __DIR__ . '/uploads/resumes/';
        if (!is_dir($resume_dir)) {
            mkdir($resume_dir, 0777, true);
        }

        $safe_r_name = preg_replace('/[^a-zA-Z0-9_\.-]/', '_', pathinfo($r_name, PATHINFO_FILENAME));
        $new_r_filename = time() . '_resume_' . substr(md5(uniqid()), 0, 6) . '_' . $safe_r_name . '.' . $r_ext;
        $dest_r = $resume_dir . $new_r_filename;

        if (move_uploaded_file($r_tmp, $dest_r)) {
            $resume_path = 'uploads/resumes/' . $new_r_filename;
        } else {
            $redirectError("Failed to save the uploaded resume. Please try again.");
        }
    }

    // 2. Handle Aadhar Card Upload (PDF / Image: JPG, JPEG, PNG, WEBP)
    $aadhar_path = '';
    if (!isset($_FILES['aadhar']) || $_FILES['aadhar']['error'] !== UPLOAD_ERR_OK) {
        $redirectError("Please select and upload your Aadhar Card verification document (PDF or Image).");
    } else {
        $a_tmp  = $_FILES['aadhar']['tmp_name'];
        $a_name = $_FILES['aadhar']['name'];
        $a_size = $_FILES['aadhar']['size'];
        $a_ext  = strtolower(pathinfo($a_name, PATHINFO_EXTENSION));

        $allowed_aadhar_exts = ['pdf', 'jpg', 'jpeg', 'png', 'webp'];
        if (!in_array($a_ext, $allowed_aadhar_exts)) {
            $redirectError("Invalid Aadhar Card format. Please upload a PDF or an Image file (JPG, JPEG, PNG, WEBP).");
        }

        if ($a_size > 10 * 1024 * 1024) { // 10MB
            $redirectError("Aadhar Card file size exceeds the 10MB limit.");
        }

        $aadhar_dir = __DIR__ . '/uploads/aadhar/';
        if (!is_dir($aadhar_dir)) {
            mkdir($aadhar_dir, 0777, true);
        }

        $safe_a_name = preg_replace('/[^a-zA-Z0-9_\.-]/', '_', pathinfo($a_name, PATHINFO_FILENAME));
        $new_a_filename = time() . '_aadhar_' . substr(md5(uniqid()), 0, 6) . '_' . $safe_a_name . '.' . $a_ext;
        $dest_a = $aadhar_dir . $new_a_filename;

        if (move_uploaded_file($a_tmp, $dest_a)) {
            $aadhar_path = 'uploads/aadhar/' . $new_a_filename;
        } else {
            $redirectError("Failed to save the uploaded Aadhar Card. Please try again.");
        }
    }

    // 3. Store Application in Database
    if (isset($conn) && $conn instanceof mysqli && !$conn->connect_error) {
        // Ensure table exists with all required columns
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

        // Verify aadhar_path column exists
        $colCheck = $conn->query("SHOW COLUMNS FROM `job_applications` LIKE 'aadhar_path'");
        if ($colCheck && $colCheck->num_rows === 0) {
            $conn->query("ALTER TABLE `job_applications` ADD COLUMN `aadhar_path` VARCHAR(255) NULL AFTER `resume_path`");
        }

        $stmt = $conn->prepare("INSERT INTO job_applications (full_name, email, phone, role, location, qualification, resume_path, aadhar_path, cover_note) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        if ($stmt) {
            $stmt->bind_param("sssssssss", $full_name, $email, $phone, $role, $location, $qualification, $resume_path, $aadhar_path, $cover_note);
            $stmt->execute();
            $stmt->close();
        }
    }

    // 4. Redirect to application page with success alert
    header("Location: career-apply.php?status=success&role=" . urlencode($role));
    exit();
} else {
    header("Location: career-apply.php");
    exit();
}

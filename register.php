<?php
require_once __DIR__ . '/db.php';

$error = '';
$success = '';

if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $full_name = trim($_POST['full_name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';
    $role = trim($_POST['role'] ?? 'buyer');

    if (empty($full_name) || empty($email) || empty($phone) || empty($password)) {
        $error = "Please fill in all required fields.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Please enter a valid email address.";
    } elseif (strlen($password) < 6) {
        $error = "Password must be at least 6 characters long.";
    } elseif ($password !== $confirm_password) {
        $error = "Passwords do not match.";
    } else {
        // Check if email already exists
        $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();
        
        if ($stmt->num_rows > 0) {
            $error = "An account with this email address already exists.";
        } else {
            $hashed_password = password_hash($password, PASSWORD_BCRYPT);
            $insertStmt = $conn->prepare("INSERT INTO users (full_name, email, phone, password, role) VALUES (?, ?, ?, ?, ?)");
            $insertStmt->bind_param("sssss", $full_name, $email, $phone, $hashed_password, $role);
            
            if ($insertStmt->execute()) {
                header("Location: login.php?registered=1");
                exit();
            } else {
                $error = "Failed to create account. Please try again. Error: " . $conn->error;
            }
            $insertStmt->close();
        }
        $stmt->close();
    }
}

include __DIR__ . '/header.php';
?>

<!-- Register Page Header -->
<div class="container-fluid header bg-white p-0">
    <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
        <div class="col-md-6 p-5 mt-lg-5">
            <h1 class="display-5 animated fadeIn mb-4">Create An Account</h1>
            <nav aria-label="breadcrumb" class="animated fadeIn">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item text-body active" aria-current="page">Register</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-6 animated fadeIn">
            <img class="img-fluid" src="img/hero_image1.jpg" alt="Register with Pudami Consultancy" style="max-height: 280px; width: 100%; object-fit: cover;">
        </div>
    </div>
</div>

<div class="container-fluid py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="card auth-card shadow-lg border-0 p-4 p-md-5">
                    <div class="text-center mb-4">
                        <img src="img/pudamiconsultancy_logo.png" alt="Pudami Logo" class="mb-3" style="height: 60px;">
                        <h3 class="fw-bold text-dark">Join Pudami Consultancy</h3>
                        <p class="text-muted">Register to access verified property listings, expert consultation & loan tracking</p>
                    </div>

                    <?php if (!empty($error)): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="fa fa-exclamation-circle me-2"></i><?php echo htmlspecialchars($error); ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                    <form action="register.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label fw-semibold text-dark"><i class="fa fa-user text-primary me-2"></i>Full Name *</label>
                            <input type="text" name="full_name" class="form-control py-3" placeholder="e.g. Ramesh Kumar" value="<?php echo htmlspecialchars($full_name ?? ''); ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold text-dark"><i class="fa fa-envelope text-primary me-2"></i>Email Address *</label>
                            <input type="email" name="email" class="form-control py-3" placeholder="name@example.com" value="<?php echo htmlspecialchars($email ?? ''); ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold text-dark"><i class="fa fa-phone text-primary me-2"></i>Phone Number *</label>
                            <input type="tel" name="phone" class="form-control py-3" placeholder="+91 98765 43210" value="<?php echo htmlspecialchars($phone ?? ''); ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold text-dark"><i class="fa fa-user-tag text-primary me-2"></i>I am a *</label>
                            <select name="role" class="form-select py-3">
                                <option value="buyer">Property Buyer / Investor</option>
                                <option value="seller">Landowner / Property Seller</option>
                                <option value="agent">Real Estate Agent</option>
                            </select>
                        </div>

                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <label class="form-label fw-semibold text-dark"><i class="fa fa-lock text-primary me-2"></i>Password *</label>
                                <input type="password" name="password" class="form-control py-3" placeholder="At least 6 characters" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold text-dark"><i class="fa fa-lock text-primary me-2"></i>Confirm Password *</label>
                                <input type="password" name="confirm_password" class="form-control py-3" placeholder="Repeat password" required>
                            </div>
                        <div class="mb-3 text-center">
                            <small class="text-muted">By creating an account, you agree to our <a href="privacy-policy.php" class="text-primary fw-semibold" target="_blank">Privacy Policy</a>.</small>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 py-3 text-white fw-bold rounded-3 fs-5 shadow-sm">
                            <i class="fa fa-user-plus me-2"></i>Create Account
                        </button>
                    </form>

                    <hr class="my-4">

                    <div class="text-center">
                        <p class="mb-0 text-muted">Already have an account? <a href="login.php" class="text-primary fw-bold">Sign In Here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/footer.php'; ?>

<?php
require_once __DIR__ . '/db.php';

$error = '';
$info = '';

if (isset($_GET['registered']) && $_GET['registered'] == 1) {
    $info = "Account created successfully! Please sign in with your credentials.";
}
if (isset($_GET['loggedout']) && $_GET['loggedout'] == 1) {
    $info = "You have been logged out successfully.";
}

if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email_phone = trim($_POST['email_phone'] ?? '');
    $password = $_POST['password'] ?? '';

    if (empty($email_phone) || empty($password)) {
        $error = "Please enter your email/phone and password.";
    } else {
        $stmt = $conn->prepare("SELECT id, full_name, email, phone, password, role FROM users WHERE email = ? OR phone = ?");
        $stmt->bind_param("ss", $email_phone, $email_phone);
        $stmt->execute();
        $res = $stmt->get_result();

        if ($user = $res->fetch_assoc()) {
            if (password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['full_name'] = $user['full_name'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['phone'] = $user['phone'];
                $_SESSION['role'] = $user['role'];

                header("Location: dashboard.php");
                exit();
            } else {
                $error = "Invalid password. Please check your credentials.";
            }
        } else {
            $error = "No user account found matching those details.";
        }
        $stmt->close();
    }
}

include __DIR__ . '/header.php';
?>

<!-- Login Page Header -->
<div class="container-fluid header bg-white p-0">
    <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
        <div class="col-md-6 p-5 mt-lg-5">
            <h1 class="display-5 animated fadeIn mb-4">User Login</h1>
            <nav aria-label="breadcrumb" class="animated fadeIn">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item text-body active" aria-current="page">Login</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-6 animated fadeIn">
            <img class="img-fluid" src="img/STYLISH MODERN HOME.jpg" alt="Login Pudami Consultancy" style="max-height: 280px; width: 100%; object-fit: cover;">
        </div>
    </div>
</div>

<div class="container-fluid py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="card auth-card shadow-lg border-0 p-4 p-md-5">
                    <div class="text-center mb-4">
                        <img src="img/pudamiconsultancy_logo.png" alt="Pudami Logo" class="mb-3" style="height: 60px;">
                        <h3 class="fw-bold text-dark">Welcome Back</h3>
                        <p class="text-muted">Sign in to your Pudami Consultancy account</p>
                    </div>

                    <?php if (!empty($info)): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="fa fa-check-circle me-2"></i><?php echo htmlspecialchars($info); ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty($error)): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="fa fa-exclamation-circle me-2"></i><?php echo htmlspecialchars($error); ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                    <form action="login.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label fw-semibold text-dark"><i class="fa fa-envelope text-primary me-2"></i>Email Address or Phone *</label>
                            <input type="text" name="email_phone" class="form-control py-3" placeholder="name@example.com or Phone Number" value="<?php echo htmlspecialchars($_POST['email_phone'] ?? ''); ?>" required>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-semibold text-dark"><i class="fa fa-lock text-primary me-2"></i>Password *</label>
                            <input type="password" name="password" class="form-control py-3" placeholder="Enter your password" required>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 py-3 text-white fw-bold rounded-3 fs-5 shadow-sm">
                            <i class="fa fa-sign-in-alt me-2"></i>Sign In
                        </button>
                    </form>

                    <hr class="my-4">

                    <div class="text-center">
                        <p class="mb-0 text-muted">Don't have an account yet? <a href="register.php" class="text-primary fw-bold">Register Now</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/footer.php'; ?>

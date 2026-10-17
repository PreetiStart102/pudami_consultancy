<?php
require_once __DIR__ . '/db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$inquiries = [];

$stmt = $conn->prepare("SELECT * FROM inquiries WHERE user_id = ? ORDER BY created_at DESC");
if ($stmt) {
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $res = $stmt->get_result();
    while ($row = $res->fetch_assoc()) {
        $inquiries[] = $row;
    }
    $stmt->close();
}

include __DIR__ . '/header.php';
?>

<!-- Dashboard Page Header -->
<div class="container-fluid header bg-white p-0">
    <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
        <div class="col-md-6 p-5 mt-lg-5">
            <h1 class="display-5 animated fadeIn mb-4">User Dashboard</h1>
            <nav aria-label="breadcrumb" class="animated fadeIn">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item text-body active" aria-current="page">Dashboard</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-6 animated fadeIn">
            <img class="img-fluid" src="img/PREMIUM DUPLEX PROJECT.jpg" alt="Dashboard" style="max-height: 280px; width: 100%; object-fit: cover;">
        </div>
    </div>
</div>

<div class="container-fluid py-5">
    <div class="container">
        <!-- Welcome Banner -->
        <div class="bg-light rounded-4 p-4 p-md-5 mb-5 border-start border-5 border-primary shadow-sm">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h2 class="fw-bold text-dark mb-2">Welcome back, <?php echo htmlspecialchars($_SESSION['full_name']); ?>! 👋</h2>
                    <p class="text-muted mb-0">Here is your account summary and property consultation requests with Pudami Consultancy Services.</p>
                </div>
                <div class="col-md-4 text-md-end mt-3 mt-md-0">
                    <a href="property-list.php" class="btn btn-primary px-4 py-2 me-2 text-white"><i class="fa fa-search me-1"></i> Browse Properties</a>
                    <a href="logout.php" class="btn btn-outline-danger px-3 py-2"><i class="fa fa-sign-out-alt me-1"></i> Logout</a>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <!-- Profile Card -->
            <div class="col-lg-4">
                <div class="card border-0 shadow-sm rounded-4 p-4 h-100">
                    <div class="text-center mb-4">
                        <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 90px; height: 90px; border: 3px solid #00B98E;">
                            <i class="fa fa-user fa-3x text-primary"></i>
                        </div>
                        <h4 class="fw-bold text-dark mb-1"><?php echo htmlspecialchars($_SESSION['full_name']); ?></h4>
                        <span class="badge bg-primary px-3 py-2 text-capitalize"><?php echo htmlspecialchars($_SESSION['role'] ?? 'Member'); ?></span>
                    </div>

                    <div class="border-top pt-3">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fa fa-envelope text-primary me-3 fa-lg"></i>
                            <div>
                                <small class="text-muted d-block">Email Address</small>
                                <span class="fw-semibold text-dark"><?php echo htmlspecialchars($_SESSION['email']); ?></span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fa fa-phone text-primary me-3 fa-lg"></i>
                            <div>
                                <small class="text-muted d-block">Phone Number</small>
                                <span class="fw-semibold text-dark"><?php echo htmlspecialchars($_SESSION['phone']); ?></span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fa fa-shield-alt text-primary me-3 fa-lg"></i>
                            <div>
                                <small class="text-muted d-block">Account Status</small>
                                <span class="badge bg-success"><i class="fa fa-check-circle me-1"></i> Verified Active</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Inquiries & Requests List -->
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm rounded-4 p-4 h-100">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h4 class="fw-bold text-dark mb-0"><i class="fa fa-paper-plane me-2 text-primary"></i>My Property Consultations & Inquiries</h4>
                        <a href="contact.php" class="btn btn-sm btn-outline-primary"><i class="fa fa-plus me-1"></i> New Request</a>
                    </div>

                    <?php if (count($inquiries) > 0): ?>
                        <div class="table-responsive">
                            <table class="table table-hover align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Service Requested</th>
                                        <th>Message / Requirements</th>
                                        <th>Date Submitted</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($inquiries as $idx => $inq): ?>
                                        <tr>
                                            <td><?php echo $idx + 1; ?></td>
                                            <td><span class="fw-bold text-dark"><?php echo htmlspecialchars($inq['service'] ?: 'General Consultation'); ?></span></td>
                                            <td><small class="text-muted"><?php echo htmlspecialchars(substr($inq['message'], 0, 60)) . (strlen($inq['message']) > 60 ? '...' : ''); ?></small></td>
                                            <td><small><?php echo date('M d, Y', strtotime($inq['created_at'])); ?></small></td>
                                            <td><span class="badge bg-warning text-dark"><i class="fa fa-clock me-1"></i> In Advisory Review</span></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    <?php else: ?>
                        <div class="text-center py-5">
                            <img src="img/icon-deal.png" style="width: 70px; opacity: 0.5;" class="mb-3">
                            <h5 class="text-muted">No Consultation Requests Submitted Yet</h5>
                            <p class="text-muted small">Submit an inquiry or request a site visit to connect with a Pudami certified advisor.</p>
                            <a href="contact.php" class="btn btn-primary px-4 text-white"><i class="fa fa-envelope me-2"></i>Submit Property Request</a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/footer.php'; ?>

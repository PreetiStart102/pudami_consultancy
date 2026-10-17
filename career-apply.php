<?php
$activePage = 'careers';
include __DIR__ . '/header.php';

$status = $_GET['status'] ?? '';
$msg = $_GET['msg'] ?? '';
$appliedRole = $_GET['role'] ?? '';

// Available Roles List
$availableRoles = [
    "Senior Real Estate Sales Manager",
    "Area Sales Manager",
    "Senior Property Advisory Consultant",
    "Home Loan & Documentation Specialist",
    "Digital Growth & Lead Acquisition Specialist",
    "Customer Relationship & Operations Executive",
    "Branch Manager",
    "Other / General Application"
];
?>

<!-- Custom Styling for Job Application Page -->
<style>
.apply-hero-banner {
    background: linear-gradient(rgba(14, 46, 80, 0.82), rgba(7, 56, 40, 0.88)), url('img/career_hero.jpg') center 30% no-repeat;
    background-size: cover !important;
}
.apply-card {
    background: #ffffff;
    border-radius: 20px;
    border: 1px solid rgba(0, 185, 142, 0.25);
    box-shadow: 0 15px 40px rgba(14, 46, 80, 0.08);
}
.role-banner {
    background: #ffffff;
    border: 1px solid #E2E8F0;
    border-left: 5px solid #00B98E !important;
    border-radius: 16px;
    padding: 18px 24px;
    box-shadow: 0 4px 20px rgba(14, 46, 80, 0.06);
}
.role-banner-icon {
    width: 48px;
    height: 48px;
    min-width: 48px;
    border-radius: 12px;
    background: linear-gradient(135deg, #00B98E 0%, #0E4B37 100%);
    color: #ffffff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.25rem;
    box-shadow: 0 4px 12px rgba(0, 185, 142, 0.28);
    flex-shrink: 0;
}
.apply-input-group {
    border-radius: 12px;
    overflow: hidden;
    border: 1px solid #CBD5E1;
    transition: all 0.25s ease;
}
.apply-input-group:focus-within {
    border-color: #00B98E;
    box-shadow: 0 0 0 0.25rem rgba(0, 185, 142, 0.15);
}
.apply-input-group .input-group-text {
    background-color: #F8FAFC;
    border: none;
    border-right: 1px solid #E2E8F0;
    color: #00B98E;
    font-size: 1.05rem;
    width: 48px;
    min-width: 48px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0;
}
.apply-input-group .input-group-text i {
    display: flex;
    align-items: center;
    justify-content: center;
    line-height: 1;
}
.apply-input-group .form-control,
.apply-input-group .form-select {
    border: none;
    padding: 0.75rem 1rem;
    font-size: 0.95rem;
    color: #111827 !important; /* Solid dark black text */
    font-weight: 500;
}
.apply-input-group .form-control:focus,
.apply-input-group .form-select:focus {
    box-shadow: none;
    color: #111827 !important;
}
textarea.form-control {
    border: 1px solid #CBD5E1;
    border-radius: 12px;
    color: #111827 !important; /* Solid dark black text */
    font-weight: 500;
    padding: 0.85rem 1rem;
}
textarea.form-control:focus {
    border-color: #00B98E;
    box-shadow: 0 0 0 0.25rem rgba(0, 185, 142, 0.15);
    color: #111827 !important;
}
/* Refined grayish placeholders across browsers */
.apply-input-group .form-control::placeholder,
textarea.form-control::placeholder,
.form-control::placeholder {
    color: #94A3B8 !important; /* Elegant grayish placeholder */
    opacity: 1 !important;
    font-weight: 400;
}
.apply-input-group .form-control::-webkit-input-placeholder,
textarea.form-control::-webkit-input-placeholder {
    color: #94A3B8 !important;
}
.apply-input-group .form-control::-moz-placeholder,
textarea.form-control::-moz-placeholder {
    color: #94A3B8 !important;
}
.file-upload-box {
    border: 2px dashed #CBD5E1;
    border-radius: 14px;
    padding: 16px 20px;
    background-color: #F8FAFC;
    transition: all 0.3s ease;
}
.file-upload-box:hover {
    border-color: #00B98E;
    background-color: #EFFDF5;
}
.file-upload-box input[type="file"] {
    cursor: pointer;
}
.apply-sidebar-card {
    background: linear-gradient(135deg, #0E2E50 0%, #0E4B37 100%);
    border-radius: 20px;
    color: #ffffff;
    padding: 32px 28px;
    box-shadow: 0 12px 30px rgba(14, 46, 80, 0.15);
}
.selected-role-badge {
    background: #EFFDF5;
    color: #00B98E;
    border: 1px solid rgba(0, 185, 142, 0.3);
    border-radius: 30px;
    padding: 6px 16px;
    font-weight: 700;
    display: inline-flex;
    align-items: center;
    gap: 8px;
}
</style>

<!-- Hero Header Banner -->
<div class="container-fluid hero-header apply-hero-banner position-relative py-4 mb-4">
    <div class="container py-3 text-center text-white">
        <h1 class="display-4 fw-bold text-white mb-2 hero-header-title" style="font-family: 'Cinzel', serif; letter-spacing: 1.5px;">CANDIDATE APPLICATION FORM</h1>
        <p class="fs-5 fw-semibold text-warning mb-2" style="font-family: 'Cinzel', serif; letter-spacing: 0.8px;">Take The Next Step Toward Your Professional Career</p>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase mb-0 fw-bold" style="letter-spacing: 1px; font-size: 0.86rem;">
                <li class="breadcrumb-item"><a href="index.php" class="text-white-50 text-decoration-none">HOME</a></li>
                <li class="breadcrumb-item"><a href="careers.php" class="text-white-50 text-decoration-none">CAREERS</a></li>
                <li class="breadcrumb-item active" style="color: #00B98E !important;" aria-current="page">APPLY ONLINE</li>
            </ol>
        </nav>
    </div>
</div>

<!-- Main Application Content -->
<div class="container-fluid py-4 px-lg-5 bg-white">
    <div class="container py-2">

        <!-- Pre-selected Role Alert / Banner -->
        <?php if (!empty($appliedRole)): ?>
            <div class="role-banner d-flex align-items-center justify-content-between flex-wrap gap-3 mb-4">
                <div class="d-flex align-items-center gap-3">
                    <div class="role-banner-icon">
                        <i class="fa fa-briefcase"></i>
                    </div>
                    <div>
                        <div class="small text-muted fw-semibold text-uppercase" style="letter-spacing: 0.8px; font-size: 0.78rem;">Applying for Position:</div>
                        <h5 class="fw-bold text-dark mb-0" style="font-family: 'Cinzel', serif; font-size: 1.25rem;"><?php echo htmlspecialchars($appliedRole); ?></h5>
                    </div>
                </div>
                <a href="careers.php#open-roles" class="btn btn-outline-secondary btn-sm rounded-pill px-3 py-2 fw-semibold d-inline-flex align-items-center gap-2">
                    <i class="fa fa-arrow-left"></i>
                    <span>View All Openings</span>
                </a>
            </div>
        <?php endif; ?>

        <!-- Feedback Alert Messages -->
        <?php if ($status === 'success'): ?>
            <div class="alert alert-success alert-dismissible fade show mb-4 p-4 rounded-4 shadow-sm" role="alert" style="border-left: 6px solid #00B98E; background-color: #F0FDF4;">
                <div class="d-flex align-items-start gap-3">
                    <i class="fa fa-check-circle fs-2 text-success mt-1"></i>
                    <div>
                        <h5 class="fw-bold mb-1 text-dark" style="font-family: 'Cinzel', serif;">Application Submitted Successfully!</h5>
                        <p class="mb-2 text-muted" style="line-height: 1.6;">
                            Thank you for submitting your application<?php echo !empty($appliedRole) ? ' for <strong>' . htmlspecialchars($appliedRole) . '</strong>' : ''; ?>.
                            Your resume and Aadhar card verification document have been safely received.
                        </p>
                        <div class="small fw-semibold text-success">
                            <i class="fa fa-clock me-1"></i> Our Talent Acquisition team reviews profiles within 24–48 business hours. You will receive an email/call update shortly.
                        </div>
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php elseif ($status === 'error'): ?>
            <div class="alert alert-danger alert-dismissible fade show mb-4 p-4 rounded-4 shadow-sm" role="alert" style="border-left: 6px solid #DC2626; background-color: #FEF2F2;">
                <div class="d-flex align-items-start gap-3">
                    <i class="fa fa-exclamation-triangle fs-2 text-danger mt-1"></i>
                    <div>
                        <h5 class="fw-bold mb-1 text-dark" style="font-family: 'Cinzel', serif;">Submission Error</h5>
                        <p class="mb-0 text-muted"><?php echo htmlspecialchars($msg ?: "Please verify your information, make sure both Resume and Aadhar Card files are properly selected, and try again."); ?></p>
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <div class="row g-4">
            <!-- Left Column: Application Form -->
            <div class="col-lg-8">
                <div class="apply-card p-4 p-md-5">
                    <div class="border-bottom pb-3 mb-4 d-flex align-items-center justify-content-between flex-wrap gap-2">
                        <div>
                            <span class="badge bg-light text-primary px-3 py-1.5 rounded-pill fw-bold mb-1" style="font-size: 0.78rem; letter-spacing: 0.8px;">OFFICIAL CANDIDATE PORTAL</span>
                            <h3 class="fw-bold text-dark mb-0" style="font-family: 'Cinzel', serif;">Candidate Application Form</h3>
                        </div>
                        <span class="badge bg-light text-muted px-3 py-2 rounded-pill small border">
                            <i class="fa fa-lock text-success me-1"></i> SSL Encrypted &amp; Confidential
                        </span>
                    </div>

                    <form action="career_process.php" method="POST" enctype="multipart/form-data" id="jobApplicationForm">
                        <div class="row g-3">
                            <!-- Full Name -->
                            <div class="col-md-6">
                                <label class="form-label fw-bold text-dark small">Full Name <span class="text-danger">*</span></label>
                                <div class="input-group apply-input-group">
                                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                                    <input type="text" name="full_name" class="form-control" placeholder="Enter your full name" required>
                                </div>
                            </div>

                            <!-- Email Address -->
                            <div class="col-md-6">
                                <label class="form-label fw-bold text-dark small">Email Address <span class="text-danger">*</span></label>
                                <div class="input-group apply-input-group">
                                    <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                    <input type="email" name="email" class="form-control" placeholder="name@example.com" required>
                                </div>
                            </div>

                            <!-- Phone Number -->
                            <div class="col-md-6">
                                <label class="form-label fw-bold text-dark small">Mobile / WhatsApp Number <span class="text-danger">*</span></label>
                                <div class="input-group apply-input-group">
                                    <span class="input-group-text"><i class="fa fa-phone-alt"></i></span>
                                    <input type="tel" name="phone" class="form-control" placeholder="e.g. 9876543210" pattern="[0-9]{10}" title="Please enter a valid 10-digit mobile number" required>
                                </div>
                                <div class="form-text" style="font-size: 0.75rem;">10-digit primary mobile number for interview communication</div>
                            </div>

                            <!-- Position / Role Applied For -->
                            <div class="col-md-6">
                                <label class="form-label fw-bold text-dark small">Role / Position <span class="text-danger">*</span></label>
                                <div class="input-group apply-input-group">
                                    <span class="input-group-text"><i class="fa fa-briefcase"></i></span>
                                    <select name="role" class="form-select fw-semibold" required>
                                        <option value="">Select Target Position</option>
                                        <?php foreach ($availableRoles as $roleOption): ?>
                                            <option value="<?php echo htmlspecialchars($roleOption); ?>" <?php echo ($appliedRole === $roleOption) ? 'selected' : ''; ?>>
                                                <?php echo htmlspecialchars($roleOption); ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <!-- Preferred Work Location -->
                            <div class="col-md-6">
                                <label class="form-label fw-bold text-dark small">Preferred Location</label>
                                <div class="input-group apply-input-group">
                                    <span class="input-group-text"><i class="fa fa-map-marker-alt"></i></span>
                                    <select name="location" class="form-select">
                                        <option value="Vijayawada">Vijayawada, Andhra Pradesh</option>
                                        <option value="Hyderabad">Hyderabad, Telangana</option>
                                        <option value="Amaravati">Amaravati Capital Region</option>
                                        <option value="Visakhapatnam">Visakhapatnam, Andhra Pradesh</option>
                                        <option value="Bengaluru">Bengaluru, Karnataka</option>
                                        <option value="Chennai">Chennai, Tamil Nadu</option>
                                        <option value="Kochi">Kochi, Kerala</option>
                                        <option value="Open / Pan-India">Open to Any South India Location</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Highest Qualification -->
                            <div class="col-md-6">
                                <label class="form-label fw-bold text-dark small">Highest Educational Qualification</label>
                                <div class="input-group apply-input-group">
                                    <span class="input-group-text"><i class="fa fa-graduation-cap"></i></span>
                                    <input type="text" name="qualification" class="form-control" placeholder="e.g. MBA / B.Tech / Graduate / B.Com">
                                </div>
                            </div>

                            <!-- ==========================================
                                 FILE UPLOADS SECTION: RESUME + AADHAR CARD
                                 ========================================== -->
                            <div class="col-12 mt-4">
                                <div class="p-3 rounded-3" style="background-color: #F8FAFC; border-left: 4px solid #00B98E;">
                                    <h6 class="fw-bold text-dark mb-1"><i class="fa fa-folder-open me-2 text-primary"></i>Required Candidate Documents</h6>
                                    <small class="text-muted">Please attach both your updated Resume and valid Aadhar Card for identity verification.</small>
                                </div>
                            </div>

                            <!-- 1. Resume Upload -->
                            <div class="col-md-6">
                                <label class="form-label fw-bold text-dark small">
                                    Upload Resume / CV <span class="text-danger">*</span>
                                </label>
                                <div class="file-upload-box">
                                    <div class="d-flex align-items-center gap-3 mb-2">
                                        <i class="fa fa-file-pdf fs-3 text-danger"></i>
                                        <div>
                                            <div class="fw-semibold text-dark small">Resume / Curriculum Vitae</div>
                                            <div class="text-muted" style="font-size: 0.75rem;">Supported: PDF, DOC, DOCX (Max 10MB)</div>
                                        </div>
                                    </div>
                                    <input type="file" name="resume" class="form-control form-control-sm" accept=".pdf,.doc,.docx" required>
                                </div>
                            </div>

                            <!-- 2. Aadhar Card Upload (PDF / Image) -->
                            <div class="col-md-6">
                                <label class="form-label fw-bold text-dark small">
                                    Upload Aadhar Card <span class="text-danger">*</span>
                                </label>
                                <div class="file-upload-box">
                                    <div class="d-flex align-items-center gap-3 mb-2">
                                        <i class="fa fa-id-card fs-3 text-primary"></i>
                                        <div>
                                            <div class="fw-semibold text-dark small">Aadhar Card Verification</div>
                                            <div class="text-muted" style="font-size: 0.75rem;">Supported: PDF, JPG, JPEG, PNG (Max 10MB)</div>
                                        </div>
                                    </div>
                                    <input type="file" name="aadhar" class="form-control form-control-sm" accept=".pdf,image/jpeg,image/jpg,image/png,image/webp" required>
                                </div>
                            </div>

                            <!-- Cover Note / Strengths -->
                            <div class="col-12 mt-3">
                                <label class="form-label fw-bold text-dark small">Brief Profile Summary / Why Join Pudami</label>
                                <textarea name="cover_note" class="form-control" rows="3" placeholder="Share a brief overview of your key strengths, sales experience, or why you are excited to join Pudami Consultancy Services..."></textarea>
                            </div>

                            <!-- Submit Button -->
                            <div class="col-12 pt-3 text-center">
                                <button type="submit" class="btn btn-primary px-5 py-3 rounded-pill fw-bold text-white shadow-lg w-100 w-md-auto" style="background: linear-gradient(135deg, #00B98E 0%, #0E4B37 100%); border: none; font-size: 1.05rem; letter-spacing: 0.5px; min-width: 280px;">
                                    <i class="fa fa-paper-plane me-2"></i> Submit Application &amp; Documents
                                </button>
                                <div class="small text-muted mt-2">
                                    <i class="fa fa-shield-alt text-success me-1"></i> Your personal details and verification documents are stored securely and never shared with third parties. Learn more in our <a href="privacy-policy.php" class="text-primary fw-semibold" target="_blank">Privacy Policy</a>.
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Right Column: Instructions, Verification & Company Highlights -->
            <div class="col-lg-4">
                <div class="d-flex flex-column gap-4">
                    <!-- Verification Standards Card -->
                    <div class="apply-sidebar-card">
                        <span class="badge bg-warning text-dark px-3 py-1.5 rounded-pill fw-bold mb-3" style="font-size: 0.78rem; letter-spacing: 0.8px;">DIRECT RECRUITMENT</span>
                        <h4 class="fw-bold text-white mb-3" style="font-family: 'Cinzel', serif;">Why We Require Aadhar Verification</h4>
                        <p class="text-white-50 small mb-4" style="line-height: 1.7;">
                            As an AP RERA registered advisory firm managing high-value property transactions and financial advisory across South India, Pudami maintains statutory compliance and authentic identity records for all onboarding professionals.
                        </p>
                        <div class="d-flex flex-column gap-3 text-white small">
                            <div class="d-flex align-items-center gap-3">
                                <i class="fa fa-check-circle text-warning fs-5"></i>
                                <span>Immediate priority review by HR</span>
                            </div>
                            <div class="d-flex align-items-center gap-3">
                                <i class="fa fa-check-circle text-warning fs-5"></i>
                                <span>Direct fast-track interview scheduling</span>
                            </div>
                            <div class="d-flex align-items-center gap-3">
                                <i class="fa fa-check-circle text-warning fs-5"></i>
                                <span>100% confidential candidate file storage</span>
                            </div>
                        </div>
                    </div>

                    <!-- Application Helpdesk Box -->
                    <div class="p-4 rounded-4 shadow-sm bg-light border border-1">
                        <h5 class="fw-bold text-dark mb-2" style="font-family: 'Cinzel', serif;">Need Assistance?</h5>
                        <p class="text-muted small mb-3">Having trouble uploading your resume or Aadhar card? Connect directly with our Talent Acquisition Desk.</p>
                        <div class="d-flex flex-column gap-2 small">
                            <div class="d-flex align-items-center text-dark">
                                <i class="fa fa-envelope text-primary me-2"></i>
                                <a href="mailto:info@pudamiconsultancy.com" class="text-decoration-none text-dark fw-semibold">info@pudamiconsultancy.com</a>
                            </div>
                            <div class="d-flex align-items-center text-dark">
                                <i class="fa fa-phone-alt text-primary me-2"></i>
                                <a href="tel:+918662494949" class="text-decoration-none text-dark fw-semibold">+91 866 249 4949</a>
                            </div>
                            <div class="d-flex align-items-center text-dark">
                                <i class="fa fa-map-marker-alt text-primary me-2"></i>
                                <span class="text-muted">Vijayawada &amp; Hyderabad Regional Offices</span>
                            </div>
                        </div>
                    </div>

                    <!-- Link back to Open Positions -->
                    <div class="text-center p-3 rounded-4 bg-white border">
                        <p class="small text-muted mb-2">Want to explore all open opportunities first?</p>
                        <a href="careers.php#open-roles" class="btn btn-outline-primary btn-sm rounded-pill px-4 fw-bold">
                            <i class="fa fa-list-ul me-1"></i> Browse Open Roles
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="my-5"></div>

<?php include __DIR__ . '/footer.php'; ?>

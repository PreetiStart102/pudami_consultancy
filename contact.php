<?php
$activePage = 'contact';
include __DIR__ . '/header.php';

$status = $_GET['status'] ?? '';
$msg = $_GET['msg'] ?? '';
$selectedService = $_GET['service'] ?? '';
?>

<!-- Custom Styles for Contact Page Matching Target Design -->
<style>
.contact-info-card {
    background: #ffffff;
    border: 1px solid #E2E8F0;
    border-radius: 16px;
    padding: 36px 24px;
    text-align: center;
    transition: all 0.35s cubic-bezier(0.165, 0.84, 0.44, 1);
    box-shadow: 0 4px 18px rgba(0, 0, 0, 0.04);
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
.contact-info-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 16px 35px rgba(14, 46, 80, 0.12) !important;
    border-color: #00B98E !important;
}
.contact-icon-circle {
    width: 68px;
    height: 68px;
    border-radius: 50%;
    background: linear-gradient(135deg, #0077b6 0%, #0096c7 100%);
    color: #ffffff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.55rem;
    margin-bottom: 20px;
    box-shadow: 0 6px 18px rgba(0, 119, 182, 0.35);
    transition: transform 0.3s ease;
}
.contact-info-card:hover .contact-icon-circle {
    transform: scale(1.1);
    background: linear-gradient(135deg, #00B98E 0%, #0E4B37 100%);
    box-shadow: 0 8px 22px rgba(0, 185, 142, 0.4);
}
.contact-card-title {
    font-family: 'Cinzel', serif;
    font-size: 1.15rem;
    font-weight: 700;
    letter-spacing: 1.5px;
    color: #0E2E50;
    margin-bottom: 12px;
    text-transform: uppercase;
}
.contact-card-text {
    font-size: 0.96rem;
    color: #475569;
    line-height: 1.7;
    margin-bottom: 0;
    word-break: break-word;
}
.contact-form-card {
    background: #ffffff;
    border: 1px solid #E2E8F0;
    border-radius: 20px;
    box-shadow: 0 10px 35px rgba(0, 0, 0, 0.05);
    padding: 42px 40px;
}
@media (max-width: 767.98px) {
    .contact-form-card {
        padding: 28px 20px;
    }
}
.contact-form-label {
    font-size: 0.94rem;
    font-weight: 700;
    color: #1E293B;
    margin-bottom: 8px;
    display: block;
}
.contact-form-label .req {
    color: #DC2626;
    margin-left: 2px;
}
.contact-input-box {
    border: 1.5px solid #CBD5E1;
    border-radius: 10px;
    padding: 12px 16px;
    font-size: 0.96rem;
    color: #1E293B;
    background-color: #ffffff;
    transition: all 0.25s ease;
    width: 100%;
}
.contact-input-box:focus {
    border-color: #00B98E;
    box-shadow: 0 0 0 3px rgba(0, 185, 142, 0.15);
    outline: none;
}
.contact-input-box.select-service {
    border: 1.5px solid #00B98E;
    color: #334155;
    cursor: pointer;
}
.sub-caption {
    font-size: 0.82rem;
    color: #64748B;
    margin-top: 6px;
    font-weight: 500;
    display: block;
}
.contact-side-card {
    background: #ffffff;
    border: 1px solid #E2E8F0;
    border-radius: 20px;
    box-shadow: 0 10px 35px rgba(0, 0, 0, 0.05);
    overflow: hidden;
    display: flex;
    flex-direction: column;
    height: 100%;
}
.contact-side-img-box {
    position: relative;
    height: 280px;
    overflow: hidden;
    background: #0E2E50;
}
.contact-side-img-box img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s ease;
}
.contact-side-card:hover .contact-side-img-box img {
    transform: scale(1.04);
}
.contact-side-img-badge {
    position: absolute;
    bottom: 14px;
    left: 18px;
    background: rgba(14, 46, 80, 0.88);
    backdrop-filter: blur(8px);
    color: #ffffff;
    padding: 6px 14px;
    border-radius: 30px;
    font-size: 0.78rem;
    font-weight: 700;
    letter-spacing: 0.8px;
    border: 1px solid rgba(255, 255, 255, 0.25);
}
.contact-side-body {
    padding: 30px 28px;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
}
.contact-side-title {
    font-family: 'Cinzel', serif;
    font-weight: 700;
    color: #0E2E50;
    font-size: 1.3rem;
    margin-bottom: 8px;
    letter-spacing: 0.5px;
}
.contact-side-desc {
    color: #475569;
    font-size: 0.92rem;
    line-height: 1.65;
    margin-bottom: 20px;
}
.contact-side-checkpoints {
    list-style: none;
    padding-left: 0;
    margin-bottom: 22px;
    display: flex;
    flex-direction: column;
    gap: 11px;
}
.contact-side-checkpoints li {
    font-size: 0.9rem;
    color: #1E293B;
    display: flex;
    align-items: center;
}
.contact-side-checkpoints li i {
    color: #00B98E;
    font-size: 1.05rem;
    margin-right: 10px;
    flex-shrink: 0;
}
.contact-hotline-box {
    background: #F8FAFC;
    border: 1px solid #E2E8F0;
    border-radius: 14px;
    padding: 16px 18px;
}
.contact-hotline-title {
    font-size: 0.78rem;
    text-transform: uppercase;
    font-weight: 700;
    letter-spacing: 0.8px;
    color: #64748B;
    margin-bottom: 4px;
}
.contact-hotline-number {
    font-size: 1.12rem;
    font-weight: 700;
    color: #0E2E50;
    text-decoration: none;
    transition: color 0.2s;
}
.contact-hotline-number:hover {
    color: #00B98E;
}
.btn-whatsapp-chat {
    background: #25D366;
    color: #ffffff !important;
    font-weight: 600;
    font-size: 0.88rem;
    border-radius: 30px;
    padding: 9px 18px;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    transition: all 0.25s ease;
}
.btn-whatsapp-chat:hover {
    background: #1EBE5D;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(37, 211, 102, 0.35);
}
.btn-call-now {
    border: 1.5px solid #00B98E !important;
    color: #0E4B37 !important;
    background-color: transparent !important;
    transition: all 0.25s ease;
}
.btn-call-now i {
    color: #00B98E !important;
    transition: color 0.25s ease;
}
.btn-call-now:hover,
.btn-call-now:focus,
.btn-call-now:active {
    background-color: #0E2E50 !important;
    border-color: #0E2E50 !important;
    color: #ffffff !important;
    box-shadow: 0 4px 14px rgba(14, 46, 80, 0.25);
    transform: translateY(-2px);
}
.btn-call-now:hover i,
.btn-call-now:focus i,
.btn-call-now:active i {
    color: #ffffff !important;
}
</style>

<!-- ==========================================================================
     Hero Header Banner (Exact Match with Reference Target Image 1)
     ========================================================================== -->
<div class="container-fluid hero-header contact-hero-banner position-relative py-3 mb-2" style="background: linear-gradient(rgba(14, 46, 80, 0.78), rgba(7, 56, 40, 0.85)), url('img/about_usbreadcrumb.jpg') center center no-repeat; background-size: cover !important;">
    <div class="container py-3 text-center text-white">
        <h1 class="display-4 fw-bold text-white mb-1 hero-header-title" style="font-family: 'Cinzel', serif; letter-spacing: 2px;">CONTACT US</h1>
        <p class="fs-5 fw-semibold text-warning mb-2 hero-header-sub" style="font-family: 'Cinzel', serif; letter-spacing: 1px;">We're Ready to Assist You</p>
        <nav aria-label="breadcrumb" class="hero-header-nav">
            <ol class="breadcrumb justify-content-center text-uppercase mb-0 fw-bold" style="letter-spacing: 1.2px; font-size: 0.88rem;">
                <li class="breadcrumb-item"><a href="index.php" class="text-white-50 text-decoration-none">HOME</a></li>
                <li class="breadcrumb-item text-primary fw-bold active" aria-current="page" style="color: #00B98E !important;">CONTACT US</li>
            </ol>
        </nav>
    </div>
</div>

<!-- ==========================================================================
     Section 1: 3 Contact Info Cards (Exact Match with Reference Target Image 1)
     ========================================================================== -->
<div class="container-fluid pt-3 pb-5 px-lg-5 bg-white">
    <div class="container pt-1 pb-2">
        <!-- Dedicated Guidance & Trust Message -->
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 880px;">
            <span class="badge px-3 py-1.5 rounded-pill fw-semibold mb-3" style="background: #EFFDF5; color: #00B98E; font-size: 0.84rem; letter-spacing: 1px;">TRUSTED REAL ESTATE SUPPORT</span>
            <p class="fs-5 text-dark mb-3" style="line-height: 1.85; color: #1E293B; font-weight: 500;">
                At <strong>Pudami Consultancy Services</strong>, we’re dedicated to providing transparent guidance, verified properties, and a seamless real-estate experience for every client. Whether you’re buying, selling, or investing, our team is committed to helping you make confident and rewarding property decisions.
            </p>
            <p class="fs-6 fw-bold mb-0" style="color: #0E4B37; letter-spacing: 0.5px;">
                <i class="fa fa-handshake me-2 text-primary"></i>For trusted real-estate support, reach out anytime.
            </p>
        </div>

        <div class="row g-4 justify-content-center">
            <!-- 1. MAIL -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="contact-info-card">
                    <div class="contact-icon-circle">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <h4 class="contact-card-title">MAIL</h4>
                    <p class="contact-card-text">
                        <a href="mailto:pudamiconsultancyservices@gmail.com" class="text-decoration-none text-muted" style="transition: color 0.2s;" onmouseover="this.style.color='#00B98E'" onmouseout="this.style.color='#475569'">
                            pudamiconsultancyservices@gmail.com
                        </a>
                    </p>
                </div>
            </div>

            <!-- 2. ADDRESS -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="contact-info-card">
                    <div class="contact-icon-circle">
                        <i class="fa fa-map-marker-alt"></i>
                    </div>
                    <h4 class="contact-card-title">ADDRESS</h4>
                    <p class="contact-card-text">
                        Near Sivalayam Temple, Mahadevapuram Colony, Kanuru, Vijayawada - 520007
                    </p>
                </div>
            </div>

            <!-- 3. CALL -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="contact-info-card">
                    <div class="contact-icon-circle">
                        <i class="fa fa-phone-alt"></i>
                    </div>
                    <h4 class="contact-card-title">CALL</h4>
                    <p class="contact-card-text">
                        <a href="tel:+919182613797" class="text-decoration-none text-muted" style="transition: color 0.2s;" onmouseover="this.style.color='#00B98E'" onmouseout="this.style.color='#475569'">+91 9182613797</a>, 
                        <a href="tel:+919490070313" class="text-decoration-none text-muted" style="transition: color 0.2s;" onmouseover="this.style.color='#00B98E'" onmouseout="this.style.color='#475569'">+91 9490070313</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="my-4"></div>

<!-- ==========================================================================
     Section 2: Contact Form (Exact Match with Reference Target Image 2)
     ========================================================================== -->
<div class="container-fluid py-5 px-lg-5" id="contact-form" style="background-color: #F8FAFC;">
    <div class="container py-2">
        <div class="row g-5 align-items-stretch">
            <!-- Left Column: Contact Form Card (Exact User Fields) -->
            <div class="col-lg-7 wow fadeInLeft" data-wow-delay="0.1s">
                <!-- Success/Error Feedback Alerts -->
                <?php if ($status === 'success'): ?>
                    <div class="alert alert-success alert-dismissible fade show mb-4 shadow-sm" role="alert" style="border-left: 5px solid #00B98E;">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-check-circle fs-3 text-success me-3"></i>
                            <div>
                                <h6 class="fw-bold mb-1">Message Sent Successfully!</h6>
                                <p class="mb-0 small"><?php echo htmlspecialchars($msg ?: "Thank you! Our property advisory team will connect with you shortly."); ?></p>
                            </div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php elseif ($status === 'error'): ?>
                    <div class="alert alert-danger alert-dismissible fade show mb-4 shadow-sm" role="alert" style="border-left: 5px solid #DC2626;">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-exclamation-triangle fs-3 text-danger me-3"></i>
                            <div>
                                <h6 class="fw-bold mb-1">Submission Failed</h6>
                                <p class="mb-0 small"><?php echo htmlspecialchars($msg ?: "Please complete all required fields and try again."); ?></p>
                            </div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>

                <div class="contact-form-card h-100 shadow-sm">
                    <div class="mb-4 pb-2 border-bottom">
                        <span class="badge px-3 py-1.5 rounded-pill mb-2" style="background: #EFFDF5; color: #00B98E; font-size: 0.82rem; font-weight: 700;">FAST CONSULTATION REQUEST</span>
                        <h3 class="fw-bold text-dark mb-0" style="font-family: 'Cinzel', serif;">Send Your Requirements</h3>
                    </div>

                    <form action="contact_process.php" method="POST">
                        <!-- Field 1: Name * (First and Last side by side) -->
                        <div class="mb-4">
                            <label class="contact-form-label">Name <span class="req">*</span></label>
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <input type="text" name="first_name" class="contact-input-box" placeholder="" required>
                                    <span class="sub-caption">First</span>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="last_name" class="contact-input-box" placeholder="" required>
                                    <span class="sub-caption">Last</span>
                                </div>
                            </div>
                        </div>

                        <!-- Field 2: Email & Phone Number in One Row -->
                        <div class="mb-4">
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <label class="contact-form-label">Email <span class="req">*</span></label>
                                    <input type="email" name="email" class="contact-input-box" placeholder="" required>
                                </div>
                                <div class="col-sm-6">
                                    <label class="contact-form-label">Enter Your Phone Number <span class="req">*</span></label>
                                    <input type="tel" name="phone" class="contact-input-box" placeholder="Enter mobile number" required>
                                </div>
                            </div>
                        </div>

                        <!-- Field 3: Select Service Type * (Exact Match with Image 2) -->
                        <div class="mb-4">
                            <label class="contact-form-label">Select Service Type <span class="req">*</span></label>
                            <select name="service" class="contact-input-box select-service" required>
                                <option value="" selected>- Please select -</option>
                                <option value="open plots" <?php echo ($selectedService == 'open plots') ? 'selected' : ''; ?>>open plots</option>
                                <option value="2 BHK& 3 BHK" <?php echo ($selectedService == '2 BHK& 3 BHK') ? 'selected' : ''; ?>>2 BHK& 3 BHK</option>
                                <option value="Luxury Villas" <?php echo ($selectedService == 'Luxury Villas') ? 'selected' : ''; ?>>Luxury Villas</option>
                                <option value="Loans" <?php echo ($selectedService == 'Loans') ? 'selected' : ''; ?>>Loans</option>
                            </select>
                        </div>

                        <!-- Field 4: Message -->
                        <div class="mb-4">
                            <label class="contact-form-label">Your Message / Requirements</label>
                            <textarea name="message" class="contact-input-box" rows="4" placeholder="Tell us your requirements, preferred location, or specific questions..."></textarea>
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center pt-2">
                            <button type="submit" class="btn btn-primary px-5 py-3 rounded-pill fw-bold text-white shadow" style="background: linear-gradient(135deg, #00B98E 0%, #0E4B37 100%); border: none; font-size: 1.05rem; letter-spacing: 0.6px; min-width: 240px;">
                                <i class="fa fa-paper-plane me-2"></i> Submit Inquiry
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Right Column: Related Contact Us Image & Consultation Trust Card -->
            <div class="col-lg-5 wow fadeInRight" data-wow-delay="0.2s">
                <div class="contact-side-card shadow-sm">
                    <div class="contact-side-img-box">
                        <img src="img/contact_consultation_desk.jpg" alt="Pudami Property Consultation Assistance">
                        <div class="contact-side-img-badge">
                            <i class="fa fa-handshake me-1 text-warning"></i> PROPERTY ADVISORY DESK
                        </div>
                    </div>
                    <div class="contact-side-body">
                        <div>
                            <span class="badge px-3 py-1.5 rounded-pill mb-2" style="background: #EFFDF5; color: #00B98E; font-size: 0.8rem; font-weight: 700;">GOVERNMENT RECOGNIZED</span>
                            <h4 class="contact-side-title">Consult With Our Experts</h4>
                            <p class="contact-side-desc">
                                Speak directly with verified real estate specialists for open plots, luxury duplexes, RERA documentation, and hassle-free bank approvals.
                            </p>

                            <ul class="contact-side-checkpoints mb-0">
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    <span><strong>100% Free Initial Advisory</strong> — Zero consultation charges</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    <span><strong>30-Year Clear Link Checks</strong> — 100% RERA compliant layouts</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    <span><strong>Direct Bank Loan Assistance</strong> — SBI, HDFC, IDFC &amp; LIC</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    <span><strong>Guided Property Tours</strong> — Safe &amp; transparent visits</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="my-5"></div>

<!-- ==========================================================================
     Section 3: Interactive Google Map & Fast Assistance Connect
     ========================================================================== -->
<div class="container-fluid py-4 px-lg-5 bg-white">
    <div class="container py-2">
        <div class="row g-4 align-items-center">
            <!-- Map Column -->
            <div class="col-lg-7 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="position-relative overflow-hidden rounded-4 shadow-sm border border-1 border-light" style="height: 380px;">
                    <iframe class="w-100 h-100" style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15301.2163456345!2d80.6865!3d16.4950!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a35fb4c4d57c2a7%3A0x6b8be2ef4b49044e!2sKanuru%2C%20Vijayawada%2C%20Andhra%20Pradesh!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <!-- Quick Connect & Office Hours Column -->
            <div class="col-lg-5 wow fadeInRight" data-wow-delay="0.2s">
                <div class="p-4 p-md-5 rounded-4 shadow-sm h-100" style="background: #ffffff; border: 1px solid #E2E8F0;">
                    <span class="badge px-3 py-1.5 rounded-pill mb-3" style="background: #EFFDF5; color: #00B98E; font-size: 0.82rem;">OFFICE ASSISTANCE</span>
                    <h4 class="fw-bold text-dark mb-3" style="font-family: 'Cinzel', serif;">Consultation Hours</h4>
                    <p class="text-muted small mb-4" style="line-height: 1.7;">Visit our regional advisory office in Kanuru, Vijayawada for one-on-one document diligence checks and loan advice.</p>

                    <div class="d-flex align-items-start gap-3 mb-3">
                        <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 44px; height: 44px; min-width: 44px; background: rgba(0, 185, 142, 0.12); color: #00B98E;">
                            <i class="fa fa-clock fs-5"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-0 text-dark">Mon - Sat: 9:00 AM - 7:00 PM</h6>
                            <small class="text-muted">Sunday: By Appointment</small>
                        </div>
                    </div>

                    <div class="d-flex align-items-start gap-3 mb-4">
                        <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 44px; height: 44px; min-width: 44px; background: rgba(14, 75, 55, 0.12); color: #0E4B37;">
                            <i class="fa fa-certificate fs-5"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-0 text-dark">DPIIT &amp; AP RERA Advisory</h6>
                            <small class="text-muted">Government Verified Guidance</small>
                        </div>
                    </div>

                    <div class="d-flex flex-column flex-sm-row gap-2 pt-2">
                        <a href="https://wa.me/919182613797" target="_blank" class="btn btn-success px-4 py-2.5 rounded-pill fw-bold text-white shadow-sm d-inline-flex align-items-center justify-content-center gap-2">
                            <i class="fab fa-whatsapp fs-5"></i> WhatsApp Chat
                        </a>
                        <a href="tel:+919182613797" class="btn btn-call-now px-4 py-2.5 rounded-pill fw-bold d-inline-flex align-items-center justify-content-center gap-2">
                            <i class="fa fa-phone-alt"></i> Call Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="my-5"></div>

<?php include __DIR__ . '/footer.php'; ?>

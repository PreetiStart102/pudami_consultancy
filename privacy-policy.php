<?php
$activePage = 'privacy-policy';
include __DIR__ . '/header.php';
?>

<!-- ==========================================================================
     Custom CSS for Privacy Policy Page
     ========================================================================== -->
<style>
.privacy-hero-banner {
    background: linear-gradient(rgba(14, 46, 80, 0.88), rgba(7, 56, 40, 0.90)), url('img/about_usbreadcrumb.jpg') center center no-repeat;
    background-size: cover !important;
}

.privacy-trust-strip {
    background: #ffffff;
    border-radius: 18px;
    border: 1px solid #E2E8F0;
    box-shadow: 0 10px 30px rgba(14, 46, 80, 0.06);
    margin-top: -45px;
    position: relative;
    z-index: 10;
}

.privacy-trust-item {
    padding: 16px 20px;
    border-right: 1px solid #E2E8F0;
}
.privacy-trust-item:last-child {
    border-right: none;
}

.privacy-toc-card {
    background: #ffffff;
    border-radius: 16px;
    border: 1px solid #E2E8F0;
    position: sticky;
    top: 100px;
    box-shadow: 0 8px 25px rgba(14, 46, 80, 0.05);
}

.privacy-toc-link {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 10px 14px;
    border-radius: 10px;
    color: #475569;
    font-size: 0.92rem;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.25s ease;
}

.privacy-toc-link:hover,
.privacy-toc-link.active {
    background: #EFFDF5;
    color: #00B98E;
    transform: translateX(4px);
}

.privacy-toc-link i {
    font-size: 0.82rem;
    color: #94A3B8;
    transition: color 0.25s ease;
}
.privacy-toc-link:hover i,
.privacy-toc-link.active i {
    color: #00B98E;
}

.policy-section-card {
    background: #ffffff;
    border-radius: 18px;
    border: 1px solid #E2E8F0;
    padding: 36px 32px;
    margin-bottom: 28px;
    box-shadow: 0 4px 20px rgba(14, 46, 80, 0.04);
    scroll-margin-top: 100px;
}

.policy-badge-num {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 38px;
    height: 38px;
    border-radius: 10px;
    background: linear-gradient(135deg, #00B98E 0%, #0E4B37 100%);
    color: #ffffff;
    font-weight: 700;
    font-size: 0.95rem;
    margin-right: 12px;
    box-shadow: 0 4px 10px rgba(0, 185, 142, 0.25);
    flex-shrink: 0;
}

.policy-heading {
    font-family: 'Cinzel', serif;
    font-size: 1.45rem;
    font-weight: 700;
    color: #0E2E50;
    margin-bottom: 0;
}

.policy-body-text {
    font-size: 0.98rem;
    line-height: 1.85;
    color: #334155;
}

.policy-callout-box {
    background: #F8FAFC;
    border-left: 4px solid #00B98E;
    border-radius: 12px;
    padding: 18px 22px;
    margin: 20px 0;
}

.policy-data-table {
    border-radius: 12px;
    overflow: hidden;
    border: 1px solid #E2E8F0;
}
.policy-data-table th {
    background: #0E2E50;
    color: #ffffff;
    font-size: 0.88rem;
    text-transform: uppercase;
    letter-spacing: 0.6px;
    padding: 12px 16px;
}
.policy-data-table td {
    padding: 12px 16px;
    font-size: 0.92rem;
    color: #334155;
    border-color: #E2E8F0;
}

.grievance-contact-card {
    background: linear-gradient(135deg, #0E2E50 0%, #0E4B37 100%);
    border-radius: 18px;
    color: #ffffff;
    padding: 32px 28px;
    box-shadow: 0 10px 30px rgba(14, 46, 80, 0.15);
}

@media (max-width: 991px) {
    .privacy-trust-item {
        border-right: none;
        border-bottom: 1px solid #E2E8F0;
    }
    .privacy-trust-item:last-child {
        border-bottom: none;
    }
    .policy-section-card {
        padding: 26px 20px;
    }
}
</style>

<!-- ==========================================================================
     Inner Page Hero Header Banner
     ========================================================================== -->
<div class="container-fluid bg-dark hero-header privacy-hero-banner position-relative py-5 mb-0">
    <div class="container py-4 text-center text-white">
        <span class="badge bg-white text-primary px-3 py-1.5 rounded-pill fw-bold mb-3 shadow-sm" style="color: #0E4B37 !important; font-size: 0.8rem; letter-spacing: 1px;">
            <i class="fa fa-shield-alt me-1 text-primary"></i> STATUTORY DATA PRIVACY &amp; PROTECTION
        </span>
        <h1 class="display-4 text-white fw-bold mb-2 hero-header-title" style="font-family: 'Cinzel', serif; letter-spacing: 1.6px;">PRIVACY POLICY</h1>
        <p class="text-warning fs-5 fw-bold mx-auto mb-3 hero-header-sub" style="font-family: 'Cinzel', serif; letter-spacing: 1px;">Transparency, Client Confidentiality &amp; Regulatory Compliance</p>
        <nav aria-label="breadcrumb" class="hero-header-nav">
            <ol class="breadcrumb justify-content-center text-uppercase mb-0 fw-bold" style="letter-spacing: 1px; font-size: 0.9rem;">
                <li class="breadcrumb-item"><a href="index.php" class="text-white-50 text-decoration-none">HOME</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page" style="color: #00B98E !important;">PRIVACY POLICY</li>
            </ol>
        </nav>
        <div class="mt-3 text-white-50 small">
            <span><i class="fa fa-calendar-check me-1 text-warning"></i> Effective Date: October 1, 2026</span>
            <span class="mx-2">•</span>
            <span><i class="fa fa-sync-alt me-1 text-warning"></i> Last Reviewed: October 2026</span>
        </div>
    </div>
</div>

<!-- ==========================================================================
     Trust & Statutory Highlights Strip
     ========================================================================== -->
<div class="container mb-5">
    <div class="privacy-trust-strip">
        <div class="row g-0 align-items-center">
            <div class="col-lg-3 col-sm-6 privacy-trust-item">
                <div class="d-flex align-items-center gap-3">
                    <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 44px; height: 44px; background: #EFFDF5; color: #00B98E;">
                        <i class="fa fa-certificate fs-5"></i>
                    </div>
                    <div>
                        <div class="fw-bold text-dark small">AP RERA &amp; DPIIT</div>
                        <div class="text-muted" style="font-size: 0.78rem;">Govt of India Recognized</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 privacy-trust-item">
                <div class="d-flex align-items-center gap-3">
                    <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 44px; height: 44px; background: #EFFDF5; color: #00B98E;">
                        <i class="fa fa-lock fs-5"></i>
                    </div>
                    <div>
                        <div class="fw-bold text-dark small">256-Bit SSL Security</div>
                        <div class="text-muted" style="font-size: 0.78rem;">Bank-grade data encryption</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 privacy-trust-item">
                <div class="d-flex align-items-center gap-3">
                    <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 44px; height: 44px; background: #EFFDF5; color: #00B98E;">
                        <i class="fa fa-file-contract fs-5"></i>
                    </div>
                    <div>
                        <div class="fw-bold text-dark small">DPDP Act, 2023</div>
                        <div class="text-muted" style="font-size: 0.78rem;">Strict legal adherence</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 privacy-trust-item">
                <div class="d-flex align-items-center gap-3">
                    <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 44px; height: 44px; background: #EFFDF5; color: #00B98E;">
                        <i class="fa fa-ban fs-5"></i>
                    </div>
                    <div>
                        <div class="fw-bold text-dark small">Zero Resale Policy</div>
                        <div class="text-muted" style="font-size: 0.78rem;">Never sold to marketers</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ==========================================================================
     Main Policy Content Area with Sticky Sidebar
     ========================================================================== -->
<div class="container-fluid py-2 px-lg-5 bg-white">
    <div class="container py-2">
        <div class="row g-5">
            <!-- Left Sticky Sidebar: Navigation & Quick Actions -->
            <div class="col-lg-4 d-none d-lg-block">
                <div class="privacy-toc-card p-4">
                    <h5 class="fw-bold text-dark mb-3 pb-2 border-bottom" style="font-family: 'Cinzel', serif;">
                        <i class="fa fa-list-ul me-2 text-primary"></i>Policy Index
                    </h5>
                    <nav class="d-flex flex-column gap-1">
                        <a href="#intro" class="privacy-toc-link active"><i class="fa fa-chevron-right"></i>1. Corporate Scope &amp; Overview</a>
                        <a href="#info-collected" class="privacy-toc-link"><i class="fa fa-chevron-right"></i>2. Information We Collect</a>
                        <a href="#purpose-processing" class="privacy-toc-link"><i class="fa fa-chevron-right"></i>3. Purpose of Processing</a>
                        <a href="#aadhar-safeguards" class="privacy-toc-link"><i class="fa fa-chevron-right"></i>4. Aadhar &amp; Document Security</a>
                        <a href="#data-sharing" class="privacy-toc-link"><i class="fa fa-chevron-right"></i>5. Third-Party Disclosures</a>
                        <a href="#cookies-analytics" class="privacy-toc-link"><i class="fa fa-chevron-right"></i>6. Cookies &amp; Tracking</a>
                        <a href="#retention-security" class="privacy-toc-link"><i class="fa fa-chevron-right"></i>7. Data Retention &amp; Storage</a>
                        <a href="#user-rights" class="privacy-toc-link"><i class="fa fa-chevron-right"></i>8. Your Statutory Rights (DPDP)</a>
                        <a href="#minors-privacy" class="privacy-toc-link"><i class="fa fa-chevron-right"></i>9. Minors' Data Protection</a>
                        <a href="#policy-updates" class="privacy-toc-link"><i class="fa fa-chevron-right"></i>10. Updates to This Policy</a>
                        <a href="#grievance-contact" class="privacy-toc-link"><i class="fa fa-chevron-right"></i>11. Grievance Officer &amp; Contact</a>
                    </nav>

                    <!-- Quick Print / Download Button -->
                    <div class="pt-4 mt-3 border-top text-center">
                        <button onclick="window.print()" class="btn btn-outline-secondary btn-sm w-100 rounded-pill py-2 fw-semibold">
                            <i class="fa fa-print me-1"></i> Print / Save Policy Copy
                        </button>
                    </div>

                    <!-- Verified Entity Callout Card -->
                    <div class="mt-4 p-3 rounded-3" style="background-color: #F8FAFC; border: 1px solid #E2E8F0;">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <i class="fa fa-shield-alt text-success"></i>
                            <span class="fw-bold text-dark small">Verified Identity Safeguard</span>
                        </div>
                        <p class="text-muted small mb-0" style="font-size: 0.8rem; line-height: 1.5;">
                            All candidate and client verification records are processed through secure firewalled infrastructure in Vijayawada &amp; Hyderabad.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Right Main Content: Structured Policy Details -->
            <div class="col-lg-8">

                <!-- Section 1: Introduction -->
                <div class="policy-section-card" id="intro">
                    <div class="d-flex align-items-center mb-3">
                        <span class="policy-badge-num">01</span>
                        <h3 class="policy-heading">Corporate Scope &amp; Overview</h3>
                    </div>
                    <div class="policy-body-text">
                        <p>
                            Welcome to <strong>Pudami Consultancy Services (India) Private Limited</strong> ("Pudami," "we," "our," or "us"). We are an AP RERA registered advisory and DPIIT recognized enterprise headquartered at Pudami Towers, Main Road, Vijayawada and Hyderabad, India.
                        </p>
                        <p>
                            We value the trust you place in us when sharing your personal details, financial parameters, property preferences, or candidate credentials. This Privacy Policy outlines our transparent data handling practices across our website (<a href="index.php" class="text-primary text-decoration-none fw-semibold">https://pudamiconsultancyservices.co.in</a>), our investor portals, mobile touchpoints, and branch consultations.
                        </p>
                        <div class="policy-callout-box">
                            <strong class="text-dark"><i class="fa fa-check-circle text-primary me-2"></i>Our Commitment:</strong>
                            <p class="mb-0 small text-muted mt-1">
                                We operate in strict compliance with the <strong>Digital Personal Data Protection Act, 2023 (DPDP Act)</strong>, the <strong>Information Technology Act, 2000</strong>, and regulatory guidelines issued by the <strong>Real Estate Regulatory Authority (RERA)</strong>.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Section 2: Information We Collect -->
                <div class="policy-section-card" id="info-collected">
                    <div class="d-flex align-items-center mb-3">
                        <span class="policy-badge-num">02</span>
                        <h3 class="policy-heading">Information We Collect</h3>
                    </div>
                    <div class="policy-body-text">
                        <p>
                            To deliver verified real estate consultancy, schedule personalized project walkthroughs, expedite home loan sanction files, and review job applications, we collect specific categories of data:
                        </p>

                        <div class="table-responsive policy-data-table mb-4">
                            <table class="table table-bordered mb-0">
                                <thead>
                                    <tr>
                                        <th style="width: 32%;">Category</th>
                                        <th>Data Elements Collected</th>
                                        <th>Source / Channel</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="fw-bold text-dark">Personal Contact Details</td>
                                        <td>Full Name, Personal Email Address, 10-Digit Mobile / WhatsApp Number, City of Residence.</td>
                                        <td>Contact Forms, Inquiries, User Registration, WhatsApp Connect.</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold text-dark">Property Advisory Data</td>
                                        <td>Budget range, property type (open plots, luxury villas, commercial), preferred micro-markets, investment timeframe.</td>
                                        <td>Property Filter Consultations, In-Person Site Visit Bookings.</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold text-dark">Candidate Documents</td>
                                        <td>Curriculum Vitae (PDF/Word), Aadhar Card proof, educational qualification, career history.</td>
                                        <td>Candidate Application Portal (<a href="career-apply.php" class="text-primary text-decoration-none">career-apply.php</a>).</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold text-dark">Financial &amp; Title Verification</td>
                                        <td>Income profile (for home loan eligibility), 30-year link property deeds, Encumbrance Certificate (EC) requests.</td>
                                        <td>Provided voluntarily by clients seeking bank loan facilitation.</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold text-dark">Technical &amp; Analytics Data</td>
                                        <td>IP Address, browser type, operating system, pages visited, session duration, referral URL.</td>
                                        <td>Automated server logs &amp; security cookies.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Section 3: Purpose of Processing -->
                <div class="policy-section-card" id="purpose-processing">
                    <div class="d-flex align-items-center mb-3">
                        <span class="policy-badge-num">03</span>
                        <h3 class="policy-heading">Purpose &amp; Legal Basis of Processing</h3>
                    </div>
                    <div class="policy-body-text">
                        <p>We process your data only for legitimate, lawful, and specific business purposes:</p>
                        <ul class="about-feature-list mb-3">
                            <li>
                                <i class="fa fa-check-circle"></i>
                                <span><strong>Advisory &amp; Site Tour Facilitation:</strong> Coordinating escorted customer visits to RERA-approved layouts, duplex villas, and investment lands.</span>
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                <span><strong>30-Year Link Legal Scrutiny:</strong> Verifying clear titles, master plan compliance, and non-encumbrance status for real estate purchases.</span>
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                <span><strong>Home Loan Liaisoning:</strong> Transmitting eligible home loan dossiers to nationalized banking partners (SBI, HDFC, ICICI, LIC Housing) with explicit client consent.</span>
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                <span><strong>Recruitment &amp; HR Onboarding:</strong> Reviewing professional candidate credentials, conducting interviews, and verifying identity records.</span>
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                <span><strong>Statutory Record Maintenance:</strong> Satisfying audits and compliance mandated by AP RERA, Registrar of Companies (ROC), and tax authorities.</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Section 4: Aadhar & Document Security -->
                <div class="policy-section-card" id="aadhar-safeguards">
                    <div class="d-flex align-items-center mb-3">
                        <span class="policy-badge-num">04</span>
                        <h3 class="policy-heading">Aadhar Card &amp; Sensitive Document Safeguards</h3>
                    </div>
                    <div class="policy-body-text">
                        <p>
                            As an AP RERA registered advisory handling high-value property deeds and direct employee onboarding, Pudami enforces strict safeguards regarding sensitive identity documents:
                        </p>

                        <div class="policy-callout-box" style="border-left-color: #0E2E50; background-color: #F1F5F9;">
                            <h6 class="fw-bold text-dark mb-2"><i class="fa fa-id-card text-primary me-2"></i>Aadhar Handling Standards:</h6>
                            <ul class="mb-0 ps-3 small text-muted" style="line-height: 1.7;">
                                <li>Aadhar documents uploaded through our Candidate Portal are utilized <strong>strictly for identity verification</strong> during HR screening.</li>
                                <li>Uploaded files are renamed with cryptographic hashes, stored in private access-controlled directories, and isolated from public web directories.</li>
                                <li>We encourage candidates and clients to submit <strong>Masked Aadhar</strong> (where the first 8 digits are obscured) as permitted by UIDAI guidelines.</li>
                                <li>Aadhar files are never commercialized, indexed on search engines, or transferred outside India.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Section 5: Third-Party Disclosures -->
                <div class="policy-section-card" id="data-sharing">
                    <div class="d-flex align-items-center mb-3">
                        <span class="policy-badge-num">05</span>
                        <h3 class="policy-heading">Information Sharing &amp; Third-Party Disclosures</h3>
                    </div>
                    <div class="policy-body-text">
                        <div class="p-3 mb-3 rounded-3" style="background: #EFFDF5; border: 1px solid rgba(0, 185, 142, 0.3);">
                            <span class="fw-bold text-success"><i class="fa fa-shield-alt me-2"></i>STRICT NO-DATA-RESALE GUARANTEE:</span>
                            <div class="small text-dark mt-1">
                                Pudami Consultancy Services does <strong>NOT</strong> sell, rent, monetize, or trade your personal information, phone numbers, or email addresses with external marketing agencies or third-party telecallers.
                            </div>
                        </div>

                        <p>We share information only under the following controlled conditions:</p>
                        <ol class="ps-3" style="line-height: 1.8;">
                            <li><strong>Authorized Banking Partners:</strong> When a home buyer explicitly requests home loan pre-approval, required income documents are submitted to trusted partner banks (e.g., State Bank of India, HDFC Bank, ICICI Bank, LIC Housing Finance).</li>
                            <li><strong>Legal &amp; Registration Conveyancers:</strong> For buyers finalizing land or villa acquisitions, title copies are shared with empanelled legal counsel for drafting deeds.</li>
                            <li><strong>Legal &amp; Statutory Requirements:</strong> If compelled by an official order from a court of competent jurisdiction, RERA tribunal, law enforcement agency, or statutory body.</li>
                        </ol>
                    </div>
                </div>

                <!-- Section 6: Cookies & Tracking -->
                <div class="policy-section-card" id="cookies-analytics">
                    <div class="d-flex align-items-center mb-3">
                        <span class="policy-badge-num">06</span>
                        <h3 class="policy-heading">Cookies &amp; Tracking Technologies</h3>
                    </div>
                    <div class="policy-body-text">
                        <p>
                            Our website utilizes cookies and similar web technologies to enhance your browsing experience, remember session preferences (such as language or login state), and compile aggregated analytics.
                        </p>
                        <div class="row g-3 my-2">
                            <div class="col-md-6">
                                <div class="p-3 rounded-3 border bg-light h-100">
                                    <h6 class="fw-bold text-dark mb-1"><i class="fa fa-cog text-primary me-2"></i>Essential Cookies</h6>
                                    <small class="text-muted">Required for secure user authentication, form session submission, and CSRF protection.</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-3 rounded-3 border bg-light h-100">
                                    <h6 class="fw-bold text-dark mb-1"><i class="fa fa-chart-line text-primary me-2"></i>Performance Cookies</h6>
                                    <small class="text-muted">Anonymized analytics to evaluate page load speed, popular property listings, and user journeys.</small>
                                </div>
                            </div>
                        </div>
                        <p class="small text-muted mb-0">
                            You may configure your internet browser settings to refuse or delete cookies. However, disabling essential cookies may impact certain interactive features such as user dashboards.
                        </p>
                    </div>
                </div>

                <!-- Section 7: Data Retention & Storage -->
                <div class="policy-section-card" id="retention-security">
                    <div class="d-flex align-items-center mb-3">
                        <span class="policy-badge-num">07</span>
                        <h3 class="policy-heading">Data Retention &amp; Security Architecture</h3>
                    </div>
                    <div class="policy-body-text">
                        <p>
                            We employ modern technical, organizational, and physical safeguards to prevent unauthorized access, loss, or alteration of your records:
                        </p>
                        <ul class="about-feature-list mb-3">
                            <li><i class="fa fa-check-circle"></i><span><strong>SSL / TLS Encryption:</strong> All data transmitted between your browser and our servers is secured via 256-bit TLS encryption.</span></li>
                            <li><i class="fa fa-check-circle"></i><span><strong>Access Controls:</strong> Client records and candidate applications are accessible strictly to authorized HR and advisory personnel with role-based credentials.</span></li>
                            <li><i class="fa fa-check-circle"></i><span><strong>Retention Duration:</strong> Property consultation records are retained for the duration of the advisory relationship and in accordance with RERA statutory limitation periods (typically 7 years). Candidate resumes are retained for up to 12 months for active talent consideration.</span></li>
                        </ul>
                    </div>
                </div>

                <!-- Section 8: Your Statutory Rights -->
                <div class="policy-section-card" id="user-rights">
                    <div class="d-flex align-items-center mb-3">
                        <span class="policy-badge-num">08</span>
                        <h3 class="policy-heading">Your Statutory Rights (DPDP Act, 2023)</h3>
                    </div>
                    <div class="policy-body-text">
                        <p>Under the Digital Personal Data Protection Act, 2023, you hold comprehensive rights regarding your personal information:</p>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-start gap-2 p-2">
                                    <i class="fa fa-eye text-primary mt-1"></i>
                                    <div>
                                        <strong class="text-dark small">Right to Access</strong>
                                        <p class="small text-muted mb-0">Request a summary of your personal data processed by Pudami.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-start gap-2 p-2">
                                    <i class="fa fa-edit text-primary mt-1"></i>
                                    <div>
                                        <strong class="text-dark small">Right to Correction</strong>
                                        <p class="small text-muted mb-0">Update inaccurate, incomplete, or outdated personal information.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-start gap-2 p-2">
                                    <i class="fa fa-trash-alt text-primary mt-1"></i>
                                    <div>
                                        <strong class="text-dark small">Right to Erasure</strong>
                                        <p class="small text-muted mb-0">Request deletion of your data, subject to RERA statutory legal obligations.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-start gap-2 p-2">
                                    <i class="fa fa-undo text-primary mt-1"></i>
                                    <div>
                                        <strong class="text-dark small">Withdrawal of Consent</strong>
                                        <p class="small text-muted mb-0">Revoke consent for non-essential communications or newsletters at any time.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 9: Minors' Data Protection -->
                <div class="policy-section-card" id="minors-privacy">
                    <div class="d-flex align-items-center mb-3">
                        <span class="policy-badge-num">09</span>
                        <h3 class="policy-heading">Minors' Data Protection</h3>
                    </div>
                    <div class="policy-body-text">
                        <p class="mb-0">
                            Our real estate consultancy, plot sales, and employment portals are strictly directed toward individuals aged 18 years or older who hold legal capacity to enter binding contracts under the Indian Contract Act, 1872. We do not knowingly solicit, collect, or process information from minors. If you believe a minor has submitted information to us, please notify our Grievance Officer for prompt deletion.
                        </p>
                    </div>
                </div>

                <!-- Section 10: Updates to Policy -->
                <div class="policy-section-card" id="policy-updates">
                    <div class="d-flex align-items-center mb-3">
                        <span class="policy-badge-num">10</span>
                        <h3 class="policy-heading">Updates to This Policy</h3>
                    </div>
                    <div class="policy-body-text">
                        <p class="mb-0">
                            We review and update this Privacy Policy periodically to reflect evolving legal standards under RERA, amendments to Indian data protection laws, or enhancements to our digital services. When changes occur, the updated revision will be posted on this page with an updated "Effective Date." We encourage clients and applicants to review this page periodically.
                        </p>
                    </div>
                </div>

                <!-- Section 11: Grievance Officer & Contact -->
                <div class="policy-section-card" id="grievance-contact">
                    <div class="d-flex align-items-center mb-3">
                        <span class="policy-badge-num">11</span>
                        <h3 class="policy-heading">Grievance Redressal Officer &amp; Official Contact</h3>
                    </div>
                    <div class="policy-body-text">
                        <p>
                            In accordance with the Information Technology Act, 2000, and the DPDP Act, 2023, the details of our designated Data Protection and Grievance Officer are provided below:
                        </p>

                        <div class="grievance-contact-card mt-3">
                            <div class="row g-4 align-items-center">
                                <div class="col-md-7">
                                    <span class="badge bg-warning text-dark px-3 py-1 rounded-pill fw-bold mb-2" style="font-size: 0.78rem;">DESIGNATED OFFICER</span>
                                    <h4 class="text-white fw-bold mb-1" style="font-family: 'Cinzel', serif;">Grievance &amp; Compliance Officer</h4>
                                    <p class="text-white-50 small mb-3">Pudami Consultancy Services (India) Private Limited</p>
                                    
                                    <div class="d-flex flex-column gap-2 small text-white">
                                        <div class="d-flex align-items-start">
                                            <i class="fa fa-building text-warning me-2 mt-1"></i>
                                            <span>Corporate Office: Pudami Towers, Main Road, Vijayawada &amp; Hyderabad, South India</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <i class="fa fa-envelope text-warning me-2"></i>
                                            <span>Email: <a href="mailto:pudamiconsultancyservices@gmail.com" class="text-white fw-semibold text-decoration-underline">pudamiconsultancyservices@gmail.com</a></span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <i class="fa fa-phone-alt text-warning me-2"></i>
                                            <span>Helpline: +91 9182613797 / +91 9490070313</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <i class="fa fa-clock text-warning me-2"></i>
                                            <span>Response Window: Within 48 business hours</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 text-md-end text-center">
                                    <a href="contact.php" class="btn btn-light px-4 py-3 rounded-pill fw-bold text-dark shadow">
                                        <i class="fa fa-paper-plane me-2 text-primary"></i> Contact Helpdesk
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="my-5"></div>

<!-- Smooth Scroll Script for Table of Contents -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const links = document.querySelectorAll('.privacy-toc-link');
    const sections = document.querySelectorAll('.policy-section-card');

    window.addEventListener('scroll', function() {
        let current = '';
        sections.forEach(section => {
            const sectionTop = section.offsetTop - 120;
            if (window.pageYOffset >= sectionTop) {
                current = section.getAttribute('id');
            }
        });

        links.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === '#' + current) {
                link.classList.add('active');
            }
        });
    });
});
</script>

<?php include __DIR__ . '/footer.php'; ?>

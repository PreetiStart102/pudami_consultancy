<?php
$activePage = 'careers';
include __DIR__ . '/header.php';

// Job roles definition (NO YEARS OF EXPERIENCE MENTIONED - as requested)
$jobOpenings = [
    [
        'title'        => 'Senior Real Estate Sales Manager',
        'category'     => 'Sales & Leadership',
        'type'         => 'Full Time',
        'description'  => 'Lead premier residential and commercial sales campaigns, mentor field sales teams, develop institutional investor relationships, and coordinate high-conversion customer site visits for RERA-approved gated layouts.'
    ],
    [
        'title'        => 'Area Sales Manager',
        'category'     => 'Regional Sales',
        'type'         => 'Full Time',
        'description'  => 'Expand Pudami’s market footprint across premium open plot developments and luxury duplex projects, build high-performing distributor networks, and negotiate bulk corporate bookings.'
    ],
    [
        'title'        => 'Senior Property Advisory Consultant',
        'category'     => 'Client Advisory',
        'type'         => 'Full Time',
        'description'  => 'Advise high-net-worth clients and prospective home buyers on strategic property investments, conduct on-site project walkthroughs, and assist buyers through clear title documentation.'
    ],
    [
        'title'        => 'Home Loan & Documentation Specialist',
        'category'     => 'Banking & Legal',
        'type'         => 'Full Time',
        'description'  => 'Interface with premier banking partners (SBI, HDFC, ICICI, LIC Housing) to expedite customer home loan files, verify 30-year link documents, and coordinate Encumbrance Certificates (EC).'
    ],
    [
        'title'        => 'Digital Growth & Lead Acquisition Specialist',
        'category'     => 'Marketing & Technology',
        'type'         => 'Full Time',
        'description'  => 'Execute multi-channel digital acquisition campaigns across Google, Meta, and real estate portals to generate high-intent buyer inquiries for upcoming residential and commercial ventures.'
    ],
    [
        'title'        => 'Customer Relationship & Operations Executive',
        'category'     => 'Operations & Support',
        'type'         => 'Full Time',
        'description'  => 'Deliver exceptional post-booking support, coordinate customer registration schedules, manage CRM records, and ensure smooth customer communication from initial booking to final deed handover.'
    ]
];
?>

<!-- Custom Styles for Careers Page & Job Cards -->
<style>
.career-hero-banner {
    background: linear-gradient(rgba(14, 46, 80, 0.78), rgba(7, 56, 40, 0.85)), url('img/career_hero.jpg') center 30% no-repeat;
    background-size: cover !important;
}
.job-card {
    background: #ffffff;
    border: 1px solid #E2E8F0;
    border-radius: 18px;
    padding: 28px 24px;
    transition: all 0.35s cubic-bezier(0.165, 0.84, 0.44, 1);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 100%;
    position: relative;
    overflow: hidden;
}
.job-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 4px;
    height: 0;
    background: linear-gradient(180deg, #00B98E 0%, #0E4B37 100%);
    transition: height 0.35s ease;
}
.job-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 16px 35px rgba(14, 46, 80, 0.12) !important;
    border-color: #00B98E !important;
}
.job-card:hover::before {
    height: 100%;
}
.job-pill {
    font-size: 0.76rem;
    font-weight: 700;
    padding: 4px 12px;
    border-radius: 20px;
    letter-spacing: 0.5px;
    text-transform: uppercase;
}
.job-pill-dept {
    background-color: #EFFDF5;
    color: #00B98E;
    border: 1px solid rgba(0, 185, 142, 0.25);
}
.job-pill-type {
    background-color: #F1F5F9;
    color: #475569;
}
.hiring-step-card {
    background: #ffffff;
    border: 1px solid #E2E8F0;
    transition: all 0.35s cubic-bezier(0.165, 0.84, 0.44, 1);
    cursor: pointer;
}
.hiring-step-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 16px 35px rgba(14, 46, 80, 0.12) !important;
    border-color: #00B98E !important;
}
.step-number-badge {
    display: inline-block;
    padding: 4px 14px;
    font-size: 0.82rem;
    font-weight: 800;
    color: #00B98E;
    background: #EFFDF5;
    border-radius: 20px;
    letter-spacing: 1px;
}
.step-icon-circle {
    width: 62px;
    height: 62px;
    border-radius: 50%;
    background: linear-gradient(135deg, rgba(0, 185, 142, 0.12) 0%, rgba(14, 75, 55, 0.15) 100%);
    color: #00B98E;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.4rem;
    margin: 0 auto;
    transition: all 0.3s ease;
}
.hiring-step-card:hover .step-icon-circle {
    background: linear-gradient(135deg, #00B98E 0%, #0E4B37 100%);
    color: #ffffff;
    transform: scale(1.1);
    box-shadow: 0 8px 20px rgba(0, 185, 142, 0.35);
}
.perk-interactive-pill {
    transition: all 0.25s ease;
    border-left: 3px solid transparent;
}
.perk-interactive-pill:hover {
    transform: translateX(6px);
    border-left-color: #00B98E !important;
    background: #ffffff !important;
    box-shadow: 0 4px 15px rgba(0,0,0,0.06);
}
</style>

<!-- ==========================================================================
     Hero Header Banner
     ========================================================================== -->
<div class="container-fluid hero-header career-hero-banner position-relative py-4 mb-4">
    <div class="container py-3 text-center text-white">
        <h1 class="display-4 fw-bold text-white mb-2 hero-header-title" style="font-family: 'Cinzel', serif; letter-spacing: 1.8px;">JOIN OUR TEAM</h1>
        <p class="fs-5 fw-semibold text-warning mb-2 hero-header-sub" style="font-family: 'Cinzel', serif; letter-spacing: 0.8px;">Build A High-Growth Career in Real Estate Advisory</p>
        <nav aria-label="breadcrumb" class="hero-header-nav">
            <ol class="breadcrumb justify-content-center text-uppercase mb-0 fw-bold" style="letter-spacing: 1.2px; font-size: 0.88rem;">
                <li class="breadcrumb-item"><a href="index.php" class="text-white-50 text-decoration-none">HOME</a></li>
                <li class="breadcrumb-item text-primary fw-bold active" aria-current="page" style="color: #00B98E !important;">CAREERS</li>
            </ol>
        </nav>
    </div>
</div>

<!-- ==========================================================================
     SECTION 1: CURRENT OPEN POSITIONS & JOB ROLES (DISPLAYED FIRST AS REQUESTED)
     ========================================================================== -->
<div class="container-fluid py-5 px-lg-5 bg-white" id="open-roles">
    <div class="container py-2">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 840px;">
            <span class="badge bg-light text-primary px-3 py-2 rounded-pill fw-semibold mb-2" style="letter-spacing: 1.2px; font-size: 0.82rem;">CAREER OPPORTUNITIES</span>
            <h2 class="mb-3 text-dark fw-bold" style="font-family: 'Cinzel', serif; font-size: 2.3rem; letter-spacing: 0.8px;">CURRENT OPEN POSITIONS</h2>
            <p class="text-muted fs-6">Explore our active openings across consulting, sales, banking documentation, and digital operations. Click <strong>Apply Now</strong> on any role to proceed directly to our candidate application form.</p>
        </div>

        <!-- Job Cards Grid -->
        <div class="row g-4 mb-5">
            <?php foreach ($jobOpenings as $index => $job): ?>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="<?php echo (0.1 + ($index * 0.08)); ?>s">
                    <div class="job-card shadow-sm">
                        <!-- Top Metadata -->
                        <div>
                            <div class="d-flex align-items-center gap-2 mb-3">
                                <span class="job-pill job-pill-dept"><?php echo htmlspecialchars($job['category']); ?></span>
                                <span class="job-pill job-pill-type"><?php echo htmlspecialchars($job['type']); ?></span>
                            </div>

                            <!-- Position Title -->
                            <h4 class="fw-bold text-dark mb-3" style="font-family: 'Cinzel', serif; font-size: 1.25rem; line-height: 1.4;">
                                <?php echo htmlspecialchars($job['title']); ?>
                            </h4>

                            <!-- Brief Description -->
                            <p class="text-muted mb-4" style="font-size: 0.95rem; line-height: 1.7; color: #475569;">
                                <?php echo htmlspecialchars($job['description']); ?>
                            </p>
                        </div>

                        <!-- Apply Button Linking to Dedicated Form Page -->
                        <div class="pt-3 border-top mt-auto">
                            <a href="career-apply.php?role=<?php echo urlencode($job['title']); ?>" class="btn btn-primary w-100 py-2.5 rounded-pill fw-bold text-white shadow-sm d-flex align-items-center justify-content-center gap-2" style="background: linear-gradient(135deg, #00B98E 0%, #0E4B37 100%); border: none; font-size: 0.92rem;">
                                <span>Apply Now</span>
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- General Application Banner -->
        <div class="p-4 p-md-5 rounded-4 text-center text-white wow fadeInUp" data-wow-delay="0.2s" style="background: linear-gradient(135deg, #0E2E50 0%, #0E4B37 100%); box-shadow: 0 10px 30px rgba(14, 46, 80, 0.15);">
            <div class="row align-items-center g-3">
                <div class="col-lg-8 text-lg-start">
                    <span class="badge bg-warning text-dark px-3 py-1.5 rounded-pill fw-bold mb-2" style="font-size: 0.78rem;">SPONTANEOUS APPLICATION</span>
                    <h3 class="fw-bold text-white mb-2" style="font-family: 'Cinzel', serif;">Don't See Your Exact Role?</h3>
                    <p class="text-white-50 mb-0" style="font-size: 0.96rem;">We are constantly expanding our advisory network across South India. Submit your resume and Aadhar card verification document to our talent pool.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="career-apply.php?role=Other+%2F+General+Application" class="btn btn-light px-4 py-3 rounded-pill fw-bold text-dark shadow">
                        <i class="fa fa-file-alt me-2 text-primary"></i> Submit General Application
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="my-4"></div>

<!-- ==========================================================================
     SECTION 2: ABOUT WORKING AT PUDAMI
     ========================================================================== -->
<div class="container-fluid py-5 px-lg-5" style="background-color: #F8FAFC;">
    <div class="container py-2">
        <h2 class="text-center fw-bold mb-5" style="font-family: 'Cinzel', serif; color: #0E2E50; font-size: 2.3rem; letter-spacing: 0.8px;">ABOUT WORKING AT PUDAMI</h2>
        <div class="row g-5 align-items-center">
            <!-- Left Text Content -->
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                <p class="mb-4 text-dark" style="font-size: 1.05rem; line-height: 1.85; color: #334155;">
                    Working at <strong>Pudami Consultancy Services (India) Pvt. Ltd.</strong> means becoming part of a dynamic, fast-growing organization built on trust, innovation, and service excellence. We believe that great companies are shaped by great people, and we are committed to creating an environment where every team member has the opportunity to grow, contribute, and succeed.
                </p>
                <p class="mb-4 text-dark" style="font-size: 1.05rem; line-height: 1.85; color: #334155;">
                    At Pudami, you are not just doing a job—you are building a meaningful career. Our services span real estate consulting, financial solutions, loan assistance, insurance support, documentation services, and end-to-end customer guidance across India. This gives our team a chance to work across diverse domains, interact with various clients, and develop strong professional skills.
                </p>
                <div class="pt-2">
                    <a href="career-apply.php" class="btn btn-primary px-4 py-3 rounded-pill text-white fw-bold shadow-sm" style="background: linear-gradient(135deg, #00B98E 0%, #0E4B37 100%); border: none; font-size: 0.95rem;">
                        <i class="fa fa-paper-plane me-2"></i>Apply For A Role
                    </a>
                </div>
            </div>

            <!-- Right Image Block -->
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                <div class="position-relative overflow-hidden rounded-4 shadow-lg border border-1 border-light">
                    <img class="img-fluid w-100" src="img/career_team_growth.jpg" alt="About Working At Pudami Team" style="min-height: 380px; max-height: 440px; object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="my-4"></div>

<!-- ==========================================================================
     SECTION 3: WHY JOIN PUDAMI?
     ========================================================================== -->
<div class="container-fluid py-5 px-lg-5 bg-white">
    <div class="container py-2">
        <h2 class="text-center fw-bold mb-5" style="font-family: 'Cinzel', serif; color: #0E2E50; font-size: 2.3rem; letter-spacing: 0.8px;">WHY JOIN PUDAMI?</h2>
        <div class="row g-5 align-items-center">
            <!-- Left Image Block -->
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="position-relative overflow-hidden rounded-4 shadow-lg border border-1 border-light">
                    <img class="img-fluid w-100" src="img/career_collaboration.jpg" alt="Why Join Pudami Collaboration" style="min-height: 380px; max-height: 440px; object-fit: cover;">
                </div>
            </div>

            <!-- Right Feature Points -->
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                <div class="d-flex flex-column gap-3">
                    <div class="d-flex align-items-center p-3 bg-white rounded-3 shadow-sm border border-1 border-light perk-interactive-pill">
                        <span class="fs-4 me-3">🌟</span>
                        <span class="fs-6 fw-semibold text-dark">Opportunity to work with a rapidly growing consultancy firm</span>
                    </div>

                    <div class="d-flex align-items-center p-3 bg-white rounded-3 shadow-sm border border-1 border-light perk-interactive-pill">
                        <span class="fs-4 me-3">🚀</span>
                        <span class="fs-6 fw-semibold text-dark">Pan-India sales and operations exposure</span>
                    </div>

                    <div class="d-flex align-items-center p-3 bg-white rounded-3 shadow-sm border border-1 border-light perk-interactive-pill">
                        <span class="fs-4 me-3">💼</span>
                        <span class="fs-6 fw-semibold text-dark">Professional development and training support</span>
                    </div>

                    <div class="d-flex align-items-center p-3 bg-white rounded-3 shadow-sm border border-1 border-light perk-interactive-pill">
                        <span class="fs-4 me-3">🤝</span>
                        <span class="fs-6 fw-semibold text-dark">Supportive and collaborative team culture</span>
                    </div>

                    <div class="d-flex align-items-center p-3 bg-white rounded-3 shadow-sm border border-1 border-light perk-interactive-pill">
                        <span class="fs-4 me-3">📈</span>
                        <span class="fs-6 fw-semibold text-dark">Clear growth and performance-based rewards</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="my-4"></div>

<!-- ==========================================================================
     SECTION 4: OUR 4-STEP HIRING PROCESS
     ========================================================================== -->
<div class="container-fluid py-5 px-lg-5" style="background-color: #F8FAFC;" id="hiring-process">
    <div class="container py-2">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 820px;">
            <span class="badge bg-light text-primary px-3 py-2 rounded-pill fw-semibold mb-2" style="letter-spacing: 1.2px; font-size: 0.82rem;">YOUR CAREER ROADMAP</span>
            <h2 class="mb-3 text-dark fw-bold" style="font-family: 'Cinzel', serif; font-size: 2.3rem; letter-spacing: 0.8px;">OUR 4-STEP HIRING PROCESS</h2>
            <p class="text-muted fs-6">A transparent, merit-driven recruitment journey designed to help you discover where you belong at Pudami.</p>
        </div>

        <!-- 4 Step Interactive Timeline Cards -->
        <div class="row g-4 mb-5">
            <!-- Step 1 -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="hiring-step-card p-4 rounded-4 h-100 text-center position-relative shadow-sm">
                    <div class="step-number-badge mb-3">STEP 01</div>
                    <div class="step-icon-circle mb-3"><i class="fa fa-file-alt"></i></div>
                    <h5 class="fw-bold text-dark mb-2" style="font-family: 'Cinzel', serif; font-size: 1.15rem;">Apply Online</h5>
                    <p class="text-muted small mb-0" style="line-height: 1.6;">Browse our open positions, click Apply Now, and submit your resume and Aadhar card.</p>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="hiring-step-card p-4 rounded-4 h-100 text-center position-relative shadow-sm">
                    <div class="step-number-badge mb-3">STEP 02</div>
                    <div class="step-icon-circle mb-3"><i class="fa fa-phone-alt"></i></div>
                    <h5 class="fw-bold text-dark mb-2" style="font-family: 'Cinzel', serif; font-size: 1.15rem;">HR Screening</h5>
                    <p class="text-muted small mb-0" style="line-height: 1.6;">An introductory discussion with our recruitment specialists to evaluate mutual goals and career fit.</p>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="hiring-step-card p-4 rounded-4 h-100 text-center position-relative shadow-sm">
                    <div class="step-number-badge mb-3">STEP 03</div>
                    <div class="step-icon-circle mb-3"><i class="fa fa-user-tie"></i></div>
                    <h5 class="fw-bold text-dark mb-2" style="font-family: 'Cinzel', serif; font-size: 1.15rem;">Leadership Round</h5>
                    <p class="text-muted small mb-0" style="line-height: 1.6;">Interact directly with our Regional and Branch heads to align on strategy, targets, and leadership vision.</p>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="hiring-step-card p-4 rounded-4 h-100 text-center position-relative shadow-sm">
                    <div class="step-number-badge mb-3">STEP 04</div>
                    <div class="step-icon-circle mb-3"><i class="fa fa-handshake"></i></div>
                    <h5 class="fw-bold text-dark mb-2" style="font-family: 'Cinzel', serif; font-size: 1.15rem;">Offer &amp; Welcome</h5>
                    <p class="text-muted small mb-0" style="line-height: 1.6;">Formal appointment letter, customized welcome kit, and immediate onboarding with dedicated team mentorship.</p>
                </div>
            </div>
        </div>

        <!-- Key Metrics Banner -->
        <div class="row g-3 py-4 px-3 rounded-4 shadow-sm" style="background: linear-gradient(135deg, #0E2E50 0%, #0E4B37 100%);">
            <div class="col-6 col-md-3 text-center border-end border-secondary border-opacity-25">
                <h3 class="display-6 fw-bold text-white mb-0" style="font-family: 'Cinzel', serif;">500+</h3>
                <small class="text-white-50 fw-semibold text-uppercase" style="letter-spacing: 0.8px;">Advisory Professionals</small>
            </div>
            <div class="col-6 col-md-3 text-center border-end border-secondary border-opacity-25">
                <h3 class="display-6 fw-bold text-warning mb-0" style="font-family: 'Cinzel', serif;">15+</h3>
                <small class="text-white-50 fw-semibold text-uppercase" style="letter-spacing: 0.8px;">Regional Branches</small>
            </div>
            <div class="col-6 col-md-3 text-center border-end border-secondary border-opacity-25">
                <h3 class="display-6 fw-bold text-white mb-0" style="font-family: 'Cinzel', serif;">100%</h3>
                <small class="text-white-50 fw-semibold text-uppercase" style="letter-spacing: 0.8px;">Merit Appraisals</small>
            </div>
            <div class="col-6 col-md-3 text-center">
                <h3 class="display-6 fw-bold text-warning mb-0" style="font-family: 'Cinzel', serif;">Fast-Track</h3>
                <small class="text-white-50 fw-semibold text-uppercase" style="letter-spacing: 0.8px;">Promotion Timeline</small>
            </div>
        </div>
    </div>
</div>

<div class="my-4"></div>

<!-- ==========================================================================
     SECTION 5: EMPLOYEE VALUES & CULTURE
     ========================================================================== -->
<div class="container-fluid py-5 px-lg-5 bg-white">
    <div class="container py-2">
        <h2 class="text-center fw-bold mb-5" style="font-family: 'Cinzel', serif; color: #0E2E50; font-size: 2.3rem; letter-spacing: 0.8px;">EMPLOYEE VALUES &amp; CULTURE</h2>
        <div class="row g-5 align-items-center">
            <!-- Left Image Block -->
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="position-relative overflow-hidden rounded-4 shadow-lg border border-1 border-light">
                    <img class="img-fluid w-100" src="img/career_culture_review.jpg" alt="Employee Values and Culture" style="min-height: 380px; max-height: 440px; object-fit: cover;">
                </div>
            </div>

            <!-- Right Content Block -->
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                <h5 class="text-dark fw-bold mb-3 fs-5">At Pudami, we focus on:</h5>
                <ul class="list-unstyled mb-4 d-flex flex-column gap-2.5 ps-1" style="font-size: 1.05rem; color: #334155;">
                    <li class="d-flex align-items-center mb-2">
                        <i class="fa fa-check-circle text-primary me-3 fs-5"></i>
                        <strong>Integrity</strong>
                    </li>
                    <li class="d-flex align-items-center mb-2">
                        <i class="fa fa-check-circle text-primary me-3 fs-5"></i>
                        <strong>Service Excellence</strong>
                    </li>
                    <li class="d-flex align-items-center mb-2">
                        <i class="fa fa-check-circle text-primary me-3 fs-5"></i>
                        <strong>Innovation</strong>
                    </li>
                    <li class="d-flex align-items-center mb-2">
                        <i class="fa fa-check-circle text-primary me-3 fs-5"></i>
                        <strong>Responsibility</strong>
                    </li>
                    <li class="d-flex align-items-center mb-2">
                        <i class="fa fa-check-circle text-primary me-3 fs-5"></i>
                        <strong>Customer First Thinking</strong>
                    </li>
                </ul>
                <p class="text-muted" style="font-size: 1.05rem; line-height: 1.8;">
                    We encourage individuals who are passionate, self-driven, and eager to build a career in consultancy and service industries.
                </p>
                <div class="pt-2">
                    <a href="career-apply.php" class="btn btn-primary px-4 py-3 rounded-pill text-white fw-bold shadow-sm" style="background: linear-gradient(135deg, #00B98E 0%, #0E4B37 100%); border: none; font-size: 0.95rem;">
                        <i class="fa fa-paper-plane me-2"></i> Join Our Organization
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="my-5"></div>

<?php include __DIR__ . '/footer.php'; ?>

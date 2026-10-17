<?php
include __DIR__ . '/header.php';
?>

<!-- ==========================================================================
     Inner Page Hero Header Banner
     ========================================================================== -->
<div class="container-fluid bg-dark hero-header mb-0" style="background: linear-gradient(rgba(14, 46, 80, 0.85), rgba(7, 56, 40, 0.85)), url('img/about_usbreadcrumb.jpg') center center no-repeat; background-size: cover !important;">
    <div class="container py-3 text-center">
        <h1 class="display-4 text-white fw-bold mb-2 hero-header-title" style="font-family: 'Cinzel', serif; letter-spacing: 1.5px;">About Us</h1>
        <p class="text-warning fs-5 fw-bold mx-auto mb-3 hero-header-sub" style="font-family: 'Cinzel', serif; letter-spacing: 1px;">Our Journey, Your Success</p>
        <nav aria-label="breadcrumb" class="hero-header-nav">
            <ol class="breadcrumb justify-content-center text-uppercase mb-0 fw-bold" style="letter-spacing: 1px; font-size: 0.92rem;">
                <li class="breadcrumb-item"><a href="index.php" class="text-white-50 text-decoration-none">HOME</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">ABOUT US</li>
            </ol>
        </nav>
    </div>
</div>

<!-- ==========================================================================
     Section 1: Know Who We Are / About our company
     ========================================================================== -->
<div class="container-fluid py-5 px-4 px-lg-5 bg-white">
    <div class="container py-2">
        <div class="row g-5 align-items-center">
            <!-- Left Image Block -->
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="position-relative overflow-hidden rounded-4 shadow-lg border border-1 border-light">
                    <img class="img-fluid w-100" src="img/aboutus_proeprlyimg.png" alt="Pudami Consultancy Services" style="min-height: 440px; object-fit: cover;">
                    <div class="position-absolute bottom-0 start-0 end-0 p-4" style="background: linear-gradient(to top, rgba(14,46,80,0.95) 0%, rgba(14,46,80,0.4) 70%, transparent 100%);">
                        <h4 class="text-white fw-bold mb-1" style="font-family: 'Outfit', sans-serif;">Pudami Consultancy Services (India) Pvt Ltd</h4>
                        <p class="text-white-50 small mb-0"><i class="fa fa-certificate text-warning me-2"></i>DPIIT Recognized & AP RERA Registered Advisory</p>
                    </div>
                </div>
            </div>

            <!-- Right Content Block -->
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                <div class="mb-3">
                    <span class="section-pill-badge">Know Who We Are</span>
                </div>
                <h2 class="mb-4 text-dark fw-bold" style="font-family: 'Cinzel', serif; font-size: 2.3rem; color: #0E2E50; line-height: 1.3;">About our company</h2>
                <p class="text-dark fs-5 mb-3" style="line-height: 1.8; color: #334155;">
                    <strong>Pudami Consultancy Services</strong> is a premier real-estate advisory firm dedicated to helping clients make smarter, safer, and more profitable property decisions.
                </p>
                <p class="text-muted fs-6 mb-4" style="line-height: 1.8;">
                    With comprehensive expertise across open plots, luxury flats, gated villas, and commercial real estate investments, we bring you verified listings and transparent legal guidance so you can buy or sell with complete peace of mind.
                </p>
                
                <!-- Clean Feature Points (Strictly No Bullet Dots) -->
                <ul class="about-feature-list mb-4">
                    <li>
                        <i class="fa fa-check-circle"></i>
                        <span>100% Verified Properties &amp; 30-Year Clear Link Document Checks</span>
                    </li>
                    <li>
                        <i class="fa fa-check-circle"></i>
                        <span>DPIIT Govt of India Recognized &amp; AP RERA Registered Advisory</span>
                    </li>
                    <li>
                        <i class="fa fa-check-circle"></i>
                        <span>Direct Bank Loan Sanctions from SBI, HDFC, IDFC FIRST &amp; LIC Housing</span>
                    </li>
                </ul>

                <div class="pt-2">
                    <a href="contact.php" class="btn btn-primary px-4 py-3 rounded-pill text-white fw-bold shadow-sm" style="background: #0E4B37; border: none;"><i class="fa fa-phone-alt me-2"></i>Talk To Our Experts</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ==========================================================================
     Section 2: What We Do (Redesigned Executive Card Grid - Sticky Header & Parallax Canvas)
     ========================================================================== -->
<!-- ==========================================================================
     Section 2: What We Do (Executive Split Sticky Layout - 100% Unboxed Title)
     ========================================================================== -->
<div class="container-fluid what-we-do-section-wrapper px-4 px-lg-5">
    <div class="container py-1">
        <div class="row g-5 align-items-start">
            <!-- Left Column: Sticky Title Block (Strictly Sticky Left Column) -->
            <div class="col-lg-4 what-we-do-sticky-col">
                <div>
                    <span class="section-pill-badge mb-3">Our Core Expertise</span>
                    <h2 class="mt-3 mb-4 text-white fw-bold display-5" style="font-family: 'Cinzel', serif; letter-spacing: 0.8px;">WHAT WE DO</h2>
                    <p class="fs-6 mb-4" style="color: #CBD5E1; line-height: 1.8;">Comprehensive property advisory, verification, marketing, and management solutions tailored to your real estate goals.</p>
                    
                    <div class="d-flex align-items-center gap-3 pt-4 border-top border-secondary border-opacity-25">
                        <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; min-width: 50px; background: rgba(0, 185, 142, 0.15); color: #00B98E; border: 1px solid rgba(0, 185, 142, 0.35);">
                            <i class="fa fa-shield-alt fs-5"></i>
                        </div>
                        <div>
                            <h6 class="text-white fw-bold mb-0" style="font-family: 'Outfit', sans-serif;">Government Certified</h6>
                            <small class="text-muted">100% Verified Title Guarantee</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: 6 Service Cards Grid (Scrolls Vertically Beside Header) -->
            <div class="col-lg-8">
                <div class="row g-4">
                    <!-- 1. Property Buying Assistance -->
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="what-we-do-card">
                            <span class="what-we-do-number">01</span>
                            <div class="what-we-do-icon-badge">
                                <i class="fa fa-home"></i>
                            </div>
                            <h5 class="fw-bold mb-3 text-white" style="font-family: 'Outfit', sans-serif; font-size: 1.3rem;">Property Buying Assistance</h5>
                            <p style="color: #94A3B8; line-height: 1.75; font-size: 0.95rem;" class="mb-4">Helping you select the best plots, villas &amp; flats based on your budget, location preferences, and long-term investment goals.</p>
                            <div class="what-we-do-tag">
                                <span>Plots, Villas &amp; Apartments</span>
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>

                    <!-- 2. Property Selling Support -->
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="what-we-do-card">
                            <span class="what-we-do-number">02</span>
                            <div class="what-we-do-icon-badge">
                                <i class="fa fa-tags"></i>
                            </div>
                            <h5 class="fw-bold mb-3 text-white" style="font-family: 'Outfit', sans-serif; font-size: 1.3rem;">Property Selling Support</h5>
                            <p style="color: #94A3B8; line-height: 1.75; font-size: 0.95rem;" class="mb-4">Professional marketing, buyer qualification, property valuation, and negotiation to help you sell faster and at optimal market value.</p>
                            <div class="what-we-do-tag">
                                <span>Valuation &amp; Buyer Match</span>
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>

                    <!-- 3. Site Visits & Property Tours -->
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="what-we-do-card">
                            <span class="what-we-do-number">03</span>
                            <div class="what-we-do-icon-badge">
                                <i class="fa fa-map-marked-alt"></i>
                            </div>
                            <h5 class="fw-bold mb-3 text-white" style="font-family: 'Outfit', sans-serif; font-size: 1.3rem;">Site Visits &amp; Property Tours</h5>
                            <p style="color: #94A3B8; line-height: 1.75; font-size: 0.95rem;" class="mb-4">Organized, hassle-free physical site visits with guided expert commentary to help you understand ground reality and location value.</p>
                            <div class="what-we-do-tag">
                                <span>Guided Ground Inspection</span>
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>

                    <!-- 4. Legal & Documentation Guidance -->
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="what-we-do-card">
                            <span class="what-we-do-number">04</span>
                            <div class="what-we-do-icon-badge">
                                <i class="fa fa-file-contract"></i>
                            </div>
                            <h5 class="fw-bold mb-3 text-white" style="font-family: 'Outfit', sans-serif; font-size: 1.3rem;">Legal &amp; Documentation Guidance</h5>
                            <p style="color: #94A3B8; line-height: 1.75; font-size: 0.95rem;" class="mb-4">We support complete title verification, Encumbrance Certificate (EC) checks, drafting sale agreements, and sub-registrar office registration.</p>
                            <div class="what-we-do-tag">
                                <span>Title Deed &amp; EC Checks</span>
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>

                    <!-- 5. Investment Consultation -->
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="what-we-do-card">
                            <span class="what-we-do-number">05</span>
                            <div class="what-we-do-icon-badge">
                                <i class="fa fa-chart-line"></i>
                            </div>
                            <h5 class="fw-bold mb-3 text-white" style="font-family: 'Outfit', sans-serif; font-size: 1.3rem;">Investment Consultation</h5>
                            <p style="color: #94A3B8; line-height: 1.75; font-size: 0.95rem;" class="mb-4">Advising individual and institutional investors on high-growth real-estate corridors for safe, highly lucrative capital appreciation.</p>
                            <div class="what-we-do-tag">
                                <span>High-Yield Corridors</span>
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>

                    <!-- 6. Property Management Support -->
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="what-we-do-card">
                            <span class="what-we-do-number">06</span>
                            <div class="what-we-do-icon-badge">
                                <i class="fa fa-tasks"></i>
                            </div>
                            <h5 class="fw-bold mb-3 text-white" style="font-family: 'Outfit', sans-serif; font-size: 1.3rem;">Property Management Support</h5>
                            <p style="color: #94A3B8; line-height: 1.75; font-size: 0.95rem;" class="mb-4">Assisting property owners with land fencing, boundary marking, tax clearance, tenant handling, and asset maintenance.</p>
                            <div class="what-we-do-tag">
                                <span>Land Fencing &amp; Asset Care</span>
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ==========================================================================
     Section 3: Key Achievement Counter Metrics (Light Ribbon Layout)
     ========================================================================== -->
<div class="container-fluid track-record-light-wrapper px-4 px-lg-5">
    <div class="container py-1">
        <div class="text-center mx-auto mb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 780px;">
            <span class="section-pill-badge mb-2">Our Proven Track Record</span>
            <h2 class="mt-3 mb-3 text-dark fw-bold" style="font-family: 'Cinzel', serif; font-size: 2.5rem; color: #0E2E50;">Numbers That Speak Trust</h2>
            <p class="text-muted fs-6 mb-0" style="line-height: 1.75;">Over a decade of transparent real estate advisory, statutory compliance, and client satisfaction across South India.</p>
        </div>

        <!-- Integrated Executive Achievement Ribbon -->
        <div class="track-record-ribbon wow fadeInUp" data-wow-delay="0.2s">
            <div class="row g-0">
                <!-- Metric 1 -->
                <div class="col-lg-3 col-md-6">
                    <div class="track-record-item">
                        <div class="track-record-icon">
                            <i class="fa fa-headset"></i>
                        </div>
                        <div class="track-record-number">165,489</div>
                        <div class="track-record-label">Support Given</div>
                        <span class="track-record-subtag">24/7 Advisory Assistance</span>
                    </div>
                </div>

                <!-- Metric 2 -->
                <div class="col-lg-3 col-md-6">
                    <div class="track-record-item">
                        <div class="track-record-icon">
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="track-record-number">254 +</div>
                        <div class="track-record-label">Clients Rating</div>
                        <span class="track-record-subtag">5-Star Verified Reviews</span>
                    </div>
                </div>

                <!-- Metric 3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="track-record-item">
                        <div class="track-record-icon">
                            <i class="fa fa-wallet"></i>
                        </div>
                        <div class="track-record-number">2 M+</div>
                        <div class="track-record-label">Money Saved</div>
                        <span class="track-record-subtag">In Deal Negotiations</span>
                    </div>
                </div>

                <!-- Metric 4 -->
                <div class="col-lg-3 col-md-6">
                    <div class="track-record-item">
                        <div class="track-record-icon">
                            <i class="fa fa-trophy"></i>
                        </div>
                        <div class="track-record-number">578</div>
                        <div class="track-record-label">Awards Won</div>
                        <span class="track-record-subtag">Excellence In Real Estate</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ==========================================================================
     Section 4: Our Certifications (Equal Size Cards - Clean Executive Paragraph)
     ========================================================================== -->
<div class="container-fluid py-5 bg-light px-4 px-lg-5">
    <div class="container py-1">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
            <span class="section-pill-badge mb-2">Statutory Credentials</span>
            <h2 class="mt-3 mb-4 text-dark fw-bold" style="font-family: 'Cinzel', serif; font-size: 2.3rem; letter-spacing: 0.5px; color: #0E2E50;">OUR CERTIFICATIONS</h2>
            <p class="text-muted fs-5 mx-auto mb-0 text-center" style="max-width: 880px; line-height: 1.85; font-weight: 400; color: #475569;">
                At Pudami Consultancy Services, credibility is the foundation of everything we do. Our certifications from MSME, APRERA, and ICIL reinforce our commitment to delivering genuine, transparent, and compliant real-estate services. These recognitions ensure that every client receives guidance backed by verified standards, ethical practices, and complete accountability.
            </p>
        </div>

        <div class="row g-4 justify-content-center text-center">
            <!-- Certificate 1: MSME Udyam Registration Certificate -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="cert-card">
                    <div class="cert-img-box">
                        <img src="img/MSME Udyam Registration – Government of Indiacertificate.png" alt="MSME Udyam Registration Certificate" class="img-fluid">
                    </div>
                    <div class="pt-2">
                        <h5 class="fw-bold text-dark mb-1" style="font-family: 'Outfit', sans-serif;">MSME Udyam Registration</h5>
                        <p class="text-muted small mb-0">Government of India Enterprise Certificate</p>
                    </div>
                </div>
            </div>

            <!-- Certificate 2: DPIIT Government of India Certificate -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="cert-card">
                    <div class="cert-img-box">
                        <img src="img/Certified by DPIIT – Government of India_certificate.png" alt="DPIIT Government of India Certificate" class="img-fluid">
                    </div>
                    <div class="pt-2">
                        <h5 class="fw-bold text-dark mb-1" style="font-family: 'Outfit', sans-serif;">DPIIT Recognition Certificate</h5>
                        <p class="text-muted small mb-0">DPIIT Ministry of Commerce & Industry Certificate</p>
                    </div>
                </div>
            </div>

            <!-- Certificate 3: International Quality Certification (ICIL ISO) -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="cert-card">
                    <div class="cert-img-box">
                        <img src="img/International Quality Certification.png" alt="ICIL ISO Quality Certificate" class="img-fluid">
                    </div>
                    <div class="pt-2">
                        <h5 class="fw-bold text-dark mb-1" style="font-family: 'Outfit', sans-serif;">ICIL ISO Quality Certificate</h5>
                        <p class="text-muted small mb-0">ISO 9001:2015 International Quality Standard</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ==========================================================================
     Section 5: Why Clients Choose Us (Hover Reveal Background Image Grid - No Icons, No Numbers)
     ========================================================================== -->
<div class="container-fluid why-choose-reveal-wrapper px-4 px-lg-5">
    <div class="container py-1">
        <!-- Centered Executive Section Header -->
        <div class="text-center mx-auto mb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 820px;">
            <span class="section-pill-badge mb-3">CLIENT TRUST</span>
            <h2 class="mt-2 mb-3 text-dark fw-bold display-5" style="font-family: 'Cinzel', serif; color: #0E2E50; letter-spacing: 0.8px;">WHY CLIENTS CHOOSE US</h2>
            <p class="fs-6 text-muted mb-0" style="line-height: 1.85;">
                Delivering a refined, transparent, and personalized real-estate experience built on 30+ years of verified trust, statutory compliance, and end-to-end client satisfaction.
            </p>
        </div>

        <!-- 4 Hover Reveal Cards Grid (No Icons, No Numbers, Image appears on hover) -->
        <div class="row g-4 wow fadeInUp" data-wow-delay="0.2s">
            <!-- Item 1: 100% Legal Check -->
            <div class="col-lg-3 col-md-6">
                <div class="why-choose-hover-card h-100">
                    <div class="why-choose-card-bg-layer" style="background-image: url('img/Legal & Documentation Guidance.jpeg');"></div>
                    <div class="why-choose-card-overlay-layer"></div>
                    <div class="why-choose-card-body">
                        <h5 class="why-choose-card-title">100% Legal Check</h5>
                        <p class="why-choose-card-desc">Rigorously vetted 30-year link titles, Encumbrance Certificates (EC), and approved layout plans.</p>
                        <span class="why-choose-card-badge">VERIFIED TITLES</span>
                    </div>
                </div>
            </div>

            <!-- Item 2: Statutory Credibility -->
            <div class="col-lg-3 col-md-6">
                <div class="why-choose-hover-card h-100">
                    <div class="why-choose-card-bg-layer" style="background-image: url('img/STYLISH MODERN HOME.jpg');"></div>
                    <div class="why-choose-card-overlay-layer"></div>
                    <div class="why-choose-card-body">
                        <h5 class="why-choose-card-title">Statutory Credibility</h5>
                        <p class="why-choose-card-desc">MSME Udyam, AP RERA, DPIIT Govt of India, and ISO 9001:2015 quality certified consultancy.</p>
                        <span class="why-choose-card-badge">GOVT APPROVED</span>
                    </div>
                </div>
            </div>

            <!-- Item 3: Rapid Loan Sanctions -->
            <div class="col-lg-3 col-md-6">
                <div class="why-choose-hover-card h-100">
                    <div class="why-choose-card-bg-layer" style="background-image: url('img/Loan & Financial Assistance.jpg');"></div>
                    <div class="why-choose-card-overlay-layer"></div>
                    <div class="why-choose-card-body">
                        <h5 class="why-choose-card-title">Rapid Loan Sanctions</h5>
                        <p class="why-choose-card-desc">Pre-approved project clearance with State Bank of India, HDFC, IDFC FIRST, and LIC Housing.</p>
                        <span class="why-choose-card-badge">DIRECT TIE-UPS</span>
                    </div>
                </div>
            </div>

            <!-- Item 4: Transparent Advisory -->
            <div class="col-lg-3 col-md-6">
                <div class="why-choose-hover-card h-100">
                    <div class="why-choose-card-bg-layer" style="background-image: url('img/Site Visits & Property Tours.jpeg');"></div>
                    <div class="why-choose-card-overlay-layer"></div>
                    <div class="why-choose-card-body">
                        <h5 class="why-choose-card-title">Transparent Advisory</h5>
                        <p class="why-choose-card-desc">End-to-end guidance from initial ground visit to final Sub-Registrar Office deed execution.</p>
                        <span class="why-choose-card-badge">ZERO HIDDEN FEES</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const cards = document.querySelectorAll('.why-choose-hover-card');
    if (!cards.length) return;

    let currentIndex = 0;
    let isUserHovering = false;

    function setActiveCard(index) {
        cards.forEach((card, idx) => {
            if (idx === index) {
                card.classList.add('is-active');
            } else {
                card.classList.remove('is-active');
            }
        });
    }

    function rotateNext() {
        if (isUserHovering) return;
        currentIndex = (currentIndex + 1) % cards.length;
        setActiveCard(currentIndex);
    }

    // Initialize first card active automatically
    setActiveCard(currentIndex);

    // Auto rotate active card every 3.2 seconds
    setInterval(rotateNext, 3200);

    // Pause on manual hover and resume on leave
    cards.forEach((card, idx) => {
        card.addEventListener('mouseenter', function () {
            isUserHovering = true;
            cards.forEach(c => c.classList.remove('is-active'));
        });

        card.addEventListener('mouseleave', function () {
            isUserHovering = false;
            currentIndex = idx;
            setActiveCard(currentIndex);
        });
    });
});
</script>

<!-- ==========================================================================
     Section 6: Testimonials
     ========================================================================== -->
<div class="container-fluid py-5 bg-white px-4 px-lg-5">
    <div class="container py-1">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
            <span class="section-pill-badge mb-2">Client Feedback</span>
            <h2 class="mt-3 mb-3 text-dark fw-bold" style="font-family: 'Cinzel', serif; font-size: 2.3rem; color: #0E2E50;">Testimonials</h2>
            <p class="text-muted fs-6 mb-0">Hear from satisfied property buyers and investors across South India.</p>
        </div>

        <div class="row g-4">
            <!-- Testimonial 1 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item bg-white rounded-4 p-4 shadow-sm border border-light h-100 d-flex flex-column justify-content-between">
                    <div>
                        <div class="text-warning mb-3">
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                        </div>
                        <p class="text-dark fst-italic mb-4" style="line-height: 1.75; font-size: 0.95rem;">"A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradise of verified properties, clear titles, and seamless bank loan approvals. Highly recommended!"</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center me-3 fw-bold shadow-sm" style="width: 48px; height: 48px; font-size: 1.15rem; background-color: #0E2E50 !important;">
                            KR
                        </div>
                        <div>
                            <h6 class="fw-bold text-dark mb-0" style="font-family: 'Outfit', sans-serif;">K. Rajesh Kumar</h6>
                            <small class="text-muted">Vijayawada Villa Owner</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="testimonial-item bg-white rounded-4 p-4 shadow-sm border border-light h-100 d-flex flex-column justify-content-between">
                    <div>
                        <div class="text-warning mb-3">
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                        </div>
                        <p class="text-dark fst-italic mb-4" style="line-height: 1.75; font-size: 0.95rem;">"Pudami Consultancy handled 30-year link document verification and sanctioned my SBI home loan within 7 business days. Completely transparent and stress-free property purchase."</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="rounded-circle bg-success text-white d-flex align-items-center justify-content-center me-3 fw-bold shadow-sm" style="width: 48px; height: 48px; font-size: 1.15rem; background-color: #0E4B37 !important;">
                            PS
                        </div>
                        <div>
                            <h6 class="fw-bold text-dark mb-0" style="font-family: 'Outfit', sans-serif;">P. Srinivas Rao</h6>
                            <small class="text-muted">Hyderabad Plot Buyer</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="testimonial-item bg-white rounded-4 p-4 shadow-sm border border-light h-100 d-flex flex-column justify-content-between">
                    <div>
                        <div class="text-warning mb-3">
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                        </div>
                        <p class="text-dark fst-italic mb-4" style="line-height: 1.75; font-size: 0.95rem;">"Being an NRI investor, title security was my top priority. Pudami's AP RERA and MSME certification gave me 100% confidence to invest in Gachibowli layout plots."</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="rounded-circle bg-warning text-dark d-flex align-items-center justify-content-center me-3 fw-bold shadow-sm" style="width: 48px; height: 48px; font-size: 1.15rem; background-color: #F59E0B !important;">
                            SV
                        </div>
                        <div>
                            <h6 class="fw-bold text-dark mb-0" style="font-family: 'Outfit', sans-serif;">S. Venkat Reddy</h6>
                            <small class="text-muted">NRI Property Investor</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ==========================================================================
     Section 7: Call To Action Designer Banner
     ========================================================================== -->
<div class="container-fluid py-5 px-4 px-lg-5">
    <div class="cta-banner-wrapper">
        <svg class="cta-bg-svg-waves" viewBox="0 0 1200 400" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <linearGradient id="ctaGradAbout1" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" stop-color="#00B98E" stop-opacity="0.30" />
                    <stop offset="100%" stop-color="#F59E0B" stop-opacity="0.08" />
                </linearGradient>
                <linearGradient id="ctaGradAbout2" x1="100%" y1="0%" x2="0%" y2="100%">
                    <stop offset="0%" stop-color="#00B98E" stop-opacity="0.20" />
                    <stop offset="100%" stop-color="#0E2E50" stop-opacity="0" />
                </linearGradient>
            </defs>
            <path d="M0,160 Q300,320 600,180 T1200,220 L1200,400 L0,400 Z" fill="url(#ctaGradAbout1)" />
            <path d="M0,240 Q400,110 800,280 T1200,140 L1200,400 L0,400 Z" fill="url(#ctaGradAbout2)" />
            <circle cx="1060" cy="70" r="170" fill="#00B98E" opacity="0.10" />
        </svg>

        <div class="row align-items-center cta-content-z2">
            <div class="col-lg-7 mb-4 mb-lg-0">
                <div class="d-flex align-items-center mb-3">
                    <div class="cta-icon-badge me-3 shadow">
                        <i class="fa fa-headset"></i>
                    </div>
                    <div>
                        <span class="section-pill-badge" style="background: rgba(255, 255, 255, 0.12) !important; color: #F59E0B !important; border: 1px solid rgba(245, 158, 11, 0.4) !important;">Direct Consultation</span>
                    </div>
                </div>
                <h2 class="display-6 text-white fw-bold mb-3" style="font-family: 'Cinzel', serif;">Speak With Our Certified Real Estate Advisors</h2>
                <p class="text-white-50 fs-5 mb-0" style="max-width: 650px;">Have questions about statutory approvals, EC clearance, or site visit scheduling? Our senior consultants are here to assist you.</p>
            </div>
            <div class="col-lg-5 text-lg-end">
                <div class="d-inline-flex flex-wrap gap-3 justify-content-lg-end">
                    <a href="tel:+919182613797" class="cta-btn-primary"><i class="fa fa-phone-alt me-2"></i>Call +91 9182613797</a>
                    <a href="contact.php" class="cta-btn-secondary"><i class="fa fa-calendar-alt me-2"></i>Book Consultation</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/footer.php'; ?>

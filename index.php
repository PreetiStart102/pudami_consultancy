<?php
include __DIR__ . '/header.php';
?>

<!-- Hero Banner Start (Matching Reference Target Design Image 2) -->
<div class="container-fluid header p-0 position-relative">
    <div class="position-relative overflow-hidden">
        <div class="owl-carousel header-carousel">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid w-100 hero-carousel-img" src="img/hero_image1.jpg" alt="Pudami Consultancy Real Estate">
                <div class="position-absolute top-50 start-50 translate-middle text-center w-100 px-3">
                    <div class="hero-title-badge mb-2">PUDAMI CONSULTANCY SERVICES (INDIA) PVT LTD</div>
                    <div class="hero-tagline-text">The Right Choice for Your Dream House</div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid w-100 hero-carousel-img" src="img/PREMIUM DUPLEX PROJECT.jpg" alt="Premium Duplex Project">
                <div class="position-absolute top-50 start-50 translate-middle text-center w-100 px-3">
                    <div class="hero-title-badge mb-2">PREMIUM VILLA & DUPLEX PROJECTS</div>
                    <div class="hero-tagline-text">100% Clear Title Verification & RERA Approved Layouts</div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid w-100 hero-carousel-img" src="img/STYLISH MODERN HOME.jpg" alt="Stylish Modern Home">
                <div class="position-absolute top-50 start-50 translate-middle text-center w-100 px-3">
                    <div class="hero-title-badge mb-2">FAST HOME LOAN APPROVALS</div>
                    <div class="hero-tagline-text">Direct Tie-ups with SBI, HDFC, IDFC FIRST & LIC Housing</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero Banner End -->

<!-- Search Bar Start (Floating Designer Green Card) -->
<div class="container position-relative wow fadeIn" data-wow-delay="0.1s" style="margin-top: -30px; margin-bottom: 30px; z-index: 10; max-width: 1080px;">
    <div class="px-4 py-3 rounded-4 shadow-lg" style="background: linear-gradient(135deg, #00B98E 0%, #0E4B37 100%) !important; border-radius: 20px !important; border: 1px solid rgba(255,255,255,0.25);">
        <form action="property-list.php" method="GET">
            <div class="row g-2 align-items-center">
                <!-- 1. Select State Dropdown (All 28 States of India + Delhi NCR) -->
                <div class="col-md-5">
                    <select id="searchState" name="location" class="form-select border-0 py-2.5 rounded-3 fw-bold text-dark shadow-sm" onchange="updateCityDropdown(this.value)" style="font-size: 0.92rem; padding-top: 10px; padding-bottom: 10px;">
                        <option value="">Select State / Region</option>
                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Delhi NCR">Delhi NCR</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Odisha">Odisha</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Telangana">Telangana</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="Uttarakhand">Uttarakhand</option>
                        <option value="West Bengal">West Bengal</option>
                    </select>
                </div>
                <!-- 2. Select City Dropdown (Decreased Field Box Width) -->
                <div class="col-md-4">
                    <select id="searchCity" name="keyword" class="form-select border-0 rounded-3 fw-bold text-dark shadow-sm" style="font-size: 0.92rem; padding-top: 10px; padding-bottom: 10px;">
                        <option value="">Select City / Hub</option>
                        <option value="Vijayawada">Vijayawada</option>
                        <option value="Amaravati">Amaravati</option>
                        <option value="Visakhapatnam">Visakhapatnam</option>
                        <option value="Tirupati">Tirupati</option>
                        <option value="Hyderabad">Hyderabad</option>
                        <option value="Gachibowli">Gachibowli</option>
                        <option value="Warangal">Warangal</option>
                        <option value="Bengaluru">Bengaluru</option>
                        <option value="Mysuru">Mysuru</option>
                        <option value="Chennai">Chennai</option>
                        <option value="Coimbatore">Coimbatore</option>
                        <option value="Kochi">Kochi</option>
                        <option value="Thiruvananthapuram">Thiruvananthapuram</option>
                        <option value="Mumbai">Mumbai</option>
                        <option value="Pune">Pune</option>
                        <option value="Gurugram">Gurugram</option>
                        <option value="Noida">Noida</option>
                        <option value="Ahmedabad">Ahmedabad</option>
                        <option value="GIFT City">GIFT City</option>
                        <option value="Kolkata">Kolkata</option>
                        <option value="Panaji">Panaji</option>
                    </select>
                </div>
                <!-- 3. Search Button -->
                <div class="col-md-3">
                    <button type="submit" class="btn border-0 w-100 rounded-3 text-white fw-bold shadow-sm" style="background-color: #0E2E50 !important; font-size: 0.92rem; padding-top: 10px; padding-bottom: 10px;"><i class="fa fa-search me-2"></i>Search</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Search Bar End -->

<!-- 3-Card Government Accreditations & Certification Section (Designer Executive Styling & Fixed Background) -->
<div class="container-fluid py-5 accreditation-section-fixed-bg px-4 px-lg-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <div class="mb-2"><span class="section-pill-badge" style="font-size: 0.95rem; padding: 8px 28px;">Statutory Credentials</span></div>
            <h2 class="mb-2 text-dark fw-bold" style="font-family: 'Cinzel', serif; font-size: 1.65rem; letter-spacing: 0.8px;">GOVERNMENT APPROVED & CERTIFIED CONSULTANCY</h2>
            <p class="text-dark fs-6 mb-0">Full compliance with state urban development authorities, international quality standards, and national startup initiatives.</p>
        </div>
        <div class="row g-4 justify-content-center">
            <!-- Card 1: AP RERA -->
            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="accreditation-card text-center">
                    <div class="accreditation-circle">
                        <img src="img/AP_RERA.png" alt="AP RERA Certification" style="max-height: 95px; max-width: 90%; object-fit: contain;">
                    </div>
                    <h4 class="fw-bold mb-3" style="color: #0E4B37; letter-spacing: 0.5px;">AP RERA</h4>
                    <p class="text-muted small mb-0 fs-6">I declare that the information provided is true for AP RERA certification.</p>
                </div>
            </div>

            <!-- Card 2: ISO CERTIFIED -->
            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="accreditation-card text-center">
                    <div class="accreditation-circle">
                        <img src="img/iso_certifiedlogo.avif" alt="ISO CERTIFIED Quality Standard" style="max-height: 105px; max-width: 90%; object-fit: contain;">
                    </div>
                    <h4 class="fw-bold mb-3" style="color: #0E4B37; letter-spacing: 0.5px;">ISO CERTIFIED</h4>
                    <p class="text-muted small mb-0 fs-6">I declare that the information provided is true for ISO certification</p>
                </div>
            </div>

            <!-- Card 3: START UP INDIA -->
            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="accreditation-card text-center">
                    <div class="accreditation-circle">
                        <img src="img/startup-india_logo.png" alt="START UP INDIA DPIIT Recognition" style="max-height: 85px; max-width: 90%; object-fit: contain;">
                    </div>
                    <h4 class="fw-bold mb-3" style="color: #0E4B37; letter-spacing: 0.5px;">START UP INDIA</h4>
                    <p class="text-muted small mb-0 fs-6">I declare that the information provided is true for Startup India certification</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 3-Card Accreditations End -->

<!-- Financing Your Dream Home Made Simple Section Start (Placed after Statutory Credentials) -->
<div class="container-fluid py-5 px-lg-5 bg-white">
    <div class="container">
        <div class="row g-5 align-items-center">
            <!-- Left Column: Designer Shaped Image with Floating Interest Badge -->
            <div class="col-lg-6 wow slideInLeft" data-wow-delay="0.1s">
                <div class="financing-img-container">
                    <img src="img/front-view-house_image.jpg" alt="Financing Your Dream Home Made Simple">
                </div>
            </div>

            <!-- Right Column: Executive Financing Content & Metrics Grid -->
            <div class="col-lg-6 wow slideInRight" data-wow-delay="0.2s">
                <div class="mb-3">
                    <span class="section-pill-badge" style="font-size: 0.9rem; padding: 7px 26px;">Home Loan Assistance</span>
                </div>
                <h2 class="mb-4 text-dark fw-bold" style="font-family: 'Cinzel', serif; font-size: 2.2rem; line-height: 1.3; color: #0E2E50; letter-spacing: 0.5px;">FINANCING YOUR DREAM HOME MADE SIMPLE</h2>
                <p class="text-dark fs-6 mb-4" style="line-height: 1.8;">
                    At Pudami Consultancy Services, we provide end-to-end support for securing the most suitable <strong class="text-dark">home loan</strong> based on your financial profile and property requirements. Whether you’re purchasing your first home or upgrading to your dream property, our team helps you compare lending institutions, understand eligibility, and choose the best financing option with <strong class="text-dark">interest rates starting from 6.5%</strong>. We simplify documentation, guide you through approval processes, and ensure a smooth, transparent experience from application to disbursal—making your home-buying journey confident and hassle-free.
                </p>
                <div class="row g-4 pt-3 border-top">
                    <div class="col-4">
                        <h2 class="fw-bold mb-1" style="font-family: 'Cinzel', serif; font-size: 2.4rem; color: #0E2E50;">358<span class="fs-4 text-primary fw-bold"> K</span></h2>
                        <small class="text-dark fw-semibold" style="font-size: 0.85rem;">Hours of Work</small>
                    </div>
                    <div class="col-4">
                        <h2 class="fw-bold mb-1" style="font-family: 'Cinzel', serif; font-size: 2.4rem; color: #0E2E50;">29<span class="fs-4 text-primary fw-bold"> +</span></h2>
                        <small class="text-dark fw-semibold" style="font-size: 0.85rem;">Projects Done</small>
                    </div>
                    <div class="col-4">
                        <h2 class="fw-bold mb-1" style="font-family: 'Cinzel', serif; font-size: 2.4rem; color: #0E2E50;">358<span class="fs-4 text-primary fw-bold"> %</span></h2>
                        <small class="text-dark fw-semibold" style="font-size: 0.85rem;">Client Satisfaction</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Financing End -->

<!-- Real Estate Advisory Services Start -->
<div class="container-fluid py-5 px-lg-5">
    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1050px;">
        <div class="mb-3"><span class="section-pill-badge" style="font-size: 1rem; padding: 9px 30px;">Our Specialized Offerings</span></div>
        <h1 class="mb-3 text-dark fw-bold" style="font-family: 'Cinzel', serif; font-size: 2.8rem; line-height: 1.25;">Comprehensive Real Estate Services</h1>
        <p class="text-dark fs-5 mb-0" style="max-width: 950px; margin: 0 auto;">Pudami Consultancy Services (India) Pvt Ltd handles every aspect of property transaction—from initial site selection and legal title checking to bank financing and registration.</p>
    </div>
    <div class="row g-4">
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                <img src="img/Property Buying Assistance.jpeg" class="card-img-top" alt="Property Buying Assistance" style="height: 220px; object-fit: cover;">
                <div class="card-body p-4 text-center">
                    <h5 class="fw-bold mb-2 text-dark">Property Buying Assistance</h5>
                    <p class="text-dark small">Helping you select verified residential plots, villas, and apartments with guaranteed clear title documentation.</p>
                    <a href="contact.php?service=Property+Buying" class="btn btn-outline-primary btn-sm rounded-pill px-3">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                <img src="img/Investment Consultation.jpg" class="card-img-top" alt="Investment Consultation" style="height: 220px; object-fit: cover;">
                <div class="card-body p-4 text-center">
                    <h5 class="fw-bold mb-2 text-dark">Investment Consultation</h5>
                    <p class="text-dark small">High-yield real estate investment strategies in fast-developing corridors across Andhra Pradesh, Telangana & Pan India.</p>
                    <a href="contact.php?service=Investment+Consultation" class="btn btn-outline-primary btn-sm rounded-pill px-3">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                <img src="img/Legal & Documentation Guidance.jpeg" class="card-img-top" alt="Legal & Documentation Guidance" style="height: 220px; object-fit: cover;">
                <div class="card-body p-4 text-center">
                    <h5 class="fw-bold mb-2 text-dark">Legal & Title Check</h5>
                    <p class="text-dark small">Rigorous 30-year link document verification, EC check, layout approvals, and hassle-free registration support.</p>
                    <a href="contact.php?service=Legal+Documentation" class="btn btn-outline-primary btn-sm rounded-pill px-3">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                <img src="img/Loan & Financial Assistance.jpg" class="card-img-top" alt="Loan & Financial Assistance" style="height: 220px; object-fit: cover;">
                <div class="card-body p-4 text-center">
                    <h5 class="fw-bold mb-2 text-dark">Loan & Financial Assistance</h5>
                    <p class="text-dark small">Direct tie-ups with SBI, HDFC, IDFC FIRST, and LIC Housing for rapid home loan processing and lowest interest rates.</p>
                    <a href="contact.php?service=Loan+Assistance" class="btn btn-outline-primary btn-sm rounded-pill px-3">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                <img src="img/Site Visits & Property Tours.jpeg" class="card-img-top" alt="Site Visits & Property Tours" style="height: 220px; object-fit: cover;">
                <div class="card-body p-4 text-center">
                    <h5 class="fw-bold mb-2 text-dark">Site Visits & Property Tours</h5>
                    <p class="text-dark small">Complimentary pickup & guided physical site tours with detailed plot maps and neighborhood analysis.</p>
                    <a href="contact.php?service=Site+Visit" class="btn btn-outline-primary btn-sm rounded-pill px-3">Book Site Visit</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden bg-primary text-white">
                <div class="card-body p-5 text-center d-flex flex-column justify-content-center align-items-center">
                    <div class="rounded-circle bg-white text-primary d-inline-flex align-items-center justify-content-center mb-3 shadow" style="width: 70px; height: 70px; font-size: 1.8rem; color: #00B98E !important;">
                        <i class="fa fa-headset"></i>
                    </div>
                    <h4 class="fw-bold text-white mb-2">Need Customized Advice?</h4>
                    <p class="small text-white-50 mb-4">Speak directly with our senior real estate consultants for custom layout developments and bulk property acquisitions.</p>
                    <a href="contact.php" class="btn btn-light text-primary fw-bold rounded-pill px-4">Contact Our Team</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->

<!-- WHY CHOOSE US SECTION Start (Executive Pudami Brand Theme) -->
<div class="container-fluid py-5 why-choose-section-bg px-lg-5">
    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
        <div class="mb-2"><span class="section-pill-badge" style="font-size: 0.95rem; padding: 8px 28px;">Pudami Advantage</span></div>
        <h2 class="mb-2 text-white fw-bold" style="font-family: 'Cinzel', serif; font-size: 1.8rem; letter-spacing: 0.8px;">WHY CHOOSE US</h2>
        <p class="text-white-50 fs-6 mb-0">We deliver zero-risk property transactions backed by statutory legal checks, bank tie-ups, and complete buyer protection.</p>
    </div>
    
    <div class="row g-4 align-items-stretch">
        <!-- Main Highlight Hero Box (Left Column) -->
        <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="why-choose-hero-card d-flex flex-column justify-content-between h-100">
                <div>
                    <div class="d-inline-block bg-white text-primary fw-bold rounded-pill px-3 py-1 small mb-4 shadow-sm" style="color: #0E4B37 !important;">
                        <i class="fa fa-star me-1 text-warning"></i> 100% Zero-Risk Guarantee
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="rounded-circle bg-white d-flex align-items-center justify-content-center me-3 shadow" style="width: 65px; height: 65px; font-size: 1.8rem; color: #0E4B37 !important;">
                            <i class="fa fa-shield-alt"></i>
                        </div>
                        <div>
                            <h3 class="text-white fw-bold mb-0" style="font-family: 'Cinzel', serif; font-size: 1.45rem;">30-Year Verified Legal Titles</h3>
                            <small class="text-white-50 fw-semibold">Scrutinized & Approved</small>
                        </div>
                    </div>
                    <p class="text-white-50 fs-6 mb-4">Every land parcel and property listing undergoes rigorous 30-year link document verification, Revenue EC check, and senior advocate title scrutiny before being published.</p>
                </div>
                <div class="border-top border-light border-opacity-25 pt-3 mt-3">
                    <div class="row g-2 text-white-50 small">
                        <div class="col-6"><i class="fa fa-check-circle text-white me-1"></i> EC Verified</div>
                        <div class="col-6"><i class="fa fa-check-circle text-white me-1"></i> Revenue Scrutiny</div>
                        <div class="col-6"><i class="fa fa-check-circle text-white me-1"></i> 30-Yr Link Docs</div>
                        <div class="col-6"><i class="fa fa-check-circle text-white me-1"></i> Advocate Scrutiny</div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- 5 Mini Cards Grid (Right Column) -->
        <div class="col-lg-7">
            <div class="row g-3">
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="why-choose-mini-card">
                        <div class="d-flex align-items-center mb-2">
                            <div class="icon-box me-3">
                                <i class="fa fa-stamp"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0 text-dark">RERA & APCRDA Approved</h6>
                                <small class="text-primary fw-semibold" style="font-size: 0.78rem;">Statutory Compliance</small>
                            </div>
                        </div>
                        <p class="text-muted small mb-0" style="font-size: 0.82rem;">Layouts sanctioned by government urban development authorities with clear master plan clearances.</p>
                    </div>
                </div>
                
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="why-choose-mini-card">
                        <div class="d-flex align-items-center mb-2">
                            <div class="icon-box me-3">
                                <i class="fa fa-percentage"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0 text-dark">0% Hidden Commission</h6>
                                <small class="text-primary fw-semibold" style="font-size: 0.78rem;">Direct Pricing</small>
                            </div>
                        </div>
                        <p class="text-muted small mb-0" style="font-size: 0.82rem;">No secret markup or unexpected fees. Get honest developer rates and crystal-clear cost breakdowns.</p>
                    </div>
                </div>

                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="why-choose-mini-card">
                        <div class="d-flex align-items-center mb-2">
                            <div class="icon-box me-3">
                                <i class="fa fa-university"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0 text-dark">Fast Bank Loan Processing</h6>
                                <small class="text-primary fw-semibold" style="font-size: 0.78rem;">SBI, HDFC, IDFC Tie-Ups</small>
                            </div>
                        </div>
                        <p class="text-muted small mb-0" style="font-size: 0.82rem;">Direct bank liaisons ensure instant pre-approved property loan sanctions with lowest interest rates.</p>
                    </div>
                </div>

                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="why-choose-mini-card">
                        <div class="d-flex align-items-center mb-2">
                            <div class="icon-box me-3">
                                <i class="fa fa-car"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0 text-dark">Free Guided Site Tours</h6>
                                <small class="text-primary fw-semibold" style="font-size: 0.78rem;">Doorstep Pickup Service</small>
                            </div>
                        </div>
                        <p class="text-muted small mb-0" style="font-size: 0.82rem;">Schedule free vehicle pickup for your family to physically inspect plots and surrounding infrastructure.</p>
                    </div>
                </div>

                <div class="col-md-12 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="why-choose-mini-card">
                        <div class="d-flex align-items-center mb-2">
                            <div class="icon-box me-3">
                                <i class="fa fa-balance-scale"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0 text-dark">Registration & Mutation Support</h6>
                                <small class="text-primary fw-semibold" style="font-size: 0.78rem;">Complete Legal Handholding</small>
                            </div>
                        </div>
                        <p class="text-muted small mb-0" style="font-size: 0.82rem;">Our legal executives accompany you to the Sub-Registrar office for deed registration and title transfer.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- WHY CHOOSE US End -->

<!-- EXPLORE OUR ONGOING REAL ESTATE PROJECTS ACROSS INDIA Start -->
<div class="container-fluid py-5 px-lg-5" id="presence">
    <div class="text-center mx-auto mb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 860px;">
        <span class="badge bg-light text-primary px-3 py-2 rounded-pill fw-semibold mb-2" style="letter-spacing: 1.2px; font-size: 0.82rem;">OUR ONGOING PROJECTS</span>
        <h2 class="mb-3 text-dark fw-bold" style="font-family: 'Cinzel', serif; font-size: 2rem; letter-spacing: 0.5px;">Explore Our Ongoing Real Estate Projects Across India</h2>
        <p class="text-muted fs-6 mb-3" style="line-height: 1.6;">Explore state-wise ongoing developments curated for smart living and high-value investments.<br>With Pudami Consultancy Services, find properties that match your goals with transparency and expertise.</p>
        <div class="d-flex justify-content-center align-items-center mb-4">
            <div style="width: 45px; height: 2px; background: #00B98E; border-radius: 2px;"></div>
            <div style="width: 7px; height: 7px; background: #0E4B37; border-radius: 50%; margin: 0 10px;"></div>
            <div style="width: 45px; height: 2px; background: #00B98E; border-radius: 2px;"></div>
        </div>
    </div>

    <!-- 5 State Cards Row (Matching 2nd Shared Image with Hover State Details Reveal) -->
    <div class="state-showcase-grid">
        <!-- Telangana -->
        <div class="wow fadeInUp" data-wow-delay="0.1s">
            <a href="property-list.php?location=Telangana" class="state-card">
                <div class="state-img-box">
                    <img src="img/charminar-telangana.jpg" alt="Telangana Real Estate" class="state-img" loading="lazy">
                    <div class="state-hover-overlay">
                        <div class="state-hover-content">
                            <h3 class="state-name">Telangana</h3>
                            <span class="state-btn">View Projects</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Andhra Pradesh -->
        <div class="wow fadeInUp" data-wow-delay="0.2s">
            <a href="property-list.php?location=Andhra+Pradesh" class="state-card">
                <div class="state-img-box">
                    <img src="img/Dhyana Buddha-Vijayawada-Andhra Pradesh.jpg" alt="Andhra Pradesh Real Estate" class="state-img" loading="lazy">
                    <div class="state-hover-overlay">
                        <div class="state-hover-content">
                            <h3 class="state-name">Andhra Pradesh</h3>
                            <span class="state-btn">View Projects</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Karnataka -->
        <div class="wow fadeInUp" data-wow-delay="0.3s">
            <a href="property-list.php?location=Karnataka" class="state-card">
                <div class="state-img-box">
                    <img src="img/karnataka_hd.jpg" alt="Karnataka Real Estate" class="state-img" loading="lazy">
                    <div class="state-hover-overlay">
                        <div class="state-hover-content">
                            <h3 class="state-name">Karnataka</h3>
                            <span class="state-btn">View Projects</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Kerala -->
        <div class="wow fadeInUp" data-wow-delay="0.4s">
            <a href="property-list.php?location=Kerala" class="state-card">
                <div class="state-img-box">
                    <img src="img/kerala_hd.jpg" alt="Kerala Real Estate" class="state-img" loading="lazy">
                    <div class="state-hover-overlay">
                        <div class="state-hover-content">
                            <h3 class="state-name">Kerala</h3>
                            <span class="state-btn">View Projects</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Tamil Nadu -->
        <div class="wow fadeInUp" data-wow-delay="0.5s">
            <a href="property-list.php?location=Tamil+Nadu" class="state-card">
                <div class="state-img-box">
                    <img src="img/tamilnadu_img.jpg" alt="Tamil Nadu Real Estate" class="state-img" loading="lazy">
                    <div class="state-hover-overlay">
                        <div class="state-hover-content">
                            <h3 class="state-name">Tamil Nadu</h3>
                            <span class="state-btn">View Projects</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
<!-- EXPLORE OUR ONGOING REAL ESTATE PROJECTS ACROSS INDIA End -->

<!-- BUILDING & COMMUNITY AMENITIES Section Start -->
<div class="container-fluid py-5 bg-light px-lg-5">
    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
        <span class="badge bg-light text-primary px-3 py-2 rounded-pill fw-semibold mb-2">Modern Living</span>
        <h2 class="mb-3 text-dark fw-bold" style="font-family: 'Cinzel', serif;">Building & Layout Amenities</h2>
        <p class="text-dark">Every layout and duplex project approved by Pudami Consultancy Services includes world-class infrastructure and lifestyle features.</p>
    </div>
    <div class="row g-4 text-center">
        <div class="col-6 col-md-3 wow fadeInUp" data-wow-delay="0.1s">
            <div class="amenity-card">
                <div class="amenity-icon">
                    <i class="fa fa-user-shield"></i>
                </div>
                <h6 class="fw-bold text-dark mb-1">24/7 Security & CCTV</h6>
                <small class="text-dark">Gated Entry & Guard Patrol</small>
            </div>
        </div>
        <div class="col-6 col-md-3 wow fadeInUp" data-wow-delay="0.2s">
            <div class="amenity-card">
                <div class="amenity-icon">
                    <i class="fa fa-swimming-pool"></i>
                </div>
                <h6 class="fw-bold text-dark mb-1">Clubhouse & Pool</h6>
                <small class="text-dark">Community Recreation</small>
            </div>
        </div>
        <div class="col-6 col-md-3 wow fadeInUp" data-wow-delay="0.3s">
            <div class="amenity-card">
                <div class="amenity-icon">
                    <i class="fa fa-tree"></i>
                </div>
                <h6 class="fw-bold text-dark mb-1">Landscaped Parks</h6>
                <small class="text-dark">Greenery & Jogging Tracks</small>
            </div>
        </div>
        <div class="col-6 col-md-3 wow fadeInUp" data-wow-delay="0.4s">
            <div class="amenity-card">
                <div class="amenity-icon">
                    <i class="fa fa-solar-panel"></i>
                </div>
                <h6 class="fw-bold text-dark mb-1">Solar Lighting & EV</h6>
                <small class="text-dark">Eco Street Lights & EV Charging</small>
            </div>
        </div>
        <div class="col-6 col-md-3 wow fadeInUp" data-wow-delay="0.5s">
            <div class="amenity-card">
                <div class="amenity-icon">
                    <i class="fa fa-child"></i>
                </div>
                <h6 class="fw-bold text-dark mb-1">Children Play Zone</h6>
                <small class="text-dark">Safe Play Area & Equipment</small>
            </div>
        </div>
        <div class="col-6 col-md-3 wow fadeInUp" data-wow-delay="0.6s">
            <div class="amenity-card">
                <div class="amenity-icon">
                    <i class="fa fa-water"></i>
                </div>
                <h6 class="fw-bold text-dark mb-1">Underground Drainage</h6>
                <small class="text-dark">Rainwater Harvesting System</small>
            </div>
        </div>
        <div class="col-6 col-md-3 wow fadeInUp" data-wow-delay="0.7s">
            <div class="amenity-card">
                <div class="amenity-icon">
                    <i class="fa fa-road"></i>
                </div>
                <h6 class="fw-bold text-dark mb-1">40ft & 60ft Roads</h6>
                <small class="text-dark">Wide Blacktop Roads & Footpaths</small>
            </div>
        </div>
        <div class="col-6 col-md-3 wow fadeInUp" data-wow-delay="0.8s">
            <div class="amenity-card">
                <div class="amenity-icon">
                    <i class="fa fa-bolt"></i>
                </div>
                <h6 class="fw-bold text-dark mb-1">Underground Cables</h6>
                <small class="text-dark">Substation & 24/7 Power Backup</small>
            </div>
        </div>
    </div>
</div>
<!-- AMENITIES End -->

<!-- 3rd Shared Image Section: Banking & Loan Partners Carousel -->
<div class="container-fluid py-5 bg-white px-4 px-lg-5">
    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 750px;">
        <span class="section-pill-badge" style="font-size: 0.95rem; padding: 8px 28px;">Financial Tie-ups</span>
        <h2 class="mt-3 mb-3 text-dark fw-bold" style="font-family: 'Cinzel', serif; letter-spacing: 0.5px;">OUR APPROVED HOME LOAN BANKING PARTNERS</h2>
        <p class="text-dark fs-6">Fast-track loan sanctions, pre-approved property verification, and competitive interest rates through our national banking network.</p>
    </div>
    
    <!-- Bank Partners Owl Carousel (Enhanced Large Interactive Logo Cards) -->
    <div class="owl-carousel bank-carousel py-4">
        <div class="bank-logo-item">
            <img src="img/SBI-Logo.jpg" alt="State Bank of India SBI Home Loan">
        </div>
        <div class="bank-logo-item">
            <img src="img/hdfc_img.png" alt="HDFC Bank Home Loan">
        </div>
        <div class="bank-logo-item">
            <img src="img/idfcimg.png" alt="IDFC FIRST Bank">
        </div>
        <div class="bank-logo-item">
            <img src="img/LIC-Logo.jpg" alt="LIC Housing Finance">
        </div>
    </div>
</div>
<!-- Banking Partners End -->

<!-- Call To Action Designer Banner Start (With SVG Vector Background & Glassmorphic Highlights) -->
<div class="container-fluid py-5 px-lg-5">
    <div class="cta-banner-wrapper">
        <!-- SVG Vector Background Pattern -->
        <svg class="cta-bg-svg-waves" viewBox="0 0 1200 400" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <linearGradient id="ctaGrad1" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" stop-color="#00B98E" stop-opacity="0.30" />
                    <stop offset="100%" stop-color="#F59E0B" stop-opacity="0.08" />
                </linearGradient>
                <linearGradient id="ctaGrad2" x1="100%" y1="0%" x2="0%" y2="100%">
                    <stop offset="0%" stop-color="#00B98E" stop-opacity="0.20" />
                    <stop offset="100%" stop-color="#0E2E50" stop-opacity="0" />
                </linearGradient>
            </defs>
            <path d="M0,160 Q300,320 600,180 T1200,220 L1200,400 L0,400 Z" fill="url(#ctaGrad1)" />
            <path d="M0,240 Q400,110 800,280 T1200,140 L1200,400 L0,400 Z" fill="url(#ctaGrad2)" />
            <circle cx="1060" cy="70" r="170" fill="#00B98E" opacity="0.10" />
        </svg>

        <div class="row align-items-center cta-content-z2">
            <div class="col-lg-7 mb-4 mb-lg-0">
                <div class="d-flex align-items-center mb-3">
                    <div class="cta-icon-badge me-3 shadow">
                        <i class="fa fa-headset"></i>
                    </div>
                    <div>
                        <span class="section-pill-badge" style="background: rgba(255, 255, 255, 0.12) !important; color: #F59E0B !important; border: 1px solid rgba(245, 158, 11, 0.4) !important; font-size: 0.88rem; padding: 6px 22px;">Direct Consultation</span>
                    </div>
                </div>
                <h2 class="display-6 text-white fw-bold mb-3" style="font-family: 'Cinzel', serif; letter-spacing: 0.5px;">Speak With Our Certified Real Estate Advisors</h2>
                <p class="text-white-50 fs-5 mb-0" style="max-width: 650px;">Have questions about RERA clearance, EC verification, or site visit scheduling? Our senior property consultants are here to guide you.</p>
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
<!-- Call To Action End -->

<!-- Featured Properties Start (Handpicked Portfolio Placed After CTA Banner) -->
<div class="container-fluid py-5 px-lg-5">
    <div class="row g-0 gx-5 align-items-end mb-4">
        <div class="col-lg-6">
            <div class="text-start mx-auto mb-3 wow slideInLeft" data-wow-delay="0.1s">
                <span class="section-pill-badge" style="font-size: 0.95rem; padding: 8px 28px;">Handpicked Portfolio</span>
                <h2 class="mt-3 mb-3 text-dark fw-bold" style="font-family: 'Cinzel', serif;">Featured Property Showcase</h2>
                <p class="text-dark">Explore verified duplex villas, prime layout plots, and luxury residences managed by Pudami Consultancy Services.</p>
            </div>
        </div>
        <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
            <a href="property-list.php" class="btn btn-primary px-4 py-3 text-white fw-bold"><i class="fa fa-list me-2"></i>View All Properties</a>
        </div>
    </div>

    <div class="row g-4">
        <!-- Property Item 1 -->
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="property-item rounded-4 overflow-hidden bg-white shadow-sm h-100">
                <div class="position-relative overflow-hidden">
                    <a href="property-list.php"><img class="img-fluid w-100" src="img/PREMIUM DUPLEX PROJECT.jpg" alt="Premium Duplex Project" style="height: 240px; object-fit: cover;"></a>
                </div>
                <div class="p-4">
                    <a class="d-block h5 mb-2 text-dark text-decoration-none fw-bold" href="property-list.php">Premium Duplex Gated Community</a>
                    <p class="text-dark mb-0"><i class="fa fa-map-marker-alt text-primary me-2"></i>Vijayawada Main Highway, AP</p>
                </div>
            </div>
        </div>

        <!-- Property Item 2 -->
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="property-item rounded-4 overflow-hidden bg-white shadow-sm h-100">
                <div class="position-relative overflow-hidden">
                    <a href="property-list.php"><img class="img-fluid w-100" src="img/DUPLEX IN PRIME LAYOUT.jpg" alt="Duplex in Prime Layout" style="height: 240px; object-fit: cover;"></a>
                </div>
                <div class="p-4">
                    <a class="d-block h5 mb-2 text-dark text-decoration-none fw-bold" href="property-list.php">Duplex In Prime Approved Layout</a>
                    <p class="text-dark mb-0"><i class="fa fa-map-marker-alt text-primary me-2"></i>Gachibowli Outer Ring, Hyderabad, TS</p>
                </div>
            </div>
        </div>

        <!-- Property Item 3 -->
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="property-item rounded-4 overflow-hidden bg-white shadow-sm h-100">
                <div class="position-relative overflow-hidden">
                    <a href="property-list.php"><img class="img-fluid w-100" src="img/STYLISH MODERN HOME.jpg" alt="Stylish Modern Home" style="height: 240px; object-fit: cover;"></a>
                </div>
                <div class="p-4">
                    <a class="d-block h5 mb-2 text-dark text-decoration-none fw-bold" href="property-list.php">Stylish Modern Eco Villa</a>
                    <p class="text-dark mb-0"><i class="fa fa-map-marker-alt text-primary me-2"></i>Whitefield IT Hub, Bengaluru, KA</p>
                </div>
            </div>
        </div>

        <!-- Property Item 4 (Residential Plotted Layout) -->
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="property-item rounded-4 overflow-hidden bg-white shadow-sm h-100">
                <div class="position-relative overflow-hidden">
                    <a href="property-list.php?type=Residential+Plot"><img class="img-fluid w-100" src="img/gated_plots_layout.jpg" alt="Gated Layout Plots" style="height: 240px; object-fit: cover;"></a>
                </div>
                <div class="p-4">
                    <a class="d-block h5 mb-2 text-dark text-decoration-none fw-bold" href="property-list.php?type=Residential+Plot">Sector Approved Gated Layout Plots</a>
                    <p class="text-dark mb-0"><i class="fa fa-map-marker-alt text-primary me-2"></i>Smart City Corridor, Visakhapatnam, AP</p>
                </div>
            </div>
        </div>

        <!-- Property Item 5 (Independent Luxury Villa) -->
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="property-item rounded-4 overflow-hidden bg-white shadow-sm h-100">
                <div class="position-relative overflow-hidden">
                    <a href="property-list.php?type=Independent+Villa"><img class="img-fluid w-100" src="img/independent_luxury_house.jpg" alt="Independent Luxury Residence" style="height: 240px; object-fit: cover;"></a>
                </div>
                <div class="p-4">
                    <a class="d-block h5 mb-2 text-dark text-decoration-none fw-bold" href="property-list.php?type=Independent+Villa">Executive Independent Luxury Residence</a>
                    <p class="text-dark mb-0"><i class="fa fa-map-marker-alt text-primary me-2"></i>Capital Region, Amaravati, AP</p>
                </div>
            </div>
        </div>

        <!-- Property Item 6 (Scenic Agro Farmland) -->
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="property-item rounded-4 overflow-hidden bg-white shadow-sm h-100">
                <div class="position-relative overflow-hidden">
                    <a href="property-list.php?type=Farmland+%26+Agro+Land"><img class="img-fluid w-100" src="img/scenic_farmland_plot.jpg" alt="Scenic Agro Farmland" style="height: 240px; object-fit: cover;"></a>
                </div>
                <div class="p-4">
                    <a class="d-block h5 mb-2 text-dark text-decoration-none fw-bold" href="property-list.php?type=Farmland+%26+Agro+Land">Scenic Eco Agro &amp; Managed Farmland</a>
                    <p class="text-dark mb-0"><i class="fa fa-map-marker-alt text-primary me-2"></i>Ananthagiri Hills Agro Zone, TS</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Featured Properties End -->

<script>
function showState(stateId, btn) {
    document.querySelectorAll('.state-tab-btn').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    
    document.querySelectorAll('.state-panel').forEach(p => p.classList.add('d-none'));
    const panel = document.getElementById('state-' + stateId);
    if (panel) {
        panel.classList.remove('d-none');
    }
}

const stateCitiesMap = {
    'Andhra Pradesh': ['Vijayawada', 'Amaravati', 'Visakhapatnam', 'Tirupati', 'Guntur', 'Kakinada', 'Rajahmundry', 'Nellore', 'Kurnool', 'Anantapur'],
    'Arunachal Pradesh': ['Itanagar', 'Naharlagun', 'Pasighat', 'Tawang'],
    'Assam': ['Guwahati', 'Dibrugarh', 'Silchar', 'Jorhat', 'Tezpur'],
    'Bihar': ['Patna', 'Gaya', 'Bhagalpur', 'Muzaffarpur', 'Purnia'],
    'Chhattisgarh': ['Raipur', 'Bhilai', 'Bilaspur', 'Korba'],
    'Delhi NCR': ['New Delhi', 'Gurugram', 'Noida', 'Greater Noida', 'Faridabad', 'Ghaziabad'],
    'Goa': ['Panaji', 'Margao', 'Vasco da Gama', 'Mapusa'],
    'Gujarat': ['Ahmedabad', 'GIFT City', 'Surat', 'Vadodara', 'Rajkot', 'Gandhinagar'],
    'Haryana': ['Gurugram', 'Faridabad', 'Panipat', 'Ambala', 'Karnal'],
    'Himachal Pradesh': ['Shimla', 'Dharamshala', 'Manali', 'Solan'],
    'Jharkhand': ['Ranchi', 'Jamshedpur', 'Dhanbad', 'Bokaro'],
    'Karnataka': ['Bengaluru', 'Whitefield', 'Mysuru', 'Mangaluru', 'Hubballi', 'Belagavi'],
    'Kerala': ['Kochi', 'Thiruvananthapuram', 'Kozhikode', 'Thrissur', 'Kollam'],
    'Madhya Pradesh': ['Bhopal', 'Indore', 'Gwalior', 'Jabalpur', 'Ujjain'],
    'Maharashtra': ['Mumbai', 'Navi Mumbai', 'Pune', 'Nagpur', 'Nashik', 'Thane'],
    'Manipur': ['Imphal', 'Churachandpur'],
    'Meghalaya': ['Shillong', 'Tura'],
    'Mizoram': ['Aizawl', 'Lunglei'],
    'Nagaland': ['Kohima', 'Dimapur'],
    'Odisha': ['Bhubaneswar', 'Cuttack', 'Rourkela', 'Puri', 'Sambalpur'],
    'Punjab': ['Ludhiana', 'Amritsar', 'Jalandhar', 'Patiala', 'Mohali'],
    'Rajasthan': ['Jaipur', 'Udaipur', 'Jodhpur', 'Kota', 'Ajmer'],
    'Sikkim': ['Gangtok', 'Namchi'],
    'Tamil Nadu': ['Chennai', 'OMR', 'Coimbatore', 'Madurai', 'Salem', 'Tiruchirappalli'],
    'Telangana': ['Hyderabad', 'Gachibowli', 'Warangal', 'Nizamabad', 'Karimnagar', 'Khammam'],
    'Tripura': ['Agartala', 'Udaipur'],
    'Uttar Pradesh': ['Lucknow', 'Kanpur', 'Varanasi', 'Agra', 'Prayagraj', 'Noida', 'Ghaziabad'],
    'Uttarakhand': ['Dehradun', 'Haridwar', 'Roorkee', 'Haldwani', 'Rishikesh'],
    'West Bengal': ['Kolkata', 'New Town', 'Siliguri', 'Durgapur', 'Asansol']
};

function updateCityDropdown(selectedState) {
    const citySelect = document.getElementById('searchCity');
    if (!citySelect) return;
    citySelect.innerHTML = '<option value="">Select City / Hub</option>';
    
    if (selectedState && stateCitiesMap[selectedState]) {
        stateCitiesMap[selectedState].forEach(city => {
            const opt = document.createElement('option');
            opt.value = city;
            opt.textContent = city;
            citySelect.appendChild(opt);
        });
    } else {
        const allCities = [...new Set(Object.values(stateCitiesMap).flat())];
        allCities.forEach(city => {
            const opt = document.createElement('option');
            opt.value = city;
            opt.textContent = city;
            citySelect.appendChild(opt);
        });
    }
}
</script>

<?php include __DIR__ . '/footer.php'; ?>

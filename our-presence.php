<?php
$activePage = 'presence';
include __DIR__ . '/header.php';

// Complete list of all 28 Indian States with local authentic photography
$allStates = [
    ['name' => 'ANDHRA PRADESH',     'slug' => 'andhra-pradesh',     'img' => 'img/our_presence/andhra-pradesh.jpeg',   'url' => 'properties.php?state=andhra-pradesh'],
    ['name' => 'ARUNACHAL PRADESH',  'slug' => 'arunachal-pradesh',  'img' => 'img/our_presence/arunachal-pradesh.jpg', 'url' => 'arunachal-pradesh.php'],
    ['name' => 'ASSAM',              'slug' => 'assam',              'img' => 'img/our_presence/assam.jpg',             'url' => 'properties.php?state=assam'],
    ['name' => 'BIHAR',              'slug' => 'bihar',              'img' => 'img/our_presence/bihar.jpg',             'url' => 'properties.php?state=bihar'],
    ['name' => 'CHHATTISGARH',       'slug' => 'chhattisgarh',       'img' => 'img/our_presence/chhattisgarh.jpeg',     'url' => 'properties.php?state=chhattisgarh'],
    ['name' => 'GOA',                'slug' => 'goa',                'img' => 'img/our_presence/goa.jpeg',              'url' => 'properties.php?state=goa'],
    ['name' => 'GUJARAT',            'slug' => 'gujarat',            'img' => 'img/our_presence/gujarat.jpg',           'url' => 'properties.php?state=gujarat'],
    ['name' => 'HARYANA',            'slug' => 'haryana',            'img' => 'img/our_presence/haryana.jpg',           'url' => 'properties.php?state=haryana'],
    ['name' => 'HIMACHAL PRADESH',   'slug' => 'himachal-pradesh',   'img' => 'img/our_presence/himachal-pradesh.jpg',  'url' => 'properties.php?state=himachal-pradesh'],
    ['name' => 'JHARKHAND',          'slug' => 'jharkhand',          'img' => 'img/our_presence/jharkhand.jpeg',        'url' => 'properties.php?state=jharkhand'],
    ['name' => 'KARNATAKA',          'slug' => 'karnataka',          'img' => 'img/our_presence/karnataka.jpeg',        'url' => 'properties.php?state=karnataka'],
    ['name' => 'KERALA',             'slug' => 'kerala',             'img' => 'img/our_presence/kerala.jpeg',           'url' => 'properties.php?state=kerala'],
    ['name' => 'MADHYA PRADESH',     'slug' => 'madhya-pradesh',     'img' => 'img/our_presence/madhya-pradesh.jpg',    'url' => 'properties.php?state=madhya-pradesh'],
    ['name' => 'MAHARASHTRA',        'slug' => 'maharashtra',        'img' => 'img/our_presence/maharashtra.jpg',       'url' => 'properties.php?state=maharashtra'],
    ['name' => 'MANIPUR',            'slug' => 'manipur',            'img' => 'img/our_presence/manipur.jpg',           'url' => 'properties.php?state=manipur'],
    ['name' => 'MEGHALAYA',          'slug' => 'meghalaya',          'img' => 'img/our_presence/meghalaya.jpg',         'url' => 'properties.php?state=meghalaya'],
    ['name' => 'MIZORAM',            'slug' => 'mizoram',            'img' => 'img/our_presence/mizoram.jpeg',          'url' => 'properties.php?state=mizoram'],
    ['name' => 'NAGALAND',           'slug' => 'nagaland',           'img' => 'img/our_presence/nagaland.jpeg',         'url' => 'properties.php?state=nagaland'],
    ['name' => 'ODISHA',             'slug' => 'odisha',             'img' => 'img/our_presence/odisha.jpg',            'url' => 'properties.php?state=odisha'],
    ['name' => 'PUNJAB',             'slug' => 'punjab',             'img' => 'img/our_presence/punjab.jpg',            'url' => 'properties.php?state=punjab'],
    ['name' => 'RAJASTHAN',          'slug' => 'rajasthan',          'img' => 'img/our_presence/rajasthan.jpg',         'url' => 'properties.php?state=rajasthan'],
    ['name' => 'SIKKIM',             'slug' => 'sikkim',             'img' => 'img/our_presence/sikkim.jpg',            'url' => 'properties.php?state=sikkim'],
    ['name' => 'TAMIL NADU',         'slug' => 'tamil-nadu',         'img' => 'img/our_presence/tamil-nadu.jpeg',       'url' => 'properties.php?state=tamil-nadu'],
    ['name' => 'TELANGANA',          'slug' => 'telangana',          'img' => 'img/our_presence/telangana.jpeg',        'url' => 'properties.php?state=telangana'],
    ['name' => 'TRIPURA',            'slug' => 'tripura',            'img' => 'img/our_presence/tripura.jpg',           'url' => 'properties.php?state=tripura'],
    ['name' => 'UTTAR PRADESH',      'slug' => 'uttar-pradesh',      'img' => 'img/our_presence/uttar-pradesh.jpg',     'url' => 'properties.php?state=uttar-pradesh'],
    ['name' => 'UTTARAKHAND',        'slug' => 'uttarakhand',        'img' => 'img/our_presence/uttarakhand.jpg',       'url' => 'properties.php?state=uttarakhand'],
    ['name' => 'WEST BENGAL',        'slug' => 'west-bengal',        'img' => 'img/our_presence/west-bengal.jpeg',      'url' => 'properties.php?state=west-bengal'],
];
?>

<!-- Custom CSS for Our Presence Page -->
<style>
/* Hero Header Breadcrumb */
.presence-hero-banner {
    background: linear-gradient(rgba(14, 46, 80, 0.8), rgba(7, 56, 40, 0.85)), url('img/call-to-action.jpg') center center no-repeat;
    background-size: cover !important;
}

/* State Cards Showcase Grid */
.state-presence-card {
    background: #ffffff;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
    border: 1px solid rgba(0, 0, 0, 0.06);
    transition: all 0.35s cubic-bezier(0.165, 0.84, 0.44, 1);
    display: flex;
    flex-direction: column;
    height: 100%;
    text-decoration: none !important;
}
.state-presence-card:hover {
    transform: translateY(-7px);
    box-shadow: 0 14px 30px rgba(14, 46, 80, 0.14);
    border-color: #00B98E;
}
.state-card-img-wrap {
    position: relative;
    width: 100%;
    height: 190px;
    overflow: hidden;
    background: #f1f5f9;
}
.state-card-img-wrap img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s cubic-bezier(0.165, 0.84, 0.44, 1);
}
.state-presence-card:hover .state-card-img-wrap img {
    transform: scale(1.08);
}
.state-card-body {
    padding: 16px 14px;
    text-align: center;
    background: #ffffff;
    display: flex;
    align-items: center;
    justify-content: center;
    border-top: 1px solid #f1f5f9;
}
.state-card-title {
    font-family: 'Cinzel', serif;
    font-size: 0.95rem;
    font-weight: 700;
    letter-spacing: 0.6px;
    color: #0E2E50;
    margin: 0;
    transition: color 0.25s ease;
}
.state-presence-card:hover .state-card-title {
    color: #00B98E;
}

/* Section 1: FIND THE PERFECT PROPERTY WITH US (Screenshot 1 Exact) */
.perfect-property-section {
    background: #ffffff;
}
.perfect-property-heading {
    font-family: 'Cinzel', serif;
    font-size: 2.35rem;
    font-weight: 800;
    color: #0E4B37;
    letter-spacing: 1px;
    text-transform: uppercase;
    margin-bottom: 8px;
}
.perfect-property-divider {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 6px;
    margin-bottom: 45px;
}
.perfect-property-divider .dots {
    display: flex;
    gap: 4px;
}
.perfect-property-divider .dot {
    width: 5px;
    height: 5px;
    border-radius: 50%;
    background-color: #0084FF;
}
.perfect-property-divider .bar {
    width: 38px;
    height: 3px;
    background-color: #0084FF;
    border-radius: 2px;
}
.feature-pillar-card {
    background: #ffffff;
    border-radius: 6px;
    padding: 32px 28px;
    height: 100%;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
    border: 1px solid rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
    display: flex;
    flex-direction: column;
}
.feature-pillar-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 28px rgba(14, 46, 80, 0.09);
    border-color: rgba(0, 185, 142, 0.4);
}
.feature-pillar-header {
    display: flex;
    align-items: flex-start;
    gap: 16px;
    margin-bottom: 16px;
}
.feature-pillar-icon {
    flex-shrink: 0;
    width: 48px;
    height: 48px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #0E2E50;
}
.feature-pillar-icon svg {
    width: 42px;
    height: 42px;
    fill: currentColor;
}
.feature-pillar-title {
    font-family: 'Outfit', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
    font-size: 1.15rem;
    font-weight: 600;
    color: #0E2E50;
    line-height: 1.35;
    margin: 4px 0 0 0;
}
.feature-pillar-desc {
    font-family: 'Outfit', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
    font-size: 0.96rem;
    line-height: 1.65;
    color: #4A5568;
    margin: 0;
}

/* Section 2: Explore Our Wide Range of Premium Properties Carousel (Screenshots 2, 3, 4) */
.range-slider-section {
    background: #F8FAFC;
}
.range-slider-heading {
    font-family: 'Outfit', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
    font-size: 2.3rem;
    font-weight: 400;
    color: #1A2238;
    letter-spacing: -0.2px;
    margin-bottom: 35px;
}
.range-carousel-wrap {
    max-width: 1100px;
    margin: 0 auto;
    position: relative;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.09);
    background: #0E1926;
    height: 420px;
}
@media (max-width: 768px) {
    .range-carousel-wrap {
        height: 280px;
    }
}
.range-slide-wrapper {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.75s cubic-bezier(0.25, 1, 0.5, 1), transform 0.75s cubic-bezier(0.25, 1, 0.5, 1);
    transform: scale(1.02);
    z-index: 1;
}
.range-slide-wrapper.active {
    opacity: 1;
    visibility: visible;
    transform: scale(1);
    z-index: 2;
}
.range-slide-item {
    position: relative;
    width: 100%;
    height: 100%;
    background-size: cover !important;
    background-position: center center !important;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
}
.range-slide-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(14, 25, 38, 0.55);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 20px;
}
.range-slide-stars {
    display: flex;
    gap: 6px;
    margin-bottom: 14px;
    color: #ffffff;
    font-size: 1.15rem;
}
.range-slide-title {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
    font-size: 1.65rem;
    font-weight: 700;
    color: #ffffff;
    margin: 0;
    letter-spacing: 0.3px;
    text-shadow: 0 2px 10px rgba(0, 0, 0, 0.7);
}

/* Nav Arrows */
.range-arrow {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 44px;
    height: 44px;
    border-radius: 50%;
    background: rgba(14, 46, 80, 0.65);
    color: #ffffff;
    border: none;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    z-index: 10;
    transition: all 0.25s ease;
    opacity: 0;
}
.range-carousel-wrap:hover .range-arrow {
    opacity: 1;
}
.range-arrow:hover {
    background: #0077FF;
    transform: translateY(-50%) scale(1.1);
}
.range-arrow-prev {
    left: 18px;
}
.range-arrow-next {
    right: 18px;
}

/* Slider Navigation Dots matching screenshots 2, 3, 4 */
.range-carousel-indicators {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 12px;
    margin-top: 24px;
}
.range-indicator-dot {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background-color: #CBD5E1;
    border: none;
    padding: 0;
    cursor: pointer;
    transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
}
.range-indicator-dot:hover {
    background-color: #94A3B8;
    transform: scale(1.15);
}
.range-indicator-dot.active {
    background-color: #0077FF;
    width: 14px;
    height: 14px;
    box-shadow: 0 2px 8px rgba(0, 119, 255, 0.45);
}

/* Section 3: HOMELANDS-UPPALURU Project Showcase (Screenshot 5 Exact) */
.homelands-section {
    background: #ffffff;
}
.homelands-heading {
    font-family: 'Cinzel', serif;
    font-size: 1.75rem;
    font-weight: 800;
    color: #0E4B37;
    letter-spacing: 0.8px;
    text-transform: uppercase;
    line-height: 1.35;
    margin-bottom: 28px;
}
.homelands-text {
    font-family: 'Outfit', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
    font-size: 1.05rem;
    line-height: 1.8;
    color: #2D3748;
    margin-bottom: 20px;
}
.homelands-img-wrap {
    position: relative;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
}
.homelands-img-wrap img {
    width: 100%;
    height: auto;
    display: block;
    object-fit: cover;
}

/* Section 4: CTA Box */
.presence-cta-box {
    background: linear-gradient(135deg, #0E2E50 0%, #0E4B37 100%) !important;
    border-radius: 16px !important;
    padding: 55px 35px !important;
    color: #ffffff !important;
    box-shadow: 0 16px 40px rgba(14, 46, 80, 0.25) !important;
    border: 1px solid rgba(255, 255, 255, 0.15) !important;
}
.presence-cta-title {
    font-family: 'Cinzel', serif !important;
    font-size: 2.25rem !important;
    font-weight: 800 !important;
    letter-spacing: 1.2px !important;
    color: #FFFFFF !important;
    text-shadow: 0 2px 10px rgba(0, 0, 0, 0.5) !important;
    margin-bottom: 14px !important;
}
.presence-cta-desc {
    color: #F8FAFC !important;
    font-size: 1.1rem !important;
    line-height: 1.75 !important;
    opacity: 0.95 !important;
    text-shadow: 0 1px 4px rgba(0, 0, 0, 0.35) !important;
}
.range-carousel-wrap .carousel-item {
    transition: transform 0.8s ease-in-out, opacity 0.8s ease-in-out !important;
}
</style>

<!-- ==========================================================================
     Header Start (Matching User Screenshot Layout with img/scenic_farmland_plot.jpg)
     ========================================================================== -->
<div class="container-fluid header bg-white p-0 mb-4 pb-lg-3 border-bottom">
    <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
        <div class="col-md-6 p-5 mt-lg-4">
            <span class="badge bg-light text-primary px-3 py-2 rounded-pill fw-semibold mb-3" style="letter-spacing: 1px; font-size: 0.82rem;">VERIFIED REAL ESTATE LISTINGS</span>
            <h1 class="display-5 animated fadeIn mb-3 fw-bold" style="font-family: 'Cinzel', serif; color: #0E2E50;">Our Presence</h1>
            <p class="text-muted fs-6 mb-4" style="max-width: 500px; line-height: 1.7;">Discover RERA-approved residential plots, luxury villas, agricultural farmland, and prime commercial lands across all 28 states of India with complete 30-year legal documentation verification.</p>
            <nav aria-label="breadcrumb" class="animated fadeIn">
                <ol class="breadcrumb text-uppercase mb-0 fw-bold" style="font-size: 0.88rem; letter-spacing: 0.8px;">
                    <li class="breadcrumb-item"><a href="index.php" class="text-muted text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item text-primary fw-bold active" aria-current="page" style="color: #00B98E !important;">Our Presence</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-6 animated fadeIn">
            <div class="position-relative overflow-hidden" style="max-height: 440px;">
                <img class="d-block w-100" src="img/scenic_farmland_plot.jpg" alt="Our Presence Scenic Farmland Plot" style="height: 440px; width: 100%; object-fit: cover;">
            </div>
        </div>
    </div>
</div>

<!-- ==========================================================================
     All 28 States Showcase Section
     ========================================================================== -->
<div class="container-fluid py-5 px-lg-5 bg-white">
    <div class="container py-2">
        <div class="text-center mx-auto mb-5" style="max-width: 800px;">
            <span class="text-uppercase fw-bold text-primary px-3 py-1 rounded-pill bg-light" style="font-size: 0.85rem; letter-spacing: 1.5px;">Pan-India Footprint</span>
            <h2 class="fw-bold mt-2 mb-3" style="font-family: 'Cinzel', serif; color: #0E2E50; font-size: 2.3rem; letter-spacing: 0.8px;">OUR PRESENCE ACROSS ALL 28 STATES</h2>
            <p class="text-muted" style="font-size: 1.05rem;">Explore verified residential layouts, open farmland, luxury villas, and prime commercial plots across every state in India.</p>
        </div>

        <div class="row g-4">
            <?php foreach ($allStates as $st): ?>
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="<?php echo htmlspecialchars($st['url']); ?>" class="state-presence-card">
                        <div class="state-card-img-wrap">
                            <img src="<?php echo htmlspecialchars($st['img']); ?>" alt="<?php echo htmlspecialchars($st['name']); ?>" loading="lazy" decoding="async">
                        </div>
                        <div class="state-card-body">
                            <h3 class="state-card-title"><?php echo htmlspecialchars($st['name']); ?></h3>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- Equal Vertical Spacing -->
<div class="my-5"></div>

<!-- ==========================================================================
     Section 1: FIND THE PERFECT PROPERTY WITH US (Screenshot 1 Exact)
     ========================================================================== -->
<div class="container-fluid py-5 px-lg-5 perfect-property-section">
    <div class="container py-2">
        <div class="text-center">
            <h2 class="perfect-property-heading">FIND THE PERFECT PROPERTY WITH US</h2>
            <div class="perfect-property-divider">
                <div class="dots">
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>
                <span class="bar"></span>
            </div>
        </div>

        <div class="row g-4">
            <!-- Card 1: Premium Residential Plots -->
            <div class="col-md-6 col-lg-4">
                <div class="feature-pillar-card">
                    <div class="feature-pillar-header">
                        <div class="feature-pillar-icon">
                            <!-- Building Outline SVG -->
                            <svg viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                <path d="M128 148v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12zm140 12h40c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12zm-128 96h40c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12zm128 0h40c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12zm-76 84v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm76 12h40c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12zm180 124v36H0v-36c0-6.6 5.4-12 12-12h19.5V24c0-13.3 10.7-24 24-24h337c13.3 0 24 10.7 24 24v440H436c6.6 0 12 5.4 12 12zM79.5 463H192v-67c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v67h112.5V49L80 48l-.5 415z"/>
                            </svg>
                        </div>
                        <h3 class="feature-pillar-title">Premium Residential Plots</h3>
                    </div>
                    <p class="feature-pillar-desc">Discover legally verified and strategically located residential plots perfect for building your dream home or securing a safe long-term investment. Each plot is approved, inspected, and selected for its growth potential and excellent surroundings.</p>
                </div>
            </div>

            <!-- Card 2: Modern Flats & Apartments -->
            <div class="col-md-6 col-lg-4">
                <div class="feature-pillar-card">
                    <div class="feature-pillar-header">
                        <div class="feature-pillar-icon">
                            <!-- Multi-Window Apartment SVG -->
                            <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                <path d="M480 64H32C14.33 64 0 78.33 0 96v352c0 17.67 14.33 32 32 32h448c17.67 0 32-14.33 32-32V96c0-17.67-14.33-32-32-32zm-32 368H64V128h384v304zM128 176h64v64h-64zm128 0h64v64h-64zm128 0h64v64h-64zM128 288h64v64h-64zm128 0h64v64h-64zm128 0h64v64h-64z"/>
                            </svg>
                        </div>
                        <h3 class="feature-pillar-title">Modern Flats & Apartments</h3>
                    </div>
                    <p class="feature-pillar-desc">Choose from high-quality 2BHK, 3BHK, and 4BHK flats designed for comfort, convenience, and value. Located in well-connected areas with top amenities, these apartments are ideal for families, professionals, and investors seeking strong returns.</p>
                </div>
            </div>

            <!-- Card 3: Luxury Villas & Independent Houses -->
            <div class="col-md-6 col-lg-4">
                <div class="feature-pillar-card">
                    <div class="feature-pillar-header">
                        <div class="feature-pillar-icon">
                            <!-- Villa Outline SVG -->
                            <svg viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg">
                                <path d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31a12 12 0 0 0 16.9 1.6l238.8-196.4a8 8 0 0 1 10.1 0L532.7 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-3.5-16.93z"/>
                            </svg>
                        </div>
                        <h3 class="feature-pillar-title">Luxury Villas & Independent Houses</h3>
                    </div>
                    <p class="feature-pillar-desc">Explore beautifully crafted villas and independent homes offering privacy, premium living spaces, gated-community safety, and upscale lifestyle features. Perfect for those looking to a refined and peaceful living experience.</p>
                </div>
            </div>

            <!-- Card 4: High-Growth Investment Opportunities -->
            <div class="col-md-6 col-lg-4">
                <div class="feature-pillar-card">
                    <div class="feature-pillar-header">
                        <div class="feature-pillar-icon">
                            <!-- Growth Chart SVG -->
                            <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                <path d="M496 384H64V80c0-8.84-7.16-16-16-16H16C7.16 64 0 71.16 0 80v336c0 17.67 14.33 32 32 32h464c8.84 0 16-7.16 16-16v-32c0-8.84-7.16-16-16-16zm-86.86-218.86l-96 96c-6.25 6.25-16.38 6.25-22.63 0l-64-64-70.63 70.63c-6.25 6.25-16.38 6.25-22.63 0l-16.97-16.97c-6.25-6.25-6.25-16.38 0-22.63l96-96c6.25-6.25 16.38-6.25 22.63 0l64 64 70.63-70.63c6.25-6.25 16.38-6.25 22.63 0l16.97 16.97c6.25 6.25 6.25 16.38 0 22.63z"/>
                            </svg>
                        </div>
                        <h3 class="feature-pillar-title">High-Growth Investment Opportunities</h3>
                    </div>
                    <p class="feature-pillar-desc">Handpicked investment-focused properties with strong appreciation potential, excellent location benefits, and reliable returns. Ideal for investors looking to build wealth through secure and smart real-estate choices.</p>
                </div>
            </div>

            <!-- Card 5: Open Plots & Farmland -->
            <div class="col-md-6 col-lg-4">
                <div class="feature-pillar-card">
                    <div class="feature-pillar-header">
                        <div class="feature-pillar-icon">
                            <!-- Classical Landmark Pillars SVG -->
                            <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                <path d="M501.62 92.11L267.24 2.04a31.958 31.958 0 0 0-22.47 0L10.38 92.11A16.001 16.001 0 0 0 0 107.09V144c0 8.84 7.16 16 16 16h480c8.84 0 16-7.16 16-16v-36.91c0-6.67-4.14-12.64-10.38-14.98zM64 192v160H48c-8.84 0-16 7.16-16 16v48h448v-48c0-8.84-7.16-16-16-16h-16V192h-64v160h-96V192h-64v160h-96V192H64zm432 256H16c-8.84 0-16 7.16-16 16v32c0 8.84 7.16 16 16 16h480c8.84 0 16-7.16 16-16v-32c0-8.84-7.16-16-16-16z"/>
                            </svg>
                        </div>
                        <h3 class="feature-pillar-title">Open Plots & Farmland</h3>
                    </div>
                    <p class="feature-pillar-desc">Discover open plots and farmland ideal for long-term appreciation, development, or weekend living. Offering peace, space, and strong future potential.Open plots and farmland offering Ideal for long-term holdings or future development plans.</p>
                </div>
            </div>

            <!-- Card 6: Gated Community Projects -->
            <div class="col-md-6 col-lg-4">
                <div class="feature-pillar-card">
                    <div class="feature-pillar-header">
                        <div class="feature-pillar-icon">
                            <!-- Community & Security SVG -->
                            <svg viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg">
                                <path d="M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm448 0c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm32 32h-64c-17.6 0-33.6 7.1-45.3 18.6 41.7 29.8 70.3 75.8 75.9 128.5 29.5-3.1 53.4-28.2 53.4-59.1v-24c0-35.3-28.7-64-64-64zm-384 0c-35.3 0-64 28.7-64 64v24c0 30.9 23.9 56 53.4 59.1 5.6-52.7 34.2-98.7 75.9-128.5C145.6 263.1 129.6 256 112 256zm208-32c44.2 0 80-35.8 80-80s-35.8-80-80-80-80 35.8-80 80 35.8 80 80 80zm96 48h-11.4c-25.6 12.3-54.2 19.3-84.6 19.3s-59-7-84.6-19.3H224c-53 0-96 43-96 96v48c0 17.7 14.3 32 32 32h320c17.7 0 32-14.3 32-32v-48c0-53-43-96-96-96z"/>
                            </svg>
                        </div>
                        <h3 class="feature-pillar-title">Gated Community Projects</h3>
                    </div>
                    <p class="feature-pillar-desc">Enjoy secure, modern living in premium gated communities featuring 24/7 security, clubhouse amenities, and landscaped surroundings. Ideal for families and investors seeking comfort, safety, and strong long-term valueand strong resale value</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Equal Vertical Spacing -->
<div class="my-5"></div>

<!-- ==========================================================================
     Section 2: Explore Our Wide Range of Premium Properties (Screenshots 2, 3, 4)
     ========================================================================== -->
<div class="container-fluid py-5 px-lg-5 range-slider-section">
    <div class="container py-2 text-center">
        <h2 class="range-slider-heading">Explore Our Wide Range of Premium Properties</h2>

        <!-- Interactive Automatic & Manual Slider (Screenshots 2, 3, 4) -->
        <div id="premiumRangeSlider" class="range-carousel-wrap">
            <!-- Slide 1: Luxury Villas & Independent Houses (Screenshot 2) -->
            <div class="range-slide-wrapper active" data-slide-index="0">
                <div class="range-slide-item" style="background-image: url('img/carousel_luxury_villa.jpg');">
                    <div class="range-slide-overlay">
                        <div class="range-slide-stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h3 class="range-slide-title">Luxury Villas &amp; Independent Houses</h3>
                    </div>
                </div>
            </div>

            <!-- Slide 2: Premium Residential Plots (Screenshot 3) -->
            <div class="range-slide-wrapper" data-slide-index="1">
                <div class="range-slide-item" style="background-image: url('img/carousel_luxury_villa.jpg');">
                    <div class="range-slide-overlay">
                        <div class="range-slide-stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h3 class="range-slide-title">Premium Residential Plots</h3>
                    </div>
                </div>
            </div>

            <!-- Slide 3: Modern plots & Apartments (Screenshot 4) -->
            <div class="range-slide-wrapper" data-slide-index="2">
                <div class="range-slide-item" style="background-image: url('img/carousel_modern_apartments.jpg');">
                    <div class="range-slide-overlay">
                        <div class="range-slide-stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h3 class="range-slide-title">Modern plots &amp; Apartments</h3>
                    </div>
                </div>
            </div>

            <!-- Discreet Navigation Arrows -->
            <button type="button" class="range-arrow range-arrow-prev" id="rangePrevBtn" aria-label="Previous Slide">
                <i class="fa fa-chevron-left"></i>
            </button>
            <button type="button" class="range-arrow range-arrow-next" id="rangeNextBtn" aria-label="Next Slide">
                <i class="fa fa-chevron-right"></i>
            </button>
        </div>

        <!-- Manual Pagination Dots matching screenshots 2, 3, 4 -->
        <div class="range-carousel-indicators" id="rangeSliderDots">
            <button type="button" class="range-indicator-dot active" data-slide-target="0" aria-label="Slide 1"></button>
            <button type="button" class="range-indicator-dot" data-slide-target="1" aria-label="Slide 2"></button>
            <button type="button" class="range-indicator-dot" data-slide-target="2" aria-label="Slide 3"></button>
        </div>
    </div>
</div>

<!-- Equal Vertical Spacing -->
<div class="my-5"></div>

<!-- ==========================================================================
     Section 3: HOMELANDS-UPPALURU Project Showcase (Screenshot 5 Exact)
     ========================================================================== -->
<div class="container-fluid py-5 px-lg-5 homelands-section">
    <div class="container py-2">
        <h2 class="homelands-heading">HOMELANDS-UPPALURU PREMIUM RESIDENTIAL PLOTS NEAR GANNAVARAM AIRPORT, VIJAYAWADA</h2>

        <div class="row g-5 align-items-center">
            <!-- Left Column: Copy from Screenshot 5 -->
            <div class="col-lg-6">
                <p class="homelands-text">
                    Homelands-Uppaluru is a prestigious 10-acre APCRDA-approved layout located in Uppaluru, Vijayawada, just minutes away from Gannavaram Airport. This exceptional project offers a rare opportunity to invest in residential plots within one of the region’s fastest-growing locales.
                </p>
                <p class="homelands-text">
                    To the left is the modern kitchen with central island, leading through to the unique breakfast family room which feature glass walls and doors out onto the garden and access to the separate utility room.Designed with world-class infrastructure and modern amenities, Brundavanam ensures a superior lifestyle for homeowners and an excellent return on investment for property buyers.
                </p>
                <div class="pt-3 d-flex flex-wrap gap-3">
                    <a href="contact.php" class="btn btn-primary px-4 py-3 rounded-pill text-white fw-bold shadow-sm" style="background: linear-gradient(135deg, #00B98E 0%, #0E4B37 100%); border: none;">
                        <i class="fa fa-envelope me-2"></i>Inquire About Project
                    </a>
                    <a href="https://wa.me/919182613797?text=Hello%20Pudami%20Consultancy,%20I%20am%20interested%20in%20Homelands-Uppaluru%20plots." target="_blank" class="btn btn-outline-success px-4 py-3 rounded-pill fw-bold">
                        <i class="fab fa-whatsapp me-2"></i>WhatsApp Us
                    </a>
                </div>
            </div>

            <!-- Right Column: Image from Screenshot 5 -->
            <div class="col-lg-6">
                <div class="homelands-img-wrap">
                    <img src="img/mumbai-skyline-skyscrapers-construction-1024x682.jpg" alt="Homelands Uppaluru Highrise Skyline" loading="lazy" decoding="async">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Equal Vertical Spacing -->
<div class="my-5"></div>

<!-- ==========================================================================
     Section 4: Call To Action
     ========================================================================== -->
<div class="container-fluid py-5 px-lg-5 bg-white">
    <div class="container py-2">
        <div class="presence-cta-box text-center">
            <h2 class="presence-cta-title text-white">YOUR DREAM PROPERTY IS JUST ONE CALL AWAY</h2>
            <p class="presence-cta-desc mb-4 mx-auto" style="max-width: 720px;">
                Connect with our certified property advisors today for personalized site visits, APCRDA &amp; RERA legal documentation, and exclusive investment deals across India.
            </p>
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <a href="tel:+919182613797" class="btn btn-warning px-4 py-3 rounded-pill fw-bold text-dark shadow">
                    <i class="fa fa-phone-alt me-2"></i>Call Now (+91 9182613797)
                </a>
                <a href="https://wa.me/919182613797?text=Hello%20Pudami%20Consultancy,%20I%20want%20to%20know%20more%20about%20your%20properties." target="_blank" class="btn btn-success px-4 py-3 rounded-pill fw-bold shadow">
                    <i class="fab fa-whatsapp me-2"></i>Chat on WhatsApp
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Script for Automatic & Manual Slider with Dot Synchronization -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    var slides = document.querySelectorAll('#premiumRangeSlider .range-slide-wrapper');
    var dots = document.querySelectorAll('#rangeSliderDots .range-indicator-dot');
    var carouselWrap = document.getElementById('premiumRangeSlider');
    var prevBtn = document.getElementById('rangePrevBtn');
    var nextBtn = document.getElementById('rangeNextBtn');
    var currentIndex = 0;
    var autoSlideTimer = null;
    var intervalMs = 3200; // 3.2 seconds automatic slide interval
    var isHovered = false;

    if (!slides.length) return;

    function goToSlide(index) {
        if (index < 0) {
            index = slides.length - 1;
        } else if (index >= slides.length) {
            index = 0;
        }
        currentIndex = index;

        // Switch active slide
        slides.forEach(function (slide, i) {
            if (i === currentIndex) {
                slide.classList.add('active');
            } else {
                slide.classList.remove('active');
            }
        });

        // Switch active dot
        dots.forEach(function (dot, i) {
            if (i === currentIndex) {
                dot.classList.add('active');
            } else {
                dot.classList.remove('active');
            }
        });
    }

    function startTimer() {
        stopTimer();
        autoSlideTimer = setInterval(function () {
            if (!isHovered && !document.hidden) {
                goToSlide(currentIndex + 1);
            }
        }, intervalMs);
    }

    function stopTimer() {
        if (autoSlideTimer) {
            clearInterval(autoSlideTimer);
            autoSlideTimer = null;
        }
    }

    // Manual navigation when clicking on dots
    dots.forEach(function (dot, i) {
        dot.addEventListener('click', function (e) {
            e.preventDefault();
            goToSlide(i);
            startTimer(); // Reset auto timer so user gets full viewing time on selected slide
        });
    });

    // Manual navigation with arrows
    if (prevBtn) {
        prevBtn.addEventListener('click', function (e) {
            e.preventDefault();
            goToSlide(currentIndex - 1);
            startTimer();
        });
    }
    if (nextBtn) {
        nextBtn.addEventListener('click', function (e) {
            e.preventDefault();
            goToSlide(currentIndex + 1);
            startTimer();
        });
    }

    // Pause on hover
    if (carouselWrap) {
        carouselWrap.addEventListener('mouseenter', function () {
            isHovered = true;
        });
        carouselWrap.addEventListener('mouseleave', function () {
            isHovered = false;
        });
    }

    // Mobile touch swipe support
    var touchStartX = 0;
    var touchEndX = 0;
    if (carouselWrap) {
        carouselWrap.addEventListener('touchstart', function (e) {
            touchStartX = e.changedTouches[0].screenX;
        }, { passive: true });
        carouselWrap.addEventListener('touchend', function (e) {
            touchEndX = e.changedTouches[0].screenX;
            if (touchEndX < touchStartX - 40) {
                goToSlide(currentIndex + 1);
                startTimer();
            } else if (touchEndX > touchStartX + 40) {
                goToSlide(currentIndex - 1);
                startTimer();
            }
        }, { passive: true });
    }

    // Initial activation & start automatic cycle
    goToSlide(0);
    startTimer();
});
</script>

<?php include __DIR__ . '/footer.php'; ?>

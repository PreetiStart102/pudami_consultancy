<?php
$activePage = 'presence';

// Base directory for Arunachal Pradesh images
$arunachalFolder = 'Arunachal Pradesh';
$arunachalBaseDir = __DIR__ . '/img/States_Image/' . $arunachalFolder;

$arunachalCities = [];
if (is_dir($arunachalBaseDir)) {
    $files = scandir($arunachalBaseDir);
    foreach ($files as $file) {
        if ($file === '.' || $file === '..') continue;
        if (!preg_match('/\.(jpg|jpeg|png|webp|avif)$/i', $file)) continue;
        if (stripos($file, 'things-to-do') !== false) continue;

        $rawName = pathinfo($file, PATHINFO_FILENAME);
        $cityName = strtoupper(trim(str_replace('_', ' ', $rawName)));

        $arunachalCities[] = [
            'name' => $cityName,
            'filename' => $file,
            'img' => 'img/States_Image/' . rawurlencode($arunachalFolder) . '/' . rawurlencode($file)
        ];
    }
}

// Hero background image
$heroBg = 'img/States_Image/' . rawurlencode($arunachalFolder) . '/ITANAGAR.jpg';

include __DIR__ . '/header.php';
?>

<style>
/* Exact Matching Design System with Target Reference */
.state-hero-section {
    position: relative;
    padding: 75px 0 55px 0;
    background: linear-gradient(rgba(14, 46, 80, 0.88), rgba(7, 56, 40, 0.92)), url('<?php echo htmlspecialchars($heroBg); ?>') center center no-repeat;
    background-size: cover !important;
    text-align: center;
    color: #ffffff;
}
.state-hero-title {
    font-family: 'Cinzel', serif;
    font-size: 2.8rem;
    font-weight: 700;
    letter-spacing: 2px;
    margin-bottom: 8px;
    text-transform: uppercase;
    color: #ffffff !important;
    text-shadow: 0 3px 12px rgba(0, 0, 0, 0.4);
}
.state-hero-subtitle {
    font-family: 'Cinzel', serif;
    letter-spacing: 1px;
    color: #D49E49 !important;
}

/* Breadcrumb Styling with Pure White Active State */
.state-hero-section .breadcrumb {
    margin-bottom: 0;
}
.state-hero-section .breadcrumb-item,
.state-hero-section .breadcrumb-item a {
    color: rgba(255, 255, 255, 0.75) !important;
    font-size: 0.88rem;
    font-weight: 600;
    letter-spacing: 1.2px;
}
.state-hero-section .breadcrumb-item a:hover {
    color: #ffffff !important;
    text-decoration: underline;
}
.state-hero-section .breadcrumb-item.active {
    color: #ffffff !important;
    font-weight: 700 !important;
}
.state-hero-section .breadcrumb-item + .breadcrumb-item::before {
    color: rgba(255, 255, 255, 0.55) !important;
}

.state-section-heading {
    font-family: 'Cinzel', serif;
    font-weight: 700;
    color: #0E2E50;
    font-size: 2.2rem;
    text-align: center;
    margin-bottom: 12px;
}
.state-heading-divider {
    width: 60px;
    height: 3px;
    background: #00B98E;
    border-radius: 2px;
    margin: 0 auto 35px auto;
}

/* 4-Column City Cards - Clean, Buttonless, Fully Clickable */
.state-cities-row {
    --bs-gutter-y: 2.25rem !important; /* Elegant breathing space in between rows */
}
.state-city-card {
    background: #ffffff;
    border: 1px solid #E2E8F0;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.04);
    transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
    text-align: center;
    height: 100%;
    display: flex;
    flex-direction: column;
    text-decoration: none !important;
}
.state-city-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 16px 32px rgba(14, 46, 80, 0.14);
    border-color: #00B98E;
}
.state-city-img-wrap {
    width: 100%;
    height: 220px;
    overflow: hidden;
    position: relative;
    background: #0E2E50;
}
.state-city-img-wrap img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s ease;
}
.state-city-card:hover .state-city-img-wrap img {
    transform: scale(1.08);
}
.state-city-content {
    padding: 16px 14px 18px 14px;
    background: #ffffff;
    flex-grow: 1;
    display: flex;
    align-items: center;
    justify-content: center;
}
.state-city-title {
    font-family: 'Inter', sans-serif;
    font-size: 15px;
    font-weight: 700;
    color: #0E2E50;
    letter-spacing: 0.8px;
    margin: 0;
    text-transform: uppercase;
    transition: color 0.25s ease;
}
.state-city-card:hover .state-city-title {
    color: #00B98E;
}

/* Feature Pillar Cards (Find the Perfect Property With Us) */
.pillar-card {
    background: #ffffff;
    border: 1px solid #E2E8F0;
    border-radius: 12px;
    padding: 30px 24px;
    height: 100%;
    transition: all 0.3s ease;
}
.pillar-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.06);
    border-color: #00B98E;
}
.pillar-icon {
    width: 52px;
    height: 52px;
    border-radius: 10px;
    background: #EFFDF5;
    color: #00B98E;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 1.4rem;
    margin-bottom: 18px;
}
.pillar-title {
    font-family: 'Cinzel', serif;
    font-size: 1.15rem;
    font-weight: 700;
    color: #0E2E50;
    margin-bottom: 12px;
}
.pillar-desc {
    font-size: 0.9rem;
    color: #64748B;
    line-height: 1.7;
    margin-bottom: 0;
}

/* Featured Property Section */
.featured-prop-wrap {
    background: #ffffff;
    border: 1px solid #E2E8F0;
    border-radius: 16px;
    box-shadow: 0 10px 35px rgba(0, 0, 0, 0.05);
    overflow: hidden;
}
.prop-spec-list {
    list-style: none;
    padding: 0;
    margin: 0;
}
.prop-spec-list li {
    padding: 10px 0;
    border-bottom: 1px dashed #E2E8F0;
    display: flex;
    justify-content: space-between;
    font-size: 0.92rem;
}
.prop-spec-list li label {
    font-weight: 600;
    color: #475569;
    margin: 0;
}
.prop-spec-list li span {
    font-weight: 700;
    color: #0E2E50;
}

/* CTA Box */
.state-cta-box {
    background: linear-gradient(135deg, #0E2E50 0%, #073828 100%);
    border-radius: 20px;
    padding: 50px 30px;
    color: #ffffff;
    text-align: center;
}
</style>

<!-- ==========================================================================
     Hero Header Banner
     ========================================================================== -->
<div class="container-fluid state-hero-section mb-5">
    <div class="container">
        <h1 class="state-hero-title" style="color: #ffffff !important;">ARUNACHAL PRADESH</h1>
        <p class="fs-5 state-hero-subtitle mb-3">Premium Properties Across Arunachal Pradesh</p>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase mb-0 fw-bold">
                <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none">HOME</a></li>
                <li class="breadcrumb-item">OUR PRESENCE</li>
                <li class="breadcrumb-item active" aria-current="page" style="color: #ffffff !important;">ARUNACHAL PRADESH</li>
            </ol>
        </nav>
    </div>
</div>

<!-- ==========================================================================
     Section 1: 28 Real Locations Grid from img/States_Image (Clean, Buttonless Cards)
     ========================================================================== -->
<div class="container-fluid py-4 px-lg-5">
    <div class="container">
        <h2 class="state-section-heading">Premium Properties Across Arunachal Pradesh</h2>
        <div class="state-heading-divider"></div>

        <div class="row g-4 state-cities-row justify-content-center">
            <?php foreach ($arunachalCities as $idx => $city): ?>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <a href="contact.php?service=open+plots&location=<?php echo urlencode($city['name'] . ', Arunachal Pradesh'); ?>" class="state-city-card">
                        <div class="state-city-img-wrap">
                            <img src="<?php echo htmlspecialchars($city['img']); ?>" 
                                 alt="<?php echo htmlspecialchars($city['name']); ?> Properties - Pudami Consultancy Services" 
                                 <?php if ($idx < 8): ?>
                                     loading="eager" fetchpriority="high"
                                 <?php else: ?>
                                     loading="lazy"
                                 <?php endif; ?>
                                 decoding="async">
                        </div>
                        <div class="state-city-content">
                            <h3 class="state-city-title"><?php echo htmlspecialchars($city['name']); ?></h3>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<div class="my-5"></div>

<!-- ==========================================================================
     Section 2: Find the Perfect Property With Us
     ========================================================================== -->
<div class="container-fluid py-5 px-lg-5" style="background-color: #F8FAFC;">
    <div class="container py-2">
        <h2 class="state-section-heading">Find the Perfect Property With Us</h2>
        <div class="state-heading-divider"></div>

        <div class="row g-4">
            <!-- 1. Premium Residential Plots -->
            <div class="col-lg-4 col-md-6">
                <div class="pillar-card">
                    <div class="pillar-icon"><i class="fa fa-map-marked-alt"></i></div>
                    <h4 class="pillar-title">Premium Residential Plots</h4>
                    <p class="pillar-desc">
                        Discover legally verified and strategically located residential plots perfect for building your dream home or securing a safe long-term investment. Each plot is approved, inspected, and selected for its growth potential and excellent surrounding infrastructure.
                    </p>
                </div>
            </div>

            <!-- 2. Modern Flats & Apartments -->
            <div class="col-lg-4 col-md-6">
                <div class="pillar-card">
                    <div class="pillar-icon"><i class="fa fa-building"></i></div>
                    <h4 class="pillar-title">Modern Flats &amp; Apartments</h4>
                    <p class="pillar-desc">
                        Contemporary living spaces designed with smart layouts, premium amenities, and convenient connectivity to essential conveniences, schools, and transit routes.
                    </p>
                </div>
            </div>

            <!-- 3. Luxury Villas & Independent Houses -->
            <div class="col-lg-4 col-md-6">
                <div class="pillar-card">
                    <div class="pillar-icon"><i class="fa fa-home"></i></div>
                    <h4 class="pillar-title">Luxury Villas &amp; Independent Houses</h4>
                    <p class="pillar-desc">
                        Exclusive villas and private residences featuring spacious architectural elegance, serene natural surroundings, and elite lifestyle comforts.
                    </p>
                </div>
            </div>

            <!-- 4. High-Growth Investment Opportunities -->
            <div class="col-lg-4 col-md-6">
                <div class="pillar-card">
                    <div class="pillar-icon"><i class="fa fa-chart-line"></i></div>
                    <h4 class="pillar-title">High-Growth Investment Opportunities</h4>
                    <p class="pillar-desc">
                        Handpicked investment-focused properties with strong appreciation potential, excellent location benefits, and reliable returns. Ideal for investors looking to build wealth through secure and smart real-estate choices.
                    </p>
                </div>
            </div>

            <!-- 5. Open Plots & Farmland -->
            <div class="col-lg-4 col-md-6">
                <div class="pillar-card">
                    <div class="pillar-icon"><i class="fa fa-tree"></i></div>
                    <h4 class="pillar-title">Open Plots &amp; Farmland</h4>
                    <p class="pillar-desc">
                        Clear title agricultural lands and scenic country acreage tailored for long-term landbanking, organic cultivation, and peaceful holiday farmsteads.
                    </p>
                </div>
            </div>

            <!-- 6. Gated Community Projects -->
            <div class="col-lg-4 col-md-6">
                <div class="pillar-card">
                    <div class="pillar-icon"><i class="fa fa-shield-alt"></i></div>
                    <h4 class="pillar-title">Gated Community Projects</h4>
                    <p class="pillar-desc">
                        Fully gated, master-planned developments equipped with 24/7 security, blacktop wide roads, avenue plantation, underground drainage, and club facilities.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="my-5"></div>

<!-- ==========================================================================
     Section 3: Explore Our Wide Range of Premium Properties (Arunachal Pradesh Hilltop Estate)
     ========================================================================== -->
<div class="container-fluid pt-5 pb-3 px-lg-5">
    <div class="container">
        <h2 class="state-section-heading">Explore Our Wide Range of Premium Properties</h2>
        <div class="state-heading-divider"></div>

        <!-- Category Badges -->
        <div class="text-center mb-5 d-flex flex-wrap justify-content-center gap-2">
            <span class="badge px-4 py-2 rounded-pill fw-semibold" style="background: #0E2E50; color: #ffffff; font-size: 0.88rem;">Scenic Valley &amp; Hilltop Estates</span>
            <span class="badge px-4 py-2 rounded-pill fw-semibold" style="background: #00B98E; color: #ffffff; font-size: 0.88rem;">Eco Residential Plots</span>
            <span class="badge px-4 py-2 rounded-pill fw-semibold" style="background: #F1F5F9; color: #475569; font-size: 0.88rem;">Farmland &amp; Country Retreats</span>
        </div>

        <!-- Arunachal Pradesh Featured Project Card -->
        <div class="featured-prop-wrap p-4 p-lg-5 mb-0">
            <h3 class="fw-bold text-dark mb-4" style="font-family: 'Cinzel', serif; font-size: 1.6rem;">
                Donyi Polo Valley Eco-Residences &amp; Scenic Hilltop Estates, Itanagar
            </h3>

            <div class="row g-5 align-items-center">
                <!-- Left: Description and Specifications -->
                <div class="col-lg-6">
                    <p class="text-muted mb-4" style="line-height: 1.85; font-size: 0.95rem;">
                        <strong>Donyi Polo Valley</strong> is an exclusive eco-residential and retreat plot development situated in Itanagar. Set amidst lush Himalayan foothills, this premium project offers verified legal titles, panoramic mountain views, wide road connectivity, and exceptional appreciation potential for discerning property buyers.
                    </p>

                    <div class="row g-3">
                        <div class="col-sm-6">
                            <ul class="prop-spec-list">
                                <li><label>Project ID:</label> <span>AR-DP10</span></li>
                                <li><label>Plot Sizes:</label> <span>200 - 500 sq.yds</span></li>
                                <li><label>Surroundings:</label> <span>Scenic Green Hills</span></li>
                                <li><label>Electricity:</label> <span>Connected Grid</span></li>
                                <li><label>Year Built:</label> <span>2024</span></li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul class="prop-spec-list">
                                <li><label>Location:</label> <span>Itanagar Hills</span></li>
                                <li><label>Facing:</label> <span>Panoramic Valley View</span></li>
                                <li><label>Connectivity:</label> <span>Near State Highway</span></li>
                                <li><label>Price:</label> <span class="text-success">Verified Title</span></li>
                                <li><label>Property Status:</label> <span class="badge bg-success-subtle text-success">Available for Registry</span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="pt-4 mt-2">
                        <a href="contact.php?service=open+plots&location=Donyi+Polo+Valley+Eco-Residences+Itanagar" class="btn btn-primary px-4 py-3 rounded-pill fw-bold text-white shadow-sm" style="background: linear-gradient(135deg, #00B98E 0%, #0E4B37 100%); border: none;">
                            <i class="fa fa-envelope me-2"></i> Inquire About This Project
                        </a>
                    </div>
                </div>

                <!-- Right: Large State-Specific Project Image -->
                <div class="col-lg-6">
                    <div class="position-relative overflow-hidden rounded-4 shadow" style="height: 380px;">
                        <img src="img/scenic_farmland_plot.jpg" alt="Donyi Polo Valley Eco-Residences Itanagar" class="w-100 h-100" style="object-fit: cover;">
                        <span class="badge position-absolute top-0 end-0 m-3 px-3 py-2 rounded-pill fw-bold" style="background: rgba(14, 46, 80, 0.9); color: #ffffff; font-size: 0.8rem;">GOVT APPROVED</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ==========================================================================
     Section 4: Call to Action (Direct Contact Options - Equal Balanced Vertical Spacing)
     ========================================================================== -->
<div class="container-fluid px-lg-5" style="padding-top: 55px; padding-bottom: 7px; margin-bottom: 0;">
    <div class="container">
        <div class="state-cta-box shadow-lg mx-auto" style="max-width: 960px;">
            <h2 class="fw-bold mb-2 text-white" style="font-family: 'Cinzel', serif; font-size: 2rem;">
                Your Dream Property Is Just One Call Away
            </h2>
            <p class="text-white-50 mb-4 fs-6" style="line-height: 1.7;">
                We’re here to guide your property journey with clarity and professionalism.
            </p>
            <div class="p-3 mx-auto mb-4 rounded-3 text-white-50" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(8px); max-width: 720px; font-size: 0.95rem; line-height: 1.7;">
                Reach out now for quick, professional assistance with buying, selling, or investing in real estate.<br>
                We’re committed to guiding you with honesty, expertise, and care.
            </div>
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <a href="tel:+919182613797" class="btn btn-outline-light px-4 py-3 rounded-pill fw-bold" style="font-size: 0.95rem;">
                    <i class="fa fa-phone-alt me-2"></i> +91 9182613797
                </a>
                <a href="https://wa.me/919182613797?text=Hello%20Pudami%20Consultancy%2C%20I%20am%20interested%20in%20properties%20in%20Arunachal%20Pradesh" target="_blank" class="btn btn-success px-4 py-3 rounded-pill fw-bold text-white shadow" style="font-size: 0.95rem;">
                    <i class="fab fa-whatsapp me-2 fs-5"></i> Chat on WhatsApp
                </a>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/footer.php'; ?>

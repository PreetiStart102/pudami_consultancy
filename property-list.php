<?php
$activePage = 'property-list';
include __DIR__ . '/header.php';

$search_keyword = strtolower(trim($_GET['keyword'] ?? ''));
$search_type = trim($_GET['type'] ?? '');
$search_location = trim($_GET['location'] ?? '');

// Comprehensive Real Estate & Land Portfolio Dataset
$properties = [
    [
        'id' => 1,
        'title' => 'Premium Duplex Gated Community',
        'type' => 'Duplex Villa',
        'location' => 'Andhra Pradesh',
        'city' => 'Vijayawada Main Highway, AP',
        'price' => '₹1.25 Cr',
        'sqft' => '2,400 Sqft',
        'spec1' => '4 Bed',
        'spec2' => '4 Bath',
        'image' => 'img/PREMIUM DUPLEX PROJECT.jpg',
        'tag' => 'For Sale',
        'rera' => 'AP RERA Approved'
    ],
    [
        'id' => 2,
        'title' => 'Duplex In Prime Approved Layout',
        'type' => 'Duplex Villa',
        'location' => 'Telangana',
        'city' => 'Gachibowli Outer Ring, Hyderabad, TS',
        'price' => '₹85.00 Lakhs',
        'sqft' => '1,850 Sqft',
        'spec1' => '3 Bed',
        'spec2' => '3 Bath',
        'image' => 'img/DUPLEX IN PRIME LAYOUT.jpg',
        'tag' => 'For Sale',
        'rera' => 'TS RERA Approved'
    ],
    [
        'id' => 3,
        'title' => 'Stylish Modern Eco Villa',
        'type' => 'Luxury Villa',
        'location' => 'Karnataka',
        'city' => 'Whitefield IT Hub, Bengaluru, KA',
        'price' => '₹1.45 Cr',
        'sqft' => '2,600 Sqft',
        'spec1' => '4 Bed',
        'spec2' => '4 Bath',
        'image' => 'img/STYLISH MODERN HOME.jpg',
        'tag' => 'For Sale',
        'rera' => 'KA RERA Approved'
    ],
    [
        'id' => 4,
        'title' => 'Executive Independent Luxury Residence',
        'type' => 'Independent Villa',
        'location' => 'Andhra Pradesh',
        'city' => 'Capital Region, Amaravati, AP',
        'price' => '₹98.00 Lakhs',
        'sqft' => '2,200 Sqft',
        'spec1' => '3 Bed Villa',
        'spec2' => 'Private Lawn',
        'image' => 'img/independent_luxury_house.jpg',
        'tag' => 'For Sale',
        'rera' => 'AP RERA Approved'
    ],
    [
        'id' => 5,
        'title' => 'Sector Approved Gated Layout Plots',
        'type' => 'Residential Plot',
        'location' => 'Andhra Pradesh',
        'city' => 'Smart City Corridor, Visakhapatnam, AP',
        'price' => '₹45.00 Lakhs',
        'sqft' => '200 Sq Yds',
        'spec1' => 'Clear Title',
        'spec2' => '40ft Blacktop Road',
        'image' => 'img/gated_plots_layout.jpg',
        'tag' => 'For Sale',
        'rera' => 'VMRDA Approved'
    ],
    [
        'id' => 6,
        'title' => 'Highway Commercial Land & Development Plot',
        'type' => 'Commercial Land',
        'location' => 'Tamil Nadu',
        'city' => 'OMR IT Corridor, Chennai, TN',
        'price' => '₹2.10 Cr',
        'sqft' => '600 Sq Yds',
        'spec1' => '6-Lane Highway Facing',
        'spec2' => 'Commercial Zone',
        'image' => 'img/commercial_highway_plot.jpg',
        'tag' => 'For Sale',
        'rera' => 'TN RERA Approved'
    ],
    [
        'id' => 7,
        'title' => 'Scenic Eco Agro & Managed Farmland',
        'type' => 'Farmland & Agro Land',
        'location' => 'Telangana',
        'city' => 'Ananthagiri Hills Agro Corridor, Vikarabad, TS',
        'price' => '₹32.00 Lakhs',
        'sqft' => '0.5 Acre',
        'spec1' => 'Gated Farmstead',
        'spec2' => 'Drip Irrigated',
        'image' => 'img/scenic_farmland_plot.jpg',
        'tag' => 'For Sale',
        'rera' => 'Clear Title & Rythu Bandhu'
    ],
    [
        'id' => 8,
        'title' => 'Azure Sky Luxury High-Rise Residences',
        'type' => 'Modern Apartment',
        'location' => 'Telangana',
        'city' => 'Financial District, Gachibowli, Hyderabad, TS',
        'price' => '₹1.65 Cr',
        'sqft' => '2,150 Sqft',
        'spec1' => '3 BHK Luxury',
        'spec2' => 'Clubhouse & Pool',
        'image' => 'img/luxury_apartment_residence.jpg',
        'tag' => 'For Sale',
        'rera' => 'TS RERA Approved'
    ],
    [
        'id' => 9,
        'title' => 'Emerald Meadows Gated Villa Community',
        'type' => 'Luxury Villa',
        'location' => 'Karnataka',
        'city' => 'Devanahalli Airport Corridor, Bengaluru, KA',
        'price' => '₹1.85 Cr',
        'sqft' => '2,800 Sqft',
        'spec1' => '4 Bed Villa',
        'spec2' => 'Master Planned',
        'image' => 'img/gated_villa_community.jpg',
        'tag' => 'For Sale',
        'rera' => 'BIAAPA Approved'
    ],
    [
        'id' => 10,
        'title' => 'Homelands-Uppaluru APCRDA Approved Plots',
        'type' => 'Residential Plot',
        'location' => 'Andhra Pradesh',
        'city' => 'Gannavaram Airport Highway, Vijayawada, AP',
        'price' => '₹38.00 Lakhs',
        'sqft' => '167 Sq Yds',
        'spec1' => '100% Clear Title',
        'spec2' => 'Underground Drainage',
        'image' => 'img/mumbai-skyline-skyscrapers-construction-1024x682.jpg',
        'tag' => 'For Sale',
        'rera' => 'APCRDA Approved'
    ],
    [
        'id' => 11,
        'title' => 'Backwater Scenic Country Estate & Villa',
        'type' => 'Luxury Villa',
        'location' => 'Kerala',
        'city' => 'Alleppey Backwaters Corridor, Kerala',
        'price' => '₹1.15 Cr',
        'sqft' => '2,200 Sqft',
        'spec1' => '3 Bed',
        'spec2' => 'Waterfront Access',
        'image' => 'img/kerala_hd.jpg',
        'tag' => 'For Sale',
        'rera' => 'K-RERA Approved'
    ],
    [
        'id' => 12,
        'title' => 'Bheemili Golden Coast Plotted Township',
        'type' => 'Residential Plot',
        'location' => 'Andhra Pradesh',
        'city' => 'Beach Road Corridor, Bheemili, Visakhapatnam, AP',
        'price' => '₹52.00 Lakhs',
        'sqft' => '250 Sq Yds',
        'spec1' => 'Beach Corridor Access',
        'spec2' => '60ft Master Plan Roads',
        'image' => 'img/hero_image1.jpg',
        'tag' => 'For Sale',
        'rera' => 'VMRDA Approved'
    ]
];

// Filtering logic
$filtered = array_filter($properties, function($p) use ($search_keyword, $search_type, $search_location) {
    if (!empty($search_keyword)) {
        $text = strtolower($p['title'] . ' ' . $p['city'] . ' ' . $p['type']);
        if (strpos($text, $search_keyword) === false) return false;
    }
    if (!empty($search_type) && strcasecmp($p['type'], $search_type) !== 0) {
        return false;
    }
    if (!empty($search_location) && strcasecmp($p['location'], $search_location) !== 0) {
        return false;
    }
    return true;
});
?>

<style>
/* Modern Luxury Property Card Styling */
.property-item {
    transition: all 0.35s ease;
    border: 1px solid #E2E8F0;
    display: flex;
    flex-direction: column;
}
.property-item:hover {
    transform: translateY(-7px);
    box-shadow: 0 16px 36px rgba(14, 46, 80, 0.12) !important;
    border-color: #00B98E;
}
.property-img-box {
    position: relative;
    overflow: hidden;
    height: 250px;
    background: #0E2E50;
}
.property-img-box img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s ease;
}
.property-item:hover .property-img-box img {
    transform: scale(1.08);
}
.prop-badge-type {
    background: #ffffff;
    color: #00B98E;
    font-family: 'Outfit', sans-serif;
    font-weight: 700;
    font-size: 0.82rem;
    letter-spacing: 0.5px;
    padding: 6px 16px;
    border-top-right-radius: 8px;
    border-top-left-radius: 8px;
    position: absolute;
    left: 14px;
    bottom: 0;
    box-shadow: 0 -2px 10px rgba(0,0,0,0.08);
}
</style>

<!-- Header Start -->
<div class="container-fluid header bg-white p-0 mb-4 pb-lg-3">
    <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
        <div class="col-md-6 p-5 mt-lg-5">
            <span class="badge bg-light text-primary px-3 py-2 rounded-pill fw-semibold mb-3" style="letter-spacing: 1px; font-size: 0.82rem;">VERIFIED REAL ESTATE LISTINGS</span>
            <h1 class="display-5 animated fadeIn mb-3 fw-bold" style="font-family: 'Cinzel', serif; color: #0E2E50;">Property Portfolio</h1>
            <p class="text-muted fs-6 mb-4" style="max-width: 480px;">Discover RERA-approved residential plots, luxury villas, agricultural farmland, and prime commercial lands across India with complete 30-year legal documentation verification.</p>
            <nav aria-label="breadcrumb" class="animated fadeIn">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a href="index.php" class="text-muted text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item text-primary fw-bold active" aria-current="page" style="color: #00B98E !important;">Properties</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-6 animated fadeIn">
            <!-- Multi-Image Automatic & Manual Hero Slider with Increased Height -->
            <div id="propertyHeroCarousel" class="carousel slide carousel-fade property-hero-slider" data-bs-ride="carousel" data-bs-interval="3500">
                <!-- Carousel Inner -->
                <div class="carousel-inner h-100">
                    <div class="carousel-item active h-100">
                        <img class="d-block w-100" src="img/gated_plots_layout.jpg" alt="RERA Approved Gated Layout Plots">
                    </div>
                    <div class="carousel-item h-100">
                        <img class="d-block w-100" src="img/independent_luxury_house.jpg" alt="Executive Independent Luxury House">
                    </div>
                    <div class="carousel-item h-100">
                        <img class="d-block w-100" src="img/scenic_farmland_plot.jpg" alt="Managed Farmland & Agro Estate">
                    </div>
                    <div class="carousel-item h-100">
                        <img class="d-block w-100" src="img/PREMIUM DUPLEX PROJECT.jpg" alt="Premium Duplex Project">
                    </div>
                    <div class="carousel-item h-100">
                        <img class="d-block w-100" src="img/gated_villa_community.jpg" alt="Master Planned Villa Township">
                    </div>
                </div>

                <!-- Manual Navigation Arrows (Positioned at the Left Edge of Image, Compact & Sleek) -->
                <div class="property-slider-left-nav position-absolute d-flex flex-column gap-2" style="left: 8px !important; top: 50% !important; transform: translateY(-50%) !important; z-index: 25 !important;">
                    <button class="btn btn-sm hero-nav-btn" type="button" data-bs-target="#propertyHeroCarousel" data-bs-slide="prev" aria-label="Previous Slide" title="Previous Slide">
                        <i class="fa fa-chevron-left"></i>
                    </button>
                    <button class="btn btn-sm hero-nav-btn" type="button" data-bs-target="#propertyHeroCarousel" data-bs-slide="next" aria-label="Next Slide" title="Next Slide">
                        <i class="fa fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<!-- EXPLORE OUR ONGOING REAL ESTATE PROJECTS ACROSS INDIA Start -->
<div class="container-fluid py-5 px-lg-5 bg-white border-bottom" id="ongoing-projects">
    <div class="text-center mx-auto mb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 860px;">
        <span class="badge bg-light text-primary px-3 py-2 rounded-pill fw-semibold mb-2" style="letter-spacing: 1.2px; font-size: 0.82rem;">OUR ONGOING PROJECTS</span>
        <h2 class="mb-3 text-dark fw-bold" style="font-family: 'Cinzel', serif; font-size: 2rem; letter-spacing: 0.5px;">Explore Our Ongoing Real Estate Projects Across India</h2>
        <p class="text-muted fs-6 mb-4" style="line-height: 1.6;">Explore state-wise ongoing developments curated for smart living and high-value land investments.<br>With Pudami Consultancy Services, find verified properties that match your goals with transparency and expertise.</p>
    </div>

    <!-- 5 State Cards Row -->
    <div class="state-showcase-grid mb-3">
        <!-- Telangana -->
        <div class="wow fadeInUp" data-wow-delay="0.1s">
            <a href="property-list.php?location=Telangana#projects-grid" class="state-card <?php echo ($search_location == 'Telangana') ? 'border border-primary border-3 shadow' : ''; ?>">
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
            <a href="property-list.php?location=Andhra+Pradesh#projects-grid" class="state-card <?php echo ($search_location == 'Andhra Pradesh') ? 'border border-primary border-3 shadow' : ''; ?>">
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
            <a href="property-list.php?location=Karnataka#projects-grid" class="state-card <?php echo ($search_location == 'Karnataka') ? 'border border-primary border-3 shadow' : ''; ?>">
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
            <a href="property-list.php?location=Kerala#projects-grid" class="state-card <?php echo ($search_location == 'Kerala') ? 'border border-primary border-3 shadow' : ''; ?>">
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
            <a href="property-list.php?location=Tamil+Nadu#projects-grid" class="state-card <?php echo ($search_location == 'Tamil Nadu') ? 'border border-primary border-3 shadow' : ''; ?>">
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

<!-- Subtle Section Spacing -->
<div class="my-4"></div>

<!-- Property List Start -->
<div class="container-fluid py-4" id="projects-grid">
    <div class="container">
        <!-- Section Header -->
        <div class="text-start mx-auto mb-4 pb-2 wow slideInLeft" data-wow-delay="0.1s">
            <h1 class="mb-3 text-dark fw-bold" style="font-family: 'Cinzel', serif;">
                <?php if (!empty($search_location)): ?>
                    Approved Properties &amp; Land Projects in <?php echo htmlspecialchars($search_location); ?>
                <?php else: ?>
                    Explore Approved Properties &amp; Land Projects
                <?php endif; ?>
            </h1>
            <p class="text-muted mb-0">Every project listed has passed rigorous 30-year legal link verification and carries RERA / Urban Layout approvals.</p>
            <?php if (!empty($search_location)): ?>
                <div class="mt-3">
                    <a href="property-list.php#projects-grid" class="btn btn-outline-dark btn-sm rounded-pill px-3 py-1 fw-semibold">
                        <i class="fa fa-th-large me-1 text-primary"></i> Show All Projects (<?php echo count($properties); ?>)
                    </a>
                </div>
            <?php endif; ?>
        </div>

        <div class="row g-4">
            <?php if (count($filtered) > 0): ?>
                <?php foreach ($filtered as $prop): ?>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="property-item rounded-4 overflow-hidden bg-white shadow-sm h-100">
                            <!-- Image Container -->
                            <div class="property-img-box">
                                <a href="contact.php?service=property&property=<?php echo urlencode($prop['title']); ?>&location=<?php echo urlencode($prop['city']); ?>">
                                    <img class="img-fluid w-100" src="<?php echo htmlspecialchars($prop['image']); ?>" alt="<?php echo htmlspecialchars($prop['title']); ?>" loading="lazy">
                                </a>
                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-3 pt-1 px-3 fw-bold" style="font-size: 0.85rem; letter-spacing: 0.5px;"><?php echo htmlspecialchars($prop['type']); ?></div>
                            </div>

                            <!-- Card Body -->
                            <div class="p-4">
                                <span class="badge bg-light text-success border border-success mb-2"><?php echo htmlspecialchars($prop['rera']); ?></span>
                                <h5 class="mb-2 text-dark fw-bold" style="font-family: 'Cinzel', serif; font-size: 1.15rem;">
                                    <a class="text-dark text-decoration-none" href="contact.php?service=property&property=<?php echo urlencode($prop['title']); ?>&location=<?php echo urlencode($prop['city']); ?>">
                                        <?php echo htmlspecialchars($prop['title']); ?>
                                    </a>
                                </h5>
                                <p class="text-muted mb-0"><i class="fa fa-map-marker-alt text-primary me-2"></i><?php echo htmlspecialchars($prop['city']); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-12 text-center py-5">
                    <img src="img/icon-search.png" style="width: 80px; opacity: 0.5;" class="mb-3" alt="No projects found">
                    <h3 class="text-muted">No Properties Found Matching Criteria</h3>
                    <p class="text-muted">Try viewing all available properties or contact our senior real estate advisory team for off-market layout plots.</p>
                    <a href="property-list.php#projects-grid" class="btn btn-primary text-white px-4 py-2 mt-2 rounded-pill"><i class="fa fa-sync me-2"></i>View All Properties</a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- Property List End -->

<?php include __DIR__ . '/footer.php'; ?>

<?php
$activePage = 'presence';

// Base directory for real state images
$baseStatesDir = __DIR__ . '/img/States_Image';

// Dynamic detection of all folders in img/States_Image
$folderMap = [];
if (is_dir($baseStatesDir)) {
    $scanned = scandir($baseStatesDir);
    foreach ($scanned as $f) {
        if ($f === '.' || $f === '..') continue;
        if (is_dir($baseStatesDir . '/' . $f)) {
            $slug = strtolower(trim(preg_replace('/[^a-zA-Z0-9]+/', '-', $f), '-'));
            $folderMap[$slug] = $f;
        }
    }
}

// Clean official display names for Indian states & Union Territories
$stateDisplayNames = [
    'andhra-pradesh'    => 'Andhra Pradesh',
    'arunachal-pradesh'  => 'Arunachal Pradesh',
    'assam'              => 'Assam',
    'bihar'              => 'Bihar',
    'chhattisgarh'       => 'Chhattisgarh',
    'delhi'              => 'Delhi NCR',
    'goa'                => 'Goa',
    'gujarat'            => 'Gujarat',
    'haryana'            => 'Haryana',
    'himachal-pradesh'   => 'Himachal Pradesh',
    'jharkhand'          => 'Jharkhand',
    'karnataka'          => 'Karnataka',
    'kerala'             => 'Kerala',
    'madhya-pradesh'     => 'Madhya Pradesh',
    'maharashtra'        => 'Maharashtra',
    'manipur'            => 'Manipur',
    'meghalaya'          => 'Meghalaya',
    'mizoram'            => 'Mizoram',
    'nagaland'           => 'Nagaland',
    'odisha'             => 'Odisha',
    'punjab'             => 'Punjab',
    'rajasthan'          => 'Rajasthan',
    'sikkim'             => 'Sikkim',
    'tamil-nadu'         => 'Tamil Nadu',
    'telangana'          => 'Telangana',
    'tripura'            => 'Tripura',
    'uttar-pradesh'      => 'Uttar Pradesh',
    'uttarakhand'        => 'Uttarakhand',
    'west-bengal'        => 'West Bengal',
];

// Curated Hero background images where high-res landmark exists
$stateHeroBgs = [
    'andhra-pradesh'    => 'img/Dhyana Buddha-Vijayawada-Andhra Pradesh.jpg',
    'telangana'         => 'img/charminar-telangana.jpg',
    'karnataka'         => 'img/karnataka_hd.jpg',
    'tamil-nadu'        => 'img/tamilnadu_hd.jpg',
    'kerala'            => 'img/kerala_hd.jpg',
    'arunachal-pradesh' => 'img/States_Image/Arunachal%20Pradesh/ITANAGAR.jpg',
    'maharashtra'       => 'img/mumbai-skyline-skyscrapers-construction-1024x682.jpg',
];

// Determine requested state slug
$requestedStateSlug = strtolower(trim($_GET['state'] ?? 'andhra-pradesh'));

// If user navigates to an unknown slug, default to andhra-pradesh
if (!isset($folderMap[$requestedStateSlug]) && !isset($stateDisplayNames[$requestedStateSlug])) {
    $requestedStateSlug = 'andhra-pradesh';
}

$stateName = $stateDisplayNames[$requestedStateSlug] ?? ucwords(str_replace('-', ' ', $requestedStateSlug));
$stateFolder = $folderMap[$requestedStateSlug] ?? null;

// Dynamically scan and load city photos from img/States_Image/<StateFolder>/
$cities = [];
if ($stateFolder && is_dir($baseStatesDir . '/' . $stateFolder)) {
    $files = scandir($baseStatesDir . '/' . $stateFolder);
    foreach ($files as $file) {
        if ($file === '.' || $file === '..') continue;
        if (!preg_match('/\.(jpg|jpeg|png|webp|avif)$/i', $file)) continue;

        // Skip non-city files if any
        if (stripos($file, 'things-to-do') !== false) continue;

        $rawName = pathinfo($file, PATHINFO_FILENAME);
        $cityName = strtoupper(trim(str_replace('_', ' ', $rawName)));

        $cities[] = [
            'name' => $cityName,
            'filename' => $file,
            'img' => 'img/States_Image/' . rawurlencode($stateFolder) . '/' . rawurlencode($file)
        ];
    }
}

// Fallback in case folder is empty or not found
if (empty($cities)) {
    $fallbackImages = ['property-1.jpg', 'property-2.jpg', 'property-3.jpg', 'property-4.jpg'];
    $cities = [
        ['name' => strtoupper($stateName) . ' CENTRAL HUB', 'img' => 'img/' . $fallbackImages[0]],
        ['name' => 'CAPITAL REGION', 'img' => 'img/' . $fallbackImages[1]],
        ['name' => 'GROWTH CORRIDOR', 'img' => 'img/' . $fallbackImages[2]],
        ['name' => 'METROPOLITAN TOWNSHIP', 'img' => 'img/' . $fallbackImages[3]],
    ];
}

// Determine Hero Background image
if (isset($stateHeroBgs[$requestedStateSlug]) && file_exists(__DIR__ . '/' . urldecode($stateHeroBgs[$requestedStateSlug]))) {
    $heroBg = $stateHeroBgs[$requestedStateSlug];
} elseif (!empty($cities) && isset($cities[0]['img'])) {
    $heroBg = $cities[0]['img'];
} else {
    $heroBg = 'img/about_usbreadcrumb.jpg';
}

$currentState = [
    'slug' => $requestedStateSlug,
    'name' => $stateName,
    'hero_bg' => $heroBg,
    'cities' => $cities
];

// Distinct Featured Real Estate Projects by State (Different Images & Authentic Details)
$featuredProjectsByState = [
    'andhra-pradesh' => [
        'title' => 'Homelands-Uppaluru Premium Gated Residential Plots near Airport, Vijayawada',
        'badge' => 'APCRDA APPROVED',
        'img' => 'img/gated_plots_layout.jpg',
        'desc' => 'Homelands-Uppaluru is a prestigious 10-acre APCRDA & RERA approved gated layout in Uppaluru, Vijayawada, located minutes from Gannavaram International Airport. Designed with 40ft wide blacktop roads, underground drainage, avenue plantation, and crystal-clear title documentation for superior appreciation.',
        'specs1' => [
            'Project ID' => 'AP-HL29',
            'Plot Sizes' => '150 - 450 sq.yds',
            'Road Width' => '40ft & 33ft BT Roads',
            'Water Facility' => 'Overhead Tank & Supply',
            'Launch Year' => '2024'
        ],
        'specs2' => [
            'Location' => 'Uppaluru, Vijayawada',
            'Facing' => 'East / West / North',
            'Distance' => '5 Mins to Airport',
            'Price' => 'Verified Clear Title',
            'Property Status' => 'For Sale'
        ]
    ],
    'arunachal-pradesh' => [
        'title' => 'Donyi Polo Valley Eco-Residences & Scenic Hilltop Estates, Itanagar',
        'badge' => 'GOVT APPROVED',
        'img' => 'img/scenic_farmland_plot.jpg',
        'desc' => 'Donyi Polo Valley is an exclusive eco-residential and retreat plot development situated in Itanagar. Set amidst lush Himalayan foothills, this premium project offers verified legal titles, panoramic mountain views, wide road connectivity, and exceptional appreciation potential for discerning property buyers.',
        'specs1' => [
            'Project ID' => 'AR-DP10',
            'Plot Sizes' => '200 - 500 sq.yds',
            'Surroundings' => 'Scenic Green Hills',
            'Electricity' => 'Connected Grid',
            'Year Built' => '2024'
        ],
        'specs2' => [
            'Location' => 'Itanagar Hills',
            'Facing' => 'Panoramic Valley View',
            'Connectivity' => 'Near State Highway',
            'Price' => 'Verified Title',
            'Property Status' => 'Available for Registry'
        ]
    ],
    'telangana' => [
        'title' => 'Brundavanam Mega Highway Township & Commercial Venture, Hyderabad',
        'badge' => 'HMDA & RERA APPROVED',
        'img' => 'img/commercial_highway_plot.jpg',
        'desc' => 'Brundavanam is a landmark master-planned township strategically located along the booming Hyderabad growth corridor. Equipped with 100ft and 40ft wide roads, underground cabling, commercial shopping zone, modern clubhouse, and rapid access to the Outer Ring Road and Airport.',
        'specs1' => [
            'Project ID' => 'TG-BD88',
            'Plot Sizes' => '165 - 600 sq.yds',
            'Zoning' => 'R1 Residential & Commercial',
            'Security' => '24/7 Gated & Guarded',
            'Launch Year' => '2024'
        ],
        'specs2' => [
            'Location' => 'ORR Growth Hub, Hyderabad',
            'Facing' => 'East / West / North',
            'Connectivity' => '10 Mins to ORR Exit',
            'Price' => 'Bank Loan Available',
            'Property Status' => 'Ready for Construction'
        ]
    ],
    'karnataka' => [
        'title' => 'Greenfield Luxury Urban Residences & Villas, Whitefield Corridor, Bengaluru',
        'badge' => 'BMRDA APPROVED',
        'img' => 'img/luxury_apartment_residence.jpg',
        'desc' => 'Greenfield Luxury Residences is a premium master-planned development located near Whitefield and prime IT parks in Bengaluru. Designed with contemporary architectural styling, dedicated jogging tracks, clubhouse amenities, and close proximity to upcoming metro connectivity.',
        'specs1' => [
            'Project ID' => 'KA-GF45',
            'Unit Types' => 'Plots & Custom Villas',
            'Clubhouse' => 'Modern Lifestyle Club',
            'Greenery' => '40% Open Space Parks',
            'Launch Year' => '2024'
        ],
        'specs2' => [
            'Location' => 'Whitefield Tech Corridor',
            'Facing' => 'East & North Facing',
            'Distance' => 'Near ITPL & Metro',
            'Price' => 'Transparent Pricing',
            'Property Status' => 'Fast Selling'
        ]
    ],
    'tamil-nadu' => [
        'title' => 'Emerald Bay Gated Community Villa Plots along OMR IT Highway, Chennai',
        'badge' => 'CMDA APPROVED',
        'img' => 'img/gated_villa_community.jpg',
        'desc' => 'Emerald Bay is a DTCP & CMDA approved gated community villa development strategically positioned along the Old Mahabalipuram Road (OMR) in Chennai. Featuring 24/7 manned security, wide concrete avenues, children’s play areas, and premier connectivity to IT workplaces and top educational institutions.',
        'specs1' => [
            'Project ID' => 'TN-EB72',
            'Plot Sizes' => '1200 - 2400 sq.ft',
            'Road Width' => '30ft & 40ft Internal Roads',
            'Drainage' => 'Modern Underground Storm Drains',
            'Launch Year' => '2024'
        ],
        'specs2' => [
            'Location' => 'OMR IT Corridor, Chennai',
            'Facing' => 'East / North / South',
            'Transit' => 'Adjacent to OMR Expressway',
            'Price' => 'Government Approved',
            'Property Status' => 'Ready for Registration'
        ]
    ],
    'kerala' => [
        'title' => 'Palm Groves Serene Waterfront Residences & Independent Villas, Greater Kochi',
        'badge' => 'K-RERA APPROVED',
        'img' => 'img/independent_luxury_house.jpg',
        'desc' => 'Palm Groves is an exclusive gated community of independent luxury villas and landscaped homestead plots nestled in Greater Kochi. Offering clear legal titles, tranquil water-view frontage, eco-friendly infrastructure, and effortless connectivity to Cochin International Airport and Seaport-Airport Road.',
        'specs1' => [
            'Project ID' => 'KL-PG19',
            'Plot Sizes' => '5 - 15 Cents',
            'Waterfront' => 'Direct River & Backwater Views',
            'Landscape' => 'Tropical Gardens & Avenue Palms',
            'Launch Year' => '2024'
        ],
        'specs2' => [
            'Location' => 'Greater Kochi Enclave',
            'Facing' => 'Scenic Water Frontage',
            'Proximity' => '15 Mins to Airport Road',
            'Price' => 'Clear Title Verified',
            'Property Status' => 'For Sale'
        ]
    ],
    'maharashtra' => [
        'title' => 'Skyline Heights Signature Duplexes & Premium Homes, Mumbai Metropolitan Corridor',
        'badge' => 'MAHARERA APPROVED',
        'img' => 'img/PREMIUM DUPLEX PROJECT.jpg',
        'desc' => 'Skyline Heights is an ultra-modern residential development located in the high-growth metropolitan transit corridor. Built with top-grade construction standards, sky deck amenities, dedicated multi-level parking, and seamless connectivity to the expressway and upcoming metro line.',
        'specs1' => [
            'Project ID' => 'MH-SH90',
            'Configuration' => '3 & 4 BHK Duplex / Plots',
            'Amenities' => 'Sky Lounge, Gym & Pool',
            'Security' => 'Biometric & 24/7 Surveillance',
            'Launch Year' => '2024'
        ],
        'specs2' => [
            'Location' => 'Mumbai Metro Growth Hub',
            'Facing' => 'City Skyline Views',
            'Connectivity' => 'Near Highway & Metro',
            'Price' => 'Verified RERA Listing',
            'Property Status' => 'Booking Open'
        ]
    ],
    'delhi' => [
        'title' => 'Imperial Enclave Smart Township & Luxury Villas, Delhi NCR Growth Zone',
        'badge' => 'RERA REGISTERED',
        'img' => 'img/DUPLEX IN PRIME LAYOUT.jpg',
        'desc' => 'Imperial Enclave is a master-planned smart community in the National Capital Region. Offering gated 3-tier security, underground cabling, wide 60ft tree-lined boulevards, community sports complex, and rapid expressway access to international business districts.',
        'specs1' => [
            'Project ID' => 'DL-IE33',
            'Plot Sizes' => '180 - 500 sq.yds',
            'Infrastructure' => 'Smart Grid & Rainwater Harvesting',
            'Road Width' => '60ft & 40ft Sector Roads',
            'Launch Year' => '2024'
        ],
        'specs2' => [
            'Location' => 'Expressway Corridor, Delhi NCR',
            'Facing' => 'Park Facing / Corner Units',
            'Transit' => 'Quick Metro & Highway Access',
            'Price' => 'Clear Title Guarantee',
            'Property Status' => 'Ready for Handover'
        ]
    ],
    'gujarat' => [
        'title' => 'Sankalp Heritage Plots & Contemporary Gated Living, Ahmedabad Growth Corridor',
        'badge' => 'GUJRERA APPROVED',
        'img' => 'img/STYLISH MODERN HOME.jpg',
        'desc' => 'Sankalp Heritage offers premier RERA-approved residential layout plots along the booming expansion corridor in Ahmedabad. Featuring wide blacktop roads, underground water and drainage lines, landscaped leisure parks, and clear freehold title documentation.',
        'specs1' => [
            'Project ID' => 'GJ-SH55',
            'Plot Sizes' => '150 - 450 sq.yds',
            'Recreation' => 'Clubhouse & Jogging Track',
            'Water Facility' => 'Dedicated Over-Head Storage',
            'Launch Year' => '2024'
        ],
        'specs2' => [
            'Location' => 'Growth Corridor, Ahmedabad',
            'Facing' => 'East / West Facing',
            'Proximity' => 'Near SG Highway Extension',
            'Price' => 'Bank Loan Pre-Approved',
            'Property Status' => 'Available for Sale'
        ]
    ]
];

// Fallback rotation pool for other states so images never repeat
$fallbackRotationPool = [
    [
        'title' => 'Pudami Royal Greens Master-Planned Gated Township, ' . $stateName,
        'badge' => 'GOVT APPROVED',
        'img' => 'img/gated_plots_layout.jpg',
        'desc' => 'Pudami Royal Greens is a fully approved, master-planned residential gated layout in ' . $stateName . '. Featuring wide blacktop roads, underground drainage, avenue plantation, and clear legal documentation for high-yield property investment.',
        'specs1' => ['Project ID' => 'PRG-' . strtoupper(substr($requestedStateSlug, 0, 2)), 'Plot Sizes' => '150 - 400 sq.yds', 'Road Width' => '40ft & 30ft Roads', 'Water Supply' => '24/7 Treated Water', 'Launch Year' => '2024'],
        'specs2' => ['Location' => $stateName . ' Prime Corridor', 'Facing' => 'East / North / West', 'Status' => 'Clear Title', 'Price' => 'Verified Safe', 'Property Status' => 'For Sale']
    ],
    [
        'title' => 'Pudami Skyline Heights & Commercial Highway Avenue, ' . $stateName,
        'badge' => 'RERA APPROVED',
        'img' => 'img/commercial_highway_plot.jpg',
        'desc' => 'Pudami Skyline Heights offers prime highway-facing commercial and residential plots in the emerging smart city corridor of ' . $stateName . '. Complete with wide access lanes, streetlighting, and strong capital appreciation potential.',
        'specs1' => ['Project ID' => 'PSH-' . strtoupper(substr($requestedStateSlug, 0, 2)), 'Plot Sizes' => '200 - 600 sq.yds', 'Zoning' => 'Commercial & Residential', 'Security' => 'Gated Compound', 'Launch Year' => '2024'],
        'specs2' => ['Location' => 'Highway Growth Hub, ' . $stateName, 'Facing' => 'Highway Facing', 'Connectivity' => 'Near National Highway', 'Price' => 'Direct Registry', 'Property Status' => 'Ready to Build']
    ],
    [
        'title' => 'Pudami Nature Country Estates & Eco-Villas, ' . $stateName,
        'badge' => 'CLEAR TITLE',
        'img' => 'img/scenic_farmland_plot.jpg',
        'desc' => 'Pudami Nature Country Estates offers scenic open acreage and farmstead plots in ' . $stateName . '. Ideal for building weekend holiday farmsteads, luxury villas, or secure long-term land wealth with peaceful natural surroundings.',
        'specs1' => ['Project ID' => 'PNE-' . strtoupper(substr($requestedStateSlug, 0, 2)), 'Plot Sizes' => '500 - 1500 sq.yds', 'Surroundings' => 'Lush Green Countryside', 'Water' => 'Borewell & Natural Source', 'Launch Year' => '2024'],
        'specs2' => ['Location' => 'Eco Corridor, ' . $stateName, 'Facing' => 'Open Green Views', 'Roads' => 'Direct Tar Road Access', 'Price' => '100% Clear Title', 'Property Status' => 'Limited Plots']
    ],
    [
        'title' => 'Pudami Grand Residency & Elite Duplex Enclave, ' . $stateName,
        'badge' => 'RERA COMPLIANT',
        'img' => 'img/PREMIUM DUPLEX PROJECT.jpg',
        'desc' => 'Pudami Grand Residency is a boutique luxury villa and plot enclave located in ' . $stateName . '. Designed for discerning families seeking private independent living, 24/7 security, and close proximity to top conveniences.',
        'specs1' => ['Project ID' => 'PGR-' . strtoupper(substr($requestedStateSlug, 0, 2)), 'Plot Sizes' => '180 - 350 sq.yds', 'Amenities' => 'Park & Jogging Track', 'Electrification' => 'Underground Cabling', 'Launch Year' => '2024'],
        'specs2' => ['Location' => 'Central Hub, ' . $stateName, 'Facing' => 'East / North Facing', 'Approvals' => 'Town Planning Approved', 'Price' => 'Bank Loan Eligible', 'Property Status' => 'Under Development']
    ],
];

if (isset($featuredProjectsByState[$requestedStateSlug])) {
    $featuredProject = $featuredProjectsByState[$requestedStateSlug];
} else {
    $hash = abs(crc32($requestedStateSlug)) % count($fallbackRotationPool);
    $featuredProject = $fallbackRotationPool[$hash];
}

include __DIR__ . '/header.php';
?>

<style>
/* Exact Matching Design System with Target Reference */
.state-hero-section {
    position: relative;
    padding: 75px 0 55px 0;
    background: linear-gradient(rgba(14, 46, 80, 0.88), rgba(7, 56, 40, 0.92)), url('<?php echo htmlspecialchars($currentState['hero_bg']); ?>') center center no-repeat;
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
        <h1 class="state-hero-title" style="color: #ffffff !important;"><?php echo htmlspecialchars($currentState['name']); ?></h1>
        <p class="fs-5 state-hero-subtitle mb-3">Premium Properties Across <?php echo htmlspecialchars($currentState['name']); ?></p>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase mb-0 fw-bold">
                <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none">HOME</a></li>
                <li class="breadcrumb-item">OUR PRESENCE</li>
                <li class="breadcrumb-item active" aria-current="page" style="color: #ffffff !important;"><?php echo htmlspecialchars($currentState['name']); ?></li>
            </ol>
        </nav>
    </div>
</div>

<!-- ==========================================================================
     Section 1: Real Cities Grid from img/States_Image (Clean, Buttonless Cards)
     ========================================================================== -->
<div class="container-fluid py-4 px-lg-5">
    <div class="container">
        <h2 class="state-section-heading">Premium Properties Across <?php echo htmlspecialchars($currentState['name']); ?></h2>
        <div class="state-heading-divider"></div>

        <div class="row g-4 state-cities-row justify-content-center">
            <?php foreach ($currentState['cities'] as $idx => $city): ?>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <a href="contact.php?service=open+plots&location=<?php echo urlencode($city['name'] . ', ' . $currentState['name']); ?>" class="state-city-card">
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
     Section 3: Explore Our Wide Range of Premium Properties (State-Specific Showcase)
     ========================================================================== -->
<div class="container-fluid pt-5 pb-3 px-lg-5">
    <div class="container">
        <h2 class="state-section-heading">Explore Our Wide Range of Premium Properties</h2>
        <div class="state-heading-divider"></div>

        <!-- Category Badges -->
        <div class="text-center mb-5 d-flex flex-wrap justify-content-center gap-2">
            <span class="badge px-4 py-2 rounded-pill fw-semibold" style="background: #0E2E50; color: #ffffff; font-size: 0.88rem;">Luxury Villas &amp; Independent Houses</span>
            <span class="badge px-4 py-2 rounded-pill fw-semibold" style="background: #00B98E; color: #ffffff; font-size: 0.88rem;">Premium Residential Plots</span>
            <span class="badge px-4 py-2 rounded-pill fw-semibold" style="background: #F1F5F9; color: #475569; font-size: 0.88rem;">Modern Plots &amp; Apartments</span>
        </div>

        <!-- State-Specific Featured Project Card -->
        <div class="featured-prop-wrap p-4 p-lg-5 mb-0">
            <h3 class="fw-bold text-dark mb-4" style="font-family: 'Cinzel', serif; font-size: 1.6rem;">
                <?php echo htmlspecialchars($featuredProject['title']); ?>
            </h3>

            <div class="row g-5 align-items-center">
                <!-- Left: Description and Specifications -->
                <div class="col-lg-6">
                    <p class="text-muted mb-4" style="line-height: 1.85; font-size: 0.95rem;">
                        <?php echo htmlspecialchars($featuredProject['desc']); ?>
                    </p>

                    <div class="row g-3">
                        <div class="col-sm-6">
                            <ul class="prop-spec-list">
                                <?php foreach ($featuredProject['specs1'] as $label => $val): ?>
                                    <li><label><?php echo htmlspecialchars($label); ?>:</label> <span><?php echo htmlspecialchars($val); ?></span></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul class="prop-spec-list">
                                <?php foreach ($featuredProject['specs2'] as $label => $val): ?>
                                    <li>
                                        <label><?php echo htmlspecialchars($label); ?>:</label> 
                                        <?php if ($label === 'Property Status'): ?>
                                            <span class="badge bg-success-subtle text-success"><?php echo htmlspecialchars($val); ?></span>
                                        <?php elseif ($label === 'Price'): ?>
                                            <span class="text-success"><?php echo htmlspecialchars($val); ?></span>
                                        <?php else: ?>
                                            <span><?php echo htmlspecialchars($val); ?></span>
                                        <?php endif; ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>

                    <div class="pt-4 mt-2">
                        <a href="contact.php?service=open+plots&location=<?php echo urlencode($featuredProject['title']); ?>" class="btn btn-primary px-4 py-3 rounded-pill fw-bold text-white shadow-sm" style="background: linear-gradient(135deg, #00B98E 0%, #0E4B37 100%); border: none;">
                            <i class="fa fa-envelope me-2"></i> Inquire About This Project
                        </a>
                    </div>
                </div>

                <!-- Right: Large State-Specific Project Image -->
                <div class="col-lg-6">
                    <div class="position-relative overflow-hidden rounded-4 shadow" style="height: 380px;">
                        <img src="<?php echo htmlspecialchars($featuredProject['img']); ?>" alt="<?php echo htmlspecialchars($featuredProject['title']); ?>" class="w-100 h-100" style="object-fit: cover;">
                        <span class="badge position-absolute top-0 end-0 m-3 px-3 py-2 rounded-pill fw-bold" style="background: rgba(14, 46, 80, 0.9); color: #ffffff; font-size: 0.8rem;"><?php echo htmlspecialchars($featuredProject['badge']); ?></span>
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
                <a href="https://wa.me/919182613797?text=Hello%20Pudami%20Consultancy%2C%20I%20am%20interested%20in%20properties%20in%20<?php echo urlencode($currentState['name']); ?>" target="_blank" class="btn btn-success px-4 py-3 rounded-pill fw-bold text-white shadow" style="font-size: 0.95rem;">
                    <i class="fab fa-whatsapp me-2 fs-5"></i> Chat on WhatsApp
                </a>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/footer.php'; ?>

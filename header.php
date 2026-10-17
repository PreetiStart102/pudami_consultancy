<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once __DIR__ . '/db.php';
$activePage = basename($_SERVER['PHP_SELF'], ".php");

// Dynamic SEO configuration based on active page
$pageTitles = [
    'index' => 'Pudami Consultancy Services (India) Pvt Ltd - Premier Real Estate & Property Advisory',
    'about' => 'About Us | Pudami Consultancy Services - AP RERA & DPIIT Recognized Advisory',
    'properties' => 'Verified Properties, Open Plots & Villas | Pudami Consultancy Services',
    'property-list' => 'Property Listings across AP & Telangana | Pudami Consultancy Services',
    'our-presence' => 'Our Regional Presence across South India | Pudami Consultancy Services',
    'careers' => 'Career Opportunities in Real Estate | Pudami Consultancy Services',
    'contact' => 'Contact Real Estate Advisory Experts | Pudami Consultancy Services',
    'login' => 'Client Portal Login | Pudami Consultancy Services',
    'register' => 'Register New Client Account | Pudami Consultancy Services',
    'dashboard' => 'Investor & Client Dashboard | Pudami Consultancy Services',
    'privacy-policy' => 'Privacy Policy | Pudami Consultancy Services (India) Pvt Ltd - Data Protection & Compliance'
];

$pageDescriptions = [
    'index' => 'Pudami Consultancy Services (India) Pvt Ltd is an AP RERA registered & DPIIT recognized premier real estate advisory firm offering 100% verified open plots, luxury villas, gated apartments, 30-year link legal checks, and bank home loans in Vijayawada, Hyderabad & South India.',
    'about' => 'Learn about Pudami Consultancy Services - over a decade of trust, MSME, ISO 9001:2015, and AP RERA statutory credentials delivering verified, hassle-free property transactions across Andhra Pradesh and Telangana.',
    'properties' => 'Browse 100% verified residential plots, luxury duplex villas, and commercial real estate with clear link titles and pre-approved bank loans from SBI, HDFC, and LIC.',
    'property-list' => 'Search and filter prime plots and homes in Hyderabad, Vijayawada, Guntur, and Amaravati with statutory approval guarantee.',
    'our-presence' => 'Explore Pudami Consultancy project presence across prime growth corridors in Andhra Pradesh and Telangana.',
    'careers' => 'Join our team of certified real estate advisors, property valuation analysts, and marketing executives.',
    'contact' => 'Get in touch with Pudami Consultancy property advisors in Vijayawada & Hyderabad for site visits, EC verification, and loan consultations.',
    'privacy-policy' => 'Official Privacy Policy of Pudami Consultancy Services (India) Pvt Ltd. Learn how we safeguard client data, Aadhar documents, property records, and comply with RERA and DPDP Act.'
];

$currentTitle = $pageTitles[$activePage] ?? 'Pudami Consultancy Services (India) Pvt Ltd - Premier Real Estate & Property Advisory';
$currentDescription = $pageDescriptions[$activePage] ?? 'Pudami Consultancy Services (India) Pvt Ltd is an AP RERA registered & DPIIT recognized premier real estate consultancy providing expert property advisory, land verification, investment consultation & home loan assistance across South India.';

// Construct Canonical URL
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || ($_SERVER['SERVER_PORT'] ?? 80) == 443) ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$currentUrl = $protocol . $host . ($_SERVER['REQUEST_URI'] ?? '/');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo htmlspecialchars($currentTitle); ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
    <!-- Primary SEO Meta Tags -->
    <meta name="title" content="<?php echo htmlspecialchars($currentTitle); ?>">
    <meta name="description" content="<?php echo htmlspecialchars($currentDescription); ?>">
    <meta name="keywords" content="Pudami Consultancy Services, Pudami Consultancy, Real Estate Advisory, Vijayawada Plots, Hyderabad Real Estate, AP RERA Registered, DPIIT Recognized, Open Plots Andhra Pradesh, Luxury Villas Hyderabad, Property Verification, 30-Year Link Documents, Encumbrance Certificate, Home Loan Sanctions">
    <meta name="author" content="Pudami Consultancy Services (India) Pvt Ltd">
    <meta name="publisher" content="Pudami Consultancy Services (India) Pvt Ltd">
    <meta name="rating" content="General">
    <meta name="revisit-after" content="7 days">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">

    <!-- Canonical Tag -->
    <link rel="canonical" href="<?php echo htmlspecialchars($currentUrl); ?>">

    <!-- Geographic & Regional Targeting (GEO Meta Tags) -->
    <meta name="geo.region" content="IN-AP">
    <meta name="geo.placename" content="Vijayawada, Andhra Pradesh, India">
    <meta name="geo.position" content="16.5062;80.6480">
    <meta name="ICBM" content="16.5062, 80.6480">
    <meta name="geo.country" content="IN">
    <meta name="coverage" content="Andhra Pradesh, Telangana, South India">
    <meta name="distribution" content="Global">
    <meta name="target" content="all">

    <!-- Open Graph / Facebook / WhatsApp Rich Social Cards -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Pudami Consultancy Services (India) Pvt Ltd">
    <meta property="og:title" content="<?php echo htmlspecialchars($currentTitle); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($currentDescription); ?>">
    <meta property="og:url" content="<?php echo htmlspecialchars($currentUrl); ?>">
    <meta property="og:image" content="<?php echo $protocol . $host; ?>/Pudami_Consultancy/img/favicon-512x512.png">
    <meta property="og:image:secure_url" content="<?php echo $protocol . $host; ?>/Pudami_Consultancy/img/favicon-512x512.png">
    <meta property="og:image:width" content="512">
    <meta property="og:image:height" content="512">
    <meta property="og:image:alt" content="Pudami Consultancy Services Emblem">
    <meta property="og:locale" content="en_IN">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($currentTitle); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($currentDescription); ?>">
    <meta name="twitter:image" content="<?php echo $protocol . $host; ?>/Pudami_Consultancy/img/favicon-512x512.png">

    <!-- Complete Search-Engine & Browser Favicon Suite (pudamiconsultancy_sectorimg) -->
    <!-- Direct Fallbacks for Standard Crawlers -->
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- Standard Browser Favicons -->
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <!-- Google Search SERP Favicon Specification (Multiple of 48px square required by Google Search) -->
    <link rel="icon" type="image/png" sizes="48x48" href="img/favicon-48x48.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="144x144" href="img/favicon-144x144.png">
    <link rel="icon" type="image/png" sizes="192x192" href="img/favicon-192x192.png">
    <link rel="icon" type="image/png" sizes="512x512" href="img/favicon-512x512.png">
    <!-- Apple Touch Icon for iOS Safari & Home Screen Shortcuts -->
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <!-- Progressive Web App Manifest -->
    <link rel="manifest" href="site.webmanifest">
    <meta name="msapplication-TileColor" content="#0E2E50">
    <meta name="msapplication-TileImage" content="img/favicon-144x144.png">
    <meta name="theme-color" content="#0E2E50">

    <!-- Schema.org JSON-LD Structured Data for Google SERP & Knowledge Panel -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "RealEstateAgent",
          "@id": "https://pudamiconsultancy.com/#organization",
          "name": "Pudami Consultancy Services (India) Pvt Ltd",
          "alternateName": "Pudami Consultancy",
          "url": "https://pudamiconsultancy.com",
          "logo": {
            "@type": "ImageObject",
            "url": "https://pudamiconsultancy.com/img/favicon-512x512.png",
            "caption": "Pudami Consultancy Services Logo"
          },
          "image": "https://pudamiconsultancy.com/img/aboutus_proeprlyimg.png",
          "description": "DPIIT Certified & AP RERA Registered real estate advisory firm delivering 100% verified open plots, luxury villas, gated apartments, 30-year link legal checks, and home loan sanctions in Andhra Pradesh & Telangana.",
          "telephone": "+91-9182613797",
          "email": "info@pudamiconsultancy.com",
          "priceRange": "₹₹ - ₹₹₹₹",
          "address": {
            "@type": "PostalAddress",
            "addressLocality": "Vijayawada",
            "addressRegion": "Andhra Pradesh",
            "addressCountry": "IN"
          },
          "geo": {
            "@type": "GeoCoordinates",
            "latitude": "16.5062",
            "longitude": "80.6480"
          },
          "areaServed": [
            {
              "@type": "State",
              "name": "Andhra Pradesh"
            },
            {
              "@type": "State",
              "name": "Telangana"
            }
          ],
          "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Real Estate Advisory Services",
            "itemListElement": [
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "Open Plots Advisory & Acquisition"
                }
              },
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "Luxury Villas & Apartments Sale Guidance"
                }
              },
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "30-Year Link Document & EC Legal Verification"
                }
              },
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "Home Loan Fast-Track Sanctions (SBI, HDFC, LIC)"
                }
              }
            ]
          },
          "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
              "Monday",
              "Tuesday",
              "Wednesday",
              "Thursday",
              "Friday",
              "Saturday"
            ],
            "opens": "09:00",
            "closes": "19:00"
          }
        },
        {
          "@type": "WebSite",
          "@id": "https://pudamiconsultancy.com/#website",
          "url": "https://pudamiconsultancy.com",
          "name": "Pudami Consultancy Services",
          "publisher": {
            "@id": "https://pudamiconsultancy.com/#organization"
          }
        }
      ]
    }
    </script>

    <!-- Premium Designer Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600;700;800&family=Outfit:wght@500;600;700;800&family=Plus+Jakarta+Sans:wght@500;600;700;800&family=Playfair+Display:ital,wght@0,600;0,700;1,600&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: #2D3748;
        }
        /* Instant content display & smooth scroll performance - eliminate blank delay */
        .wow {
            visibility: visible !important;
        }
        .animated {
            -webkit-animation-duration: 0.35s !important;
            animation-duration: 0.35s !important;
            -webkit-animation-fill-mode: both !important;
            animation-fill-mode: both !important;
        }
        img {
            content-visibility: auto;
        }
        /* Designer Headings */
        h1, h2, .section-title h1, .display-5, .display-6 {
            font-family: 'Cinzel', 'Playfair Display', Georgia, serif !important;
            letter-spacing: 0.5px;
            font-weight: 700;
        }
        h3, h4, h5, h6 {
            font-family: 'Outfit', 'Plus Jakarta Sans', sans-serif !important;
            font-weight: 700;
            letter-spacing: 0.2px;
        }
        .top-bar-exact {
            background-color: #ffffff;
            font-size: 0.88rem;
            color: #2D3748;
            border-bottom: 1px solid #E2E8F0;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
        .top-bar-exact a {
            color: #2D3748;
            text-decoration: none;
            transition: color 0.2s;
        }
        .top-bar-exact a:hover {
            color: #0E4B37;
        }
        html, body {
            overflow-x: clip !important;
        }
        .container-fluid.bg-white.p-0 {
            overflow: visible !important;
        }
        .nav-bar {
            margin-top: 0 !important;
            padding: 0 !important;
            position: -webkit-sticky !important;
            position: sticky !important;
            top: 0 !important;
            left: 0 !important;
            right: 0 !important;
            width: 100% !important;
            z-index: 1040 !important;
            background: #ffffff !important;
            border-bottom: 1px solid rgba(0, 0, 0, 0.08) !important;
            transition: box-shadow 0.25s ease !important;
        }
        .nav-bar.is-scrolled,
        .nav-bar.sticky-top {
            position: -webkit-sticky !important;
            position: sticky !important;
            top: 0 !important;
            z-index: 1040 !important;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08) !important;
        }
        /* Designer Navbar Menu Font (Matching Image 1 Luxury Serif Writing) */
        .navbar-light .navbar-nav .nav-link {
            font-family: 'Cinzel', 'Playfair Display', Georgia, serif !important;
            color: #0E2E50 !important;
            font-weight: 700 !important;
            font-size: 0.88rem !important;
            letter-spacing: 0.6px !important;
            padding: 16px 14px !important;
            margin-right: 6px !important;
            text-transform: uppercase !important;
            white-space: nowrap !important;
            position: relative;
            text-decoration: none !important;
            border-bottom: none !important;
            transition: color 0.25s ease, transform 0.25s ease;
        }
        /* Strictly remove under dash line / underline on all navbar links */
        .navbar-light .navbar-nav .nav-link::after,
        .navbar-light .navbar-nav .nav-link:hover::after,
        .navbar-light .navbar-nav .nav-link.active::after {
            display: none !important;
            content: none !important;
            width: 0 !important;
            height: 0 !important;
            opacity: 0 !important;
            border: none !important;
        }
        .navbar-light .navbar-nav .nav-link:hover {
            color: #00B98E !important;
            text-decoration: none !important;
            border-bottom: none !important;
            transform: translateY(-1px);
        }
        .navbar-light .navbar-nav .nav-link.active {
            color: #00B98E !important;
            font-weight: 800 !important;
            text-decoration: none !important;
            border-bottom: none !important;
        }
        .dropdown-menu .dropdown-item {
            font-family: 'Cinzel', 'Outfit', serif;
            font-weight: 700;
            font-size: 0.9rem;
            letter-spacing: 0.8px;
            color: #0E2E50;
            padding: 10px 20px;
            transition: all 0.2s ease;
        }
        .dropdown-menu .dropdown-item:hover,
        .dropdown-menu .dropdown-item.active {
            background-color: #EFFDF5;
            color: #0E4B37;
        }
        .btn-register-custom {
            background-color: #0E4B37;
            color: #ffffff !important;
            font-family: 'Outfit', sans-serif !important;
            font-weight: 700;
            border-radius: 6px;
            padding: 10px 24px;
            border: none;
            letter-spacing: 1px;
            text-transform: uppercase;
            font-size: 0.88rem;
            transition: all 0.3s ease;
        }
        .btn-register-custom:hover {
            background-color: #093426;
            box-shadow: 0 4px 14px rgba(14, 75, 55, 0.35);
        }
        .btn-login-custom {
            background-color: #D49E49;
            color: #ffffff !important;
            font-family: 'Outfit', sans-serif !important;
            font-weight: 700;
            border-radius: 6px;
            padding: 10px 24px;
            border: none;
            letter-spacing: 1px;
            text-transform: uppercase;
            font-size: 0.88rem;
            transition: all 0.3s ease;
        }
        .btn-login-custom:hover {
            background-color: #b88332;
            box-shadow: 0 4px 14px rgba(212, 158, 73, 0.35);
        }
        .hero-title-badge {
            background-color: #0E4B37;
            color: #ffffff;
            font-family: 'Cinzel', 'Playfair Display', serif !important;
            font-size: 1.8rem;
            font-weight: 700;
            padding: 12px 28px;
            display: inline-block;
            border-radius: 6px;
            letter-spacing: 1.8px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.3);
        }
        .hero-tagline-text {
            color: #ffffff;
            font-family: 'Cinzel', 'Playfair Display', serif !important;
            font-size: 1.5rem;
            font-weight: 700;
            text-shadow: 0 2px 10px rgba(0,0,0,0.8);
            margin-top: 12px;
            letter-spacing: 0.8px;
        }
        .header-carousel .owl-nav {
            position: absolute;
            width: 100%;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            display: flex;
            justify-content: space-between;
            padding: 0 24px;
            pointer-events: none;
            z-index: 25;
        }
        .header-carousel .owl-nav .owl-prev,
        .header-carousel .owl-nav .owl-next {
            width: 44px;
            height: 44px;
            display: flex !important;
            align-items: center;
            justify-content: center;
            background: rgba(14, 46, 80, 0.75) !important;
            color: #ffffff !important;
            font-size: 1.1rem !important;
            border-radius: 50% !important;
            pointer-events: auto;
            transition: all 0.25s ease;
            box-shadow: 0 4px 14px rgba(0,0,0,0.3);
        }
        .header-carousel .owl-nav .owl-prev:hover,
        .header-carousel .owl-nav .owl-next:hover {
            background: #00B98E !important;
            transform: scale(1.1);
        }
        /* Sequence Manner Visible Hero Carousel Pagination Dots */
        .header-carousel .owl-dots {
            position: absolute;
            bottom: 44px !important;
            left: 50%;
            transform: translateX(-50%);
            display: flex !important;
            align-items: center;
            justify-content: center;
            gap: 8px !important;
            z-index: 25 !important;
        }
        .header-carousel .owl-dots .owl-dot {
            outline: none !important;
            border: none !important;
            background: transparent !important;
            padding: 0 !important;
            margin: 0 !important;
        }
        .header-carousel .owl-dots .owl-dot span {
            width: 9px;
            height: 9px;
            margin: 0;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.9) !important;
            border: 1px solid rgba(14, 46, 80, 0.35);
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.4);
            transition: all 0.35s cubic-bezier(0.165, 0.84, 0.44, 1);
            display: block;
        }
        .header-carousel .owl-dots .owl-dot.active span {
            width: 24px;
            height: 9px;
            border-radius: 8px;
            background: #00B98E !important;
            border-color: #ffffff !important;
            box-shadow: 0 3px 10px rgba(0, 185, 142, 0.6);
        }
        /* Enhanced Interactive Large Bank Logo Cards */
        .bank-logo-item {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 18px 24px;
            height: 115px;
            background: #ffffff !important;
            border: 1px solid #E2E8F0 !important;
            border-radius: 16px !important;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.04) !important;
            transition: all 0.35s cubic-bezier(0.165, 0.84, 0.44, 1);
            cursor: pointer;
            margin: 10px 5px;
        }
        .bank-logo-item:hover {
            transform: translateY(-6px) scale(1.03);
            box-shadow: 0 14px 32px rgba(14, 75, 55, 0.16) !important;
            border-color: #00B98E !important;
        }
        .bank-logo-item img {
            max-height: 80px;
            max-width: 210px;
            object-fit: contain;
            transition: transform 0.35s ease, filter 0.35s ease;
        }
        .bank-logo-item:hover img {
            transform: scale(1.07);
        }
        /* Scrollable Indian States Presence Dropdown Base Styling */
        .presence-dropdown {
            max-height: 280px !important;
            overflow-y: auto !important;
            -webkit-overflow-scrolling: touch !important;
            touch-action: pan-y !important;
            overscroll-behavior-y: contain !important;
            border-radius: 12px !important;
            border: 1px solid #E2E8F0 !important;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1) !important;
            background: #ffffff !important;
        }
        .presence-dropdown::-webkit-scrollbar {
            width: 5px;
        }
        .presence-dropdown::-webkit-scrollbar-track {
            background: #F1F5F9;
            border-radius: 5px;
        }
        .presence-dropdown::-webkit-scrollbar-thumb {
            background: #00B98E;
            border-radius: 5px;
        }
        @media (min-width: 992px) {
            .presence-dropdown {
                max-height: 360px !important;
                min-width: 260px !important;
                position: absolute !important;
            }
            .nav-item.dropdown:hover .presence-dropdown {
                display: block !important;
                opacity: 1 !important;
                visibility: visible !important;
                transform: translateY(0) !important;
            }
        }

        /* Hero Carousel Image Responsive Scaling & Balanced Height */
        .hero-carousel-img {
            height: 540px !important;
            object-fit: cover !important;
            width: 100% !important;
        }
        @media (max-width: 1199.98px) {
            .hero-carousel-img {
                height: 500px !important;
            }
        }
        @media (max-width: 991.98px) {
            .hero-carousel-img {
                height: 480px !important;
            }
        }
        @media (max-width: 575.98px) {
            .hero-carousel-img {
                height: 480px !important;
            }
            .hero-title-badge {
                font-size: 1.15rem !important;
                padding: 8px 16px !important;
                letter-spacing: 1px !important;
                max-width: 92% !important;
            }
            .hero-tagline-text {
                font-size: 1.05rem !important;
                margin-top: 8px !important;
            }
            .header-carousel .owl-dots {
                bottom: 35px !important;
            }
        }

        /* Mobile View Navigation & Smooth Inner Scroll Dropdown */
        @media (max-width: 991.98px) {
            .nav-bar .navbar-collapse {
                text-align: center !important;
                padding-top: 15px !important;
                padding-bottom: 25px !important;
                max-height: 80vh !important;
                overflow-y: auto !important;
                -webkit-overflow-scrolling: touch !important;
            }
            .nav-bar .navbar-nav {
                align-items: center !important;
                justify-content: center !important;
                width: 100% !important;
            }
            .nav-bar .nav-item {
                width: 100% !important;
                text-align: center !important;
            }
            .nav-bar .nav-link {
                display: block !important;
                padding: 10px 0 !important;
                text-align: center !important;
            }
            .nav-bar .nav-link::after {
                display: none !important;
            }
            .presence-dropdown {
                position: relative !important;
                float: none !important;
                max-height: 260px !important;
                overflow-y: auto !important;
                width: 100% !important;
                max-width: 300px !important;
                margin: 10px auto !important;
                background: #ffffff !important;
            }
            .presence-dropdown .dropdown-item {
                padding: 10px 16px !important;
                justify-content: center !important;
                font-size: 0.86rem !important;
            }
        }

        /* Smooth Hardware-Accelerated Transitions */
        html {
            scroll-behavior: smooth;
        }
        .dropdown-menu, .btn, .nav-link, .region-card, .accreditation-card, .amenity-card {
            will-change: transform, opacity;
            transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1) !important;
        }

        /* Desktop View Navbar Menu Right Alignment */
        @media (min-width: 992px) {
            .nav-bar .navbar {
                display: flex !important;
                justify-content: space-between !important;
                width: 100% !important;
            }
            .nav-bar .navbar-collapse {
                display: flex !important;
                flex-grow: 1 !important;
                justify-content: flex-end !important;
                align-items: center !important;
                width: auto !important;
            }
            .nav-bar .navbar-nav {
                margin-left: auto !important;
                margin-right: 1.5rem !important;
                display: flex !important;
                flex-direction: row !important;
                align-items: center !important;
            }
            .nav-bar .d-flex {
                margin-left: 0 !important;
            }
        }

        /* Fix Bootstrap Dropdown Display on Click & Hover across all devices */
        .navbar .nav-item .dropdown-menu.show,
        .navbar .nav-item.show > .dropdown-menu,
        .navbar .nav-item:hover > .dropdown-menu {
            display: block !important;
            opacity: 1 !important;
            visibility: visible !important;
            transform: translateY(0) !important;
        }

        /* Footer Social Media Buttons (Hover Green Background with Pure White Icon) */
        .footer .btn.btn-social {
            margin-right: 6px !important;
            width: 38px !important;
            height: 38px !important;
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            color: #ffffff !important;
            border: 1px solid rgba(255, 255, 255, 0.4) !important;
            border-radius: 50% !important;
            background: transparent !important;
            transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1) !important;
            text-decoration: none !important;
        }
        .footer .btn.btn-social:hover {
            color: #ffffff !important;
            background: #00B98E !important;
            border-color: #00B98E !important;
            transform: translateY(-3px) !important;
            box-shadow: 0 4px 14px rgba(0, 185, 142, 0.4) !important;
        }
        .footer .btn.btn-social i {
            color: inherit !important;
            font-size: 0.95rem !important;
        }
        .presence-dropdown .dropdown-item {
            font-family: 'Outfit', 'Plus Jakarta Sans', sans-serif !important;
            font-weight: 700 !important;
            font-size: 0.88rem !important;
            letter-spacing: 0.8px !important;
            text-transform: uppercase !important;
            color: #2D3748 !important;
            padding: 10px 18px !important;
            border-bottom: 1px solid #F1F5F9 !important;
            display: flex !important;
            align-items: center !important;
            transition: all 0.2s ease !important;
        }
        .presence-dropdown .dropdown-item:last-child {
            border-bottom: none !important;
        }
        .presence-dropdown .dropdown-item:hover {
            background-color: #EFFDF5 !important;
            color: #0E4B37 !important;
            padding-left: 22px !important;
        }
        .presence-dropdown .dropdown-item i {
            color: #00B98E !important;
            font-size: 1rem;
        }
        .region-card {
            position: relative;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
        }
        .region-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 30px rgba(0,0,0,0.18);
        }
        .region-card img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        .region-card:hover img {
            transform: scale(1.08);
        }
        .region-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(14,46,80,0.95), rgba(14,46,80,0.3), transparent);
            padding: 24px 20px 18px;
            color: #ffffff;
        }

        /* State Showcase Grid & Hover Cards (Exact Match with Image 2 & Properties Page) */
        .state-showcase-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 16px;
        }
        @media (max-width: 1199.98px) {
            .state-showcase-grid {
                grid-template-columns: repeat(3, 1fr);
                gap: 16px;
            }
        }
        @media (max-width: 767.98px) {
            .state-showcase-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 12px;
            }
        }
        @media (max-width: 480px) {
            .state-showcase-grid {
                grid-template-columns: 1fr;
                gap: 12px;
            }
        }
        .state-card {
            display: block;
            border-radius: 10px;
            overflow: hidden;
            position: relative;
            background: #0E2E50;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08);
            transition: transform 0.35s cubic-bezier(0.165, 0.84, 0.44, 1), box-shadow 0.35s ease;
            text-decoration: none !important;
        }
        .state-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 16px 32px rgba(14, 46, 80, 0.25);
        }
        .state-img-box {
            position: relative;
            width: 100%;
            aspect-ratio: 1 / 1;
            overflow: hidden;
            background-color: #0E2E50;
        }
        .state-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.6s cubic-bezier(0.25, 1, 0.5, 1), filter 0.4s ease;
        }
        .state-card:hover .state-img {
            transform: scale(1.12);
            filter: brightness(0.82);
        }
        .state-hover-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(180deg, rgba(14, 46, 80, 0.35) 0%, rgba(14, 46, 80, 0.92) 100%);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 16px 12px;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.35s ease, visibility 0.35s ease;
            backdrop-filter: blur(2px);
            -webkit-backdrop-filter: blur(2px);
        }
        .state-card:hover .state-hover-overlay,
        .state-card:focus .state-hover-overlay {
            opacity: 1;
            visibility: visible;
        }
        .state-hover-content {
            transform: translateY(14px);
            transition: transform 0.35s cubic-bezier(0.165, 0.84, 0.44, 1);
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 12px;
        }
        .state-card:hover .state-hover-content,
        .state-card:focus .state-hover-content {
            transform: translateY(0);
        }
        .state-name {
            font-family: 'Cinzel', 'Playfair Display', Georgia, serif;
            color: #ffffff !important;
            font-size: 1.45rem;
            font-weight: 700;
            letter-spacing: 0.8px;
            margin: 0;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.65);
        }
        .state-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: #00B98E;
            color: #ffffff !important;
            font-family: 'Outfit', 'Plus Jakarta Sans', sans-serif;
            font-size: 0.82rem;
            font-weight: 700;
            letter-spacing: 0.6px;
            padding: 8px 22px;
            border-radius: 30px;
            box-shadow: 0 4px 14px rgba(0, 185, 142, 0.4);
            transition: all 0.25s ease;
            text-transform: none;
        }
        .state-card:hover .state-btn {
            background: #0E4B37;
            transform: translateY(-2px);
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.35);
        }

        /* Property Portfolio Hero Slider */
        .property-hero-slider {
            position: relative;
            width: 100%;
            height: 480px;
            border-radius: 0 0 0 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12);
        }
        @media (max-width: 991.98px) {
            .property-hero-slider {
                height: 360px;
                border-radius: 0;
            }
        }
        @media (max-width: 575.98px) {
            .property-hero-slider {
                height: 280px;
            }
        }
        .property-hero-slider .carousel-item {
            height: 100%;
        }
        .property-hero-slider .carousel-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }
        .property-slider-left-nav {
            position: absolute !important;
            left: 8px !important;
            top: 50% !important;
            transform: translateY(-50%) !important;
            z-index: 25 !important;
            display: flex !important;
            flex-direction: column !important;
            gap: 6px !important;
        }
        .hero-nav-btn {
            width: 30px !important;
            height: 30px !important;
            padding: 0 !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            background: rgba(14, 46, 80, 0.88) !important;
            color: #ffffff !important;
            border: 1px solid rgba(255, 255, 255, 0.4) !important;
            border-radius: 50% !important;
            font-size: 0.72rem !important;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3) !important;
            transition: all 0.25s ease !important;
            cursor: pointer !important;
        }
        .hero-nav-btn:hover {
            background: #00B98E !important;
            border-color: #00B98E !important;
            color: #ffffff !important;
            transform: scale(1.12) !important;
            box-shadow: 0 6px 14px rgba(0, 185, 142, 0.5) !important;
        }
        .property-hero-slider .carousel-indicators {
            display: none !important;
            visibility: hidden !important;
            opacity: 0 !important;
            height: 0 !important;
            margin: 0 !important;
            pointer-events: none !important;
        }
        /* High-End Glassmorphism Pill Badges (Light Blue Shade Highlight) */
        .section-pill-badge {
            background: linear-gradient(135deg, rgba(14, 46, 80, 0.08) 0%, rgba(0, 185, 142, 0.12) 100%) !important;
            color: #0E2E50 !important;
            font-family: 'Outfit', 'Plus Jakarta Sans', sans-serif !important;
            font-weight: 700 !important;
            font-size: 0.94rem !important;
            padding: 8px 26px !important;
            border-radius: 50px !important;
            display: inline-block;
            letter-spacing: 0.6px;
            backdrop-filter: blur(10px) !important;
            border: 1.5px solid rgba(14, 46, 80, 0.25) !important;
            box-shadow: 0 4px 15px rgba(14, 46, 80, 0.08) !important;
        }
        /* Specific High-Contrast Glassmorphic Badge for Dark Background Sections */
        .why-choose-section-bg .section-pill-badge,
        .cta-banner-wrapper .section-pill-badge {
            background: rgba(255, 255, 255, 0.15) !important;
            color: #F59E0B !important;
            border: 1px solid rgba(245, 158, 11, 0.4) !important;
            backdrop-filter: blur(12px) !important;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3) !important;
        }

        .what-we-do-section-wrapper .section-pill-badge {
            background: rgba(0, 185, 142, 0.18) !important;
            color: #00B98E !important;
            border: 1.5px solid rgba(0, 185, 142, 0.5) !important;
            backdrop-filter: blur(12px) !important;
            box-shadow: 0 4px 20px rgba(0, 185, 142, 0.3) !important;
        }
        /* Luxury Redesigned Why Choose Us Section & Layout */
        .why-choose-section-bg {
            background: linear-gradient(135deg, #0B192C 0%, #0E2E50 60%, #073828 100%) !important;
            position: relative;
            padding-top: 4rem;
            padding-bottom: 4rem;
        }
        .why-choose-hero-card {
            background: linear-gradient(145deg, #0E4B37 0%, #00B98E 100%);
            color: #ffffff;
            border-radius: 24px;
            padding: 2.5rem 2rem;
            box-shadow: 0 16px 40px rgba(0, 0, 0, 0.35);
            border: 1px solid rgba(255, 255, 255, 0.2);
            height: 100%;
            position: relative;
            overflow: hidden;
        }
        .why-choose-mini-card {
            background: #ffffff;
            padding: 1.6rem 1.4rem;
            border-radius: 20px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.9);
            border-left: 4px solid #F59E0B;
            transition: all 0.35s cubic-bezier(0.165, 0.84, 0.44, 1);
            height: 100%;
        }
        .why-choose-mini-card:hover {
            background: #ffffff !important;
            transform: translateY(-6px);
            box-shadow: 0 18px 38px rgba(0, 0, 0, 0.3) !important;
            border-left-color: #00B98E !important;
        }
        .why-choose-mini-card .icon-box {
            width: 50px;
            height: 50px;
            min-width: 50px;
            border-radius: 50%;
            background: #0E2E50 !important;
            color: #F59E0B !important;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
            box-shadow: 0 4px 12px rgba(14, 46, 80, 0.3);
            transition: transform 0.35s ease, background 0.35s ease, color 0.35s ease;
        }
        .why-choose-mini-card:hover .icon-box {
            transform: scale(1.08);
            background: #00B98E !important;
            color: #ffffff !important;
        }
        /* Interactive Why Choose Us Cards (Navy Theme, No Green Hover) */
        .why-choose-card {
            background: #ffffff;
            padding: 2rem 1.8rem;
            border-radius: 18px;
            box-shadow: 0 4px 18px rgba(0, 0, 0, 0.04);
            border-left: 5px solid #0E2E50;
            transition: all 0.35s cubic-bezier(0.165, 0.84, 0.44, 1);
            height: 100%;
            cursor: pointer;
        }
        .why-choose-card:hover {
            background: #ffffff !important;
            border-left-color: #0B192C !important;
            transform: translateY(-6px);
            box-shadow: 0 16px 36px rgba(14, 46, 80, 0.12) !important;
        }
        .why-choose-card .icon-box {
            width: 58px;
            height: 58px;
            border-radius: 50%;
            background: #0E2E50 !important;
            color: #ffffff !important;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            box-shadow: 0 4px 14px rgba(14, 46, 80, 0.15);
            transition: transform 0.35s ease;
        }
        .why-choose-card:hover .icon-box {
            transform: scale(1.06);
            background: #0B192C !important;
            color: #ffffff !important;
        }
        /* Designer Accreditations & Certification Cards (Decreased Padding & Fixed BG) */
        .accreditation-section-fixed-bg {
            background: linear-gradient(180deg, rgba(248, 250, 252, 0.92) 0%, rgba(255, 255, 255, 0.96) 100%), url('img/constitution-of-india_certified-gov img.jpg') no-repeat center center / cover !important;
            background-attachment: fixed !important;
        }
        /* High-End Designer CTA Banner with SVG Background Graphics */
        .cta-banner-wrapper {
            background: linear-gradient(135deg, #0B192C 0%, #0E2E50 55%, #073828 100%) !important;
            border-radius: 28px !important;
            padding: 3.5rem 3rem !important;
            position: relative !important;
            overflow: hidden !important;
            box-shadow: 0 20px 50px rgba(14, 46, 80, 0.35) !important;
            border: 1px solid rgba(255, 255, 255, 0.18) !important;
        }
        /* Financing Section Designer Image Shape & Styling */
        .financing-img-container {
            position: relative;
            border-radius: 28px 90px 28px 28px;
            overflow: hidden;
            box-shadow: 0 25px 55px rgba(14, 46, 80, 0.22);
            border: 5px solid #ffffff;
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }
        .financing-img-container:hover {
            transform: translateY(-6px);
            box-shadow: 0 32px 70px rgba(14, 46, 80, 0.28);
        }
        .financing-img-container img {
            width: 100%;
            height: 440px;
            object-fit: cover;
            transition: transform 0.6s ease;
        }
        .financing-img-container:hover img {
            transform: scale(1.05);
        }
        .cta-bg-svg-waves {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
        }
        .cta-content-z2 {
            position: relative;
            z-index: 2;
        }
        .cta-btn-primary {
            background: linear-gradient(135deg, #00B98E 0%, #0E4B37 100%) !important;
            color: #ffffff !important;
            border-radius: 50px !important;
            padding: 14px 32px !important;
            font-weight: 700 !important;
            letter-spacing: 0.5px !important;
            box-shadow: 0 8px 25px rgba(0, 185, 142, 0.38) !important;
            border: none !important;
            transition: all 0.35s cubic-bezier(0.165, 0.84, 0.44, 1) !important;
            display: inline-flex;
            align-items: center;
            text-decoration: none !important;
        }
        .cta-btn-primary:hover {
            transform: translateY(-3px) scale(1.03) !important;
            box-shadow: 0 14px 35px rgba(0, 185, 142, 0.55) !important;
            color: #ffffff !important;
        }
        .cta-btn-secondary {
            background: rgba(255, 255, 255, 0.12) !important;
            color: #ffffff !important;
            border-radius: 50px !important;
            padding: 13px 30px !important;
            font-weight: 600 !important;
            border: 1.5px solid rgba(255, 255, 255, 0.4) !important;
            backdrop-filter: blur(10px) !important;
            transition: all 0.35s cubic-bezier(0.165, 0.84, 0.44, 1) !important;
            display: inline-flex;
            align-items: center;
            text-decoration: none !important;
        }
        .cta-btn-secondary:hover {
            background: rgba(255, 255, 255, 0.25) !important;
            border-color: #ffffff !important;
            color: #ffffff !important;
            transform: translateY(-3px) !important;
        }
        .cta-icon-badge {
            width: 58px;
            height: 58px;
            min-width: 58px;
            border-radius: 50%;
            background: linear-gradient(135deg, rgba(0, 185, 142, 0.3) 0%, rgba(245, 158, 11, 0.3) 100%);
            border: 1.5px solid rgba(255, 255, 255, 0.35);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: #F59E0B;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
        }
        .accreditation-card {
            background: #ffffff;
            padding: 1.6rem 1.4rem;
            border-radius: 20px;
            border: 1px solid #E2E8F0;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.04);
            transition: all 0.35s cubic-bezier(0.165, 0.84, 0.44, 1);
            height: 100%;
            position: relative;
            overflow: hidden;
        }
        .accreditation-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 16px 38px rgba(0, 185, 142, 0.16) !important;
            border-color: #00B98E;
            background: #ffffff;
        }
        .accreditation-circle {
            width: 125px;
            height: 125px;
            border-radius: 50%;
            background: #ffffff;
            border: 3px solid #EFFDF5;
            box-shadow: 0 6px 20px rgba(0, 185, 142, 0.12);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.2rem;
            transition: all 0.35s ease;
            padding: 10px;
        }
        .accreditation-card:hover .accreditation-circle {
            transform: scale(1.05);
            border-color: #00B98E;
            box-shadow: 0 10px 24px rgba(0, 185, 142, 0.2);
        }
        .accreditation-circle img {
            max-height: 82px;
            max-width: 88%;
            object-fit: contain;
            transition: transform 0.35s ease;
        }
        .accreditation-card:hover .accreditation-circle img {
            transform: scale(1.06);
        }
        .amenity-card {
            background: #ffffff;
            padding: 1.8rem 1.2rem;
            border-radius: 16px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.04);
            border: 1px solid #E2E8F0;
            transition: all 0.35s cubic-bezier(0.165, 0.84, 0.44, 1);
            height: 100%;
            cursor: pointer;
        }
        .amenity-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 16px 35px rgba(0, 185, 142, 0.18) !important;
            border-color: #00B98E !important;
        }
        .amenity-card .amenity-icon {
            width: 65px;
            height: 65px;
            border-radius: 50%;
            background: #EFFDF5;
            color: #00B98E;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.2rem;
            font-size: 1.6rem;
            transition: all 0.35s ease;
        }
        .amenity-card:hover .amenity-icon {
            background: linear-gradient(135deg, #0E4B37 0%, #00B98E 100%);
            color: #ffffff;
            transform: scale(1.12);
            box-shadow: 0 8px 20px rgba(0, 185, 142, 0.3);
        }
        .state-tab-btn {
            border-radius: 30px;
            padding: 9px 22px;
            font-weight: 700;
            font-family: 'Plus Jakarta Sans', sans-serif;
            border: 1.5px solid #00B98E;
            color: #0E2E50;
            background: #fff;
            transition: all 0.3s ease;
        }
        .state-tab-btn.active, .state-tab-btn:hover {
            background: #00B98E;
            color: #fff;
            box-shadow: 0 4px 12px rgba(0, 185, 142, 0.3);
        }
    </style>
</head>

<body>
    <div class="container-fluid bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Top Contact Bar (Exact Match with Target Design Image 2) -->
        <div class="container-fluid top-bar-exact py-2 px-4 d-none d-lg-block">
            <div class="row align-items-center">
                <div class="col-md-8 d-flex align-items-center gap-4">
                    <span><i class="fa fa-phone-alt me-1 text-primary"></i>+91 9182613797, +91 9490070313</span>
                    <span><i class="fa fa-envelope me-1 text-primary"></i>pudamiconsultancyservices@gmail.com</span>
                </div>
                <div class="col-md-4 text-end d-flex justify-content-end align-items-center gap-3">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>

        <!-- Navbar Start (Exact Layout with Target Design Image 2 & Designer Typography) -->
        <div class="container-fluid nav-bar sticky-top bg-white border-bottom shadow-sm">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-2 px-4">
                <a href="index.php" class="navbar-brand d-flex align-items-center py-1">
                    <img class="img-fluid" src="img/pudamiconsultancy_logo.png" alt="Pudami Consultancy Logo" style="height: 65px; width: auto;">
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-lg-end" id="navbarCollapse">
                    <div class="navbar-nav ms-auto me-lg-3 align-items-center" style="margin-left: auto !important;">
                        <a href="index.php" class="nav-item nav-link <?php echo ($activePage == 'index' || $activePage == '') ? 'active' : ''; ?>">HOME</a>
                        <a href="about.php" class="nav-item nav-link <?php echo ($activePage == 'about') ? 'active' : ''; ?>">ABOUT US</a>
                        <a href="property-list.php" class="nav-item nav-link <?php echo ($activePage == 'property-list') ? 'active' : ''; ?>">PROPERTIES</a>
                        <div class="nav-item dropdown">
                            <a href="our-presence.php" class="nav-link dropdown-toggle <?php echo ($activePage == 'presence') ? 'active' : ''; ?>">OUR PRESENCE</a>
                            <div class="dropdown-menu presence-dropdown m-0 p-0 shadow-lg">
                                <a href="our-presence.php" class="dropdown-item fw-bold text-success border-bottom py-2 bg-light"><i class="fa fa-map-marked-alt me-2 text-primary"></i>All 28 States Overview</a>
                                <a href="properties.php?state=andhra-pradesh" class="dropdown-item"><i class="fa fa-map-marker-alt me-2 text-primary"></i>Andhra Pradesh</a>
                                <a href="arunachal-pradesh.php" class="dropdown-item"><i class="fa fa-map-marker-alt me-2 text-primary"></i>Arunachal Pradesh</a>
                                <a href="properties.php?state=assam" class="dropdown-item"><i class="fa fa-map-marker-alt me-2 text-primary"></i>Assam</a>
                                <a href="properties.php?state=bihar" class="dropdown-item"><i class="fa fa-map-marker-alt me-2 text-primary"></i>Bihar</a>
                                <a href="properties.php?state=chhattisgarh" class="dropdown-item"><i class="fa fa-map-marker-alt me-2 text-primary"></i>Chhattisgarh</a>
                                <a href="properties.php?state=delhi" class="dropdown-item"><i class="fa fa-map-marker-alt me-2 text-primary"></i>Delhi NCR</a>
                                <a href="properties.php?state=goa" class="dropdown-item"><i class="fa fa-map-marker-alt me-2 text-primary"></i>Goa</a>
                                <a href="properties.php?state=gujarat" class="dropdown-item"><i class="fa fa-map-marker-alt me-2 text-primary"></i>Gujarat</a>
                                <a href="properties.php?state=haryana" class="dropdown-item"><i class="fa fa-map-marker-alt me-2 text-primary"></i>Haryana</a>
                                <a href="properties.php?state=himachal-pradesh" class="dropdown-item"><i class="fa fa-map-marker-alt me-2 text-primary"></i>Himachal Pradesh</a>
                                <a href="properties.php?state=jharkhand" class="dropdown-item"><i class="fa fa-map-marker-alt me-2 text-primary"></i>Jharkhand</a>
                                <a href="properties.php?state=karnataka" class="dropdown-item"><i class="fa fa-map-marker-alt me-2 text-primary"></i>Karnataka</a>
                                <a href="properties.php?state=kerala" class="dropdown-item"><i class="fa fa-map-marker-alt me-2 text-primary"></i>Kerala</a>
                                <a href="properties.php?state=madhya-pradesh" class="dropdown-item"><i class="fa fa-map-marker-alt me-2 text-primary"></i>Madhya Pradesh</a>
                                <a href="properties.php?state=maharashtra" class="dropdown-item"><i class="fa fa-map-marker-alt me-2 text-primary"></i>Maharashtra</a>
                                <a href="properties.php?state=manipur" class="dropdown-item"><i class="fa fa-map-marker-alt me-2 text-primary"></i>Manipur</a>
                                <a href="properties.php?state=meghalaya" class="dropdown-item"><i class="fa fa-map-marker-alt me-2 text-primary"></i>Meghalaya</a>
                                <a href="properties.php?state=mizoram" class="dropdown-item"><i class="fa fa-map-marker-alt me-2 text-primary"></i>Mizoram</a>
                                <a href="properties.php?state=nagaland" class="dropdown-item"><i class="fa fa-map-marker-alt me-2 text-primary"></i>Nagaland</a>
                                <a href="properties.php?state=odisha" class="dropdown-item"><i class="fa fa-map-marker-alt me-2 text-primary"></i>Odisha</a>
                                <a href="properties.php?state=punjab" class="dropdown-item"><i class="fa fa-map-marker-alt me-2 text-primary"></i>Punjab</a>
                                <a href="properties.php?state=rajasthan" class="dropdown-item"><i class="fa fa-map-marker-alt me-2 text-primary"></i>Rajasthan</a>
                                <a href="properties.php?state=sikkim" class="dropdown-item"><i class="fa fa-map-marker-alt me-2 text-primary"></i>Sikkim</a>
                                <a href="properties.php?state=tamil-nadu" class="dropdown-item"><i class="fa fa-map-marker-alt me-2 text-primary"></i>Tamil Nadu</a>
                                <a href="properties.php?state=telangana" class="dropdown-item"><i class="fa fa-map-marker-alt me-2 text-primary"></i>Telangana</a>
                                <a href="properties.php?state=tripura" class="dropdown-item"><i class="fa fa-map-marker-alt me-2 text-primary"></i>Tripura</a>
                                <a href="properties.php?state=uttar-pradesh" class="dropdown-item"><i class="fa fa-map-marker-alt me-2 text-primary"></i>Uttar Pradesh</a>
                                <a href="properties.php?state=uttarakhand" class="dropdown-item"><i class="fa fa-map-marker-alt me-2 text-primary"></i>Uttarakhand</a>
                                <a href="properties.php?state=west-bengal" class="dropdown-item"><i class="fa fa-map-marker-alt me-2 text-primary"></i>West Bengal</a>
                            </div>
                        </div>
                        <a href="careers.php" class="nav-item nav-link <?php echo ($activePage == 'careers') ? 'active' : ''; ?>">CAREERS</a>
                        <a href="contact.php" class="nav-item nav-link <?php echo ($activePage == 'contact') ? 'active' : ''; ?>">CONTACT US</a>
                    </div>
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-end ms-lg-3 mt-3 mt-lg-0 gap-2 w-100 w-lg-auto">
                        <?php if (isset($_SESSION['user_id'])): ?>
                            <div class="nav-item dropdown">
                                <a href="#" class="btn btn-register-custom dropdown-toggle d-flex align-items-center gap-2" data-bs-toggle="dropdown">
                                    <i class="fa fa-user-circle"></i>
                                    <span><?php echo htmlspecialchars($_SESSION['full_name']); ?></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end rounded-3 shadow border-0 m-0 mt-2">
                                    <div class="px-3 py-2 border-bottom bg-light">
                                        <div class="fw-bold text-dark"><?php echo htmlspecialchars($_SESSION['full_name']); ?></div>
                                        <div class="small text-muted"><?php echo htmlspecialchars($_SESSION['email']); ?></div>
                                    </div>
                                    <a href="dashboard.php" class="dropdown-item py-2"><i class="fa fa-tachometer-alt me-2 text-primary"></i> My Dashboard</a>
                                    <a href="contact.php" class="dropdown-item py-2"><i class="fa fa-envelope me-2 text-primary"></i> Submit Inquiry</a>
                                    <div class="dropdown-divider my-1"></div>
                                    <a href="logout.php" class="dropdown-item py-2 text-dark fw-semibold"><i class="fa fa-sign-out-alt me-2 text-primary"></i> Logout</a>
                                </div>
                            </div>
                        <?php else: ?>
                            <a href="register.php" class="btn btn-register-custom">Register</a>
                            <a href="login.php" class="btn btn-login-custom">Login</a>
                        <?php endif; ?>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->
        <script>
        document.addEventListener('DOMContentLoaded', function () {
            var presenceLinks = document.querySelectorAll('a[href="our-presence.php"].nav-link');
            presenceLinks.forEach(function (link) {
                link.addEventListener('click', function (e) {
                    window.location.href = 'our-presence.php';
                });
            });
        });
        </script>

<?php
http_response_code(404);
$activePage = '404';
include __DIR__ . '/header.php';
?>

<!-- Header Banner -->
<div class="container-fluid bg-dark hero-header mb-0" style="background: linear-gradient(rgba(14, 46, 80, 0.88), rgba(7, 56, 40, 0.90)), url('img/about_usbreadcrumb.jpg') center center no-repeat; background-size: cover !important;">
    <div class="container py-4 text-center">
        <h1 class="display-4 text-white fw-bold mb-2 hero-header-title" style="font-family: 'Cinzel', serif; letter-spacing: 1.5px;">404 Error</h1>
        <p class="text-warning fs-5 fw-bold mx-auto mb-3 hero-header-sub" style="font-family: 'Cinzel', serif; letter-spacing: 1px;">Page Not Found</p>
        <nav aria-label="breadcrumb" class="hero-header-nav">
            <ol class="breadcrumb justify-content-center text-uppercase mb-0 fw-bold" style="letter-spacing: 1px; font-size: 0.92rem;">
                <li class="breadcrumb-item"><a href="index.php" class="text-white-50 text-decoration-none">HOME</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page" style="color: #00B98E !important;">404 ERROR</li>
            </ol>
        </nav>
    </div>
</div>

<!-- 404 Content Start -->
<div class="container-fluid py-5 px-lg-5 bg-white">
    <div class="container py-5 text-center">
        <div class="row justify-content-center">
            <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.1s">
                <div class="display-1 fw-bold text-primary mb-3" style="font-family: 'Cinzel', serif; font-size: 7rem; line-height: 1;">
                    404
                </div>
                <h2 class="mb-3 fw-bold text-dark" style="font-family: 'Cinzel', serif;">Oops! Page Not Found</h2>
                <p class="mb-4 text-muted fs-5" style="line-height: 1.7;">
                    The page you are looking for might have been removed, had its name changed, or is temporarily unavailable. We apologize for any inconvenience.
                </p>
                <div class="d-flex flex-wrap justify-content-center gap-3">
                    <a class="btn btn-primary py-3 px-5 rounded-pill fw-bold text-white shadow-sm" href="index.php" style="background: linear-gradient(135deg, #00B98E 0%, #0E4B37 100%); border: none;">
                        <i class="fa fa-home me-2"></i> Return to Homepage
                    </a>
                    <a class="btn btn-outline-dark py-3 px-4 rounded-pill fw-bold" href="properties.php">
                        <i class="fa fa-building me-2"></i> Browse Properties
                    </a>
                    <a class="btn btn-outline-secondary py-3 px-4 rounded-pill fw-bold" href="contact.php">
                        <i class="fa fa-envelope me-2"></i> Contact Support
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 404 Content End -->

<?php include __DIR__ . '/footer.php'; ?>

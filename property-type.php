<?php
include __DIR__ . '/header.php';
?>

<!-- Header Start -->
<div class="container-fluid header bg-white p-0">
    <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
        <div class="col-md-6 p-5 mt-lg-5">
            <h1 class="display-5 animated fadeIn mb-4">Services & Property Categories</h1>
            <nav aria-label="breadcrumb" class="animated fadeIn">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item text-body active" aria-current="page">Services & Types</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-6 animated fadeIn">
            <img class="img-fluid" src="img/Investment Consultation.jpg" alt="Pudami Services" style="max-height: 280px; width: 100%; object-fit: cover;">
        </div>
    </div>
</div>
<!-- Header End -->

<!-- Category Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <span class="badge bg-primary text-white px-3 py-2 rounded-pill mb-2">Our Specialties</span>
            <h1 class="mb-3">Property Categories We Manage</h1>
            <p class="text-muted">From luxury duplex villas and RERA approved plot layouts to commercial hubs across South India.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <a class="cat-item d-block bg-light text-center rounded-4 p-3 text-decoration-none" href="property-list.php?type=Duplex+Villa">
                    <div class="rounded-3 p-4">
                        <div class="icon mb-3">
                            <img class="img-fluid" src="img/icon-villa.png" alt="Duplex Villa">
                        </div>
                        <h5 class="fw-bold text-dark">Duplex Villa</h5>
                        <span class="text-primary fw-semibold">Gated Communities</span>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <a class="cat-item d-block bg-light text-center rounded-4 p-3 text-decoration-none" href="property-list.php?type=Residential+Plot">
                    <div class="rounded-3 p-4">
                        <div class="icon mb-3">
                            <img class="img-fluid" src="img/icon-neighborhood.png" alt="Residential Plot">
                        </div>
                        <h5 class="fw-bold text-dark">Residential Plots</h5>
                        <span class="text-primary fw-semibold">RERA Layouts</span>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <a class="cat-item d-block bg-light text-center rounded-4 p-3 text-decoration-none" href="property-list.php?type=Luxury+Villa">
                    <div class="rounded-3 p-4">
                        <div class="icon mb-3">
                            <img class="img-fluid" src="img/icon-luxury.png" alt="Luxury Houses">
                        </div>
                        <h5 class="fw-bold text-dark">Luxury Houses</h5>
                        <span class="text-primary fw-semibold">Independent Living</span>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <a class="cat-item d-block bg-light text-center rounded-4 p-3 text-decoration-none" href="property-list.php?type=Commercial+Space">
                    <div class="rounded-3 p-4">
                        <div class="icon mb-3">
                            <img class="img-fluid" src="img/icon-building.png" alt="Commercial Hubs">
                        </div>
                        <h5 class="fw-bold text-dark">Commercial Hubs</h5>
                        <span class="text-primary fw-semibold">High Return Spaces</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Category End -->

<!-- Detailed Services Section -->
<div class="container-fluid py-5 bg-light">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Our Core Advisory Services</h1>
            <p class="text-muted">Pudami Consultancy Services provides end-to-end guidance for property buyers, landowners, and real estate investors.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4">
                    <img src="img/Property Buying Assistance.jpeg" class="rounded-3 mb-3" style="height: 180px; object-fit: cover;">
                    <h5 class="fw-bold text-dark mb-2">Property Buying Assistance</h5>
                    <p class="text-muted small">We match buyers with verified plots and homes, ensuring no encumbrance or legal disputes exist.</p>
                    <a href="contact.php?service=Property+Buying" class="btn btn-outline-primary btn-sm rounded-pill mt-auto">Get Buying Help</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4">
                    <img src="img/Investment Consultation.jpg" class="rounded-3 mb-3" style="height: 180px; object-fit: cover;">
                    <h5 class="fw-bold text-dark mb-2">Investment Advisory</h5>
                    <p class="text-muted small">Strategic real estate investment planning targeting high capital appreciation in emerging metro regions.</p>
                    <a href="contact.php?service=Investment+Consultation" class="btn btn-outline-primary btn-sm rounded-pill mt-auto">Schedule Call</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4">
                    <img src="img/Legal & Documentation Guidance.jpeg" class="rounded-3 mb-3" style="height: 180px; object-fit: cover;">
                    <h5 class="fw-bold text-dark mb-2">Legal & Title Check</h5>
                    <p class="text-muted small">Exhaustive 30-year document checking, revenue record verification, and smooth sub-registrar registration.</p>
                    <a href="contact.php?service=Legal+Documentation" class="btn btn-outline-primary btn-sm rounded-pill mt-auto">Verify Document</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/footer.php'; ?>

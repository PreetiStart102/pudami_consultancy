<?php
include __DIR__ . '/header.php';
?>

<!-- Header Start -->
<div class="container-fluid header bg-white p-0">
    <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
        <div class="col-md-6 p-5 mt-lg-5">
            <h1 class="display-5 animated fadeIn mb-4">Client Reviews</h1>
            <nav aria-label="breadcrumb" class="animated fadeIn">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item text-body active" aria-current="page">Testimonials</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-6 animated fadeIn">
            <img class="img-fluid" src="img/STYLISH MODERN HOME.jpg" alt="Client Reviews" style="max-height: 280px; width: 100%; object-fit: cover;">
        </div>
    </div>
</div>
<!-- Header End -->

<!-- Testimonial Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <span class="badge bg-primary text-white px-3 py-2 rounded-pill mb-2">Client Experience</span>
            <h1 class="mb-3">What Our Home Buyers & Investors Say</h1>
            <p class="text-muted">Read feedback from satisfied property owners who found their ideal real estate with Pudami Consultancy Services.</p>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            <div class="testimonial-item bg-light rounded-4 p-4 shadow-sm">
                <p class="text-muted mb-4">"Pudami Consultancy made purchasing our duplex villa in Vijayawada completely stress-free. Their team verified all 30-year link documents and processed our SBI home loan in just 5 days."</p>
                <div class="d-flex align-items-center">
                    <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 48px; height: 48px;">
                        <span class="fw-bold">KV</span>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-0 text-dark">K. V. Rao</h6>
                        <small class="text-muted">Software Architect, Vijayawada</small>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-light rounded-4 p-4 shadow-sm">
                <p class="text-muted mb-4">"The team at Pudami Consultancy Services guided me to invest in an approved plot near Gachibowli, Hyderabad. Transparent advice, no hidden fees, and excellent RERA compliance."</p>
                <div class="d-flex align-items-center">
                    <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 48px; height: 48px;">
                        <span class="fw-bold">SR</span>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-0 text-dark">Suresh Reddy</h6>
                        <small class="text-muted">Business Owner, Hyderabad</small>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-light rounded-4 p-4 shadow-sm">
                <p class="text-muted mb-4">"Highly professional service! They arranged a free door-to-door site visit for my family to inspect several residential layouts in Amaravati. Extremely satisfied."</p>
                <div class="d-flex align-items-center">
                    <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 48px; height: 48px;">
                        <span class="fw-bold">LN</span>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-0 text-dark">Lakshmi N.</h6>
                        <small class="text-muted">Senior Educator, Guntur</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/footer.php'; ?>

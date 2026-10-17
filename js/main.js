(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    // Initiate wowjs with zero offset so content triggers instantly on scroll
    new WOW({
        boxClass: 'wow',
        animateClass: 'animated',
        offset: 0,
        mobile: true,
        live: false
    }).init();

    // High-performance throttled scroll listener (prevents lag & frame drops)
    var isSticky = false;
    var isBackToTopVisible = false;
    var scrollTicking = false;
    var $navBar = $('.nav-bar');
    var $backToTop = $('.back-to-top');

    function updateScrollState() {
        var top = $(window).scrollTop();

        // Sticky Navbar shadow toggle - smooth without layout disturbance
        if (top > 30) {
            if (!isSticky) {
                $navBar.addClass('is-scrolled shadow-sm sticky-top');
                isSticky = true;
            }
        } else {
            if (isSticky) {
                $navBar.removeClass('is-scrolled');
                isSticky = false;
            }
        }

        // Back to top button - toggle only on state change
        if (top > 300) {
            if (!isBackToTopVisible) {
                $backToTop.stop(true, true).fadeIn(200);
                isBackToTopVisible = true;
            }
        } else {
            if (isBackToTopVisible) {
                $backToTop.stop(true, true).fadeOut(200);
                isBackToTopVisible = false;
            }
        }

        scrollTicking = false;
    }

    // Run on initial load
    updateScrollState();

    window.addEventListener('scroll', function () {
        if (!scrollTicking) {
            window.requestAnimationFrame(updateScrollState);
            scrollTicking = true;
        }
    }, { passive: true });

    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 800, 'easeInOutExpo');
        return false;
    });

    // Header carousel
    $(".header-carousel").owlCarousel({
        autoplay: true,
        autoplayTimeout: 4000,
        smartSpeed: 1000,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        items: 1,
        dots: true,
        loop: true,
        nav: true,
        navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>']
    });

    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        margin: 24,
        dots: false,
        loop: true,
        nav : true,
        navText : [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
        responsive: {
            0:{
                items:1
            },
            992:{
                items:2
            }
        }
    });

    // Bank Partners carousel
    $(".bank-carousel").owlCarousel({
        autoplay: true,
        autoplayTimeout: 2200,
        smartSpeed: 800,
        margin: 24,
        dots: false,
        loop: true,
        nav: false,
        responsive: {
            0: { items: 2 },
            576: { items: 3 },
            768: { items: 4 },
            992: { items: 4 }
        }
    });
    
})(jQuery);

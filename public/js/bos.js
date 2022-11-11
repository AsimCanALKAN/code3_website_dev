$(document).ready(() => {
    setTimeout(() => {
        $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            center: true,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            slideSpeed: 3000,
            paginationSpeed: 3000,
            dots: false,
            navText: ['', ''],
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: 1
                },
                800: {
                    items: 2
                },
                991: {
                    items: 2
                },
                1200: {
                    items: 2
                },
                1600: {
                    items: 3
                }
            }
        })
    }, 1000);
})
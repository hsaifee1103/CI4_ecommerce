$(document).ready(function () {
    $('.pls.altera').click(function () {
        var curr_quantity = $(this).prev().val();
        curr_quantity = parseInt(curr_quantity) + 1;
        $(this).prev().val(curr_quantity);
    });
    $('.pls.minus').click(function () {
        var curr_quantity = $(this).next().val();
        if (curr_quantity != 1) {
            curr_quantity = parseInt(curr_quantity) - 1;
            $(this).next().val(curr_quantity);
        }
    });
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        autoplay: true,
        autoplayTimeout: 2000,
        responsive: {
            0: {
                items: 3
            },
            600: {
                items: 3
            },
            1000: {
                items: 3
            }
        }
    });
    AOS.init({
        offset: 50,
        duration: 1000
    });
});
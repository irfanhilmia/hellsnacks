$(document).ready(function() {

    //Custom Scroll
    $("body").niceScroll({
        cursorcolor: "#000",
        zindex: 999,
        scrollspeed: 100,
        mousescrollstep: 50,
        cursorborder: "0px solid #000",
        cursorwidth: "10px"
    });

    $(function() {
        $('.carousel').carousel({
            interval: 3000
        });

    });

    /* Scroll to the top & show the button*/
    var link,
        toggleScrollTopLink = function() {
            if ($('body').scrollTop() > 200 || $('html').scrollTop() > 200) {
                link.fadeIn(600);
            } else {
                link.fadeOut(600);
            }
        };

    link = $('.scroll-top-link');

    $(window).scroll(toggleScrollTopLink);

    toggleScrollTopLink();
    link.on('click', function() {
        $('body').animate({
            scrollTop: 0
        });
        $('html').animate({
            scrollTop: 0
        });
    });

    $('.button_add_cart').click(function() {
        //loading text
        var btn = $(this);
        btn.button('loading');
        setTimeout(function() {
            btn.button('reset');
        }, 500);

        //scroll to the div
        $('html, body').delay(500).animate({
            scrollTop: $('.nav-top').offset().top
        }, 2000);

        toastr.success("Item berhasil ditambahkan");


    });


});

//toastr options
toastr.options = {
    "debug": false,
    "positionClass": "toast-top-left",
    "onclick": null,
    "fadeIn": 300,
    "fadeOut": 1000,
    "timeOut": 2000,
    "extendedTimeOut": 1000,
    "showEasing": "swing",
    "hideEasing": "linear"
}


//Currency Simple Cart
simpleCart({
    cartColumns: [
        { attr: "name", label: "" },
        { attr: "price", label: "", view: 'currency' },
        { view: "decrement", label: false },
        { attr: "quantity", label: "" },
        { view: "increment", label: false },
        { attr: "total", label: "", view: 'currency' },
        { view: "remove", text: "Remove", label: false },
        { view: "image", label: false }
    ],

});

simpleCart.currency({
    code: "IDR",
    name: "Indonesian Rupiah",
    symbol: "Rp.",
    delimiter: ",",
    decimal: ".",
    afer: false,
    accuracy: 3
});
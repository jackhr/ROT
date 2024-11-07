const STATE = {
    togglingHamburger: false
};

$(window).on('scroll', function () {
    $('header').toggleClass('active', $(this).scrollTop() > 0);
});

$("#hamburger-button").on('click', function () {
    if (STATE.togglingHamburger) return;
    STATE.togglingHamburger = true;
    const viewingClassName = "viewing-hamburger-menu";
    const hiddenClassName = "hamburger-menu-is-hidden";
    const openingHamburgerMenu = $('html').hasClass(hiddenClassName);
    if (openingHamburgerMenu) {
        $('html')
            .addClass(viewingClassName)
            .removeClass(hiddenClassName);
        $('header').addClass('active');
    } else {
        $('html').removeClass(viewingClassName);
        setTimeout(() => {
            $('header').removeClass('active');
            $('html').addClass(hiddenClassName);
        }, 750);
    }
    setTimeout(() => (STATE.togglingHamburger = false), 750);
})

$(document).ready(function () {
    setTimeout(() => $("#intro-section-title").fadeToggle(2000), 2000);
});

$(".main-carousel").flickity({
    // fade: true,
    wrapAround: true,
    // contain: true,
    draggable: true,
    autoPlay: 3000,
    fullscreen: true,
    lazyLoad: 1,
    dragThreshold: 10,
    // selectedAttraction: 0.2, // default 0.025. Higher attraction makes the slider move faster.
    // friction: 0.4, // default 0.28. Higher friction makes the slider feel stickier and less bouncy. Lower friction makes the slider feel looser and more wobbly
    imagesLoaded: true, // re-positions cells once their images have loaded.
    cellSelector: '.carousel-cell',
    // adaptiveHeight: true
});


/**
 * flickity lazy load srcset
 *  <img class="carousel-cell-image"
 *      data-flickity-lazyload-srcset="
 *          walrus-large.jpg 720w,
 *          walrus-med.jpg 360w"
 *      sizes="(min-width: 1024px) 720px, 360px"
 *      data-flickity-lazyload-src="walrus-large.jpg"
 *  />
 */

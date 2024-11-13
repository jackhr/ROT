const STATE = {
    togglingHamburger: false,
    flickityDefaultOpts: {
        standard: {
            // fade: true,
            wrapAround: true,
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
        },
        still: {
            contain: true,
            pageDots: false,
            autoPlay: false,
            fullscreen: false,
            arrowShape: "M100 53.6923L13.4887 53.6923L50.565 92.4615L45.904 98L0 50L45.904 2L50.565 7.53846L13.4887 46.3077L100 46.3077V53.6923Z",
        }
    },

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
    setTimeout(() => $("#landing-header-section-title").fadeToggle(2000), 2000);
});

$(".carousel.still.left").flickity({
    ...STATE.flickityDefaultOpts.standard,
    ...STATE.flickityDefaultOpts.still,
    cellAlign: "right",
});

$(".carousel.still.right").flickity({
    ...STATE.flickityDefaultOpts.standard,
    ...STATE.flickityDefaultOpts.still,
    cellAlign: "left",
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

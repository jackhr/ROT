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
})
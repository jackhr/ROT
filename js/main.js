const STATE = {
};

$(window).on('scroll', function () {
    $('header').toggleClass('active', $(this).scrollTop() > 0);
});

$("#hamburger-button").on('click', function () {
    $('html').toggleClass('viewing-hamburger-menu');
})

$(document).ready(function () {
    setTimeout(() => $("#intro-section h1").removeClass("hidden"), 2000);
})
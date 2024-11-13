<?php

require_once 'includes/env.php';

$title_override = "";
$page = "index";
$description = "$company_name!";

include_once 'includes/header.php';

?>

<section id="landing-header-section">
    <div class="inner">
        <video autoplay loop playsinline muted poster="/assets/images/video-posters/index-poster.jpg">
            <source src="assets/videos/index-video.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div id="landing-header-section-title" style="display: none;">
            <h1>Rotten Hill Studios</h1>
            <h2>Art Studio & Meditation Center</h2>
        </div>
        <div class="intro-joiner"></div>
    </div>
</section>
<section id="intro-section" class="still-carousel-section">
    <div class="inner">
        <div class="index-desc-wrapper">
            <p>Welcome to Rotten Hill Studios, a space where creativity unfolds like a gentle breath, grounded and open. Set within the quiet pulse of the Caribbean, this sanctuary invites you to settle in, to listen, to be.</p>
            <p>Our studios and cottages blend into the landscape, offering an understated harmony for the artist and the seeker alike. Here, creation is effortless—guided by the rhythms of nature and the simplicity of presence. Let your mind soften, your spirit unfurl, and allow inspiration to come as it will.</p>
            <p>At Rotten Hill, there is nothing to strive for, only space to be.</p>
        </div>
        <div class="carousel-container">
            <div class="carousel-header">
                <h3>An assortment of experiences</h3>
            </div>
            <div id="meditation-center-carousel" class="carousel still right">
                <a class="carousel-cell" href="/meditation-center/">
                    <div class="carousel-img-container">
                        <img src="assets/images/meditation-center/ROT-Day1-2409JMR25650.jpg" alt="Meditation Center">
                        <div class="carousel-cell-overlay">
                            <div class="chevron-link">
                                <span>See more</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right">
                                    <path d="m9 18 6-6-6-6" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <span>Center Your Mind</span>
                </a>
                <a class="carousel-cell" href="/art-studio/">
                    <div class="carousel-img-container">
                        <img src="assets/images/events/ROT-Day1-Air4v2-2409JMR80922.jpg" alt="Aerial View">
                        <div class="carousel-cell-overlay">
                            <div class="chevron-link">
                                <span>See more</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right">
                                    <path d="m9 18 6-6-6-6" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <span>Creativity in Nature</span>
                </a>
                <a class="carousel-cell" href="/cottages/">
                    <div class="carousel-img-container">
                        <img src="assets/images/cottages/tamarind/ROT-Tamarind-BedArea-2410JMR26632.jpg" alt="Tamarind bed area" title="Tamarind bed area">
                        <div class="carousel-cell-overlay">
                            <div class="chevron-link">
                                <span>See more</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right">
                                    <path d="m9 18 6-6-6-6" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <span>Your Private Haven</span>
                </a>
                <a class="carousel-cell" href="/cafe/">
                    <div class="carousel-img-container">
                        <img src="assets/images/art-studio/ROT-Lifestyle-Textures-2410JMR49280.jpg" alt="Cafe" title="Cafe">
                        <div class="carousel-cell-overlay">
                            <div class="chevron-link">
                                <span>See more</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right">
                                    <path d="m9 18 6-6-6-6" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <span>Savor Serenity</span>
                </a>
                <a class="carousel-cell" href="/events/">
                    <div class="carousel-img-container">
                        <img src="assets/images/events/ROT-Day1-Air4v2-2409JMR80937.jpg" alt="Aerial View">
                        <div class="carousel-cell-overlay">
                            <div class="chevron-link">
                                <span>See more</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right">
                                    <path d="m9 18 6-6-6-6" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <span>Gather and Celebrate</span>
                </a>
            </div>
        </div>
    </div>
</section>
<section id="cottages-section">
    <div class="inner">
        <h3>A variety of cottages</h3>
        <div id="cottages-img-container">
            <div>
                <div>
                    <img src="/assets/images/cottages/logwood/ROT-Logwood-BedArea-2410JMR45834.jpg">
                    <span>Logwood Villa</span>
                </div>
                <p>Allow your mind to wind down, and your feet to rest up.</p>
            </div>
            <div>
                <div>
                    <img src="/assets/images/cottages/logwood/ROT-Logwood-Verandah-2410JMR45759.jpg">
                    <span>Logwood Villa</span>
                </div>
                <p>View it all from your very own, personal perch.</p>
            </div>
        </div>
    </div>
</section>
<section id="antigua-section" class="still-carousel-section">
    <div>
        <h3>Antigua</h3>
        <p>The island awaits you. Rotten hill is just the beginning.</p>
        <a class="chevron-link" href="/about/">
            <span>Explore</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right">
                <path d="m9 18 6-6-6-6" />
            </svg>
        </a>
    </div>
</section>

<?php include_once 'includes/footer.php' ?>
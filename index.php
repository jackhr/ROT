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
                <h3>A variety of experiences</h3>
            </div>
            <div id="meditation-center-carousel" class="carousel still right">
                <!-- meditation center -->
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
                <!-- art studio -->
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
                <!-- cottages -->
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
                <!-- cafe -->
                <a class="carousel-cell" href="/events/">
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
                <!-- events -->
                <a class="carousel-cell" href="/art-studio/">
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
<section id="art-studio-section" class="still-carousel-section">
    <div class="inner">
        <h2>Creativity in Nature</h2>
        <div class="index-desc-wrapper">
            <p>Let your creativity flow in our art studio, a place designed to inspire and invite exploration. With panoramic views of lush greenery and ample natural light flooding through large windows, the studio serves as a canvas itself—reflecting the beauty of the Caribbean landscape. Whether you paint, sculpt, or sketch, you’ll find that creativity comes naturally in this space.</p>
            <p>Embrace the freedom to experiment, express your inner world, and let your imagination run free, inspired by the tranquility around you. The studio also hosts guided art workshops, perfect for those wanting to try their hand at something new while meeting like-minded individuals.</p>
        </div>
        <div class="section-divider"></div>
        <div class="carousel-container">
            <div class="carousel-header">
                <h3>Art Studio</h3>
                <a class="chevron-link" href="/art-studio/">
                    <span>See more</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right">
                        <path d="m9 18 6-6-6-6" />
                    </svg>
                </a>
            </div>
            <div class="carousel still left">
                <a class="carousel-cell" href="/art-studio/">
                    <span class="img-title">Aerial View</span>
                    <img src="assets/images/events/ROT-Day1-Air4v2-2409JMR80937.jpg" alt="Aerial View">
                    <div class="carousel-cell-overlay">
                        <div class="chevron-link">
                            <span>See more</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </div>
                    </div>
                </a>
                <a class="carousel-cell" href="/art-studio/">
                    <span class="img-title">Aerial View</span>
                    <img src="assets/images/events/ROT-Day1-Air4v2-2409JMR80922.jpg" alt="Aerial View">
                    <div class="carousel-cell-overlay">
                        <div class="chevron-link">
                            <span>See more</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </div>
                    </div>
                </a>
                <a class="carousel-cell" href="/art-studio/">
                    <span class="img-title">Aerial View</span>
                    <img src="assets/images/events/ROT-Day1-Air4v2-2409JMR80031.jpg" alt="Aerial View">
                    <div class="carousel-cell-overlay">
                        <div class="chevron-link">
                            <span>See more</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </div>
                    </div>
                </a>
                <a class="carousel-cell" href="/art-studio/">
                    <span class="img-title">Aerial View</span>
                    <img src="assets/images/events/ROT-Day1-Air3v2-2409JMR80748.jpg" alt="Aerial View">
                    <div class="carousel-cell-overlay">
                        <div class="chevron-link">
                            <span>See more</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<section id="cottages-section" class="still-carousel-section">
    <div class="inner">
        <h2>Your Private Haven</h2>
        <div class="index-desc-wrapper">
            <p>Retreat to your own private oasis in one of our thoughtfully crafted cottages. Each cottage has been designed with comfort and simplicity in mind, embodying the philosophy of ‘less is more.’ Inspired by traditional Caribbean architecture and enhanced by modern amenities, the cottages are perfect for unwinding after a day of exploring or practicing meditation.</p>
            <p>Wooden interiors and open verandahs bring the outdoors in, creating a perfect balance between comfort and nature. Whether it’s listening to the tropical birds in the morning, lounging with a book in the afternoon, or gazing at the starlit sky at night, each cottage offers a serene environment for reconnecting with yourself in total privacy.</p>
        </div>
        <div class="section-divider"></div>
        <div class="carousel-container">
            <div class="carousel-header">
                <h3>Cottages</h3>
                <a class="chevron-link" href="/cottages/">
                    <span>See more</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right">
                        <path d="m9 18 6-6-6-6" />
                    </svg>
                </a>
            </div>
            <div class="carousel still right">
                <a class="carousel-cell" href="/cottages/">
                    <span class="img-title">Logwood Bed Area</span>
                    <img src="assets/images/cottages/logwood/ROT-Logwood-BedArea-2410JMR45834.jpg" alt="Logwood bed area" title="Logwood bed area">
                    <div class="carousel-cell-overlay">
                        <div class="chevron-link">
                            <span>See more</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </div>
                    </div>
                </a>
                <a class="carousel-cell" href="/cottages/">
                    <span class="img-title">Sugarloaf Verandah</span>
                    <img src="assets/images/cottages/sugarloaf/ROT-SugarLoaf-Verandah-2410JMR6098.jpg" alt="Sugarloaf verandah" title="Sugarloaf verandah">
                    <div class="carousel-cell-overlay">
                        <div class="chevron-link">
                            <span>See more</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </div>
                    </div>
                </a>
                <a class="carousel-cell" href="/cottages/">
                    <span class="img-title">Tamarind Bed Area</span>
                    <img src="assets/images/cottages/tamarind/ROT-Tamarind-BedArea-2410JMR26632.jpg" alt="Tamarind bed area" title="Tamarind bed area">
                    <div class="carousel-cell-overlay">
                        <div class="chevron-link">
                            <span>See more</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </div>
                    </div>
                </a>
                <a class="carousel-cell" href="/cottages/">
                    <span class="img-title">Logwood Exterior</span>
                    <img src="assets/images/cottages/logwood/ROT-Logwood-Exterior-2410JMR26750.jpg" alt="Logwood exterior" title="Logwood exterior">
                    <div class="carousel-cell-overlay">
                        <div class="chevron-link">
                            <span>See more</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </div>
                    </div>
                </a>
                <a class="carousel-cell" href="/cottages/">
                    <span class="img-title">Sugarloaf Bath</span>
                    <img src="assets/images/cottages/sugarloaf/ROT-SugarLoaf-Bath-2410JMR6202.jpg" alt="Sugarloaf bath" title="Sugarloaf bath">
                    <div class="carousel-cell-overlay">
                        <div class="chevron-link">
                            <span>See more</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </div>
                    </div>
                </a>
                <a class="carousel-cell" href="/cottages/">
                    <span class="img-title">Tamarind Verandah</span>
                    <img src="assets/images/cottages/tamarind/ROT-Tamarind-Verandah-2410JMR26237.jpg" alt="Tamarind Verandah" title="Tamarind Verandah">
                    <div class="carousel-cell-overlay">
                        <div class="chevron-link">
                            <span>See more</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<section id="cafe-section" class="still-carousel-section">
    <div class="inner">
        <h2>Savor Serenity</h2>
        <div class="index-desc-wrapper">
            <p>Our Café Verandah is a sanctuary for the senses, designed to offer guests the ultimate blend of taste, relaxation, and nature. Enjoy fresh, locally sourced ingredients transformed into delightful dishes that reflect the flavors of the Caribbean.</p>
            <p>From handcrafted herbal teas to gourmet coffee, everything is prepared with mindfulness. Overlooking vibrant gardens and flourishing treetops, the verandah is the perfect spot to relax, read, or connect with fellow guests. Here, every meal is more than nourishment—it’s an experience of tranquility, inviting you to be fully present in every bite and sip as you gaze at the beauty of the island.</p>
        </div>
        <div class="section-divider"></div>
        <div class="carousel-container">
            <div class="carousel-header">
                <h3>Cafe</h3>
                <a class="chevron-link" href="/cafe/">
                    <span>See more</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right">
                        <path d="m9 18 6-6-6-6" />
                    </svg>
                </a>
            </div>
            <div class="carousel still left">
                <a class="carousel-cell" href="/cafe/">
                    <span class="img-title">Cafe Verandah</span>
                    <img src="assets/images/cafe/ROT-Studio-CafeVerandah-2410JMR48872.jpg" alt="Cafe verandah" title="Cafe verandah">
                    <div class="carousel-cell-overlay">
                        <div class="chevron-link">
                            <span>See more</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </div>
                    </div>
                </a>
                <a class="carousel-cell" href="/cafe/">
                    <span class="img-title">Cafe Verandah</span>
                    <img src="assets/images/cafe/ROT-Studio-CafeVerandah-2410JMR55181.jpg" alt="Cafe verandah" title="Cafe verandah">
                    <div class="carousel-cell-overlay">
                        <div class="chevron-link">
                            <span>See more</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </div>
                    </div>
                </a>
                <a class="carousel-cell" href="/cafe/">
                    <span class="img-title">Cafe Verandah</span>
                    <img src="assets/images/cafe/ROT-Studio-CafeVerandah-2410JMR55355.jpg" alt="Cafe verandah" title="Cafe verandah">
                    <div class="carousel-cell-overlay">
                        <div class="chevron-link">
                            <span>See more</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </div>
                    </div>
                </a>
                <a class="carousel-cell" href="/cafe/">
                    <span class="img-title">Cafe Exterior</span>
                    <img src="assets/images/cafe/ROT-Studio-Exterior-2410JMR48645.jpg" alt="Cafe exterior" title="Cafe exterior">
                    <div class="carousel-cell-overlay">
                        <div class="chevron-link">
                            <span>See more</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </div>
                    </div>
                </a>
                <a class="carousel-cell" href="/cafe/">
                    <span class="img-title">Cafe Exterior</span>
                    <img src="assets/images/cafe/ROT-Studio-Exterior-2410JMR48653.jpg" alt="Cafe exterior" title="Cafe exterior">
                    <div class="carousel-cell-overlay">
                        <div class="chevron-link">
                            <span>See more</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<section id="events-section" class="still-carousel-section">
    <div class="inner">
        <h2>Gather and Celebrate</h2>
        <div class="index-desc-wrapper">
            <p>Our event spaces provide a versatile backdrop for memorable experiences. Designed to celebrate the island’s natural beauty, these spaces are ideal for a wide range of activities—from wellness workshops and yoga retreats to intimate weddings and special gatherings. With a beautiful blend of indoor and outdoor venues, we cater to both the need for privacy and the desire to be close to nature.</p>
            <p>Imagine a sunset yoga session with a view of the lush Caribbean hills or an intimate gathering under the stars. Whether you are organizing a small group retreat or a special celebration, our event spaces offer a distinctive setting that turns every occasion into an unforgettable experience, infused with tranquility and warmth.</p>
        </div>
        <div class="section-divider"></div>
        <div class="carousel-container">
            <div class="carousel-header">
                <h3>Events</h3>
                <a class="chevron-link" href="/events/">
                    <span>See more</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right">
                        <path d="m9 18 6-6-6-6" />
                    </svg>
                </a>
            </div>
            <div class="carousel still right">
                <a class="carousel-cell" href="/events/">
                    <img src="assets/images/art-studio/ROT-Lifestyle-Textures-2410JMR49280.jpg" alt="Cafe" title="Cafe">
                    <div class="carousel-cell-overlay">
                        <div class="chevron-link">
                            <span>See more</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </div>
                    </div>
                </a>
                <a class="carousel-cell" href="/events/">
                    <img src="assets/images/art-studio/ROT-Lifestyle-Textures-2410JMR48867.jpg" alt="Cafe verandah" title="Cafe verandah">
                    <div class="carousel-cell-overlay">
                        <div class="chevron-link">
                            <span>See more</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </div>
                    </div>
                </a>
                <a class="carousel-cell" href="/events/">
                    <img src="assets/images/art-studio/ROT-Lifestyle-Fauna-2410JMR50076.jpg" alt="Cafe verandah" title="Cafe verandah">
                    <div class="carousel-cell-overlay">
                        <div class="chevron-link">
                            <span>See more</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </div>
                    </div>
                </a>
                <a class="carousel-cell" href="/events/">
                    <img src="assets/images/art-studio/ROT-Lifestyle-Textures-2410JMR54920.jpg" alt="Cafe Verandah" title="Cafe verandah">
                    <div class="carousel-cell-overlay">
                        <div class="chevron-link">
                            <span>See more</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </div>
                    </div>
                </a>
                <a class="carousel-cell" href="/events/">
                    <img src="assets/images/art-studio/ROT-Lifestyle-Textures-2410JMR45764.jpg" alt="Cafe exterior" title="Cafe exterior">
                    <div class="carousel-cell-overlay">
                        <div class="chevron-link">
                            <span>See more</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<?php include_once 'includes/footer.php' ?>
<?php

include_once 'connection.php';

$description = isset($description) ? $description : "$company_name!";

$base_title = $company_name;

$title = isset($title_override) ? $title_override : (isset($title_suffix) ? $base_title .= " | " . $title_suffix : $title);

$page_lookup = [
    "art-studio" => "../",
    "meditation-center" => "../",
    "cafe" => "../",
    "cottages" => "../",
    "events" => "../",
    "about" => "../",
    "contact" => "../",
    "index" => ""
];
$swal_load_lookup = [];

$style_prefix = $page_lookup[$page] ?? "";
$canonical_dir = $page === "index" ? "" : $page . "/";
$canonical_url = "https://$www_domain/{$canonical_dir}";
$load_swal = !!$swal_load_lookup[$page];

?>

<!DOCTYPE html>
<html class="hamburger-menu-is-hidden">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">

    <!-- SEO BEGIN -->
    <meta name="keywords" content="">
    <meta name="description" content="<?php echo $description ?>">
    <meta property="og:title" content="<?php echo $base_title ?>">
    <meta property="og:description" content="<?php echo $description; ?>">
    <meta property="og:type" content="Website">
    <meta property="og:image" content="https://<?php echo $www_domain; ?>/assets/images/logo.png">
    <meta property="og:url" content="<?php echo $canonical_url; ?>">
    <link rel="canonical" href="<?php echo $canonical_url; ?>" />
    <!-- SEO END -->

    <title><?php echo $title ?></title>
    <link type="text/css" rel="stylesheet" href="/styles/main.css">
    <?php if (isset($page) && file_exists("{$style_prefix}styles/{$page}.css")) { ?>
        <link type="text/css" rel="stylesheet" href="/styles/<?php echo $page ?>.css">
    <?php }
    if (isset($extra_css)) { ?>
        <link type="text/css" rel="stylesheet" href="/styles/<?php echo $extra_css ?>.css">
    <?php } ?>

    <!-- BEGIN FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sorts+Mill+Goudy:ital@0;1&display=swap" rel="stylesheet">
    <!-- END PLUGINS -->

    <!-- BEGIN PLUGINS -->
    <script src="/plugins/jquery/jquery-3.7.1.min.js" defer></script>
    <?php if ($load_swal) { ?>
        <link type="text/css" rel="stylesheet" href="/plugins/sweetalert2/styles/sweetalert2.min.css">
        <script src="/plugins/sweetalert2/js/sweetalert2.all.min.js" defer></script>
    <?php } ?>
    <!-- END PLUGINS -->

    <!-- BEGIN STRUCTURED DATA -->
    <?php
    if (isset($structured_data) && is_array($structured_data)) {
        foreach ($structured_data as $data) {
            echo '<script type="application/ld+json">';
            echo json_encode($data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
            echo '</script>';
        }
    }
    ?>
    <!-- END STRUCTURED DATA -->

    <script src="/js/main.js" defer></script>
</head>

<body id="<?php echo $page ?>-page">
    <header>
        <div class="inner">
            <a href="/" id="home-img">
                Rotten Hill
                <!-- <img id="home-img" src="/assets/images/logo.png" alt="Website logo"> -->
            </a>

            <div id="hamburger-button">
                <div id="hamburger-icon">
                    <div class="hamburger-line one"></div>
                    <div class="hamburger-line two"></div>
                    <div class="hamburger-line three"></div>
                </div>
            </div>
        </div>

        <div id="hamburger-nav">
            <nav>
                <a href="/">Home</a>
                <a href="/cafe/">Cafe</a>
                <a href="/cottages/">Cottages</a>
                <a href="/events/">Events</a>
                <a href="/art-studio/">Art Studio</a>
                <a href="/meditation-center/">Meditation Center</a>
                <a href="/about/">About</a>
                <a href="/contact/">Contact</a>
            </nav>
        </div>
    </header>
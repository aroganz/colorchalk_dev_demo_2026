<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Amarnath Jaganathan | Art Director & Developer</title>
    <meta name="description" content="Independent Art Director and Developer based in Chennai. Bridging creative vision and deliverable code.">
    <meta property="og:title" content="ColorChalk Studio | Art Director & Developer">
    <meta property="og:description" content="Independent Art Director and Developer based in Chennai.">
    <meta property="og:image" content="https://www.colorchalk.com/assets/img/your-preview-image.jpg">
    <meta property="og:url" content="https://www.colorchalk.com">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdn.jsdelivr.net">

    <link rel="preload" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" as="style">
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" as="script">

    <style>
        :root { --accent: #f5245f; }
        body { margin: 0; background: #fff; font-family: sans-serif; overflow-x: hidden; }
        .hero-title { opacity: 1; transform: translateY(20px); } /* Prevents flash of unstyled text */
        .reveal { opacity: 0; }
        .nav-logo-img { height: 40px; width: auto; }
    </style>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;800&family=Manrope:wght@800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-JG2YFZKP0T"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-JG2YFZKP0T', { 'animate_ad_signals': false });
    </script>
</head>
<body>

<nav class="navbar navbar-expand-lg fixed-top py-4">
    <div class="container">
        <a class="navbar-brand" href="index.php">
    <img src="assets/img/color-chalk-logo.jpg" alt="ColorChalk Logo" class="nav-logo-img">
</a>
        
        <div class="d-flex align-items-center">
            <ul class="navbar-nav flex-row gap-4 me-4 d-none d-lg-flex">
                <li class="nav-item"><a class="nav-link text-dark fw-bold small" href="index.php">HOME</a></li>
                <li class="nav-item"><a class="nav-link text-dark fw-bold small" href="about.php">ABOUT</a></li>
                <li class="nav-item"><a class="nav-link text-dark fw-bold small" href="contact.php">CONTACT</a></li>
            </ul>

            <button class="menu-toggle d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar">
                <span class="menu-line"></span>
                <span class="menu-line"></span>
            </button>
        </div>
    </div>
</nav>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar">
    <div class="offcanvas-header justify-content-end p-4">
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body d-flex align-items-center justify-content-center text-center">
        <div class="nav-links">
            <a href="index.php" class="d-block mb-3">Home</a>
            <a href="about.php" class="d-block mb-3">About</a>
            <a href="contact.php" class="d-block mb-3">Contact</a>
        </div>
    </div>
</div>
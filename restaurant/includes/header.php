<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ember & Ash | Modern Indian Fire Dining</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,500;9..144,700&family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        /* Transparent to Black Navbar logic */
        .navbar {
            transition: all 0.4s ease;
            background-color: rgba(10, 10, 10, 0.95) !important;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05) !important;
        }
        
        .nav-link {
            color: #ffffff !important;
            font-weight: 400;
            letter-spacing: 2px;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: var(--accent-gold) !important;
        }

        .navbar-brand {
            color: #ffffff !important;
            font-size: 1.5rem;
            letter-spacing: 4px;
        }

        /* Mobile Toggler White */
        .navbar-toggler {
            filter: invert(1);
        }
    </style>
</head>
<body class="bg-dark text-white">

<nav class="navbar navbar-expand-lg navbar-dark sticky-top py-3">
    <div class="container">
        <a class="navbar-brand serif fw-bold" href="index.php">EMBER & <span style="color: var(--accent-gold);">ASH</span></a>
        
        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="bi bi-list fs-2"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ms-auto gap-lg-4">
        <li class="nav-item">
            <a class="nav-link small text-uppercase" href="index.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link small text-uppercase" href="index.php#menu">The Menu</a>
        </li>
        <li class="nav-item">
            <a class="nav-link small text-uppercase" href="about.php">Our Story</a>
        </li>
        <li class="nav-item">
            <a class="nav-link small text-uppercase" href="contact.php">Contact</a>
        </li>
    </ul>
</div>
    </div>
</nav>
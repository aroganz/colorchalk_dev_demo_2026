<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aura Estates | Exceptional Living</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        :root {
            --estate-gold: #C5A059;
            --estate-dark: #1A1A1A;
        }
        body { font-family: 'Inter', sans-serif; background-color: #F9F7F2; }
        .serif { font-family: 'Playfair Display', serif; }
        
        /* Fixed Header Stability */
        .navbar { background-color: rgba(255,255,255,0.98); border-bottom: 1px solid #eee; }
        
        @media (max-width: 991.98px) {
            .navbar > .container {
                width: 100% !important;
                max-width: 100vw !important;
                padding-left: 20px !important;
                padding-right: 20px !important;
                display: flex !important;
                justify-content: space-between !important;
            }
        }

        /* Gold Hamburger for Luxury Feel */
        .custom-toggler-icon span {
            display: block;
            width: 24px;
            height: 2px;
            background-color: var(--estate-gold);
            margin-bottom: 5px;
        }
        .custom-toggler-icon span:last-child { margin-bottom: 0; }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg fixed-top py-3">
    <div class="container">
        <a class="navbar-brand serif fw-bold fs-3 text-dark" href="index.php">
            Aura<span style="color: var(--estate-gold);">Estates</span>
        </a>

        <button class="navbar-toggler border-0 p-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#estateNav">
            <div class="custom-toggler-icon">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>

        <div class="collapse navbar-collapse" id="estateNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item"><a class="nav-link small fw-bold text-uppercase px-3" href="about.php">The Agency</a></li>
                <li class="nav-item"><a class="nav-link small fw-bold text-uppercase px-3" href="services.php">Portfolio</a></li>
                <li class="nav-item"><a class="nav-link small fw-bold text-uppercase px-3" href="process.php">Concierge</a></li>
                <li class="nav-item ms-lg-4 mt-3 mt-lg-0">
                    <a class="btn btn-dark rounded-0 px-4 py-2 small fw-bold text-uppercase" href="contact.php">Book View</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Charity Aura | Compassionate Change</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Playfair+Display:ital,wght@0,700;1,700&display=swap" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    
    <link rel="stylesheet" href="assets/css/style.css">
    
    <style>
        /* Header Specific Pastel Tweaks */
        .navbar {
            background-color: rgba(255, 245, 242, 0.9) !important; /* var(--pastel-peach) with transparency */
            backdrop-filter: blur(10px);
            padding: 20px 0;
            transition: all 0.3s ease;
        }
        
        .nav-link {
            font-weight: 600;
            color: var(--text-charcoal) !important;
            margin: 0 15px;
            font-size: 0.95rem;
        }

        .btn-donate-nav {
            background-color: var(--action-rose);
            color: white !important;
            padding: 10px 25px;
            border-radius: 50px;
            font-weight: 700;
            transition: transform 0.2s ease;
        }

        .btn-donate-nav:hover {
            transform: scale(1.05);
            background-color: #ff7575;
        }
        /* --- MOBILE MENU STYLING --- */
@media (max-width: 991.98px) {
    .navbar-collapse {
        background-color: var(--pastel-peach); /* Matches your theme */
        padding: 2rem;
        border-radius: 20px;
        margin-top: 15px;
        box-shadow: 0 15px 30px rgba(0,0,0,0.05);
        border: 1px solid rgba(0,0,0,0.05);
    }

    .nav-link {
        padding: 15px 0 !important;
        font-size: 1.2rem;
        border-bottom: 1px solid rgba(0,0,0,0.03);
    }

    .btn-donate-nav {
        width: 100%;
        display: block;
        margin-top: 10px;
    }
}

/* Ensure the navbar is always on top */
.navbar {
    z-index: 9999 !important;
}
    </style>
</head>
<body>

    <div id="scrollIndicator"></div>

    <nav class="navbar navbar-expand-lg fixed-top border-bottom border-light">
    <div class="container">
        <a class="navbar-brand serif fw-bold fs-3" href="index.php">
            Aura<span class="text-muted fst-italic">Charity</span>
        </a>
        
        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#charityNav" aria-controls="charityNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-list fs-1 text-dark"></i> </button>
        
        <div class="collapse navbar-collapse" id="charityNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link" href="about.php">Our Mission</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="process.php">Impact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.php">Programs</a>
                </li>
                <li class="nav-item ms-lg-3 mt-3 mt-lg-0">
                    <a class="nav-link btn-donate-nav px-4 text-center" href="contact.php">Donate Now</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
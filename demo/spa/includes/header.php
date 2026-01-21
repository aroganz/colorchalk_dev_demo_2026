<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aura Wellness | Sanctuary for the Senses</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&family=Playfair+Display:ital,wght@0,400;1,400&display=swap" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <link rel="stylesheet" href="assets/css/style.css">
    
    <style>
        .navbar {
            background: rgba(249, 247, 242, 0.85) !important;
            backdrop-filter: blur(15px);
            padding: 25px 0;
            transition: all 0.4s ease;
        }
        .nav-link {
            font-weight: 400;
            letter-spacing: 1px;
            text-transform: uppercase;
            font-size: 0.75rem;
            margin: 0 15px;
            color: var(--text-stone) !important;
        }
        .btn-spa-nav {
            background: var(--zen-sage) !important;
            color: white !important;
            border-radius: 50px;
            padding: 10px 25px !important;
            font-size: 0.75rem;
            letter-spacing: 1px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand serif fs-3" href="index.php">
            Aura<span class="fw-light fst-italic">Wellness</span>
        </a>
        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#spaNav">
            <i class="bi bi-filter-right fs-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="spaNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item"><a class="nav-link" href="services.php">Treatments</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">The Sanctuary</a></li>
                <li class="nav-item"><a class="nav-link" href="process.php">Membership</a></li>
                <li class="nav-item ms-lg-4 mt-3 mt-lg-0">
                    <a class="nav-link btn-spa-nav" href="contact.php">Book Ritual</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
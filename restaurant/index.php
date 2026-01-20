<?php include('includes/header.php'); ?>

<section class="hero-slider-wrapper">
    <div class="swiper mainHeroSwiper">
        <div class="swiper-wrapper">
            
            <div class="swiper-slide">
                <div class="slide-inner" style="background-image: url('assets/img/restaurant-hero.jpg');">
                    <div class="slide-content text-center">
                        <span class="text-accent text-uppercase small tracking-widest mb-3 d-block animate-item">Est. 2026</span>
                        <h1 class="display-1 text-white serif animate-item">Ember & Ash</h1>
                        <p class="text-light small text-uppercase tracking-widest mx-auto animate-item" style="max-width: 500px;">Where ancient charcoal techniques meet modern Indian soul.</p>
                        <div class="mt-5 animate-item">
                            <a href="#menu" class="btn btn-outline-light rounded-0 px-5 py-3 text-uppercase small">Discover the Menu</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="slide-inner" style="background-image: url('assets/img/kitchen-view.jpg');">
                    <div class="slide-content text-center">
                        <span class="text-accent text-uppercase small tracking-widest mb-3 d-block animate-item">The Craft</span>
                        <h1 class="display-1 text-white serif animate-item">The Open Hearth</h1>
                        <p class="text-light small text-uppercase tracking-widest mx-auto animate-item" style="max-width: 500px;">Watch the dance of spices and flames in our signature open kitchen.</p>
                        <div class="mt-5 animate-item">
                            <a href="#book" class="btn btn-gold rounded-0 px-5 py-3 text-uppercase small" style="background: var(--accent-gold); border:none; color:black;">Reserve Your Seat</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="swiper-button-next custom-nav"></div>
        <div class="swiper-button-prev custom-nav"></div>
        <div class="swiper-pagination custom-pagination"></div>
    </div>
</section>

<section id="menu" class="py-5 mt-5">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h2 class="display-4 serif text-white">Signature Collection</h2>
            <p class="text-muted small text-uppercase tracking-widest">Chef's Curated Specials</p>
            <div class="gold-divider" style="width: 60px; height: 1px; background: var(--accent-gold); margin: 20px auto;"></div>
        </div>

        <div class="row g-4">
            <?php
            $dishes = [
                ["name" => "Truffle Butter Chicken", "price" => "$34", "img" => "assets/img/truffle-butter-chicken.jpg"],
                ["name" => "Smoked Lamb Rogan Josh", "price" => "$38", "img" => "assets/img/lamb-rogan-josh.jpg"],
                ["name" => "Cedar Plank Tandoori Salmon", "price" => "$42", "img" => "assets/img/tandoori-salmon.jpg"],
                ["name" => "Deconstructed Samosa", "price" => "$18", "img" => "assets/img/samosa.jpg"],
                ["name" => "Black Garlic Dal Makhani", "price" => "$26", "img" => "assets/img/dal-makhani.jpg"],
                ["name" => "Saffron Lobster Biryani", "price" => "$52", "img" => "assets/img/lobster-biryani.jpg"],
                ["name" => "Charred Paneer Tikka", "price" => "$28", "img" => "assets/img/paneer-tikka.jpg"],
                ["name" => "Kashmiri Lamb Chops", "price" => "$45", "img" => "assets/img/lamb-chops.jpg"],
            ];

            foreach($dishes as $dish): ?>
            <div class="col-md-6 col-lg-3">
                <div class="dish-card">
                    <img src="<?php echo $dish['img']; ?>" class="dish-img" alt="<?php echo $dish['name']; ?>">
                    <div class="p-4 text-center">
                        <h4 class="h6 serif mb-2 text-white"><?php echo $dish['name']; ?></h4>
                        <span class="text-accent small fw-bold tracking-widest"><?php echo $dish['price']; ?></span>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="mt-5 pt-5">
             <?php include('includes/menu-list.php'); ?>
        </div>
    </div>
</section>

<section id="book" class="py-5 mb-5" style="background-color: var(--bg-panel);">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="position-relative">
                    <img src="assets/img/kitchen-view.jpg" class="img-fluid border border-secondary p-2" alt="Interior">
                    <div class="border border-gold position-absolute top-0 start-0 w-100 h-100 mt-3 ms-3" style="z-index:-1; border: 1px solid var(--accent-gold) !important;"></div>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
            <h2 class="display-5 mb-4 serif text-white">Secure Your Table</h2>
    <p class="text-light fw-medium mb-5 opacity-75" style="letter-spacing: 0.5px; line-height: 1.6;">
        Join us for an evening of charcoal-fired flavors and spice-infused cocktails.
    </p>    
            <form class="form-dark">
                    <div class="mb-4">
                        <input type="text" class="form-control bg-transparent text-white border-bottom border-secondary rounded-0" placeholder="YOUR NAME" style="border:none; border-bottom: 1px solid #333;">
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <input type="date" class="form-control bg-transparent text-white border-bottom border-secondary rounded-0" style="border:none; border-bottom: 1px solid #333;">
                        </div>
                        <div class="col-md-6 mb-4">
                            <select class="form-select bg-transparent text-white border-bottom border-secondary rounded-0" style="border:none; border-bottom: 1px solid #333;">
                                <option class="bg-dark">2 GUESTS</option>
                                <option class="bg-dark">4 GUESTS</option>
                                <option class="bg-dark">6+ GUESTS</option>
                            </select>
                        </div>
                    </div>
                    <button type="button" class="btn btn-outline-accent w-100 mt-4 py-3" style="color: var(--accent-gold); border: 1px solid var(--accent-gold); background:transparent;">CHECK AVAILABILITY</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include('includes/footer.php'); ?>
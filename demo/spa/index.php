<?php include('includes/header.php'); ?>

<header class="py-5 mt-5">
    <div class="container pt-5 text-center">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <h6 class="text-uppercase tracking-widest text-muted small mb-4">A Sanctuary for the Senses</h6>
                <h1 class="display-1 serif mb-5">Unwind. <span class="fst-italic opacity-50">Restore.</span> <br>Breathe.</h1>
                
                <div class="d-inline-flex align-items-center bg-white rounded-pill shadow-sm p-2 mb-5">
                    <a href="services.php" class="btn btn-dark rounded-pill px-5 py-3">View Menu</a>
                    <a href="contact.php" class="btn btn-link text-dark text-decoration-none px-4 small tracking-widest text-uppercase fw-bold">Buy Gift Card</a>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="treatment-card">
                    <div class="overflow-hidden" style="height: 400px;">
                        <img src="https://images.unsplash.com/photo-1540555700478-4be289fbecef?auto=format&fit=crop&q=80&w=800" class="w-100 h-100 object-fit-cover">
                    </div>
                    <div class="p-5 text-center">
                        <h4 class="serif mb-2">Stone Ritual</h4>
                        <p class="small text-uppercase tracking-widest text-muted">90 Minutes — $180</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
            <div class="treatment-card">
                <div class="overflow-hidden" style="height: 400px; background-color: var(--zen-mist);">
                    <img src="https://images.unsplash.com/photo-1515377905703-c4788e51af15?auto=format&fit=crop&q=80&w=800" 
                 onerror="this.src='https://images.unsplash.com/photo-1544161515-436cefd16174?auto=format&fit=crop&q=80&w=800'"
                 class="w-100 h-100 object-fit-cover" 
                 alt="Hydro-Glow Therapy">
                </div>
                <div class="p-5 text-center">
                     <h4 class="serif mb-2">Hydro-Glow</h4>
                 <p class="small text-uppercase tracking-widest text-muted">60 Minutes — $145</p>
            </div>
    </div>
</div>
            <div class="col-md-4">
                <div class="treatment-card">
                    <div class="overflow-hidden" style="height: 400px;">
                        <img src="https://images.unsplash.com/photo-1519415387722-a1c3bbef716c?auto=format&fit=crop&q=80&w=800" class="w-100 h-100 object-fit-cover">
                    </div>
                    <div class="p-5 text-center">
                        <h4 class="serif mb-2">Zen Garden</h4>
                        <p class="small text-uppercase tracking-widest text-muted">120 Minutes — $250</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5" style="background-color: var(--zen-mist);">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <span class="badge-zen mb-4 d-inline-block">The Collective</span>
                <h2 class="display-3 serif mb-4">Membership <br>Redefined.</h2>
                <p class="lead text-secondary mb-5">Enjoy priority booking, private lounge access, and monthly curated rituals designed for your specific wellness journey.</p>
                <a href="process.php" class="btn btn-outline-dark rounded-pill px-5 py-3">Explore Packages</a>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="p-5 bg-white rounded-5 shadow-sm text-center">
                    <i class="bi bi-quote fs-1 opacity-25"></i>
                    <h5 class="serif italic mb-4">"The most thoughtful spa experience I have encountered globally."</h5>
                    <p class="small text-uppercase tracking-widest mb-0">— Vogue Wellness</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('includes/footer.php'); ?>
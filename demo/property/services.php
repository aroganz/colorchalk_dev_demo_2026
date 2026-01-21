<?php include('includes/header.php'); ?>

<section class="py-5 mt-5" style="background-color: var(--estate-dark); color: white;">
    <div class="container pt-5 pb-4 text-center">
        <h6 class="text-uppercase tracking-widest mb-3" style="color: var(--estate-gold);">The Collection</h6>
        <h1 class="display-3 serif mb-4">Curated <span class="fst-italic">Portfolios</span></h1>
        <p class="lead opacity-50 mx-auto" style="max-width: 700px;">Explore our private selection of architectural landmarks and off-market residential estates across the globe.</p>
    </div>
</section>

<section class="py-5 bg-white">
    <div class="container py-5">
        
        <div class="d-flex flex-wrap justify-content-center gap-4 mb-5 pb-3 border-bottom" id="filter-nav">
            <button onclick="filterSelection('all')" class="filter-btn active">All Estates</button>
            <button onclick="filterSelection('coastal')" class="filter-btn">Coastal</button>
            <button onclick="filterSelection('metropolitan')" class="filter-btn">Metropolitan</button>
            <button onclick="filterSelection('mountain')" class="filter-btn">Mountain</button>
        </div>

        <div class="row g-5">
            <div class="col-lg-6 filter-item coastal">
                <div class="property-item shadow-sm bg-white">
                    <div class="overflow-hidden" style="height: 400px;">
                        <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?auto=format&fit=crop&q=80&w=1200" class="w-100 h-100 object-fit-cover transition-img" alt="Coastal Villa">
                    </div>
                    <div class="p-4 text-center">
                        <h3 class="serif mb-1">Villa Mariposa</h3>
                        <p class="small text-muted text-uppercase tracking-widest">Ibiza, Spain</p>
                        <h5 class="fw-bold mt-2" style="color: var(--estate-gold);">$8.5M</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 filter-item metropolitan">
                <div class="property-item shadow-sm bg-white">
                    <div class="overflow-hidden" style="height: 400px;">
                        <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&q=80&w=1200" class="w-100 h-100 object-fit-cover transition-img" alt="Penthouse">
                    </div>
                    <div class="p-4 text-center">
                        <h3 class="serif mb-1">The Glass Penthouse</h3>
                        <p class="small text-muted text-uppercase tracking-widest">New York, USA</p>
                        <h5 class="fw-bold mt-2" style="color: var(--estate-gold);">$14.2M</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 filter-item mountain">
                <div class="property-item shadow-sm bg-white">
                    <div class="overflow-hidden" style="height: 400px;">
                        <img src="https://images.unsplash.com/photo-1518780664697-55e3ad937233?auto=format&fit=crop&q=80&w=1200" class="w-100 h-100 object-fit-cover transition-img" alt="Mountain Lodge">
                    </div>
                    <div class="p-4 text-center">
                        <h3 class="serif mb-1">Summit Lodge</h3>
                        <p class="small text-muted text-uppercase tracking-widest">Aspen, Colorado</p>
                        <h5 class="fw-bold mt-2" style="color: var(--estate-gold);">$6.7M</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 filter-item coastal">
                <div class="property-item shadow-sm bg-white">
                    <div class="overflow-hidden" style="height: 400px;">
                        <img src="https://images.unsplash.com/photo-1499793983690-e29da59ef1c2?auto=format&fit=crop&q=80&w=1200" class="w-100 h-100 object-fit-cover transition-img" alt="Beach House">
                    </div>
                    <div class="p-4 text-center">
                        <h3 class="serif mb-1">Azure Shores</h3>
                        <p class="small text-muted text-uppercase tracking-widest">Malibu, USA</p>
                        <h5 class="fw-bold mt-2" style="color: var(--estate-gold);">$11.0M</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.filter-btn {
    border: none; background: none; padding-bottom: 8px; font-size: 0.75rem; font-weight: 700;
    text-transform: uppercase; letter-spacing: 2px; color: #999; transition: all 0.3s ease; border-bottom: 2px solid transparent;
}
.filter-btn.active { color: var(--estate-dark); border-bottom: 2px solid var(--estate-dark); }
.filter-item { display: block; animation: fadeIn 0.6s ease forwards; }
@keyframes fadeIn { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
.hide { display: none !important; }
.transition-img { transition: transform 0.8s ease; }
.property-item:hover .transition-img { transform: scale(1.05); }
</style>

<?php include('includes/footer.php'); ?>
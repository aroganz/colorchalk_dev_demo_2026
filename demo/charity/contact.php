<?php include('includes/header.php'); ?>

<section class="py-5 mt-5" style="background-color: var(--pastel-peach); min-height: 100vh;">
    <div class="container pt-5">
        <div class="row g-5 justify-content-center">
            
            <div class="col-lg-4 reveal">
                <h6 class="text-uppercase tracking-widest text-muted small mb-3">Support Our Vision</h6>
                <h1 class="serif display-4 mb-4">Make an <br><span class="fst-italic">Impact.</span></h1>
                <p class="text-secondary mb-5">Your contribution directly funds our global infrastructure projects. Whether it's a one-time gift or a monthly pledge, you are changing lives.</p>
                
                <div class="mb-4">
                    <p class="small text-uppercase fw-bold text-muted mb-2">Direct Contact</p>
                    <p class="text-dark">hello@auracharity.org<br>+91 (0) 44 2345 6789</p>
                </div>
                
                <div class="mb-4">
                    <p class="small text-uppercase fw-bold text-muted mb-2">Office</p>
                    <p class="text-dark">ColorChalk Studio<br>Chennai, Tamil Nadu, India</p>
                </div>
            </div>

            <div class="col-lg-7 offset-lg-1 reveal">
                <div class="bg-white p-5 rounded-5 shadow-sm">
                    <form action="process.php" method="POST">
                        <div class="row g-4">
                            
                            <div class="col-12 mb-4">
                                <label class="small text-uppercase tracking-widest text-muted mb-3 d-block">Select Amount (USD)</label>
                                <div class="d-flex flex-wrap gap-2">
                                    <input type="radio" class="btn-check" name="amount" id="amt25" value="25">
                                    <label class="btn btn-outline-secondary rounded-pill px-4" for="amt25">$25</label>

                                    <input type="radio" class="btn-check" name="amount" id="amt50" value="50" checked>
                                    <label class="btn btn-outline-secondary rounded-pill px-4" for="amt50">$50</label>

                                    <input type="radio" class="btn-check" name="amount" id="amt100" value="100">
                                    <label class="btn btn-outline-secondary rounded-pill px-4" for="amt100">$100</label>

                                    <input type="number" name="custom_amount" class="form-control rounded-pill border-1 shadow-none" style="width: 140px;" placeholder="Custom">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control border-0 border-bottom rounded-0 px-0 shadow-none" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" class="form-control border-0 border-bottom rounded-0 px-0 shadow-none" placeholder="Email Address" required>
                            </div>
                            
                            <div class="col-12">
                                <label class="small text-uppercase tracking-widest text-muted mb-2 mt-3">Which program speaks to you?</label>
                                <select name="program" class="form-select border-0 border-bottom rounded-0 px-0 shadow-none">
                                    <option value="water">Water Security</option>
                                    <option value="education">Adaptive Learning</option>
                                    <option value="health">Mobile Clinics</option>
                                    <option value="agriculture">Smart Farming</option>
                                    <option value="general" selected>General Fund (Most Impact)</option>
                                </select>
                            </div>

                            <div class="col-12 pt-4">
                                <button type="submit" class="btn-talk-footer w-100 py-3">
                                    Proceed to Support
                                </button>
                                <p class="text-center text-muted small mt-3">All donations are tax-deductible.</p>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include('includes/footer.php'); ?>
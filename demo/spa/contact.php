<?php include('includes/header.php'); ?>

<section class="py-5 mt-5" style="background-color: var(--zen-oat); min-height: 100vh;">
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="bg-white rounded-5 shadow-sm overflow-hidden row g-0">
                    
                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="h-100 position-relative">
                            <img src="https://images.unsplash.com/photo-1540555700478-4be289fbecef?auto=format&fit=crop&q=80&w=1000" class="w-100 h-100 object-fit-cover" alt="Spa Reception">
                            <div class="position-absolute top-0 start-0 p-5">
                                <span class="badge-zen">Reservations</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7 p-5 p-md-5">
                        <h2 class="serif display-5 mb-4">Request a <span class="fst-italic">Ritual.</span></h2>
                        <p class="text-muted mb-5 small text-uppercase tracking-widest">Please allow 24 hours for our concierge to confirm your availability.</p>
                        
                        <form action="#" method="POST">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <input type="text" class="form-control border-0 border-bottom rounded-0 px-0 shadow-none" placeholder="Full Name" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control border-0 border-bottom rounded-0 px-0 shadow-none" placeholder="Email Address" required>
                                </div>
                                <div class="col-12">
                                    <select class="form-select border-0 border-bottom rounded-0 px-0 shadow-none" required>
                                        <option value="" disabled selected>Select Your Treatment</option>
                                        <option>Deep Stillness Massage</option>
                                        <option>Eucalyptus Steam Wrap</option>
                                        <option>Aura Signature Glow</option>
                                        <option>Membership Inquiry</option>
                                    </select>
                                </div>
                                <div class="col-12 pt-4">
                                    <button type="submit" class="btn btn-dark w-100 py-3 rounded-pill text-uppercase small tracking-widest">Check Availability</button>
                                </div>
                                <div class="col-12 text-center">
                                    <p class="small text-muted mb-0 mt-3">Prefer to speak? <br><strong>+91 (0) 44 2345 6789</strong></p>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<?php include('includes/footer.php'); ?>
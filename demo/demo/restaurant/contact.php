<?php include('includes/header.php'); ?>

<section class="py-5 mt-5" style="background-color: var(--bg-dark); min-height: 100vh;">
    <div class="container pt-5">
        <div class="row g-0 justify-content-center">
            <div class="col-lg-10">
                
                <div class="mb-5 pb-5 border-bottom border-secondary">
                    <?php if(isset($_GET['status']) && $_GET['status'] == 'success'): ?>
                        <div class="alert alert-outline-gold rounded-0 border-gold small mb-4 py-3 text-uppercase tracking-widest bg-transparent" style="color: var(--accent-gold); border: 1px solid var(--accent-gold);">
                            Your message has been received. We will be in touch shortly to confirm your request.
                        </div>
                    <?php endif; ?>

                    <h6 class="text-uppercase tracking-widest small mb-3" style="color: var(--accent-gold); letter-spacing: 3px;">Connect With Us</h6>
                    <h1 class="display-3 serif mb-0 text-white">Find Your <span class="fst-italic" style="color: var(--accent-gold);">Seat at the Fire</span>.</h1>
                </div>

                <div class="row g-5">
                    <div class="col-md-4">
                        <div class="mb-5">
                            <p class="small text-uppercase fw-bold tracking-widest mb-3 text-white">The Restaurant</p>
                            <p class="text-light-custom small lh-lg">
                                782 Charcoal Lane<br>
                                Mumbai, India<br>
                                <a href="mailto:dining@emberandash.com" class="text-decoration-none border-bottom" style="color: var(--accent-gold); border-color: var(--accent-gold) !important;">dining@emberandash.com</a>
                            </p>
                        </div>
                        <div class="mb-5">
                            <p class="small text-uppercase fw-bold tracking-widest mb-3 text-white">Socials</p>
                            <ul class="list-unstyled small">
                                <li class="mb-2"><a href="#" class="text-light-custom text-decoration-none footer-link">Instagram</a></li>
                                <li class="mb-2"><a href="#" class="text-light-custom text-decoration-none footer-link">Facebook</a></li>
                                <li class="mb-2"><a href="#" class="text-light-custom text-decoration-none footer-link">Yelp Reviews</a></li>
                            </ul>
                        </div>
                        <div class="p-4" style="background-color: var(--bg-panel); border-left: 3px solid var(--accent-gold);">
                            <p class="small text-white mb-0 fst-italic">"Cooking is a language through which all the properties of spice and smoke are expressed."</p>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <form action="process.php" method="POST" class="form-dark">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <label class="small text-uppercase tracking-widest text-white mb-2">Your Name</label>
                                    <input type="text" name="name" class="form-control rounded-0 border-0 border-bottom border-secondary bg-transparent px-0 shadow-none text-white" placeholder="Full Name" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="small text-uppercase tracking-widest text-white mb-2">Email Address</label>
                                    <input type="email" name="email" class="form-control rounded-0 border-0 border-bottom border-secondary bg-transparent px-0 shadow-none text-white" placeholder="Email" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="small text-uppercase tracking-widest text-white mb-2">Inquiry Type</label>
                                    <select name="service" class="form-select rounded-0 border-0 border-bottom border-secondary bg-transparent px-0 shadow-none text-white" style="background-color: #0a0a0a;">
                                        <option value="reservation">Table Reservation</option>
                                        <option value="private-dining">Private Dining Room</option>
                                        <option value="event">Corporate/Event Hosting</option>
                                        <option value="chef-table">Chef's Table Experience</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="small text-uppercase tracking-widest text-white mb-2">Number of Guests</label>
                                    <select name="guests" class="form-select rounded-0 border-0 border-bottom border-secondary bg-transparent px-0 shadow-none text-white" style="background-color: #0a0a0a;">
                                        <option value="2">1-2 Guests</option>
                                        <option value="4">3-4 Guests</option>
                                        <option value="6">5-8 Guests</option>
                                        <option value="large">Large Party (8+)</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="small text-uppercase tracking-widest text-white mb-2">Specific Requirements</label>
                                    <textarea name="message" class="form-control rounded-0 border-0 border-bottom border-secondary bg-transparent px-0 shadow-none text-white" rows="4" placeholder="Allergies, celebration notes, or special requests..."></textarea>
                                </div>
                                <div class="col-12 pt-4">
                                    <button type="submit" class="btn btn-outline-accent px-5 py-3 rounded-0 text-uppercase small tracking-widest" style="border: 1px solid var(--accent-gold); color: var(--accent-gold);">
                                        Submit Request
                                    </button>
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
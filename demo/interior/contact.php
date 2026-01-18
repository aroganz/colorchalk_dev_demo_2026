<?php include('includes/header.php'); ?>

<section class="py-5 mt-5" style="background-color: #F5F5F0; min-height: 100vh;">
    <div class="container pt-5">
        <div class="row g-0 justify-content-center">
            <div class="col-lg-10">
                
                <div class="mb-5 pb-5 border-bottom border-dark">
                    <?php if(isset($_GET['status']) && $_GET['status'] == 'success'): ?>
                        <div class="alert alert-dark rounded-0 border-0 small mb-4 py-3 text-uppercase tracking-widest">
                            Thank you. Our studio will reach out shortly to discuss your narrative.
                        </div>
                    <?php endif; ?>

                    <h6 class="text-uppercase tracking-widest text-muted small mb-3" style="letter-spacing: 3px;">Inquire</h6>
                    <h1 class="display-3 serif mb-0">Start a <span class="fst-italic text-muted">Conversation</span>.</h1>
                </div>

                <div class="row g-5">
                    <div class="col-md-4">
                        <div class="mb-5">
                            <p class="small text-uppercase fw-bold text-muted tracking-widest mb-3">The Studio</p>
                            <p class="text-dark small lh-lg">
                                1245 Architectural Row<br>
                                Copenhagen, Denmark<br>
                                <a href="mailto:hello@aurastudio.com" class="text-dark text-decoration-none border-bottom border-dark">hello@aurastudio.com</a>
                            </p>
                        </div>
                        <div class="mb-5">
                            <p class="small text-uppercase fw-bold text-muted tracking-widest mb-3">Social</p>
                            <ul class="list-unstyled small">
                                <li class="mb-2"><a href="#" class="text-dark text-decoration-none">Instagram</a></li>
                                <li class="mb-2"><a href="#" class="text-dark text-decoration-none">Pinterest</a></li>
                                <li class="mb-2"><a href="#" class="text-dark text-decoration-none">Journal</a></li>
                            </ul>
                        </div>
                        <div class="p-4" style="background-color: #EBEBE6;">
                            <p class="small text-muted mb-0 italic">"Design is the silent ambassador of your brand."</p>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <form action="process.php" method="POST">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <label class="small text-uppercase tracking-widest text-muted mb-2">Name</label>
                                    <input type="text" name="name" class="form-control rounded-0 border-0 border-bottom border-dark bg-transparent px-0 shadow-none" placeholder="Your full name" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="small text-uppercase tracking-widest text-muted mb-2">Email</label>
                                    <input type="email" name="email" class="form-control rounded-0 border-0 border-bottom border-dark bg-transparent px-0 shadow-none" placeholder="Email address" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="small text-uppercase tracking-widest text-muted mb-2">Project Type</label>
                                    <select name="service" class="form-select rounded-0 border-0 border-bottom border-dark bg-transparent px-0 shadow-none">
                                        <option value="residential">Residential Architecture</option>
                                        <option value="interior">Interior Curation</option>
                                        <option value="hospitality">Hospitality/Commercial</option>
                                        <option value="furniture">Bespoke Furniture</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="small text-uppercase tracking-widest text-muted mb-2">Timeline</label>
                                    <select name="priority" class="form-select rounded-0 border-0 border-bottom border-dark bg-transparent px-0 shadow-none">
                                        <option value="immediate">Immediate (1-3 months)</option>
                                        <option value="planned">Planned (6+ months)</option>
                                        <option value="dreaming">Inspiration / Dreaming</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="small text-uppercase tracking-widest text-muted mb-2">The Brief</label>
                                    <textarea name="message" class="form-control rounded-0 border-0 border-bottom border-dark bg-transparent px-0 shadow-none" rows="4" placeholder="Tell us about your space..."></textarea>
                                </div>
                                <div class="col-12 pt-4">
                                    <button type="submit" class="btn btn-dark px-5 py-3 rounded-0 text-uppercase small tracking-widest">
                                        Submit Inquiry
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
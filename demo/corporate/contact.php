<?php include('includes/header.php'); ?>

<section class="py-5 mt-5" style="background-color: var(--corp-slate); min-height: 100vh;">
    <div class="container pt-5">
        <div class="row g-0 shadow-lg border-0 bg-white" style="min-height: 650px;">
            
            <div class="col-lg-4 p-5 text-white d-flex flex-column justify-content-between" style="background-color: var(--corp-blue);">
                <div>
                    <h6 class="text-uppercase tracking-widest small opacity-75 mb-3">Global Access</h6>
                    <h2 class="fw-bold mb-4">Partner with <br>Aura Capital.</h2>
                    <p class="opacity-75 mb-5">Our offices across APAC, EMEA, and AMER are strategically positioned to facilitate cross-border institutional growth.</p>
                </div>

                <div class="contact-details">
                    <div class="mb-4">
                        <p class="small fw-bold text-uppercase mb-1 tracking-widest">Institutional Inquiries</p>
                        <p class="mb-0">partners@auracapital.com</p>
                    </div>
                    <div class="mb-4">
                        <p class="small fw-bold text-uppercase mb-1 tracking-widest">Investor Relations</p>
                        <p class="mb-0">ir@auracapital.com</p>
                    </div>
                    <div>
                        <p class="small fw-bold text-uppercase mb-1 tracking-widest">Global HQ</p>
                        <p class="mb-0">+91 (0) 44 2345 6789</p>
                    </div>
                </div>

                <div class="social-links pt-4 border-top border-white border-opacity-25 mt-5">
                    <a href="#" class="text-white me-3 fs-5"><i class="bi bi-linkedin"></i></a>
                    <a href="#" class="text-white me-3 fs-5"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" class="text-white fs-5"><i class="bi bi-globe"></i></a>
                </div>
            </div>

            <div class="col-lg-8 p-5">
                <div class="mb-5">
                    <h6 class="text-primary text-uppercase fw-bold small mb-2">Electronic Communication</h6>
                    <h2 class="fw-bold" style="color: var(--corp-navy);">Formal Request for Information</h2>
                </div>
                
                <form action="#" method="POST">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label class="small fw-bold text-muted text-uppercase mb-2">Full Name</label>
                            <input type="text" class="form-control rounded-0 p-3 bg-light border-0 shadow-none" placeholder="Required" required>
                        </div>
                        <div class="col-md-6">
                            <label class="small fw-bold text-muted text-uppercase mb-2">Corporate Email</label>
                            <input type="email" class="form-control rounded-0 p-3 bg-light border-0 shadow-none" placeholder="email@firm.com" required>
                        </div>
                        <div class="col-md-6">
                            <label class="small fw-bold text-muted text-uppercase mb-2">Organization</label>
                            <input type="text" class="form-control rounded-0 p-3 bg-light border-0 shadow-none" placeholder="Company Name">
                        </div>
                        <div class="col-md-6">
                            <label class="small fw-bold text-muted text-uppercase mb-2">Subject Area</label>
                            <select class="form-select rounded-0 p-3 bg-light border-0 shadow-none">
                                <option selected>Institutional Partnership</option>
                                <option>Private Equity Inquiry</option>
                                <option>M&A Advisory</option>
                                <option>Media/Press Inquiry</option>
                                <option>General Information</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="small fw-bold text-muted text-uppercase mb-2">Message Brief</label>
                            <textarea class="form-control rounded-0 p-3 bg-light border-0 shadow-none" rows="5" placeholder="Please provide details regarding your inquiry..."></textarea>
                        </div>
                        <div class="col-12 pt-3">
                            <button type="submit" class="btn btn-dark btn-lg rounded-0 px-5 py-3 text-uppercase small fw-bold tracking-widest w-100 w-md-auto">
                                Submit Formal Inquiry
                            </button>
                        </div>
                        <div class="col-12 mt-4">
                            <p class="small text-muted mb-0">
                                <i class="bi bi-shield-check me-2"></i> 
                                All communications are encrypted and handled in accordance with our Global Privacy Policy.
                            </p>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>

<?php include('includes/footer.php'); ?>
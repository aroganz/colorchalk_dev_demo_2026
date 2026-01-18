<?php include('includes/header.php'); ?>

<?php 
// Logic to catch the service from the URL for pre-selection
$selected_service = isset($_GET['service']) ? $_GET['service'] : '';
?>

<section class="py-5">
    <div class="container py-5 mt-5">
        <div class="row g-0 justify-content-center">
            <div class="col-lg-10">
                
                <div class="mb-5 pb-5 border-bottom">
                    
                    <?php if(isset($_GET['status']) && $_GET['status'] == 'success'): ?>
                        <div class="alert alert-success rounded-0 border-0 small mb-4 py-3" style="background-color: #f0fdf4; color: #166534;">
                            <i class="bi bi-check-circle-fill me-2"></i> Your message has been sent. We will be in touch shortly.
                        </div>
                    <?php endif; ?>

                    <?php if(isset($_GET['status']) && $_GET['status'] == 'error'): ?>
                        <div class="alert alert-danger rounded-0 border-0 small mb-4 py-3">
                            <i class="bi bi-exclamation-triangle-fill me-2"></i> Something went wrong. Please try again or email us directly.
                        </div>
                    <?php endif; ?>

                    <h6 class="text-success text-uppercase fw-bold tracking-widest mb-3">Contact</h6>
                    <h1 class="display-3 fw-bold mb-0">Start a <span class="italic fw-light">Conversation</span>.</h1>
                </div>

                <div class="row g-5">
                    <div class="col-md-4">
                        <div class="mb-5">
                            <p class="small text-uppercase fw-bold text-muted mb-3">Inquiries</p>
                            <p class="mb-1">hello@colorchalk.com</p>
                            <p>+1 (555) 0123 456</p>
                        </div>
                        <div class="mb-5">
                            <p class="small text-uppercase fw-bold text-muted mb-3">Studio</p>
                            <p class="mb-0">123 Botanical Way<br>Green District, CA 90210</p>
                        </div>
                        <div>
                            <p class="small text-uppercase fw-bold text-muted mb-3">Social</p>
                            <a href="#" class="text-decoration-none text-dark me-3 hover-success">Instagram</a>
                            <a href="#" class="text-decoration-none text-dark hover-success">Pinterest</a>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <form action="process.php" method="POST" class="minimal-form">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-underline" placeholder="Full Name*" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="email" class="form-underline" placeholder="Email Address*" required>
                                </div>
                                <div class="col-12">
                                    <select name="service" class="form-underline">
                                        <option value="">Interested Service</option>
                                        <option value="indoor" <?php echo ($selected_service == 'indoor') ? 'selected' : ''; ?>>Indoor Plant Curation</option>
                                        <option value="landscaping" <?php echo ($selected_service == 'landscaping') ? 'selected' : ''; ?>>Urban Landscaping</option>
                                        <option value="maintenance" <?php echo ($selected_service == 'maintenance') ? 'selected' : ''; ?>>Expert Maintenance</option>
                                        <option value="corporate" <?php echo ($selected_service == 'corporate') ? 'selected' : ''; ?>>Corporate Solutions</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea name="message" class="form-underline" rows="4" placeholder="How can we help? Tell us about your space..."></textarea>
                                </div>
                                <div class="col-12 pt-4">
                                    <button type="submit" class="btn-minimal">
                                        Submit Request <span class="ms-2">→</span>
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
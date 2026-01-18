<?php include('includes/header.php'); ?>

<section class="py-5 mt-5">
    <div class="container pt-5">
        <div class="row g-0 justify-content-center">
            <div class="col-lg-10">
                
                <div class="mb-5 pb-5 border-bottom border-secondary">
                    <?php if(isset($_GET['status']) && $_GET['status'] == 'success'): ?>
                        <div class="alert alert-success rounded-0 border-0 small mb-4 py-3 bg-dark text-success border border-success">
                            <i class="bi bi-check-all me-2"></i> Ticket Created. Our engineering team will review your request.
                        </div>
                    <?php endif; ?>

                    <h6 class="text-success text-uppercase fw-bold tracking-widest mb-3">Support Portal</h6>
                    <h1 class="display-3 fw-bold text-white mb-0">Open a <span class="mono text-white-50">Ticket</span>.</h1>
                </div>

                <div class="row g-5">
                    <div class="col-md-4">
                        <div class="mb-5">
                            <p class="small text-uppercase fw-bold text-success mb-3">Documentation</p>
                            <p class="text-white-50 small">Quick answers can be found in our <a href="#" class="text-success">Developer Docs</a>.</p>
                        </div>
                        <div class="mb-5">
                            <p class="small text-uppercase fw-bold text-success mb-3">System Status</p>
                            <div class="d-flex align-items-center gap-2">
                                <span class="d-inline-block p-1 bg-success rounded-circle animate-pulse" style="width: 8px; height: 8px;"></span>
                                <span class="small text-white">All Systems Operational</span>
                            </div>
                        </div>
                        <div>
                            <p class="small text-uppercase fw-bold text-success mb-3">Direct Sync</p>
                            <p class="text-white-50 mb-1 small">dev-support@colorchalk.io</p>
                            <p class="text-white-50 small">IRC: #colorchalk-core</p>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <form action="process.php" method="POST" class="tech-form">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-underline" placeholder="Developer Name*" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="email" class="form-underline" placeholder="Work Email Address*" required>
                                </div>
                                <div class="col-md-6">
                                    <select name="service" class="form-underline">
                                        <option value="">Inquiry Type</option>
                                        <option value="api_key">API Key Request</option>
                                        <option value="technical">Technical Support</option>
                                        <option value="billing">Enterprise Sales</option>
                                        <option value="security">Security Vulnerability</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <select name="priority" class="form-underline text-white-50">
                                        <option value="low">Priority: Low</option>
                                        <option value="medium">Priority: Medium</option>
                                        <option value="high">Priority: High (Production Issue)</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea name="message" class="form-underline" rows="4" placeholder="Describe the technical issue or project scope..."></textarea>
                                </div>
                                <div class="col-12 pt-4">
                                    <button type="submit" class="btn btn-success px-5 py-3 rounded-0 fw-bold">
                                        INITIALIZE REQUEST <i class="bi bi-terminal ms-2"></i>
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
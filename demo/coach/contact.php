<?php include 'includes/header.php'; ?>

<main class="contact-page">
    <section class="contact-hero">
        <div class="container">
            <div class="contact-grid">
                <div class="contact-info">
                    <span class="badge">Limited Availability</span>
                    <h1>Secure Your <br><span class="outline">Architecture</span> Call.</h1>
                    <p>I only take on 3 new implementation clients per month to ensure every system is built to the highest standard. Apply below to see if your agency is ready for the scale logic.</p>
                    
                    <div class="expectation-box">
                        <h4>What happens next?</h4>
                        <ol>
                            <li>Brief application review (24 hours)</li>
                            <li>15-minute Logic Audit call</li>
                            <li>Custom Scaling Roadmap delivery</li>
                        </ol>
                    </div>
                </div>

                <div class="contact-form-wrapper">
                    <form action="process-contact.php" method="POST" class="scale-form">
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" name="name" placeholder="John Doe" required>
                        </div>
                        <div class="form-group">
                            <label>Agency Website</label>
                            <input type="url" name="website" placeholder="https://agency.com" required>
                        </div>
                        <div class="form-group">
                            <label>Current Monthly Revenue</label>
                            <select name="revenue" required>
                                <option value="">Select Range</option>
                                <option value="0-10k">$0 - $10k</option>
                                <option value="10k-30k">$10k - $30k</option>
                                <option value="30k-50k">$30k - $50k</option>
                                <option value="50k+">$50k+</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Primary Bottleneck</label>
                            <textarea name="message" placeholder="What is currently stopping you from hitting $50k/mo?"></textarea>
                        </div>
                        <button type="submit" class="btn-submit">Submit Application</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
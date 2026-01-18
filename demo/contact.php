<?php 
require('includes/db.php'); 
include 'includes/header.php'; 
?>

<section class="container py-5 mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 text-center reveal">
            <span class="section-label">Connect</span>
            <h1 class="display-2 fw-bold mb-4">Let's talk.</h1>
            <p class="fs-5 text-muted mb-5">Have a project in mind? Drop a message below or reach out directly at <a href="mailto:amarnath@colorchalk.com" class="text-dark fw-bold text-decoration-none border-bottom border-2">amarnath@colorchalk.com</a></p>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-6 reveal">
            <form action="contact_process.php" method="POST" class="mt-4">
                <div class="mb-5">
                    <label class="minimal-label">YOUR NAME</label>
                    <input type="text" name="name" class="minimal-input" placeholder="What should we call you?" required>
                </div>

                <div class="mb-5">
                    <label class="minimal-label">YOUR EMAIL</label>
                    <input type="email" name="email" class="minimal-input" placeholder="Where can we reach you?" required>
                </div>

                <div class="mb-5">
                    <label class="minimal-label">THE VISION</label>
                    <textarea name="message" rows="1" class="minimal-input auto-expand" placeholder="Briefly describe your project..." required></textarea>
                </div>

                <div class="text-center mt-5">
                    <button type="submit" class="btn-talk-solid px-5 py-3 rounded-pill">
                        SEND INQUIRY <i class="bi bi-arrow-right ms-2"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<style>
/* Minimalist Form Aesthetics */
.minimal-label {
    display: block;
    font-size: 0.65rem;
    font-weight: 800;
    letter-spacing: 3px;
    color: #999;
    margin-bottom: 10px;
}

.minimal-input {
    width: 100%;
    background: transparent;
    border: none;
    border-bottom: 1px solid #e0e0e0;
    padding: 15px 0;
    font-size: 1.2rem;
    color: #111;
    border-radius: 0;
    transition: all 0.4s ease;
}

.minimal-input:focus {
    outline: none;
    border-bottom-color: #111;
    background: transparent;
}

.minimal-input::placeholder {
    color: #ccc;
    font-weight: 300;
}

/* Remove default Bootstrap focus shadow */
.minimal-input:focus {
    box-shadow: none !important;
}

/* Auto-expanding textarea logic */
.auto-expand {
    overflow: hidden;
    resize: none;
}
</style>

<script>
// Small script to make the textarea grow as the user types
const textarea = document.querySelector('.auto-expand');
textarea.addEventListener('input', function() {
    this.style.height = 'auto';
    this.style.height = this.scrollHeight + 'px';
});
</script>

<?php include 'includes/footer.php'; ?>
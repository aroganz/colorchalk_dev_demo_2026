<?php 
require('includes/db.php'); 
include 'includes/header.php'; 
?>

<section class="container py-5 mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 text-center reveal">
            <span class="section-label">Connect</span>
            <h1 class="display-2 fw-bold mb-4">Let's talk.</h1>
            
            <?php if(isset($_GET['status'])): ?>
                <?php if($_GET['status'] == 'success'): ?>
                    <div class="alert alert-success rounded-pill mb-5 py-3">Message sent! I'll get back to you shortly.</div>
                <?php else: ?>
                    <div class="alert alert-danger rounded-pill mb-5 py-3">Something went wrong. Please try again.</div>
                <?php endif; ?>
            <?php endif; ?>

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
                    <button type="submit" class="btn btn-talk-solid px-5 py-3 rounded-pill">
                        SEND INQUIRY <i class="bi bi-arrow-right ms-2"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<style>
/* Consolidated Minimalist Styles */
.section-label { 
    letter-spacing: 4px; 
    font-size: 0.75rem; 
    text-transform: uppercase; 
    color: #999; 
    display: block; 
    margin-bottom: 10px; 
}

.minimal-label { 
    display: block; 
    font-size: 0.65rem; 
    font-weight: 800; 
    letter-spacing: 2px; 
    color: #111; 
    margin-bottom: 5px; 
}

.minimal-input { 
    width: 100%; 
    background: transparent !important; 
    border: none; 
    border-bottom: 2px solid #eee; 
    padding: 15px 0; 
    font-size: 1.1rem; 
    color: #111; 
    border-radius: 0; 
    transition: all 0.3s ease; 
}

.minimal-input:focus { 
    outline: none; 
    border-bottom-color: #111; 
    box-shadow: none !important; 
}

.btn-talk-solid {
    background: #111;
    color: #fff;
    border: none;
    transition: transform 0.3s ease, background 0.3s ease;
    letter-spacing: 1px;
    font-weight: 600;
}

.btn-talk-solid:hover {
    background: #333;
    transform: translateY(-3px);
    color: #fff;
}

.alert { font-size: 0.9rem; letter-spacing: 1px; border: none; }
.alert-success { background: #e8f5e9; color: #2e7d32; }
.alert-danger { background: #fdecea; color: #d32f2f; }

.auto-expand { overflow: hidden; resize: none; min-height: 50px; }

/* Animation */
.reveal { 
    opacity: 0; 
    transform: translateY(30px); 
    animation: fadeInUp 0.8s cubic-bezier(0.2, 0.8, 0.2, 1) forwards; 
}

@keyframes fadeInUp {
    to { opacity: 1; transform: translateY(0); }
}
</style>

<script>
// Handle Textarea Auto-expand
const textarea = document.querySelector('.auto-expand');
if(textarea) {
    textarea.addEventListener('input', function() {
        this.style.height = 'auto';
        this.style.height = this.scrollHeight + 'px';
    });
}
</script>

<?php include 'includes/footer.php'; ?>
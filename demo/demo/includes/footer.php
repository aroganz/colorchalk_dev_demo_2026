<footer class="main-footer text-center">
    <div class="container">
        <div class="reveal">
            <h2 class="display-4 fw-bold mb-5">Have a project in mind?</h2>
            <a href="contact.php" class="btn-talk-footer">Let's Talk</a>
        </div>
        
        <div class="mt-5 pt-5 border-top opacity-25">
            <p class="small text-uppercase letter-spacing-2">
                © <?php echo date("Y"); ?> ColorChalk Studio. Based in Chennai, India.
            </p>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
// Swiper Configuration
var swiper = new Swiper(".mySwiper", { 
    effect: "fade", 
    fadeEffect: { crossFade: true },
    loop: true, 
    autoplay: { delay: 5000, disableOnInteraction: false } 
});

// Scroll Reveal Logic (Intersection Observer)
const revealObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => { 
        if (entry.isIntersecting) entry.target.classList.add('active'); 
    });
}, { threshold: 0.1 });

document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));

// Scroll Progress Bar
window.onscroll = function() {
    let winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    let height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    let scrolled = (winScroll / height) * 100;
    let bar = document.getElementById("scrollIndicator");
    if(bar) bar.style.width = scrolled + "%";
};
</script>

</body>
</html>
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
document.addEventListener('DOMContentLoaded', function() {
    
    // 1. Swiper Configuration (Only runs if .mySwiper exists)
    const swiperElement = document.querySelector('.mySwiper');
    if (swiperElement) {
        const swiper = new Swiper(".mySwiper", { 
            effect: "fade", 
            fadeEffect: { crossFade: true },
            loop: true,
            speed: 1000, // Smoother transition
            autoplay: { 
                delay: 5000, 
                disableOnInteraction: false 
            },
            // Ensuring the slide content animates correctly
            on: {
                init: function () {
                    this.slides[this.activeIndex].classList.add('active-slide');
                },
                slideChangeTransitionStart: function () {
                    this.slides.forEach(slide => slide.classList.remove('active-slide'));
                    this.slides[this.activeIndex].classList.add('active-slide');
                }
            }
        });
    }

    // 2. Scroll Reveal Logic (Intersection Observer)
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => { 
            if (entry.isIntersecting) {
                entry.target.classList.add('active'); 
                // Stop observing once revealed for performance
                revealObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.15 });

    document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));

    // 3. Scroll Progress Bar
    window.addEventListener('scroll', function() {
        let winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        let height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        let scrolled = (winScroll / height) * 100;
        let bar = document.getElementById("scrollIndicator");
        if(bar) bar.style.width = scrolled + "%";
    });
});
</script>

</body>
</html>
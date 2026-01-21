/**
 * ColorChalk 2026 - Main UI Logic
 */

document.addEventListener('DOMContentLoaded', function() {
    
    // 1. Initialize Swiper for Hero Section
    const swiper = new Swiper(".mySwiper", { 
    effect: "fade", 
    fadeEffect: { crossFade: true }, // This is key
    loop: true,
    speed: 1000,
    autoplay: { delay: 5000 },
    on: {
        slideChange: function () {
            // Manually hide titles of all slides except the active one
            this.slides.forEach(slide => {
                const title = slide.querySelector('.hero-title');
                if (title) title.style.opacity = "0";
            });
        },
        slideChangeTransitionEnd: function () {
            // Bring the active title back
            const activeTitle = this.slides[this.activeIndex].querySelector('.hero-title');
            if (activeTitle) activeTitle.style.opacity = "1";
        }
    }
});

    // 2. Scroll Reveal Logic (Intersection Observer)
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => { 
            if (entry.isIntersecting) {
                entry.target.classList.add('active'); 
                revealObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });

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
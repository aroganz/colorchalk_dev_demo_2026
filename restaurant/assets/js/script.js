document.addEventListener('DOMContentLoaded', function() {
    
    // Initialize Swiper
    const mainHeroSwiper = new Swiper('.mainHeroSwiper', {
        loop: true,
        speed: 1000,
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });

    // Optional: Real-time Reservation Spinner logic from before
    const reserveBtn = document.querySelector('.btn-outline-accent');
    if(reserveBtn) {
        reserveBtn.addEventListener('click', function(e) {
            e.preventDefault();
            this.innerHTML = '<span class="spinner-border spinner-border-sm"></span> SECURING...';
            setTimeout(() => {
                this.innerHTML = 'TABLE SECURED ✓';
                this.style.backgroundColor = '#c5a059';
                this.style.color = '#000';
            }, 2000);
        });
    }
});

// Smooth Scroll for Anchor Links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

document.getElementById('backToTop').addEventListener('click', function(e) {
    e.preventDefault();
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});
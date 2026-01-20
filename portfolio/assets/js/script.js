document.addEventListener('DOMContentLoaded', () => {
    const preview = document.getElementById('hover-preview');
    const items = document.querySelectorAll('.project-item');

    if (preview && items.length > 0) {
        items.forEach((item) => {
            item.addEventListener('mouseenter', () => {
                const imgPath = item.getAttribute('data-img');
                // Use the URL exactly as it is in the data-img attribute
                preview.style.backgroundImage = `url(${imgPath})`;
                preview.style.opacity = '1';
            });

            item.addEventListener('mouseleave', () => {
                preview.style.opacity = '0';
            });

            item.addEventListener('mousemove', (e) => {
                const x = e.clientX + 20;
                const y = e.clientY + 20;
                preview.style.transform = `translate(${x}px, ${y}px)`;
            });
        });
    }
});

// Header Scroll Effect
const nav = document.querySelector('.minimal-nav');

window.addEventListener('scroll', () => {
    if (window.scrollY > 20) {
        nav.classList.add('scrolled');
    } else {
        nav.classList.remove('scrolled');
    }
});
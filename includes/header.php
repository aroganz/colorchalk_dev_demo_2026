<!DOCTYPE html>
<html lang="en">
<head>
    <script>
const BentoCart = {
    items: JSON.parse(localStorage.getItem('bento_cart')) || [],

    add(name, price, id) {
        const item = { name, price: parseFloat(price), id, qty: 1 };
        const exists = this.items.find(i => i.id === id);
        if (exists) { 
            exists.qty++; 
        } else { 
            this.items.push(item); 
        }
        this.save();
        this.updateUI();
        
        // Optional: Simple alert to show it worked
        console.log("Added to cart:", name);
    },

    save() {
        localStorage.setItem('bento_cart', JSON.stringify(this.items));
    },

    updateUI() {
        const count = this.items.reduce((sum, i) => sum + i.qty, 0);
        const total = this.items.reduce((sum, i) => sum + (i.price * i.qty), 0);
        
        // Update the counts in the header
        document.querySelectorAll('.cart-count').forEach(el => el.innerText = count);
        document.querySelectorAll('.cart-total').forEach(el => el.innerText = '₹' + total.toLocaleString('en-IN'));
    }
};

// Update UI when page loads
document.addEventListener('DOMContentLoaded', () => BentoCart.updateUI());
</script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ColorChalk | Studio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Manrope:wght@800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/style.css">
  
</head>
<body>

<div class="scroll-progress-container"><div class="progress-bar" id="scrollIndicator"></div></div>

<nav class="navbar fixed-top px-4 py-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <img src="assets/img/color-chalk-logo.jpg" alt="ColorChalk" class="nav-logo">
        </a>
        
        <button class="menu-toggle" type="button" data-bs-toggle="offcanvas" data-bs-target="#navMenu">
            <span class="menu-line"></span>
            <span class="menu-line"></span>
        </button>
    </div>
</nav>

<div class="offcanvas offcanvas-end" tabindex="-1" id="navMenu">
    <div class="offcanvas-header p-4">
        <button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body d-flex flex-column justify-content-center align-items-center">
        <ul class="nav-links list-unstyled text-center">
            <li><a href="index.php">Home</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </div>
</div>
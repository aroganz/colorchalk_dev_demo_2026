<?php 
require('includes/db.php'); 
include 'includes/header.php'; 
?>

<section class="container py-5 mt-5">
    <div class="row mb-5 reveal">
        <div class="col-lg-8">
            <span class="section-label">Review</span>
            <h1 class="display-3 fw-bold">Your Cart.</h1>
            <p class="fs-5 text-muted">Confirm your selection before moving to secure payment.</p>
        </div>
    </div>

    <div class="bento-item p-4 p-md-5 reveal">
        <div id="cart-table-container">
            <div class="table-responsive">
                <table class="table custom-cart-table">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Subtotal</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id="bento-cart-body">
                        </tbody>
                </table>
            </div>
        </div>

        <div id="empty-cart-msg" style="display:none;" class="text-center py-5">
            <p class="text-muted fs-4">Your cart is currently empty.</p>
            <a href="shop.php" class="btn-talk-solid mt-3">Go to Shop</a>
        </div>

        <div id="cart-footer" class="row mt-5 pt-4 border-top align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <h3 class="fw-bold mb-0">Total: <span class="cart-total text-accent">₹0</span></h3>
            </div>
            <div class="col-md-6 text-md-end">
                <button onclick="clearCart()" class="btn btn-link text-muted text-decoration-none small me-4">EMPTY CART</button>
                <form action="checkout_process.php" method="POST" style="display: inline-block;">
                    <input type="hidden" name="cart_json" id="cart-json-input">
                    <button type="submit" class="btn-talk-solid">Proceed to Checkout</button>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
function renderCartItems() {
    const cartBody = document.getElementById('bento-cart-body');
    const footer = document.getElementById('cart-footer');
    const emptyMsg = document.getElementById('empty-cart-msg');
    const tableContainer = document.getElementById('cart-table-container');
    const items = BentoCart.items;

    if (items.length === 0) {
        tableContainer.style.display = 'none';
        footer.style.display = 'none';
        emptyMsg.style.display = 'block';
        return;
    }

    cartBody.innerHTML = items.map((item, index) => `
        <tr>
            <td><span class="fw-bold text-dark">${item.name}</span></td>
            <td>₹${item.price.toLocaleString('en-IN')}</td>
            <td>${item.qty}</td>
            <td>₹${(item.price * item.qty).toLocaleString('en-IN')}</td>
            <td class="text-end">
                <button onclick="removeItem(${index})" class="btn btn-sm btn-outline-danger border-0">✕</button>
            </td>
        </tr>
    `).join('');

    // Prepare the hidden input for the PHP checkout script
    document.getElementById('cart-json-input').value = JSON.stringify(items);
}

function removeItem(index) {
    BentoCart.items.splice(index, 1);
    BentoCart.save();
    BentoCart.updateUI();
    renderCartItems();
}

function clearCart() {
    BentoCart.items = [];
    BentoCart.save();
    BentoCart.updateUI();
    renderCartItems();
}

// Initial Render
document.addEventListener('DOMContentLoaded', renderCartItems);
</script>

<style>
.custom-cart-table th {
    font-size: 0.7rem;
    text-transform: uppercase;
    letter-spacing: 2px;
    color: var(--accent);
    border-bottom: 2px solid #f0f0f0;
    padding-bottom: 20px;
}
.custom-cart-table td {
    padding: 25px 0;
    vertical-align: middle;
    border-bottom: 1px solid #f8f8f8;
}
.text-accent { color: #f5245f; }
</style>

<?php include 'includes/footer.php'; ?>
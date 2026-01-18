<?php 
require('includes/db.php'); 
include 'includes/header.php'; 

$result = $conn->query("SELECT * FROM products");
?>

<section class="container py-5 mt-5">
    <div class="row align-items-end mb-5 reveal">
        <div class="col-md-8">
            <span class="section-label">Inventory</span>
            <h1 class="display-3 fw-bold">Studio Shop</h1>
            <p class="text-muted fs-5">Premium digital assets for modern brands.</p>
        </div>
        <div class="col-md-4 text-md-end">
            <div class="p-3 bento-item bg-white d-inline-block shadow-sm">
                <span class="fw-bold">Cart:</span> 
                <span class="cart-count">0</span> items | 
                <span class="cart-total">₹0</span>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <?php if ($result && $result->num_rows > 0): ?>
            <?php while($row = $result->fetch_assoc()): ?>
                
                <div class="col-md-6 col-lg-4 reveal">
                    <div class="bento-item h-100 d-flex flex-column">
                        <div class="product-placeholder mb-4" style="background:#f8f8f8; height:180px; border-radius:20px; display:flex; align-items:center; justify-content:center;">
                             <span class="text-uppercase opacity-25 fw-bold small letter-spacing-2"><?php echo htmlspecialchars($row['sku'] ?? 'ASSET'); ?></span>
                        </div>

                        <h3 class="h4 fw-bold mb-2"><?php echo htmlspecialchars($row['name']); ?></h3>
                        <p class="text-muted small flex-grow-1">High-performance digital asset with full commercial license.</p>
                        
                        <div class="d-flex justify-content-between align-items-center mt-4 pt-3 border-top">
                            <span class="h5 fw-bold mb-0">₹<?php echo number_format($row['price']); ?></span>
                            
                            <button 
                                onclick="BentoCart.add('<?php echo addslashes($row['name']); ?>', '<?php echo $row['price']; ?>', '<?php echo $row['id']; ?>')" 
                                class="btn-talk-solid py-2 px-4 fs-6 border-0">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>
        <?php else: ?>
            <div class="col-12 text-center py-5">
                <p class="text-muted">Inventory currently offline. Please check back soon.</p>
            </div>
        <?php endif; ?>
    </div>

    <div class="text-center mt-5 pt-4 reveal">
        <a href="cart.php" class="btn-outline-dark-custom">
            Review Cart & Checkout <span class="ms-2">→</span>
        </a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
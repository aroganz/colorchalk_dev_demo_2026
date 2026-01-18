<?php
require('includes/db.php');

$order_id = $_GET['oid'] ?? '';
$payment_id = $_GET['pid'] ?? '';

if($order_id && $payment_id) {
    // Update the order status in the database
    $stmt = $conn->prepare("UPDATE orders SET status = 'completed', razorpay_payment_id = ? WHERE razorpay_order_id = ?");
    $stmt->bind_param("ss", $payment_id, $order_id);
    $stmt->execute();
}

include 'includes/header.php';
?>

<section class="container py-5 mt-5 text-center reveal">
    <div class="bento-item p-5">
        <div class="mb-4">
            <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="#28a745" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
        </div>
        <h1 class="display-4 fw-bold">Payment Success!</h1>
        <p class="text-muted">Transaction ID: <strong><?php echo htmlspecialchars($payment_id); ?></strong></p>
        <p>Your order has been processed. Check your email for download links.</p>
        <a href="index.php" class="btn-outline-dark-custom mt-4">Return to Home</a>
    </div>
</section>

<script>
    // IMPORTANT: Clear our custom BentoCart after purchase
    localStorage.removeItem('bento_cart');
</script>

<?php include 'includes/footer.php'; ?>
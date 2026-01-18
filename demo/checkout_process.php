<?php
require('includes/db.php');

// 1. Get the JSON data from the POST request
$cart_json = $_POST['cart_json'] ?? '[]';
$cart_items = json_decode($cart_json, true);

$total_amount = 0;

// 2. Calculate total (Server-side calculation is safer)
if (!empty($cart_items)) {
    foreach ($cart_items as $item) {
        $total_amount += ($item['price'] * $item['qty']);
    }
} else {
    // Redirect back if cart is empty
    header("Location: shop.php");
    exit();
}

// 3. Create a unique Order ID for your database
$internal_order_id = "CC-" . time() . "-" . rand(100, 999);

// 4. Insert into your database (orders table)
$stmt = $conn->prepare("INSERT INTO orders (razorpay_order_id, amount, status) VALUES (?, ?, 'pending')");
$stmt->bind_param("sd", $internal_order_id, $total_amount);
$stmt->execute();

include 'includes/header.php';
?>

<section class="container py-5 mt-5 text-center reveal">
    <div class="bento-item p-5">
        <span class="section-label">Secure Checkout</span>
        <h2 class="display-5 fw-bold mb-4">Finalizing Payment</h2>
        <p class="text-muted fs-5">Amount Payable: <span class="text-dark fw-bold">₹<?php echo number_format($total_amount, 2); ?></span></p>
        
        <div class="mt-4">
            <button id="rzp-button" class="btn-talk-solid px-5 py-3">Pay Now with Razorpay</button>
        </div>
        
        <p class="small text-muted mt-4">Secure encrypted transaction via Razorpay India.</p>
    </div>
</section>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var options = {
    "key": "YOUR_RAZORPAY_KEY_ID", // Replace with your actual Key ID from Razorpay Dashboard
    "amount": "<?php echo ($total_amount * 100); ?>", // Razorpay expects amount in paise
    "currency": "INR",
    "name": "ColorChalk Studio",
    "description": "Digital Assets Purchase",
    "image": "assets/img/logo.png", // Optional: Path to your logo
    "handler": function (response){
        // Redirect to success page on successful payment
        window.location.href = "verify_payment.php?oid=<?php echo $internal_order_id; ?>&pid=" + response.razorpay_payment_id;
    },
    "prefill": {
        "name": "Customer Name",
        "email": "customer@example.com"
    },
    "theme": {
        "color": "#f5245f"
    }
};
var rzp1 = new Razorpay(options);
document.getElementById('rzp-button').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}
</script>

<?php include 'includes/footer.php'; ?>
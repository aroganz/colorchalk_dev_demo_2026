<?php
require('includes/db.php');
include 'includes/header.php';

// Fetch all orders, latest first
$query = "SELECT * FROM orders ORDER BY created_at DESC";
$result = $conn->query($query);

// Calculate Total Revenue
$revenue_query = "SELECT SUM(amount) as total FROM orders WHERE status = 'completed'";
$revenue_res = $conn->query($revenue_query);
$total_revenue = $revenue_res->fetch_assoc()['total'] ?? 0;
?>

<section class="container py-5 mt-5">
    <div class="row mb-5 align-items-end">
        <div class="col-md-8">
            <span class="section-label">Administration</span>
            <h1 class="display-3 fw-bold">Sales Overview</h1>
        </div>
        <div class="col-md-4 text-md-end">
            <div class="bento-item p-3 bg-dark text-white d-inline-block">
                <small class="opacity-50 text-uppercase letter-spacing-2">Total Revenue</small>
                <h3 class="mb-0 fw-bold">₹<?php echo number_format($total_revenue, 2); ?></h3>
            </div>
        </div>
    </div>

    <div class="bento-item p-4 reveal">
        <div class="table-responsive">
            <table class="table admin-table">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Payment ID</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td class="fw-bold">#<?php echo $row['razorpay_order_id']; ?></td>
                        <td>₹<?php echo number_format($row['amount'], 2); ?></td>
                        <td>
                            <span class="status-badge <?php echo $row['status']; ?>">
                                <?php echo strtoupper($row['status']); ?>
                            </span>
                        </td>
                        <td class="text-muted small"><?php echo $row['razorpay_payment_id'] ?: '---'; ?></td>
                        <td class="text-muted"><?php echo date('M d, Y', strtotime($row['created_at'])); ?></td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<style>
.admin-table th {
    font-size: 0.7rem;
    text-transform: uppercase;
    letter-spacing: 1px;
    padding: 20px 10px;
    border-bottom: 2px solid #eee;
}
.admin-table td {
    padding: 20px 10px;
    vertical-align: middle;
}
.status-badge {
    font-size: 0.65rem;
    padding: 5px 12px;
    border-radius: 50px;
    font-weight: 800;
}
.status-badge.completed {
    background: #e6fcf5;
    color: #0ca678;
}
.status-badge.pending {
    background: #fff9db;
    color: #f08c00;
}
</style>

<?php include 'includes/footer.php'; ?>
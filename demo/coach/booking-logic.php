<?php
// Simple logic to check if the user is a good fit before showing the calendar
$revenue = $_POST['monthly_revenue'] ?? 0;

if ($revenue >= 5000) {
    echo "<h3>You're a great fit! Select a time below:</h3>";
    // Embed Calendly or similar here
    echo '<div class="calendly-inline-widget" data-url="https://calendly.com/your-link" style="min-width:320px;height:630px;"></div>';
} else {
    echo "<h3>Not quite ready for 1-on-1 coaching yet.</h3>";
    echo "<p>Check out my 'Starter Blueprint' video series instead!</p>";
    echo '<a href="blueprint.php" class="btn">Watch Blueprint</a>';
}
?>
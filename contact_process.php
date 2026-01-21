<?php
// 1. Link the database
require('includes/db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // 2. Settings & Inputs
    $site_name = "ColorChalk Studio";
    $name = mysqli_real_escape_string($conn, strip_tags(trim($_POST["name"])));
    $client_email = mysqli_real_escape_string($conn, filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL));
    $message = mysqli_real_escape_string($conn, htmlspecialchars(trim($_POST["message"])));

    // 3. STEP 1: Save to Database (The safety net)
    $sql = "INSERT INTO contact_inquiries (name, email, message) VALUES ('$name', '$client_email', '$message')";
    $db_saved = mysqli_query($conn, $sql);

    // 4. STEP 2: Send Notification to YOU
    $subject_to_me = "New Inquiry: $name";
    $body_to_me = "You have a new inquiry from your portfolio:\n\nName: $name\nEmail: $client_email\n\nMessage:\n$message";
    // Change this line in contact_process.php
$headers_to_me = "From: Portfolio Bot <system@colorchalk.com>\r\n";

    // Send to both emails separately to ensure delivery
    mail("amarnath@colorchalk.com", $subject_to_me, $body_to_me, $headers_to_me);
    mail("amarkmc@gmail.com", $subject_to_me, $body_to_me, $headers_to_me);

    // 5. STEP 3: Send Auto-Reply to CLIENT (HTML)
    $subject_to_client = "Thanks for reaching out to ColorChalk Studio";
    $headers_to_client = "MIME-Version: 1.0" . "\r\n";
    $headers_to_client .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers_to_client .= "From: Amarnath | ColorChalk <amarnath@colorchalk.com>\r\n";

    $body_to_client = "
    <html>
    <body style='font-family: sans-serif; line-height: 1.6; color: #111; max-width: 600px;'>
        <div style='padding: 20px; border: 1px solid #eee;'>
            <h2 style='font-weight: 800;'>Hello $name,</h2>
            <p>Thanks for reaching out! I've received your message regarding the vision you shared.</p>
            <p>I usually review inquiries within 24 hours.</p>
            <br>
            <p>Best regards,<br><strong>Amarnath Jaganathan</strong><br>Art Director & Developer</p>
            <hr style='border: none; border-top: 1px solid #eee; margin: 20px 0;'>
            <small style='color: #999;'>www.colorchalk.com</small>
        </div>
    </body>
    </html>";

    // 6. Final Execution Check
    if ($db_saved) {
        mail($client_email, $subject_to_client, $body_to_client, $headers_to_client);
        header("Location: contact.php?status=success");
    } else {
        header("Location: contact.php?status=error");
    }
} else {
    header("Location: contact.php");
}
exit;
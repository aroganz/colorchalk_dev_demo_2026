<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Setup your email address
    $to = "your-client-email@domain.com"; 
    $subject = "New Inquiry: ColorChalk Gardening";

    // 2. Collect and clean form data
    $name    = strip_tags(trim($_POST["name"]));
    $email   = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $service = strip_tags(trim($_POST["service"]));
    $message = strip_tags(trim($_POST["message"]));

    // 3. Construct the email body
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Service: $service\n\n";
    $email_content .= "Message:\n$message\n";

    // 4. Construct headers
    $headers = "From: $name <$email>";

    // 5. Send the email
    if (mail($to, $subject, $email_content, $headers)) {
        // Redirect to a thank you page
        header("Location: contact.php?status=success");
    } else {
        header("Location: contact.php?status=error");
    }
} else {
    echo "Access denied.";
}
?>
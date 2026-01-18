<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "dev-support@colorchalk.io"; // Change to client email
    $subject = "[TECH-TICKET] " . strip_tags($_POST["service"]);

    $name     = strip_tags(trim($_POST["name"]));
    $email    = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $service  = strip_tags(trim($_POST["service"]));
    $priority = strip_tags(trim($_POST["priority"]));
    $message  = strip_tags(trim($_POST["message"]));

    $email_content = "NEW TECHNICAL INQUIRY\n";
    $email_content .= "----------------------\n";
    $email_content .= "Developer: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Type: $service\n";
    $email_content .= "Priority: " . strtoupper($priority) . "\n\n";
    $email_content .= "Message:\n$message\n";

    $headers = "From: ColorChalk System <noreply@colorchalk.io>\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $email_content, $headers)) {
        header("Location: contact.php?status=success");
        exit;
    } else {
        header("Location: contact.php?status=error");
        exit;
    }
}
?>
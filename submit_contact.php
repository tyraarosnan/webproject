<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Collect data from form
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Email details
    $to = "athirahnajwa2003@gmail.com";  // Your email address
    $subject = "Test Email from Website";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "There was an error sending your email.";
    }
}
?>


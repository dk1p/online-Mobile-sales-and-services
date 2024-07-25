<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $number = htmlspecialchars($_POST['number']);

    // Email details
    $to = "your-email@example.com"; // Replace with your email address
    $subject = "Keep in Touch Form Submission";

    $body = "New keep in touch form submission:\n\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Number: $number\n";

    // Additional headers
    $headers = "From: no-reply@example.com"; // Replace with a valid from address

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "<p>Thank you for getting in touch. We will contact you soon.</p>";
    } else {
        echo "<p>Sorry, something went wrong. Please try again.</p>";
    }
} else {
    echo "<p>Invalid request.</p>";
}
?>

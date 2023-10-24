<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect the data from the form
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Your email where the form data will be sent
    $to = "your-email@example.com";

    // Subject of the email
    $subject = "New Contact Form Submission";

    // Message to be sent in the email
    $emailMessage = "Name: " . $name . "\n";
    $emailMessage .= "Email: " . $email . "\n";
    $emailMessage .= "Message: " . $message . "\n";

    // Send the email
    mail($to, $subject, $emailMessage);

    // Redirect to a thank you page or display a success message
    header("Location: thank-you.html");
    exit();
}
?>

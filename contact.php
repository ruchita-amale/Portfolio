<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Set up the recipient email address
    $to = "ruchitaamale.click@gmail.com"; // Replace this with your email address

    // Set up the email subject and body
    $subject = "Contact Form Submission from $name";
    $body = "Name: $name\nEmail: $email\nMessage: $message";

    // Send the email
    $result = mail($to, $subject, $body);

    if ($result) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>
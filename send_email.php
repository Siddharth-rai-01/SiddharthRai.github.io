<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "siddharthrai228@gmail.com"; // Your email address
    $subject = "New Contact Form Submission";
    $headers = "From: $email";

    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Message:\n$message";

    // Send the email
    mail($to, $subject, $email_content, $headers);
}
?>

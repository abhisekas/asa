<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Set your Gmail address here
    $to = "yourgmail@gmail.com";

    // Get and sanitize form data
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);

    // Subject line
    $subject = "New Quote Request from $name";

    // Email content
    $email_content = "
        <h2>Quote Request Details</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Phone Number:</strong> $phone</p>
    ";

    // Email headers
    $headers = "From: no-reply@yourdomain.com\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Send the email
    if (mail($to, $subject, $email_content, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Sorry, the request could not be sent.";
    }
}
?>

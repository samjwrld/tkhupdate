<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $mobile = htmlspecialchars($_POST['mobile']);
    $email = htmlspecialchars($_POST['email']);
    $pincode = htmlspecialchars($_POST['pincode']);

    // Simple email destination
    $to = "info@thekoncepthouse.com";
    $subject = "New Quote Request";
    $message = "Name: $name\nMobile: $mobile\nEmail: $email\nPincode: $pincode";
    $headers = "From: noreply@thekoncepthouse.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you! Your request has been sent.";
    } else {
        echo "Sorry, something went wrong.";
    }
}
?>

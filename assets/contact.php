<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "bogdanistrate03@gmail.com";  
    $subject = "New Contact Form Submission";
    $headers = "From: $name <$email>";

    mail($to, $subject, $message, $headers);
}
?>

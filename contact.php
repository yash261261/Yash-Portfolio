<?php

if($_POST["submit"]) {
    $recipient="yash261261@gmail.com";
    $subject="Website Email Message";
    $sender=$_POST["name"];
    $senderEmail=$_POST["email"];
    $message=$_POST["message"];

    $mailBody="Name: $name\nEmail: $email\n\n$message";

    mail($recipient, $subject, $mailBody, "From: name <$email>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>

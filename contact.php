<?php

if($_POST["submit"]) {
    $recipient="hieuduc194@gmail.com";
    $subject="Feedback about Asian Aroma";
    $sender=$_POST["sender"];
    $phone=$_POST["phonenum"];
    $senderEmail=$_POST["email"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>

<?php
/*if($_POST["message"]) {
    mail("kylefetcho@yahoo.com", "Form to email message", $_POST["message"], From: an@email.address");
}*/

if($_POST["submit"]) {
    $recipient="kylefetcho@yahoo.com";
    $subject="Form to email message";
    $senderFirst=$_POST["firstName"];
    $senderLast=$_POST["lastName"];
    $senderEmail=$_POST["email"];
    $message=$_POST["message"];

    $mailBody="Name: $senderFirst $senderLast\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?><!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>Contact form to email</title>
</head>

<body>

    <?=$thankYou ?>

    <form method="post" action="contact.php">
        <label>Name:</label>
        <input name="senderFirst">
	<input name="senderLast">
        <label>Email address:</label>
        <input name="email">

        <label>Message:</label>
        <textarea rows="5" cols="20" name="message"></textarea>

        <input type="submit" name="submit">
    </form>

</body>

</html>

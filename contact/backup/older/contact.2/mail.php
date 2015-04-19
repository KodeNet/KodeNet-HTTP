<?php
$name = $_POST['name'];
$email = $_POST['email'];
$website = $_POST['website'];
$priority = $_POST['priority'];
$type = $_POST['type'];
$message = $_POST['message'];
$formcontent=" From: $name \n Website: $website \n Priority: $priority \n Type: $type \n\n Message: $message";
$recipient = "admin@koderoot.net";
$subject = "You received a new message!";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Your email has been received. You should receive a response soon." . "<br><br><a href='../index.php' style='text-decoration:none;color:#FF4E0D;'> Return Home</a>";
?>

<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: contact'; 
    $to = 'contact@koderoot.net'; 
    $subject="New KodeNet form submission";
    $ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';

	$body = "Hi admin,\n\nYou received a new message from $name\n\n".
		"Name: $name\n".
		"Email: $email \n\n".
		"Message: ".
		"$message\n\n".
		"IP: $ip\n";
?>

<?php
if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) { 
        header('Location: thanks.html');
    } else { 
        echo '<p>Oops! An error occurred. Try sending your message again.</p>'; 
    }
}
?>

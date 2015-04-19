<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"> 
<meta name="description" content="Contact? Use the KodeNet Contact form to get in touch.">
<meta name="keywords" content="KodeNet,IRC,Linux,XMPP,Jabber,SysAdmin">

<title>KodeNet | Contact </title>

<link rel="icon" href="https://koderoot.net/favicon.ico?v=2"/>
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Duru+Sans"/>
<link rel="stylesheet" href="../clock/clock.css"/>
<link rel="stylesheet" href="style.css"/>
<link rel="stylesheet" href="form.css"/>

</head>
<body> 

<br><a href="http://koderoot.net"><img src="../images/koderoot.png" alt="KodeNet Logo" /> </a>

<canvas id="clock"></canvas> 
<script src="../clock/clock.js"></script>

<div id="home">
<a href="http://koderoot.net"><img src="../images/home-icon.png" alt="KodeNet Home" title="HOME" /></a>
</div>

<div class="page-wrap">
<br>


<!-- BEGIN CONTACT FORM -->

<?php
$your_email ='admin@koderoot.net';// <<=== update to your email address

session_start();
$errors = '';
$name = '';
$visitor_email = '';
$user_message = '';

if(isset($_POST['submit']))
{

	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$user_message = $_POST['message'];
	///------------Do Validations-------------
	if(empty($name)||empty($visitor_email))
	{
		$errors .= "\n Name and Email are required fields. ";
	}
	if(IsInjected($visitor_email))
	{
		$errors .= "\n Bad email value!";
	}
	if(empty($_SESSION['6_letters_code'] ) ||
	  strcasecmp($_SESSION['6_letters_code'], $_POST['6_letters_code']) != 0)
	{
	//Note: the captcha code is compared case insensitively.
	//if you want case sensitive match, update the check above to
	// strcmp()
		$errors .= "\n The captcha code does not match!";
	}

	if(empty($errors))
	{
		//send the email
		$to = $your_email;
		$subject="New form submission";
		$from = $your_email;
		$ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';

		$body = "Hi admin,\n\nYou received a new message from $name\n\n".
		"Name: $name\n".
		"Email: $visitor_email \n\n".
		"Message: ".
		"$user_message\n\n".
		"IP: $ip\n";

		$headers = "From: $from \r\n";
		$headers .= "Reply-To: $visitor_email \r\n";

		mail($to, $subject, $body,$headers);

		header('Location: thanks.html');
	}
}

// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
?>
<!-- a helper script for vaidating the form-->
<script src="scripts/gen_validatorv31.js"> </script>
<?php
if(!empty($errors)){
echo "<p class='err'>".nl2br($errors)."</p>";
}
?>
<div id='contact_form_errorloc' class='err'></div>

<div class="form">
<form method="POST" name="contact_form"
action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
<p>
<label for='name'>Name: </label><br>
<input type="text" name="name" placeholder="tux" value='<?php echo htmlentities($name) ?>' id="name">
</p>
<p>
<label for='email'>Email: </label><br>
<input type="text" name="email" placeholder="tux@koderoot.net" value='<?php echo htmlentities($visitor_email) ?>' id="email">
</p>
<p>
<label for='message'>Message:</label> <br>
<textarea name="message" placeholder="The world's greatest penguin." rows=8 cols=30 id="message"><?php echo htmlentities($user_message) ?></textarea>
</p>
<p>
<img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg' alt="captcha code"><br>
<label for='message'>Enter the code above here </label><br>
<input id="6_letters_code" name="6_letters_code" type="text"><br>
<small>Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh</small>
</p>
<input type="submit" value="Submit" name='submit'>
</form>
</div>

<script src="scripts/form.js"> </script>

<!-- END CONTACT FORM -->


</div>

<pre id="uptime">
<?php include "../uptime/upstat.php";  ?>
<?php
$ut = linuxUptimez();
echo "Server Uptime: $ut[0]$utd, $ut[1]$uth, $ut[2]$utm, $ut[3]$uts";
?>
<br>
</pre>
<br><br><br><br>

<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//stats.koderoot.net/piwik/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 1]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//stats.koderoot.net/piwik/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->

<div class="footerimage">
<img src="../images/footerimage.png" alt="footer image" />
</div>

<footer class="footer"> 
KodeRoot.Net 2015 &#169; 
</footer>

</body>
</html>

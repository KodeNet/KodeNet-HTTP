<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"> 
<meta name="description" content="KodeNet features IRC, XMPP Jabber, VoIP Mumble and other goodies. The Stuff section hosts several different books including: HTML5, CSS3, OpenLDAP, Perl, Bash, Awk, Sed, UNIX In a Nutshell, systemd for Administrators, Unix and Linux System Administration. Join us on irc.koderoot.net equipped with SSL and register an IRC channel of interest.">
<meta name="keywords" content="KodeNet,IRC,Linux,XMPP,Jabber,SysAdmin">

<title>KodeNet | Contact </title>

<style>
	body {
	width: 55em;
	margin: 0 auto;
	font-family: Tahoma, Verdana, Arial, sans-serif;
	}

	footer {
	clear: both;
	width: 45em;
        margin: auto;
        height: 30px;
        background-color: #1E2127;
        color: #ffffff;
        font-weight: bold;
        font-size: 12px;
        text-align: left;
        }	
	
	img {
	display: block;
	margin-left: auto;
	margin-right: auto;
	}

	#uptime {
	text-align: center;
	}

	.page-wrap {
	width: 500px;
	margin: 0 auto;
	}

	link {
	color: #FF4E0D;
	}

	a:visited {
	color: #FF4719;
	}

	a:link {
	color: #0DC2FF;
	}

	a:hover {
	color: #FF00FF;
	}

	label,a, body {
        font-family : Arial, Helvetica, sans-serif;
        font-size : 12px;
	}

	.err {
        font-family : Verdana, Helvetica, sans-serif;
        font-size : 12px;
        color: red;
	}

</style>

<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Duru+Sans"/>
<link rel="stylesheet" href="../clock/clock.css"/>
<link rel="stylesheet" href="style.css"/>

</head>
<body> 

<br><img src="../images/koderoot.png" alt="KodeNet Logo" /> 

<canvas id="clock"></canvas> 
<script src="../clock/clock.js"></script>

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
<form method="POST" name="contact_form"
action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
<p>
<label for='name'>Name: </label><br>
<input type="text" name="name" value='<?php echo htmlentities($name) ?>' id="name">
</p>
<p>
<label for='email'>Email: </label><br>
<input type="text" name="email" value='<?php echo htmlentities($visitor_email) ?>' id="email">
</p>
<p>
<label for='message'>Message:</label> <br>
<textarea name="message" rows=8 cols=30 id="message"><?php echo htmlentities($user_message) ?></textarea>
</p>
<p>
<img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg' alt="captcha code"><br>
<label for='message'>Enter the code above here :</label><br>
<input id="6_letters_code" name="6_letters_code" type="text"><br>
<small>Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh</small>
</p>
<input type="submit" value="Submit" name='submit'>
</form>

<script>
// Code for validating the form
// Visit http://www.javascript-coder.com/html-form/javascript-form-validation.phtml
// for details
var frmvalidator  = new Validator("contact_form");
//remove the following two lines if you like error message box popups
frmvalidator.EnableOnPageErrorDisplaySingleBox();
frmvalidator.EnableMsgsTogether();

frmvalidator.addValidation("name","req","Please provide your name");
frmvalidator.addValidation("email","req","Please provide your email");
frmvalidator.addValidation("email","email","Please enter a valid email address");
</script>
<script>
function refreshCaptcha()
{
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>

<!-- END CONTACT FORM -->


</div>

<br><br><br>

<pre id="uptime">
<?php system("uptime"); 

require_once('/srv/http/openstats/owa_php.php');
		
$owa = new owa_php();
// Set the site id you want to track
$owa->setSiteId('6cc36d4a2bd829926f4320cbdcb77ba9');
// Uncomment the next line to set your page title
$owa->setPageTitle('KodeNet Web Stats');
// Set other page properties
// //$owa->setProperty('foo', 'bar');
$owa->trackPageView();

?> </pre>
<br><br><br><br>

<img src="../images/html5-validator.png" alt="valid HTML5" /> 

<footer class="footer"> 
KodeRoot.Net 2015 &#169; 
</footer>

</body>
</html>

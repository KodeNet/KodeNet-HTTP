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

<div id="stylized" class="myform">

<form id="form1" action="mail.php" method="POST">

    <label>Name
        <span class="small">Add your name</span>
    </label>
<input type="text" name="name">
    <label>Email
        <span class="small">Enter a Valid Email</span>
    </label>
<input type="text" name="email">

<br>
<br>

    <label>Website
        <span class="small">Your Website</span>
    </label>
 <input type="text" name="website">

    <label>Priority
        <span class="small">Priority Level  </span>
    </label>

<select name="priority" size="1">
<option value="Low">Low</option>
<option value="Normal">Normal</option>
<option value="High">High</option>
<option value="Emergency">Emergency</option>
</select>
<br />
<br />
<br />
    <label>Type
        <span class="small">Type of Contact</span>
    </label>
<select name="type" size="1">
<option value="general">General</option>
<option value="feedback">Website feedback</option>
<option value="other">Other</option>
</select>
<br>
<br>
<br>


    <label>Message
        <span class="small">Type Your Message</span>
    </label>
<textarea name="message" rows="6" cols="25"></textarea><br />

    <button type="submit" value="Send" style="margin-top:15px;">Submit</button>
<div class="spacer"></div>

</form>

</div> <!-- end of form class -->

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

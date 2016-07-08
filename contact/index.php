<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"> 
<meta name="description" content="Contact? Use the KodeNet Contact form to get in touch.">
<meta name="keywords" content="KodeNet,IRC,XMPP,Jabber,Contact">

<title>KodeNet | Contact </title>

<link rel="icon" href="https://koderoot.net/favicon.ico?v=2"/>
<link rel="stylesheet" href="../clock/clock.css"/>
<link type="text/css" rel="stylesheet" href="css/styles.css">
<script src='https://www.google.com/recaptcha/api.js'></script>

</head>
<body> 

<div class="page-wrap">
<br>
<a href="http://koderoot.net"><img src="../images/banners/kodenet-chalk.png" height="80" width="380" alt="kodenet banner" /></a>
<!-- BEGIN CONTACT FORM -->

	    <form action="form.php" method="post" enctype="multipart/form-data">

	        <h1 class="title">Contact</h1>

		    <label></label>
		    <input name="name" required="required" placeholder="Your Name">


		    <label></label>
		    <input name="email" type="email" required="required" placeholder="Your Email">


		    <label></label>
		    <textarea name="message" cols="20" rows="5" required="required" placeholder="Message"></textarea>

		    <input id="cancel" name="cancel" value="Cancel" />

		    <input id="submit" name="submit" type="submit" value="Submit">
		
	    </form>

<!-- END CONTACT FORM -->
</div>

<br>
<hr>
<footer class="footer">
<img class="footerimage" src="../images/footerimage.png" alt="footer image" />

<p> KodeNet <span id="years"> 2012-<?php echo date("Y") ?> </span> | <img src="../images/copyleft.png" alt="Copyleft" /></p>
<p> <a href="https://github.com/variablenix/http">GitHub</a> | <a href="https://space.koderoot.net/node/2">XMPP/Jabber</a> | <a href="http://koderoot.net/contact">Contact</a> </p> <br><br>

<pre id="uptime">
<?php include "../uptime/upstat.php";  ?>
<?php
$ut = linuxUptimez();
echo "Server Uptime: $ut[0]$utd, $ut[1]$uth, $ut[2]$utm";
?>
</pre>
</footer>

<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(["setDomains", ["*.koderoot.net"]]);
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//stats.koderoot.net/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 1]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//stats.koderoot.net/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->

<!-- Piwik Image Tracker-->
<img src="https://stats.koderoot.net/piwik.php?idsite=1&rec=1" style="border:0" alt="" />
<!-- End Piwik -->

</body>
</html>

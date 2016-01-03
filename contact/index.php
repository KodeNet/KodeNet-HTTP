<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"> 
<meta name="description" content="Contact? Use the KodeNet Contact form to get in touch.">
<meta name="keywords" content="KodeNet,IRC,XMPP,Jabber,Contact">

<title>KodeNet | Contact </title>

<link rel="icon" href="https://koderoot.net/favicon.ico?v=2"/>
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Duru+Sans"/>
<link rel="stylesheet" href="../clock/clock.css"/>
<link type="text/css" rel="stylesheet" href="css/styles.css">

</head>
<body> 

<br><a href="http://koderoot.net"><img src="../images/banners/kodenet-chalk.png" alt="kodenet banner" /> </a>

<canvas id="clock"></canvas> 
<script src="../clock/clock.js"></script>

<div id="home">
<a href="http://koderoot.net"><img src="../images/home-icon.png" alt="KodeNet Home" title="HOME" /></a>
</div>

<div class="page-wrap">
<br>
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

<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
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
<noscript><p><img src="//stats.koderoot.net/piwik/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->

<br>

<footer class="footer">
<img class="footerimage" src="../images/footerimage.png" alt="footer image" />

<p> KodeNet <span id="years">2012-16</span> <a href="https://en.wikipedia.org/wiki/Copyleft"><img src="../images/copyleft.png" alt="Copyleft" /></a></p>
<p> <a href="https://github.com/variablenix/http">Github</a> | <a href="https://space.koderoot.net/node/2">XMPP/Jabber</a> | <a href="http://koderoot.net/contact">Contact</a> </p> <br><br>

<pre id="uptime">
<?php include "../uptime/upstat.php";  ?>
<?php
$ut = linuxUptimez();
echo "Server Uptime: $ut[0]$utd, $ut[1]$uth, $ut[2]$utm, $ut[3]$uts";
?>
</pre>
</footer>

</body>
</html>

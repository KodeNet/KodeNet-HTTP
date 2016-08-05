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

<!-- Converse -->
<link type="text/css" rel="stylesheet" media="screen" href="../converse/components/bootstrap/dist/css/bootstrap.min.css" />
<link type="text/css" rel="stylesheet" media="screen" href="../converse/components/fontawesome/css/font-awesome.min.css" />
<link type="text/css" rel="stylesheet" media="screen" href="../converse/css/converse.min.css" />
<script src="../converse/dist/converse.js"></script>
<!-- Converse -->

</head>
<body> 

<div id="staff-online-status-container">
<table class="staff-online-status">
<tr>
<th> Staff Online </th>
<td> <a href="xmpp:staff@im.koderoot.net"><img src="https://im.koderoot.net/status/staff" /></a> </td>
</tr>
</table>

<table class="staff-online-status"
<tr>
<td> <a href="mailto:contact@koderoot.net"><img src='../images/mail.png' height="30" width="30" title="email staff" alt="mail contact" /></a> </td>
<td> <a href="https://pgp.mit.edu/pks/lookup?op=get&amp;search=0x10401C1EFFB15BB0" target="_blank"><img src='../images/email-public-key.png' height="30" width="30" title="email public key" alt="email public key" /></a>  </td>
<td> <a href="xmpp:staff@im.koderoot.net"><img src="../images/Messaging-Chat-icon.png" height="30" width="30" title="chat staff" alt="XMPP web chat client" /></a>  </td>
</tr>
</table>
</div>

<div class="page-wrap">

<div id="banner">
<img src="../images/banners/kodenet-banner-8-3-2016.png" height="58" width="280" alt="banner" />
</div>

<!-- BEGIN CONTACT FORM -->

	    <form action="form.php" method="post" enctype="multipart/form-data">

	        <h2 class="title">Contact</h2>

		    <label></label>
		    <input name="name" required="required" placeholder="Your Name">


		    <label></label>
		    <input name="email" type="email" required="required" placeholder="Your Email">


		    <label></label>
		    <textarea name="message" cols="20" rows="5" required="required" placeholder="Message"></textarea>

			<div class="buttons">
		    <input id="cancel" name="cancel" value="Cancel" />

		    <input id="submit" name="submit" type="submit" value="Submit">
			</div>
	    </form>

<!-- END CONTACT FORM -->
</div><br>

<footer class="footer">
<img class="footerimage" src="../images/footerimagev2.png" alt="footer image" />

<p> KodeNet <span id="years"> 2012-<?php echo date("Y") ?> </span> | <img src="../images/copyleft.png" alt="Copyleft" /></p>
<p> <a href="https://github.com/variablenix/KodeNet-HTTP">GitHub</a> | <a href="https://space.koderoot.net/node/2">XMPP/Jabber</a> | <a href="http://koderoot.net/contact">Contact</a> </p> 

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

<script src="../converse/mainchat.js"></script>
</body>
</html>

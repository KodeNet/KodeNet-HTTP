<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"> 
<meta name="description" content="The home of KodeNet - serving XMPP and IRC">
<meta name="keywords" content="KodeNet, XMPP, Jabber, IRC, Chat">

<title>KodeNet | Home </title>

<link rel="icon" href="https://koderoot.net/favicon.ico?v=2"/>
<link rel="stylesheet" href="css/style.css"/>

</head>
<body>

<br>
<div class="page-wrap">
<div id="content">

<h1><img src="images/banners/kodenet-banner-scaled-7-9-2016.png" height="80" width="380" alt="banner" /></h1>

<ul>
<li> <img src="images/XMPP.png" alt="KodeNet XMPP" /> </li>
<li><a href='https://xmpp.net/result.php?domain=im.koderoot.net&amp;type=server' target="_blank"><img src='https://xmpp.net/badge.php?domain=im.koderoot.net' alt='xmpp.net score' /></a></li>
<li> im.koderoot.net 5222</li>
<li> muc.im.koderoot.net</li>
<li><a href="https://xmpp.koderoot.net/" target="_blank">XMPP Web</a></li></ul>

<ul>
<li><img src="images/IRC.png" alt="KodeNet IRC" /> </li>
<li> irc.koderoot.net 6667 </li>
<li> irc.koderoot.net 6697 <strong>SSL</strong> </li>
<li> <a href="https://ircweb.koderoot.net" target="_blank">IRC Web </a></li></ul>

<ul>
<li><img src="images/mail.png" alt="mail contact" /> </li>
<li>contact@koderoot.net|<a href="https://pgp.mit.edu/pks/lookup?op=get&amp;search=0x10401C1EFFB15BB0" target="_blank">FFB15BB0</a></li></ul>

</div></div>

<hr>
<!-- footer -->
<footer class="footer"> 
<img class="footerimage" src="images/footerimage.png" alt="footer image" />

<p> KodeNet <span id="years"> 2012-<?php echo date("Y") ?> </span> | <img src="images/copyleft.png" alt='copyleft' /> </p>
<p><a href="https://github.com/variablenix/KodeNet-HTTP">GitHub</a> | <a href="https://space.koderoot.net/node/2">XMPP/Jabber</a> | <a href="http://koderoot.net/contact">Contact</a> </p> <br>

<pre id="uptime">
<?php include "uptime/upstat.php";  ?>
<?php
$ut = linuxUptimez();
echo "Server Uptime: $ut[0]$utd, $ut[1]$uth, $ut[2]$utm";
?>
</pre>
</footer>
<!-- footer -->

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

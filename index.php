<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"> 
<meta name="description" content="KodeNet features IRC, XMPP Jabber, VoIP Mumble and other goodies. The Stuff section hosts several different books including: HTML5, CSS3, OpenLDAP, Perl, Bash, Awk, Sed, UNIX In a Nutshell, systemd for Administrators, Unix and Linux System Administration. Join us on irc.koderoot.net equipped with SSL and register an IRC channel of interest.">
<meta name="keywords" content="KodeNet,IRC,Linux,XMPP,Jabber,audio chat, audio conference,SysAdmin">

<title>KodeNet | Home </title>

<link rel="icon" href="https://koderoot.net/favicon.ico?v=2"/>
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Duru+Sans"/>
<link rel="stylesheet" href="clock/clock.css"/>
<link rel="stylesheet" href="style.css"/>
<link rel="stylesheet" href="mobile.css"/>

</head>
<body>

<br>
<img src="images/banners/kodenet.png" alt="koderoot banner" />

<canvas id="clock"> </canvas>
<script src="clock/clock.js"></script>

<br>

<div class="page-wrap">

<div id="stock">
<!-- Disable -> <script src="http://100widgets.com/js_data.php?id=158"></script><br>  <- Disable -->
<script>
crypt_multi_num_cur = "4";
crypt_base_cur_0 = "Bitcoin (BTC)";crypt_target_cur_0 = "US Dollar (USD)";crypt_base_cur_1 = "Litecoin (LTC)";crypt_target_cur_1 = "US Dollar (USD)";crypt_base_cur_2 = "Dogecoin (DOGE)";crypt_target_cur_2 = "US Dollar (USD)";crypt_base_cur_3 = "UFO (UFO)";crypt_target_cur_3 = "US Dollar (USD)";crypt_multi_background_color = "#000000";crypt_multi_transperency = false;crypt_multi_font_color = "#FFFFFF";</script><script type="text/javascript" src="https://www.cryptonator.com/ui/js/widget/multi_widget.js"></script>
</div>

<div id="reddit">
<script src='//redditjs.com/subreddit.js' data-height='675' data-width='450'  ></script>
</div>

<!-- Disable ->
<div class="lastfm">
<img src="images/lastfm_black.gif" alt="Lastfm Logo" /> <br>
<a href="http://www.last.fm/user/audiolord/?chartstyle=Sevi-BGW"><img src="http://imagegen.last.fm/Sevi-BGW/recenttracks/10/audiolord.gif" alt="audiolord's profile" /></a>
</div>
<- Disable -->

<div id="fortune">
<br>
<?php
require("fortune.php");
$f = new Fortune;
echo $f->quoteFromDir("/srv/http/kodenet/fortune/");
?>
</div>

<iframe id="weather" src="http://forecast.io/embed/#lat=37.5509&amp;lon=-121.9822&amp;name=Bay%20Area"> </iframe>

<a id="rightarrow" href="https://space.koderoot.net" title="space"><img src="images/transparent-arrow-right.png" alt="next page" /></a>

<p> <img src="images/XMPP.png" alt="KodeNet XMPP" /> </p>
<a href='https://xmpp.net/result.php?domain=im.koderoot.net&amp;type=server' target="_blank"><img src='https://xmpp.net/badge.php?domain=im.koderoot.net' alt='xmpp.net score' /></a>
<p>&#10154; im.koderoot.net 5222 <br>
&#10154; muc.im.koderoot.net <br>
&#10154; <a href="https://xmpp.koderoot.net/" target="_blank">XMPP Web </a>
</p>

<p><img src="images/IRC.png" alt="KodeNet IRC" /> </p>
<p>&#10154; irc.koderoot.net 6667 <br>
&#10154; irc.koderoot.net 6697 [SSL] <br>
&#10154; <a href="https://ircweb.koderoot.net" target="_blank">IRC Web </a>
</p>

<p> <img src="images/mumble.png" alt="KodeNet VoIP" /> </p>
<p>&#10154; KodeNet VoIP audio conference <br>
&#10154; <a href="http://www.mumble.com/mumble-download.php" target="_blank">Mumble Open Source Client</a> <br>
&#10154; Remote: 66.175.221.41 <br>
&#10154; Port: 64738
</p>

<p><img src="images/files.png" alt="Stuff" /> </p>
<p>&#10154; <a href="https://d.koderoot.net">Books &amp; Resources</a> <br>
</p>

<p><img src="images/mail.png" alt="mail contact" /> </p>
<p> &#10154; Email: admin[at]koderoot.net <br>
&#10154; Pub Key: <a href="https://pgp.mit.edu/pks/lookup?op=get&amp;search=0xC5B47F86C1CF32BF" target="_blank">C1CF32BF</a><br>
&#10154; <a href="https://koderoot.net/contact/">Contact Form</a><br>
&#10154; <a href="https://app.box.com/s/0i0kfdx947cjswc69eg1voefkm9e1676" target="_blank">BBM PIN</a>
</p>

</div>

<br><br><br>
<pre id="uptime">
<?php include "uptime/upstat.php";  ?>
<?php
$ut = linuxUptimez();
echo "Server Uptime: $ut[0]$utd, $ut[1]$uth, $ut[2]$utm, $ut[3]$uts";
?>
<br>
</pre>

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
<noscript><p><img src="//stats.koderoot.net/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->

<div class="footerimage">
<img src="images/footerimage.png" alt="footer image" />
</div>

<footer class="footer"> 
<p> KodeNet 2015 &#169; </p>
</footer>

</body>
</html>

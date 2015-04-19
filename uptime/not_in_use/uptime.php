 <?php
/**********************************************************************
  This code is free for use by anyone that finds it useful and 
  all I ask in return is some credit if you use it.

  This is an updated version of the script that was originally 
  released on August 2, 2004. Thanks to Olof Krantz for pointing
  out the code wasn't W3C compliant and as a result, the script
  failed in W3C compliant browsers like Mozilla, Firefox, etc.
  
  I also made it so the uptime is statically written in the event
  that the viewing browser doesn't do JavaScript or DHTML (like 
  Lynx). The old version displayed nothing because I put a non-
  breaking space between the DIV tags (oops!).
***********************************************************************/

// format the uptime in case the browser doesn't support dhtml/javascript
// static uptime string
function format_uptime($seconds) {
  $secs = intval($seconds % 60);
  $mins = intval($seconds / 60 % 60);
  $hours = intval($seconds / 3600 % 24);
  $days = intval($seconds / 86400);

  if ($days > 0) {
    $uptimeString .= $days;
    $uptimeString .= (($days == 1) ? " day" : " days");
  }
  if ($hours > 0) {
    $uptimeString .= (($days > 0) ? ", " : "") . $hours;
    $uptimeString .= ((hours == 1) ? " hour" : " hours");
  }
  if ($mins > 0) {
    $uptimeString .= (($days > 0 || $hours > 0) ? ", " : "") . $mins;
    $uptimeString .= (($mins == 1) ? " minute" : " minutes");
  }
  if ($secs > 0) {
    $uptimeString .= (($days > 0 || $hours > 0 || $mins > 0) ? ", " : "") . $secs;
    $uptimeString .= (($secs == 1) ? " second" : " seconds");
  }
  return $uptimeString;
}

// read in the uptime (using exec)
$uptime = exec("cat /proc/uptime");
$uptime = split(" ",$uptime);
$uptimeSecs = $uptime[0];

// get the static uptime
$staticUptime = "Server Uptime: ".format_uptime($uptimeSecs);
?>
<html>
<head>
<script language="javascript">
<!--
var upSeconds=<?php echo $uptimeSecs; ?>;
function doUptime() {
  var uptimeString = "Server Uptime: ";
  var secs = parseInt(upSeconds % 60);
  var mins = parseInt(upSeconds / 60 % 60);
  var hours = parseInt(upSeconds / 3600 % 24);
  var days = parseInt(upSeconds / 86400);
  if (days > 0) {
    uptimeString += days;
    uptimeString += ((days == 1) ? " day" : " days");
  }
  if (hours > 0) {
    uptimeString += ((days > 0) ? ", " : "") + hours;
    uptimeString += ((hours == 1) ? " hour" : " hours");
  }
  if (mins > 0) {
    uptimeString += ((days > 0 || hours > 0) ? ", " : "") + mins;
    uptimeString += ((mins == 1) ? " minute" : " minutes");
  }
  if (secs > 0) {
    uptimeString += ((days > 0 || hours > 0 || mins > 0) ? ", " : "") + secs;
    uptimeString += ((secs == 1) ? " second" : " seconds");
  }
  var span_el = document.getElementById("uptime");
  var replaceWith = document.createTextNode(uptimeString);
  span_el.replaceChild(replaceWith, span_el.childNodes[0]);
  upSeconds++;
  setTimeout("doUptime()",1000);
}
// -->
</script>
</head>
<body onLoad="doUptime();">

<!-- Uses the DIV tag, but SPAN can be used as well -->
<div id="uptime" style="font-weight:bold;"><?php echo $staticUptime; ?></div>

</body>
</html>

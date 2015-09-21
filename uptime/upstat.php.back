<?php
// http://www.cruzit.com/howto_uptimeinfo.php
function linuxUptimez() {
  $ut = strtok( exec( "cat /proc/uptime" ), "." );
  $days = sprintf( "%2d", ($ut/(3600*24)) );
  $hours = sprintf( "%2d", ( ($ut % (3600*24)) / 3600) );
  $min = sprintf( "%2d", ($ut % (3600*24) % 3600)/60  );
  $sec = sprintf( "%2d", ($ut % (3600*24) % 3600)%60  );
  return array( $days, $hours, $min, $sec );
}
//day or days
if ($ut[0]<=1)
$utd=' days';
else
$utd=' day';
//hour or hours or days
if ($ut[1]==1)
$uth=' hour';
else
$uth=' hours';
//minute or minutes
if ($ut[2]==1)
$utm=' minute';
else
$utm=' minutes';
//second or seconds (it can happen!)
if ($ut[3]==1)
$uts=' second';
else
$uts=' seconds';
/*do this wherever uptime stats are to go:
<?php
$ut = linuxUptimez();
echo "Time since last reboot: $ut[0] days, $ut[1] hours, $ut[2] minutes , $ut[3] seconds";
?>
If you don't want one or more of the stats, just remove a section like[ , $ut[3] seconds]
So, if you do not want seconds, it would read like:
echo "Time since last reboot: $ut[0] days, $ut[1] hours, $ut[2] minutes ";
*/
?>

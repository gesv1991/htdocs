<?php
$jetzt = time();
$datetime1 =new DateTime('1991-01-08');
$ts = $datetime1->getTimestamp();
echo $jetzt . " = vergangene Zeit seit 01.01.1970 <br>";

$alter=($jetzt-$ts)/60/60/24/365;
echo $alter . " = mein Alter in Jahren";

/*
$interval = $datetime1->diff($datetime2);
echo $interval->format('%a Tage') . "<br />";
echo $interval->format('%y Jahre, %m Monate, %d Tage0') . "<br />";
*/

?>
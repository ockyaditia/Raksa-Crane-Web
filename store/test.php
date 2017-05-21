<?php
$startTimeStamp = strtotime("09/01/2015");
$endTimeStamp = strtotime("09/02/2015");

$timeDiff = abs($endTimeStamp - $startTimeStamp);

$numberDays = $timeDiff/86400;  // 86400 seconds in one day

// and you might want to convert to integer
$numberDays = intval($numberDays);
echo ($numberDays+ 1) *4000000;
?>
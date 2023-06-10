<?php
use Carbon\Carbon;

$date_string = '2018-3-5 12:14:50';
$date = Carbon::createFromFormat('Y-n-j H:i:s', $date_string);
$timestamp = $date->getTimestamp();
echo $timestamp;
?>

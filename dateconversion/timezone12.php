<?php
use Carbon\Carbon;

$year = 2000; $month = 4; $day = 19;
$hour = 20; $minute = 30; $second = 15; $tz = 'America/Toronto';
echo Carbon::createFromDate($year, $month, $day, $tz)."\n";
echo Carbon::createFromTime($hour, $minute, $second, $tz)."\n";
echo Carbon::create($year, $month, $day, $hour, $minute, $second, $tz)."\n";
?>
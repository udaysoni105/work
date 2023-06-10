<?php
use Carbon\Carbon;

$date = Carbon::parse('2015-12-19 10:10:16');
$time = $date->format('H:i:s');
echo $time;
?>
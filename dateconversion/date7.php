<?php
use Carbon\Carbon;

$datetime = Carbon::parse('2015-12-19 10:10:16');
$date = $datetime->format('Y-m-d');
echo $date;
?>
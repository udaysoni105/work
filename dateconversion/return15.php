<?php
use Carbon\Carbon;

$year = 2022;
$month = 3; 

$daysInMonth = Carbon::create($year, $month)->daysInMonth;

echo "Number of days in March $year: $daysInMonth";
?>


<?php
use Carbon\Carbon;

$date1 = Carbon::create(2023, 5, 1, 12, 0, 0);
$date2 = Carbon::now();

$diffInDays = $date1->diffInDays($date2);
$diffInHours = $date1->diffInHours($date2) % 24;

echo "Difference in days: " . $diffInDays . "\n";
echo "Difference in hours: " . $diffInHours . "\n";
?>
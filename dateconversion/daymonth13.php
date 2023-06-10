<?php
use Carbon\Carbon;

$timezone = 'America/Toronto';
$now = Carbon::now($timezone);

$firstDay = $now->subMonth()->startOfMonth();
$lastDay = $now->copy()->endOfMonth();

echo "First day of previous month: " . $firstDay->toDateString() . "\n";
echo "Last day of previous month: " . $lastDay->toDateString() . "\n";
?>
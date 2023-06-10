<?php
use Carbon\Carbon;

$timezone = 'America/Toronto';
$now = Carbon::now($timezone);

$current_month = $now->format('F'); 
$current_year = $now->format('Y'); 

echo "Current month: " . $current_month . "\n";
echo "Current year: " . $current_year . "\n";
?>
<?php
use Carbon\Carbon;
$timezone = 'America/Toronto';
$now = Carbon::now($timezone);

$first_day_of_month = $now->firstOfMonth();
echo "First day of previous month: " . $first_day_of_month->toDateString() . "\n";

$last_day_of_month = $now->endOfMonth();
echo "Last day of current month: " . $last_day_of_month->toDateString() . "\n";
?>
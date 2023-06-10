<?php
use Carbon\Carbon;

$current_date = Carbon::now();
$future_date = $current_date->addDays(30)->format('Y-m-d');
echo $future_date;
?>
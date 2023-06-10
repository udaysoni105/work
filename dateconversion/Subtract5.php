<?php
use Carbon\Carbon;

$current_date = Carbon::now();
$past_date = $current_date->subDays(21)->format('Y-m-d');
echo $past_date;
?>
<?php
use Carbon\Carbon;

$current_date = Carbon::now()->format('Y-m-d');
echo $current_date;
?>
<?php
use Carbon\Carbon;

$current_time = Carbon::now()->format('H:i:s');
echo $current_time;
?>
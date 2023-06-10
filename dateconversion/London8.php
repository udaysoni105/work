<?php
use Carbon\Carbon;

$now = Carbon::now('Europe/London')->format('H:i:s');
echo $now; 
?>
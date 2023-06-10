<?php
use Carbon\Carbon;

$now = Carbon::now('US/arizona')->format('H:i:s');
echo $now; 
?>
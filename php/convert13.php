<?php
$date = '2022-05-01';
$converted_date = date('d-m-Y', strtotime($date));
echo "Converted date: $converted_date";
?>
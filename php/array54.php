<?php
$age = array("Sophia"=>"31", "Jacob"=>"41", "William"=>"39", "Ramesh"=>"40");

// sort the array by key in descending order
krsort($age);

// display the sorted array
foreach ($age as $key => $value) {
    echo "$key: $value<br>";
}
?>

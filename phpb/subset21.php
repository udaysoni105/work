<?php
$data = array("vanilla", "strawberry", "mango", "peaches");

// extract a subset of elements from index 1 to index 2
$subarray = array_slice($data, 1, 2);

print_r($subarray);
?>

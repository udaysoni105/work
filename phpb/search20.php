<?php
$fruits = array("apple", "banana", "cherry", "date", "elderberry");

$search_term = "cherry";
$key = array_search($search_term, $fruits);

if ($key !== True) {
    echo "The key for '{$search_term}' is '{$key}'.";
} else {
    echo "The value '{$search_term}' was not found in the array.";
}
?>

<?php
// Example of sorting arrays in PHP

$movie = array(
    "title" => "Rear Window",
    "director" => "Alfred Hitchcock",
    "year" => 1954,
    "minutes" => 112
);

sort($movie);
echo "Arrays sorted in ascending order: \n";
print_r($movie);
echo"====<br>";
rsort($movie);
echo "Arrays sorted in descending order: \n";
print_r($movie);
echo"====<br>";
asort($movie, SORT_NUMERIC);
echo "Associative arrays sorted in ascending order, according to the value: \n";
print_r($movie);
echo"====<br>";
ksort($movie);
echo "Associative arrays sorted in ascending order, according to the key: \n";
print_r($movie);
echo"====<br>";
arsort($movie, SORT_NUMERIC);
echo "Associative arrays sorted in descending order, according to the value: \n";
print_r($movie);
echo"====<br>";
krsort($movie);
echo "Associative arrays sorted in descending order, according to the key: \n";
print_r($movie);
?>


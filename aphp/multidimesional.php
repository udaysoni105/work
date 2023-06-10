<?php
for ($i = 0; $i < count($fruits); $i++) {
    for ($j = 0; $j < count($fruits[$i]); $j++) {
        echo $fruits[$i][$j] . " ";
    }
    echo "<br>";
}

// Creating a multidimensional array
$fruits = array(
    array("apple", 2, "red"),
    array("banana", 3, "yellow"),
    array("orange", 1, "orange")
);

// Accessing elements of a multidimensional array
echo $fruits[0][0]; // Outputs "apple"
echo $fruits[1][1]; // Outputs 3
echo $fruits[2][2]; // Outputs "orange"
?>
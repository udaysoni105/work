<?php
$numbers = array(1, 2, 3, 4);
echo "Original array: " . implode(", ", $numbers) . "\n";

array_push($numbers, 5);
echo "Array after adding element: " . implode(", ", $numbers) . "\n";
?>

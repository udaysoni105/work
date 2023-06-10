<?php
$numbers = array(2, 3, 4, 5);
echo "Original array: " . implode(", ", $numbers) . "\n";

array_unshift($numbers, 1);
echo "Array after adding element: " . implode(", ", $numbers) . "\n";
?>

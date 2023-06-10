<?php
$numbers = array(1, 2, 3, 4, 5);
echo "Original array: " . implode(", ", $numbers) . "\n";

$removed = array_pop($numbers);
echo "Removed element: " . $removed . "\n";

echo "Array after removal: " . implode(", ", $numbers) . "\n";
?>

<?php
$a = 10;
$b = 5;
$c = 5;

$result = $a + $b * $c;  
echo "Result 1: " . $result . "\n";

$result = ($a + $b) * $c;  
echo "Result 2: " . $result . "\n";

$result = $c + $b == $a;  
echo "Result 3: " . $result . "\n";

$result = $a > $b && $b > $c;  
echo "Result 4: " . $result . "\n";

$result = $a > $b ? "a is greater" : "b is greater or equal";  
echo "Result 5: " . $result . "\n";
?>

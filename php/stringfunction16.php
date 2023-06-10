<?php

// Declare a sample string
$string = "The quick brown fox jumps over the lazy dog.";

$length = strlen($string);
echo "Length of the string: $length\n";

$lowercase = strtolower($string);
echo "Lowercase string: $lowercase\n";

$uppercase = strtoupper($string);
echo "Uppercase string: $uppercase\n";


$substring = substr($string, 4, 9);
echo "Substring of the string: $substring\n";


$replacement = str_replace("quick", "slow", $string);
echo "String after replacement: $replacement\n";

$position = strpos($string, "fox");
echo "Position of 'fox' in the string: $position\n";

$reversed = strrev($string);
echo "Reversed string: $reversed\n";

$shuffled = str_shuffle($string);
echo "Shuffled string: $shuffled\n";
?>
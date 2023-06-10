<?php

// Arithmetic operators
$a = 10;
$b = 3;

echo "Addition: " . ($a + $b) . "\n"; 
echo "Subtraction: " . ($a - $b) . "\n";
echo "Multiplication: " . ($a * $b) . "\n"; 
echo "Division: " . ($a / $b) . "\n"; 
echo "Modulus: " . ($a % $b) . "\n";

// Comparison operators
$c = 5;
$d = "5";

var_dump($c == $d);
var_dump($c === $d); 
var_dump($c != $d); 
var_dump($c !== $d);
var_dump($c < $d); 
var_dump($c > $d); 
var_dump($c <= $d);
var_dump($c >= $d);

// Bitwise operators
$e = 0b1010;
$f = 0b1100;

echo "Bitwise AND: " . ($e & $f) . "\n"; 
echo "Bitwise OR: " . ($e | $f) . "\n"; 
echo "Bitwise XOR: " . ($e ^ $f) . "\n"; 
echo "Bitwise NOT: " . (~$e) . "\n"; 
echo "Left Shift: " . ($e << 1) . "\n"; 
echo "Right Shift: " . ($e >> 1) . "\n"; 

// Logical operators
$g = true;
$h = false;

var_dump($g && $h); // false
var_dump($g || $h); // true
var_dump(!$g); // false

// String operators
$i = "Hello";
$j = "World";

echo $i . " " . $j . "\n";
echo $i .= " " . $j . "\n";

// Increment/Decrement operators
$k = 5;
echo ++$k . "\n"; 
echo $k++ . "\n"; 
echo $k . "\n"; 
echo --$k . "\n"; 
echo $k-- . "\n"; 
echo $k . "\n"; 

// Array operators
$l = [1, 2, 3];
$m = [4, 5, 6];

var_dump($l + $m); 
var_dump($l == $m);
var_dump($l === $m);
var_dump($l != $m);
var_dump($l !== $m);

// Type operators
$n = 5;
$o = "5";

var_dump($n == $o);
var_dump($n === $o); 
var_dump($n !== $o);
?>
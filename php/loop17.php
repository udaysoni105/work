<?php

// for loop
echo "For loop:\n";
for ($i = 1; $i <= 5; $i++) {
  echo "$i ";
}
echo "\n\n";
echo "==========";
// foreach loop with indexed array
echo "Foreach loop with indexed array:\n";
$numbers = array(1, 2, 3, 4, 5);
foreach ($numbers as $number) {
  echo "$number ";
}
echo "\n\n";
echo "==========";
// foreach loop with associative array
echo "Foreach loop with associative array:\n";
$person = array(
  "name" => "John",
  "age" => 30,
  "city" => "New York"
);
foreach ($person as $key => $value) {
  echo "$key: $value\n";
}
echo "\n";

echo "==========";
$x = 1;
do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);
echo "==========";
// while loop with multidimensional array
echo "While loop with multidimensional array:\n";
$students = array(
  array("John", "Doe", 18),
  array("Jane", "Smith", 20),
  array("Bob", "Johnson", 19)
);
$i = 0;
while ($i < count($students)) {
  echo "Name: {$students[$i][0]} {$students[$i][1]}, Age: {$students[$i][2]}\n";
  $i++;
}
?>
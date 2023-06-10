<?php
// Indexed array
$fruits = array("apple", "banana", "orange", "kiwi");
echo "Fruits: ";
foreach ($fruits as $fruit) {
    echo $fruit . " ";
}
echo "\n";

// Associative array
$person = array("name" => "John", "age" => 30, "email" => "john@example.com");
echo "Person: ";
foreach ($person as $key => $value) {
    echo $key . ": " . $value . " ";
}
echo "\n";

// Multidimensional array
$students = array(
    array("name" => "Alice", "age" => 20, "email" => "alice@example.com"),
    array("name" => "Bob", "age" => 21, "email" => "bob@example.com"),
    array("name" => "Charlie", "age" => 22, "email" => "charlie@example.com")
);
echo "Students:\n";
foreach ($students as $student) {
    echo "Name: " . $student["name"] . ", Age: " . $student["age"] . ", Email: " . $student["email"] . "\n";
}
?>

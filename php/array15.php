<?php
$fruits = array("apple", "banana", "cherry", "date");

array_push($fruits, "elderberry", "fig");
print_r($fruits);
echo "<br>";

$chunks = array_chunk($fruits, 2);
print_r($chunks);
echo "<br>";

$last_fruit = array_pop($fruits);
echo "Last fruit removed: " . $last_fruit . "<br>";
print_r($fruits);
echo "<br>";

$more_fruits = array("grape", "kiwi", "lemon");
$all_fruits = array_merge($fruits, $more_fruits);
print_r($all_fruits);
echo "<br>";

list($fruit1, $fruit2, $fruit3, $fruit4) = $fruits;
echo "List of fruits: $fruit1, $fruit2, $fruit3, $fruit4 <br>";

$position = array_search("banana", $fruits);
echo "Position of banana: $position <br>";

$people = array(
    array("name" => "John", "age" => 30),
    array("name" => "Jane", "age" => 25),
    array("name" => "Jim", "age" => 40)
);
$names = array_column($people, "name");
print_r($names);
echo "<br>";

sort($fruits);
print_r($fruits);
echo "<br>";

usort($people, function ($a, $b) {
    return $a['age'] <=> $b['age'];
});
print_r($people);
echo "<br>";

$numbers = array(1, 1, 2, 3, 3, 3, 4, 4, 4, 4);
$counts = array_count_values($numbers);
print_r($counts);
echo "<br>";

$diff = array_diff($fruits, $more_fruits);
print_r($diff);
echo "<br>";

$lengths = array_map('strlen', $fruits);
print_r($lengths);
echo "<br>";

$replace_fruits = array("cherry" => "orange", "date" => "peach");
$updated_fruits = array_replace($fruits, $replace_fruits);
print_r($updated_fruits);
echo "<br>";

$keys = array(1 => 'apple', 3 => 'banana', 5 => 'cherry');
$values = array_values($keys);
print_r($values);
echo "<br>";

$name = "John";
$age = 30;
$city = "New York";
$info = compact("name", "age", "city");
print_r($info);
echo "<br>";

if (in_array("apple", $fruits)) {
    echo "Found apple in the array. <br>";
} else {
    echo "Did not find apple in the array. <br>";
}

?>

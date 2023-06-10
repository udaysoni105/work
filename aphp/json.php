<?php
$data = array(
  "name" => "John Doe",
  "email" => "johndoe@example.com",
  "age" => 35
);

// $json = json_encode($data);
// echo $json;

$json = json_encode($data);

$decoded = json_decode($json);

echo $decoded->name;
?>

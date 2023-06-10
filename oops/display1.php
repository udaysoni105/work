<?php
class Animal {
  public $family;
  public $food;
  
  public function __construct($family, $food) {
    $this->family = $family;
    $this->food = $food;
  }
}

$cat = new Animal("Felidae", "Meat");

echo "Family: " . $cat->family . "<br>";
echo "Food: " . $cat->food . "<br>";
?>
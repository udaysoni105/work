<?php
class Toys {
  private $name;
  private $price;
  private static $totalToys = 0;

  public function __construct($name, $price) {
    $this->name = $name;
    $this->price = $price;
    self::$totalToys++;
  }

  public function getName() {
    return $this->name;
  }

  public function setName($name) {
    $this->name = $name;
  }

  public function getPrice() {
    return $this->price;
  }

  public function setPrice($price) {
    $this->price = $price;
  }

  public static function getTotalToys() {
    return self::$totalToys;
  }
}

// create a few toy objects
$toy1 = new Toys("Action Figure", 10);
$toy2 = new Toys("Barbie Doll", 15);
$toy3 = new Toys("Lego Set", 20);

// get and set details using $this keyword
$toy1->setName("G.I. Joe");
echo "Toy name: " . $toy1->getName() . ", Price: " . $toy1->getPrice() . "\n";

// get total toys using self keyword
echo "Total toys: " . Toys::getTotalToys();
?>
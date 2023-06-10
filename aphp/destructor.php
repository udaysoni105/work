<?php
class MyClass {
  public function __construct() {
    echo "Object created.<br>";
  }

  public function __destruct() {
    echo "Object destroyed.<br>";
  }
}

$obj = new MyClass(); // Output: Object created.

unset($obj); // Output: Object destroyed.
?>

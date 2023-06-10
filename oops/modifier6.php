<?php
class AccessModifiersExample {
  public $publicVar = "This is a public variable";
  protected $protectedVar = "This is a protected variable";
  private $privateVar = "This is a private variable";

  public function publicMethod() {
    echo "This is a public method.\n";
  }

  protected function protectedMethod() {
    echo "This is a protected method.\n";
  }

  private function privateMethod() {
    echo "This is a private method.\n";
  }

  public function printVariables() {
    echo "Public variable: " . $this->publicVar . "\n";
    echo "Protected variable: " . $this->protectedVar . "\n";
    echo "Private variable: " . $this->privateVar . "\n";
  }

  public function printMethods() {
    $this->publicMethod();
    $this->protectedMethod();
    $this->privateMethod();
  }
}

$example = new AccessModifiersExample();

echo $example->publicVar . "\n";
$example->publicMethod();

$example->printVariables();
$example->printMethods();
?>
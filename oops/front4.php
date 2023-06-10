<?php
class Person {
  public function behave() {
    echo "I'm a person ";
  }
}

class Friend extends Person {
  public function behave() {
    echo "I'm a friend ";
  }
}

class Elder extends Person {
  public function behave() {
    echo "I'm an elder ";
  }
}

// create a person
$person = new Person();
$person->behave(); 
// create a friend
$friend = new Friend();
$friend->behave(); 
// create an elder
$elder = new Elder();
$elder->behave(); 
?>
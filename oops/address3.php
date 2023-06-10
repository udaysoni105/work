<?php
class Address {
  protected $street;
  protected $city;
  protected $state;

  public function __construct($street, $city, $state) {
    $this->street = $street;
    $this->city = $city;
    $this->state = $state;
  }

  public function getStreet() {
    return $this->street;
  }

  public function getCity() {
    return $this->city;
  }

  public function getState() {
    return $this->state;
  }
}

class LatestAddress extends Address {
  private $country;
  private $zip;
  private $phone;

  public function __construct($street, $city, $state, $country, $zip, $phone) {
    parent::__construct($street, $city, $state);
    $this->country = $country;
    $this->zip = $zip;
    $this->phone = $phone;
  }

  public function getCountry() {
    return $this->country;
  }

  public function getZip() {
    return $this->zip;
  }

  public function getPhone() {
    return $this->phone;
  }
}

class Vishal {
  public function getAddress() {
    $latestAddress = new LatestAddress('123 Main St', 'Anytown', 'CA', 'USA', '12345', '555-555-1212');
    return "Vishal's address is: " . $latestAddress->getStreet() . ', ' . $latestAddress->getCity() . ', ' . $latestAddress->getState() . ', ' . $latestAddress->getCountry() . ', ' . $latestAddress->getZip() . ', ' . $latestAddress->getPhone();
  }
}

$vishal = new Vishal();
echo $vishal->getAddress();
?>
<?php
class Counter {
  private static $count = 0;

  public static function getCount() {
    return self::$count;
  }

  public static function incrementCount() {
    self::$count++;
  }
}

Counter::incrementCount();
Counter::incrementCount();
Counter::incrementCount();

echo "Count: " . Counter::getCount() . "\n"; // output: Count: 3
?>
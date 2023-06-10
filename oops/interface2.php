<?php
interface Human {
    public function eat();
    public function sleep();
}

abstract class Military {
    private $rank;

    public function __construct($rank) {
        $this->rank = $rank;
    }

    public function getRank() {
        return $this->rank;
    }

    public function setRank($rank) {
        $this->rank = $rank;
    }

    public abstract function march();
    public abstract function fight();
}

class Soldier extends Military implements Human {

    public function __construct($rank) {
        parent::__construct($rank);
    }

    public function eat() {
        echo "Soldier is eating\n";
    }

    public function sleep() {
        echo "Soldier is sleeping\n";
    }

    public function march() {
        echo "Soldier is marching\n";
    }

    public function fight() {
        echo "Soldier is fighting\n";
    }
}

$soldier = new Soldier("vikaram batra");
$soldier->setRank("Captain ");
$soldier->eat();
$soldier->sleep();
$soldier->march();
$soldier->fight();
echo "Soldier rank is: " . $soldier->getRank() . "\n";
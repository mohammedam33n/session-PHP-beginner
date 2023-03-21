<?php
/*
Magic Methods
-Methods with special Name Satrt With Double Underscore [ __ ]

Construct:
--Called when Object Created
--Can be Inherited


Distract:
--Called when Object Is Distract
*/


class Fruit {
    public $name;
    public $color;

    function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
    }
    function __destruct() {
    echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
}

$apple = new Fruit("Apple", "red");


?>
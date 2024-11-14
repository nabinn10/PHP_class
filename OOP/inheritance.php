<?php
    // inheritance in php
    // introduction to inheritance
    // inheritance is a mechanism in which one class acquires the property of another class 
    // for example, a child inherits the traits of his/her parents like face, color, etc. 
    // syntax of inheritance
    // class child_class_name extends parent_class_name 
    // example of inheritance
    // code
    class Vehicle {
        public $brand;
        public function getBrand() {
            return $this->brand;
        }
        public function setBrand($brand) {
            $this->brand = $brand;
        }
    }
    class  Car extends Vehicle
    {
        private $color;
        public function getColor()
        {
            return $this->color;
        }
        public function setColor($color)
        {
            $this->color=$color;
        }
    }
    $obj1 = new Car();
    $obj1->setBrand("Toyota");
    $obj1->setColor("Red");
    echo "Brand: ".$obj1->getBrand()."<br>";
    echo "Color: ".$obj1->getColor()."<br>";



?>




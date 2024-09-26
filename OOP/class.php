<!-- simple interest calculator using class -->
<?php
class SimpleInterest {
    public $principal;
    public $rate;
    public $time;
    public $simple_interest;
    
    public function __construct($principal, $rate, $time) {
        $this->principal = $principal;
        $this->rate = $rate;
        $this->time = $time;
    }
    
    public function calculate() {
        $this->simple_interest = ($this->principal * $this->rate * $this->time) / 100;
    }
    
    public function display() {
        echo "Principal: " . $this->principal . "<br>";
        echo "Rate: " . $this->rate . "<br>";
        echo "Time: " . $this->time . "<br>";
        echo "Simple Interest: " . $this->simple_interest . "<br>";
    }
}
// values
$principal = 1000;
$rate = 5;
$time = 2;
// create object
$si = new SimpleInterest($principal, $rate, $time);
// calculate simple interest
$si->calculate();
// display
$si->display();
?>
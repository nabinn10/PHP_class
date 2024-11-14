<?php
class Student
{
    var $name,$age;
    function __construct($name,$age)
    {
        $this->name=$name;
        $this->age=$age;
    }
    function welcome()
    {
        echo "Welcome ".$this->name." your age is ".$this->age;
    }
    function __destruct()
    {
        echo "<br>Object Destroyed";
    }

}
$student1=new Student("John",25);
echo $student1->welcome();

?>

<!-- Destroying objects
 with PHP's automatic garbage collection, by default obects are destroyed automatically at the end of the  -->
<?php 
// polymorphism in php
// introduction to polymorphism
// polymorphism is a mechanism in which one task is performed in different ways 
// two type of polymorphism
// compile time polymorphism and run time polymorphism
// for example, to persuade the customer in different ways like giving discounts, offers, etc.
// syntax of polymorphism
// class class_name
// {
//     public function function_name()
//     {
//         // code
//     }
// }
// class class_name
// {
//     public function function_name()
//     {
//         // code
//     }
// }
// example of polymorphism
// code
class Animal
{
    public function sound()
    {
        echo "Animal Sound";
    }
}
class Dog extends Animal
{
    public function sound()
    {
        echo "Dog Bark";
    }
}
class Cat extends Animal
{
    public function sound()
    {
        echo "Cat Meow";
    }
}
$obj1 = new Dog();
$obj1->sound();
echo "<br>";
$obj2 = new Cat();
$obj2->sound();

?>
<?php
//php function
//normal function
function my_function()
{
    echo "Hello World";
}

//funtion with return type
function add($a,$b)
{
    return $a + $b;
}

//funtion with return value
function multiply($a,$b)
{
    return $a*$b;
}

//funtion with default value
function greet($name = "World")
{
    echo "Hello $name";
}


//calling the function
my_function();
$result = add(5,10);
echo $result;
greet();
echo multiply(2,3);


//create a function that calculate the square of a given number as parameteer

function square($num)
{
    return $num*$num;
}

//calling
echo "<br>The square of 10 is " ,square(10);




<?php 
// types of array
// indexed array
echo  "Indexed array<br><br>";
$names = array("Ram", "Shyam", "Hari");
// echo $names[0], "<br>";
// echo $names[1], "<br>";
// echo $names[2], "<br>";
foreach($names as $name)
{
    echo $name,"<br>";
}
//Sorting the names
echo "<br>";
sort($names);
foreach($names as $name)
{
    echo $name,"<br>";
}
echo "<br>";
sort($names);
foreach($names as $name)
{
    echo $name,"<br>";
}


//associative array
echo  "<br>Associative array<br><br>";
$age = array("Ram"=>25,"Shyam"=>25,"Hari"=>25);
// echo "Ram is ".$age['Ram']," years old","<br>";
// echo "Shyam is ".$age['Shyam']," years old","<br>";
// echo "Hari is ".$age['Hari']," years old","<br>";

krsort($age);
foreach($age as $key=>$value)
{
    echo $key. " is " .$value. " year old ","<br>";
}




//multidimensional array
echo  "<br>Multidimensional array<br><br>";
$student = array(
    array("Ram",25),
    array("Shyam",30),
    array("Hari",35)
);
echo $student[0][0]." is ".$student[0][1]." years old","<br>";
echo $student[1][0]." is ".$student[1][1]." years old","<br>";
echo $student[2][0]." is ".$student[2][1]." years old","<br>";

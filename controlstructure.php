<?php
$a = 10;
$b = 11;
if ($a > $b) {
    echo "$a is greater than $b";
} else {
    echo "$b is greater than $a";
}

echo "<br>";
echo "<br>";

//switch case
$day = "sunday";
switch ($day) {
    case "sunday":
        echo "Today is working day";
        break;
    case "monday":
        echo "Today is working day";
        break;
    case "tuesday":
        echo "Today is working day";
        break;
    case "wednesday":
        echo "Today is working day";
        break;
    case "thursday":
        echo "Today is working day";
        break;
    case "friday":
        echo "Today is working day";
        break;
    case "saturday":
        echo "Today is holiday";
        break;
}



//while loop

echo "<br>";
echo "<br>";
echo "<br>";
echo "while loop";
$i = 1;
while($i<=5)
{
    echo "The number is ".$i."<br>";
    $i++;
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "Do while loop";
echo "<br>";
$i = 1;
do {
    echo "The number is ".$i."<br>";
    $i++;
}
while($i<=5);


echo "<br>";
echo "<br>";
echo "<br>";
echo "For loop";
echo "<br>";
for ($i = 1; $i<=5;$i++)
{
    echo "The number is " .$i. "<br>";
}
?>
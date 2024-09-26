<?php
//php date
//Today is Monday
echo "Today is ".date("l")."<br>";

//Today is 2nd of September
echo "Today is ".date('jS')." of ".date('F')."<br>";

//34 days are passed out of year 2024
echo date('z')." days are passed out of year ".date('Y')."<br>";

//Today is 2025/09/02
echo "Today is ".date('Y/m/d')."<br>";

//Now it is 10:57:59 am
echo "Now it is ".date('h:i:s a')."<br>";
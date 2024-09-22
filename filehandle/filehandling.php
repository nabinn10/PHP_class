<?php 
//file handling inn php
$file = "Hello.txt";

//open file in write mode
$handle = fopen($file,'w');

//write in file
fwrite($handle,"Hello world");
readfile("Hello.txt");

//close
fclose($handle);




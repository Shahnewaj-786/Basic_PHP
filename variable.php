<?php

//Basic Variable-----
$name = "Md Shahnewaj Sheikh <br>";
$a = 30;
$b = 70;
$c = $a+$b;

echo $name; 
echo $c. "<br>"; 
echo ($b-$a)."<br>"; 
echo ("My name is ").$name;


//Reference Variable------
$k = "B" . "<br>";
$$k = "C" . "<br>";

echo $k;
echo $$k;
//echo $B;


//Constant Variable------
const Constant_name = "Nafiz";
//const Constant_name = "Sagor";

echo ("Constant Name is") . " " .Constant_name . "<br>";

//function for add constant---------------
define('VARIABLE', 'Value')  ;

echo VARIABLE;

?>
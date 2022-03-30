<?php


//we can create array in 2 ways

$name = ["x","y"]; // useing 3rd braket 

//or

$age = array ("x","y"); //array function


//we can not use echo for see array output 

//for show array output we have to use print_r or var_dump

print_r($name); //local or simple way

echo ("<br>");
echo ("<br>");

var_dump($age); //advance way

// we an use <pre></pre> tag for show an array in organize way

echo "<pre>";
var_dump($name);
echo "</pre>";

echo ("<br>");
//we can echo array element by single 

echo $name [0];

echo ("<br>");

echo $name [1];



?>
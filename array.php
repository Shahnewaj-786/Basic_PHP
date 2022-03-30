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


//3 types of array 

//--> Index array ; --> accociative array; --> multi-dimentional array 

//Index array [we can not provide index number of index array]

$food = ["banana", "coco", "Hen", "Egg", "Tea"];

//Accociative array [we can fix or provide index number]

$student_number = [
    'class 1' => '100',
    'class 2' =>'70',
    'class 3' => '600',
    'class 4' => '10',
    'class 5' => '150',
];


//Multi-simentional array [array inside array]

$meta =[
    'meta-1' => ['yes', 'true', 'checked', 'ok'],
    'meta-2' => ['no', 'false', 'unchecked', 'neg'],
];

echo "<pre>";
print_r($food);
echo "</pre>";

echo ("<br>");

echo "<pre>";
print_r($student_number);
echo "</pre>";

echo ("<br>");

echo "<pre>";
print_r($meta);
echo "</pre>";

echo ("<hr>");

echo "<pre>";
var_dump($food);
echo "</pre>";

echo ("<br>");

echo "<pre>";
var_dump($student_number);
echo "</pre>";

echo ("<br>");

echo "<pre>";
var_dump($meta);
echo "</pre>";


?>
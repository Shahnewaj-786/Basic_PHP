<?php

$string = ("This is simple text. <br>");


echo ($string);
echo Strtoupper($string);
echo Strtolower($string);
echo Strlen($string); 
echo ("<br>");
echo Str_word_count($string);
echo ("<br>");
echo Strrev($string);
echo ("<br>");
echo Str_replace('This','That',$string);


//User define function

function sum(){
    echo (2+3);
}

sum();
 echo ("<br>");
function sub (){
    echo (3-2);
}

sub();

?>
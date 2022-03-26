<?php

/**
 * If-else
 * if else else if
 * switch case
 * while
 * do while
 * for
 * for each
 */

 //If else
 $a = 20;
 $b = 35;
 $c = 90;
 $total = $a+$b+$c;

 //echo ($total);
 if($total == 145){
    echo ("This is right");
}
else{
    echo ("This is not right");
}
 
echo ("<br>");
echo ("<br>");

//if else else if
$result = 25;
if($result>=30 && $result <= 40){
    echo ("F");
} else if ($result>=50 && $result <= 60){
    echo ("G");
} else if ($result>=65 && $result <= 95){
    echo ("A");
} else{
    echo ("Nothing");
}

echo ("<br>");
echo ("<br>");


//switch case
$num = 70;

switch($num){
    case 100:
        echo ("A+"."<br>");
        break;
    case 80:
        echo ("B");
        break;
    default:
    echo ("Put a mark");
}


echo ("<br>");
echo ("<br>");
//while
$i = 10;
while($i <20){
    echo ("This is loop $i");
    echo "<br>";
    $i++;
}

echo ("<br>");
echo ("<br>");
//do while
$j = 12;
do{
    echo "Loop No. $j <br>";
    $j++;
}while($j<15);

echo ("<br>");
echo ("<br>");
//for
for( $z=7; $z <= 10; $z++){
    echo "For loop $z <br>";
}

echo ("<br>");
echo ("<br>");
//for each

?>
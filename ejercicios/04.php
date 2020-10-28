<?php

$num1 =1;
$num2 = 0;
for ($i=0; $i <=10; $i++) { 
    $sum=$num1+$num2;
    $num1=$num2;
    $num2=$sum;
    echo $sum." ";
}
?>
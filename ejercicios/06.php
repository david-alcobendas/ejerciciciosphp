<?php


$array1 = ["Base","Escolta","Alero","Ala-Pívot","Pivot "]; 
$array2 = array("Base ","Escolta", "Alero","Ala-Pívot","Pivot");
//apartado a
foreach ($array1 as $pos){
    echo $pos . '<br>';
}
//apartado b
foreach ($array1 as $pos=>$element){
    echo $pos . ": " . $element . '<br>';
}

?>
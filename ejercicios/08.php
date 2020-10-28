<?php


$array1 = []; 
$array1[0] = "Base";
$array1[1] = "Escolta";
$array1[2] = "Alero";
$array1[3] = "Ala-Pívot";
$array1[4] = "Pivot";

//apartado a
foreach ($array1 as $pos){
    echo $pos . '<br>';
}
//apartado b
foreach ($array1 as $pos=>$element){
    echo $pos . ": " . $element . '<br>';
}

?>
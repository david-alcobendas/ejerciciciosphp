<?php

define("num",169);
 $con=0;
for($i = 1; $i < num; $i ++) {
        if (num % $i == 0) {
            echo $i;
            $con++;
        }
}
if ($con<=2)
echo"  Es primo";
?>

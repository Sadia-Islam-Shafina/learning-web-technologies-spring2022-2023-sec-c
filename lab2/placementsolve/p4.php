<?php
$n1=10;
$n2=5;
$n3=15;
if($n1>$n2 && $n1>$n3){
    echo $n1." is the largest number between three number";
}
elseif( $n2>$n1 && $n2>$n3){
    echo $n2 . " is the largest number between three number.";
}
else{ echo $n3 . " is the largest number between three number.";}
?>
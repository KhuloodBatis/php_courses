<?php

$num1 = 30;
$num2 = 20;
echo "if-else statment";
if ($num1 > $num2 ){
     echo 'num1 is bigger thab num2 ';
}else{
    echo 'num2 is bigger thab num1 ';
}
echo '<br/>';
echo "complex if-else statment";
echo '<br/>';
$max = 100;
$min = 1;
$input = 50;

if (($input>= $min) &&($input<=$max) ){
     echo 'the inpiut is in the range 1- to 100';
}else{
    echo 'the inpiut is out the range 1- to 100';
}
?>
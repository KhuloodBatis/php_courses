<?php
echo '<h1> functions_multi </h1>';
echo '<br/>';


$result = operations(3,7);
echo print_r($result);
echo '<br/>';
echo "sum : {$result[0]}";
echo '<br/>';
echo "sub : {$result[1]}";
echo '<br/>';
echo "div : {$result[2]}";
echo '<br/>';
echo "mult: {$result[3]}";
function operations($n1,$n2){
$arr=array();
$arr[] =$n1 + $n2;
$arr[] =$n1 - $n2;
$arr[] =$n1 / $n2;
$arr[] =$n1 * $n2;
 return $arr;
}
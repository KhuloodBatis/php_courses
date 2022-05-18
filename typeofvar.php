<?php 

 
echo "<h1> Type Of Varibles </h1>";

$var1 = "4 months";

echo "var1 is : ".gettype($var1);


echo "<br/>"; 
$var1 = $var1 + 5;

echo "var1 is : ".gettype($var1);


echo "<br/>"; 
$var2 = (string)$var1;

echo "var2 is : ".gettype($var2);

echo "<br/>"; 
$var3 = (integer)$var2;
$var3 = settype($var2, "integer");
echo "var3 is : ".gettype($var3);
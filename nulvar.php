<?php 

$var1 ="koool";
$var2 = null ;
$var3 ="";

echo "<h1> Null part </h1>";
echo "is var 1 null ". is_null($var1);
echo "<br/>";
echo "is var 2 null ". is_null($var2);
echo "<br/>";
echo "is var 3 null ". is_null($var3);
echo "<br/>";
echo "is var 4 null ". is_null($var4);

echo "<br/>";
echo " var 1 set ". isSet($var1);
echo "<br/>";
echo "var2 is set ". isSet($var2);
echo "<br/>";
echo "var3 is set ". isSet($var3);
echo "<br/>";
echo "var4 is set ". isSet($var4);

echo "<h1> boolean part </h1>";

$is_married=true;
echo "<br/>";
echo is_bool($is_married);

echo "<h1> float part </h1>";
$pi=3.4;
echo "<br/>";
echo is_float($pi);
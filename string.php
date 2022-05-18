<?php

echo "<h3> string <h3/>";

$name = "khulood batis";
$bref = "software developer hero";
echo $name . ", " . $bref;

$info= $name . ", " . $bref;

echo "<br/>";
echo "Toupper: " . strtoupper($info);


echo "<br/>";
echo "ToLower: " . strtolower($info);

echo "<br/>";
echo "Trim: " . trim(" new york city ")."best city";



echo "<br/>";
echo "replace: " . str_replace("hero","best",$info);
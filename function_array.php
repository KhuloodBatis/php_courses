<?php

$numbers = array(1, 10, 5, 20, 15, 60, 8, 27);
echo print_r($numbers);

echo "<br/>";
echo "max number : " . max($numbers);
echo "<br/>";
echo "min number : " . min($numbers);
echo "<br/>";
echo "count number : " . count($numbers);
echo "<br/>";
echo "sort number : " . sort($numbers);
echo "<br/>";
echo print_r($numbers);
echo "<br/>";
echo "rsort number : " . rsort($numbers);
echo "<br/>";
echo print_r($numbers);
echo "<br/>";
echo "is 10 in array " .in_array(10, $numbers);
echo "<br/>";
echo "is 12 in array " .in_array(12, $numbers);

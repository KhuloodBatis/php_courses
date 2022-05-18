<?php


$arr = array(1, 2, 3, 4, 5);

echo "arr[2]: " . $arr[2];

echo "<br/>";

echo "arr" . print_r($arr);

$arr[2] = 314;
echo "<br/>";
echo "arr" . print_r($arr);
echo "<br/>";
echo "arr[2]: " . $arr[2];
$arr[] = 55;
echo "<br/>";
echo "arr" . print_r($arr);
$items = array(1, 'kool', 2.4);
echo "<br/>";
echo "items[1] :" . $items[1];

$items = array(1, 'kool', 2.4, array(1,44,6,4,7));
echo "<br/>";
echo "items[3] :" . $items[3][1];

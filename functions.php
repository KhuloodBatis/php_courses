<?php
echo '<h1> functions </h1>';
echo '<br/>';

sum(4, 5);
sum(42, 53);
sum(42, 53);

function sum($n1, $n2)
{
    $sum = $n1 + $n2;
    echo "sum : {$sum} <br/>";
}

$result = div(10, 5);
echo "Div : {$result}";
function div($n1, $n2)
{
    $div = $n1 / $n2;
    return  $div;
}
 display();
function display(){

    echo "<br/> welcome to PHP function smile and enjoy";
}
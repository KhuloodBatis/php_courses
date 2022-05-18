<?php
  echo '<h1> For Loop </h1>';
  echo '<br/>';
  echo '<h2> Number from 1 to 10 </h2>';
  echo '<br/>';
for( $i = 1 ;$i<=10; $i++){

    echo "<li> count {$i} </li>";
}
echo '<br/>';
echo '<h2> Number from 1 to 10 only even number  </h2>';
echo '<br/>';
for( $i = 2 ;$i<=10; $i+=2){

  echo "<li> count {$i} </li>";
}
echo '<h1> while Loop </h1>';
$i = 2 ;
while($i<=10){
    echo "<li> count {$i} </li>";
    $i+=2;
}
echo '<br/>';
?>
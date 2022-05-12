<?php
$numbers=array(1,3,4,2,0);
sort($numbers);
$arrlength=count($numbers);
for($x=0;$x<$arrlength;$x++)
  {
  echo $numbers[$x];
  echo "<br>";
  }
?>
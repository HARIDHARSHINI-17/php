<?php
$array1 = array("a"=>"mango","b"=>"banana","c"=>"apple");
$array2 = array("a"=>"mango","b"=>"banana","c"=>"orange");
$result = array_diff_assoc($array1,$array2);
print_r($result);
?>

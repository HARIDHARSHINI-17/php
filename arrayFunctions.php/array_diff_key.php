<?php
$array1 = array("a"=>"mango","b"=>"banana","c"=>"apple");
$array2 = array("a"=>"mango","b"=>"banana","d"=>"apple");
$result = array_diff_key($array1,$array2);
print_r($result);
?>

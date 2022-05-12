<?php
$array1 = array("1"=>"apple","2"=>"orange","3"=>"mango","4"=>"banana");
$array2 = array("1"=>"strawbeery","2"=>"orange","3"=>"mango","4"=>"grapes");
print_r(array_intersect_assoc($array1,$array2));
?>
<?php
$array1 = array("roll_no"=>8,"name"=>"haridharshini","clg"=>"sece");
$array2 = array("roll_no"=>9,"stdname"=>"keerthi","school"=>"vvm");
print_r(array_intersect_key($array1,$array2));
?>
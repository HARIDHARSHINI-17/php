<?php
$array = array("hari","dharshini","monisha","keerthi");
$array1 = array("1"=>"hari","2"=>"dharshini","2"=>"keerthi");//override occurs
print_r(array_flip($array));
print_r(array($array1));
?>
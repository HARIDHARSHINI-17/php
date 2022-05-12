<?php
$obj = new DateTime();
$obj->setDate(2022,3,29);
echo $obj->format('Y/m/d')."\n";
$obj->setDate(2019,4,20);
echo $obj->format('Y/m/d')
?>
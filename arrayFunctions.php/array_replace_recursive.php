<?php
$givenArray = array('veg' => array( "potato") , 
              'fruits' => array("mango", "orange"));
$replaceArray = array('veg' => array('brinjal'),'fruits' => array('mango'));
$purchase = array_replace_recursive($givenArray,$replaceArray);
print_r($purchase);
?>
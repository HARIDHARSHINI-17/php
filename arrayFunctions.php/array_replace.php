<?php
$givenArray = array('veg' => array( "potato","cabbage") , 
              'fruits' => array("mango", "orange"));
$replaceArray = array('veg' => array('brinjal'),'fruits' => array('mango'));
$purchase = array_replace($givenArray,$replaceArray);
print_r($purchase);
?>
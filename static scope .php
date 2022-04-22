<?php
 function sum(){
     static $x = 10;
     $x++;
     $y = 20;
     echo $x + $y;
 }
 sum();
 sum();
 sum();
 ?>
 
 
 
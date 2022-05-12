<?php
function square($n){
    return ($n * $n);
}
$n = [1,2,3,4,5];
$z = array_map('square',$n);
print_r($z);
?>
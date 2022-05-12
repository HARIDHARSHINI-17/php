<?php
function odd($array){
    if($array%3==0){
        return true;
    }
    else{
        return false;
    }
}
$array = array(1,2,3,4,5,6,7,8,9);
print_r(array_filter($array,"odd"));
?>
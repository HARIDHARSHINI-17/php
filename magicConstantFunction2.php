<?php
class msg{
    function mymsg(){
        echo "hi\n";
        echo __CLASS__;
    }
}
$obj = new msg();
$obj->mymsg();
?>
<?php
abstract class person{
    abstract function display();
}
class childA extends person{
    function display(){
        echo "child A";
    }
}
$obj1 = new childA();
$obj1->display();
?>
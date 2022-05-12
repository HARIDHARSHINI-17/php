<?php
class person{
    const a="hari";
    function display(){
        echo self::a;
    }
}
$obj = new person();
$obj->display();
?>
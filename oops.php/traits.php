<?php
trait message1{
    function msg1(){
        echo "welcome";
    }
}
trait message2{
    function msg2(){
        echo "hello";
    }
}
class welcome1{
    use message1;
}
class welcome2{
    use message1,message2;
}
$obj1 = new welcome1();
$obj1->msg1();
$obj2 = new welcome2();
$obj2->msg1();
$obj2->msg2();
?>
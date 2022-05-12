<?php
class demo{
    function __call($fn,$arg){
        if($fn=='add'){
            $c = count($arg);
            switch($c){
                case 2:
                    echo "Addition of two numbers:".$arg[0]+$arg[1];
                    break;
                case 3:
                    echo "Addition of three numbers: ".$arg[0]+$arg[1]+$arg[2];
                    break;
                default:
                    echo "Match not found";
                    break;
            }

        }
    }
$obj = new demo();
$obj->add(10,10);
$obj->add(10,10,10);
}
?>
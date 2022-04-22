<?php

//function concat($str1, $str2, $delimiter)
//{
    //return $str1 . $delimiter . $str2;
//}

//$message = concat('Hi', 'there!', ' ');

//echo $message;
//
function concat($str1,$str2=" ",$str3){
    return $str1.$str2.$str3;
}
$message = concat('hi','hari',"welcome");
echo $message;
?>
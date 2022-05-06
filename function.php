ARROW FUNCTION:
<?php
$c = 1;
$fn = fn($a) => fn($b) => $a * $b + $c;
var_export($fn(5)(10));
?>
ANONYMOUS FUNCTION:
<?php 
$x = 1;
$sum = function(int|float ...$numbers) use($x) : int|float {
    echo $x;
    return array_sum($numbers)
};
echo $sum(1,2,3,4);

CONCAT FUNCTION:
<?php
function concat($str1,$str2){
    return $str1.$str2;
}
$message = concat("hai ","hari");
echo $message;
?>

FUNCTION WITH IN FUNCTION:
<?php 
function msg(){
    function inbox(){
        echo "hi";
    }
}
inbox();

FUNCTION:
<?php
$counter = 1;
function increase($value)
{
	$value+= 1;
	echo $value;// 2
}

// increase the counter
increase($counter);
echo $counter; // 1
?>

VARIABLE LENGTH FUNCTION:
<?php
function add(...$numbers){
    $sum = 0;
    foreach($numbers as $n){
        $sum += $n;
    }
    return $sum;
}
echo add(1,2,3,4);
?>

VARIABLE VARIABLE:
<?php 
$a = 'Hi';
$$a = 'Welcome Aspire';
echo "$a ${$a} ";
?>
  

<?php 
$x = 1;
$sum = function(int|float ...$numbers) use($x):int|float {
    echo $x;
    return array_sum($numbers)
};
echo $sum(1,2,3,4);
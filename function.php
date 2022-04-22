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
<?php

$chocolates = [
	'kitkat',
	'dairymilk',
	'popins'
];

array_shift($chocolates, 'lollypop');

print_r($chocolates);
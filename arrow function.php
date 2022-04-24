<?php
$c = 1;
$fn = fn($a) => fn($b) => $a * $b + $c;
var_export($fn(5)(10));
?>
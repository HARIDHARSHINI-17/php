<?php

function given() {
    yield 1;
    yield 2;
    return 3;
}
$gen = given();
foreach ($gen as $val) {
    echo $val, PHP_EOL;
}
echo $gen->getReturn(), PHP_EOL;
?>
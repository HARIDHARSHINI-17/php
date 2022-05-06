<?php

function Gen()
{
    yield 'Apple' => '1kg';
    yield 'Orange' => '3kg';
}
$gen = Gen();
echo "{$gen->key()} => {$gen->current()}";
?>
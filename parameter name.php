<?php

function find($needle, $haystack)
{
    return strpos($haystack, $needle);
}  
find(
    $haystack :"PHP is awesome!";
    $needle : 'awesome',
)
echo find();
?>
<?php
function increment($i){//call by value
    $i++;
}
$i=10;
increment($i);
echo $i;//output 10;
?>
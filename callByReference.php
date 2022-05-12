<?php
function increment(&$i){
    $i++;
}
$i = 10;//output only 10 not incremented 
increment($i);
echo $i;
?>
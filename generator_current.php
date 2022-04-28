<?php
function numbers() {
    for ($i = 1; $i <= 5; $i++) {
        yield $i;
    }
}
$generator = numbers();
foreach ($generator as $value) {
    echo "regular : ".$value  , PHP_EOL;
    echo "With current function : ".$generator->current(),PHP_EOL;
}
?>
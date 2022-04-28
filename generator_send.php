<?php
function msg() {
    echo "Hi".PHP_EOL;
    while (true) {
        $string = yield;
        echo $string.PHP_EOL;
    }
}

$msg = msg();
$msg->send('Welcome Aspire');
?>
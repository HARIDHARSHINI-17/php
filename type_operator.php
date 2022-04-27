<?php
class Mymsg
{
}

class Notmymsg
{
}
$a = new Mymsg;

var_dump($a instanceof Mymsg);#bool(true)
var_dump($a instanceof Notmymsg);#bool(false)
?>
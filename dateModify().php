<?php
$date = date_create("11,05,2022");
date_modify($date,"+20 days");
echo date_format($date,"Y-m-d");
?>
<?php
$date = date_create("2022/12/10");
date_add($date,date_interval_create_from_date_string("2 days"));
echo date_format($date, "Y-m-d");
?>
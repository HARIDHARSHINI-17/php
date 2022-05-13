<?php
$date = date_create("2022-11-20");
date_sub($date,date_interval_create_from_date_string("5 days"));
echo date_format($date,"Y-m-d");
?>
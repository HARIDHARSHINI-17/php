<?php
$firstDate = date_create("2022-03-10");
$secondDate = date_create("2022-04-10");
$diff=date_diff($firstDate,$secondDate);
echo $diff->format("%R%a days");
?>
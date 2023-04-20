<?php
$ddate = "2023-04-20";
$date = new DateTime($ddate);
$week = $date->format("W");
echo "Weeknummer: $week";

?>
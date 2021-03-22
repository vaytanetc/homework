<?php
$year=$_GET['Year'];
$text="";
if (is_numeric($year)) {
    if ($year % 400 == 0 or $year % 100 == 0 or $year % 4 == 0) {
        $text = " год високосный";}
    else {
        $text = " год не високосный";}}
else {
    $text = "  Неверные данные";}
echo $year;
echo "$text";
?> 
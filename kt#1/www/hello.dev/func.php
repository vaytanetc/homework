<?php
$year=$_GET['Year'];
$text="";
if (is_numeric($year)) {
    if ($year % 400 == 0 or $year % 100 == 0 or $year % 4 == 0) {
        $text = " ДА";}
    else {
        $text = " НЕТ";}}
else {
    $text = " ОШИБКА ВО ВХОДНЫХ ДАННЫХ";}
echo $year;
echo "$text";
?> 

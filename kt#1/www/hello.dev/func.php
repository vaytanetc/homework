<?php
$year=$_GET['Year'];
if (is_numeric($year)) {
    if ($year % 400 == 0 or $year % 100 == 0 or $year % 4 == 0) {
        echo " ДА";}
    else {
        echo " НЕТ";}}
else { 
    echo " ОШИБКА ВО ВХОДНЫХ ДАННЫХ";}
?> 

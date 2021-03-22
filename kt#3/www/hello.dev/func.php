<?php
$hip=$_GET['hip'];
$smuzi=$_GET['smuzi'];
if (is_numeric($smuzi) and is_numeric($hip)) {
    $kol=(int)($smuzi / $hip);
    echo "Количество смузи =  $kol";}
else { echo "Неверные входные данные";}
?> 
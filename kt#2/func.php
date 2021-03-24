<?php
$array = array("abcd", "bar", "abcdhc", "abc");
$pref = "abcd";
$itog = array();

function f($pref,$array){
    $itog = array();
    foreach ($array as &$value) {
        $stroka = substr($value, 0, strlen($pref));
        if($stroka === $pref){
            array_push($itog , $value);}}
    return $itog;}

function printing($array){
    foreach ($array as &$value) {
        echo "$value \n";}}

$itog = f($pref,$array);
printing($itog);
?>
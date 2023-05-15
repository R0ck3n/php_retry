<?php

function codeWars() {
    return XO("oox") ;
}


function XO(string $s):array {
    $xCount = 0;
    $oCount = 0;

    $array1= str_split($s);
    $array2 = [...$array1, 'yolo', ...$array1];
    
    return $array2;
}
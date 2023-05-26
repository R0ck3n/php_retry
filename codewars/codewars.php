<?php

function codeWars() {
    return findIt([1,1,2,-2,5,2,4,4,-1,-2,5]) ;
}



function findIt(array $seq) {
    $newArray = array_flip(array_unique($seq));

    foreach ($newArray as $key => $val ){
        $newArray[$key] = 0;
    }

    foreach ($seq as $value){
        $newArray[$value] += 1;
    }

    foreach ($newArray as $key =>$repeat){
        if ($repeat %2 !== 0) return $key;
    }

}
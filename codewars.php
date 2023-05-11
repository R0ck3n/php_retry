<?php

function codeWars() {
    return reverseWords('this is sparta!');
}


function reverseWords(string $str): string {
    return implode(" ", array_map('strrev', explode(" ",$str)));
}
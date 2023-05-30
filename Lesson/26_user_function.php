<?php

$postalCode = '123-45678';

// camelCase（頭文字は小文字、単語毎の頭文字は大文字）
// checkPostalCode()

// snakeCase
// check_postal_code()

function checkPostalCode($str){
    $replaced = str_replace('-','', $str);
    $length = strlen($replaced); //strlenは数を数える

    var_dump($length);
    if($length === 7){
        return true;
    }
    return false;
}

var_dump(checkPostalCode($postalCode));

?>
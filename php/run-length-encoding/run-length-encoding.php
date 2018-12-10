<?php

function encode($input)
{   
    if(!$input) {
        return "";
    }
    $count = 0;
    $output = "";
    $inputArray = str_split($input);
    $strCheck = $inputArray[0];
    foreach($inputArray as $letter) {
        if ($strCheck == $letter){
            $count++;
        } else {
            if ($count > 1) {
               $output .=$count;
            } 
            $output .= $strCheck;
            $count = 1;
        }

        $strCheck = $letter;
    }

    if($count > 1){
        $output .=$count;
    }
    $output .= $letter;

    return $output;
}

function decode($input)
{
    return preg_replace_callback('/([1-9]*)(\w|\s)/', function($match) {
        return ($match[1] ? str_repeat($match[2], $match[1]) : str_repeat($match[2],1));
    }, $input);
}
 

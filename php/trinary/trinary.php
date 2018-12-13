<?php

function toDecimal ($str)
{
  if (preg_match('/^[0-2]*$/', $str)) {    
    $arr = str_split(strrev($str));
    $value = 0;
    for ($i = count($arr)-1; $i >= 0; $i--) {   
      $value += $arr[$i]* 3 ** $i;
      }  
    return $value;
  }
  return 0;
}

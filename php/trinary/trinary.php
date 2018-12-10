<?php

function toDecimal ($str)
{
  if (!preg_match('/^[0-2]*$/', $str)) {
    return 0;
  }
  $arr = str_split($str);
  $value = 0;

  for ($i = 0; $i < count($arr); $i++) {
      
    $value += $arr[$i]*pow(3,count($arr)-1-$i);

    }
    
  return $value;
}

<?php

function sieve($n)
{
$primes = [];
for($i = 2; $i <= $n; $i++)
  {
  if($i != 4 && $i != 6 && $i <= 7)
    {
      array_push($primes, $i);
    }else{
      if($i > 7 && $i % 2 != 0 && $i % 3 != 0 && $i % 5 != 0 && $i % 7 !=0 )
          {
            array_push($primes, $i);
          }
      }
  }
  return $primes;
}
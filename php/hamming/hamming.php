<?php

//
// This is only a SKELETON file for the "Hamming" exercise. It's been provided as a
// convenience to get you started writing code faster.
//

function distance($a, $b)
{
   $arrayA = str_split($a);
   $arrayB = str_split($b);
   if(count($arrayA) != count($arrayB))
   {
    throw new InvalidArgumentException('DNA strands must be of equal length.');
   }
   return count (array_diff_assoc($arrayA,$arrayB));
}

// distance('GAGCCTACTAACGGGAT', 'CATCGTAATGACGGCCT');
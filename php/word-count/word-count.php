<?php

function wordCount ($phrase)
{
  $wordArray = str_word_count($phrase, 1, '0..3');
  $count = array_count_values(array_map('strtolower', $wordArray));
  return $count;
}
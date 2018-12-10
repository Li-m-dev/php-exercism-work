<?php

class Bob
{
  public function respondTo ($str)
  {
    $str = trim($str);
    switch (true){
      case (empty($str)):
      return "Fine. Be that way!";
      
      case (preg_match('/\?$/', $str) === 1 && strtoupper($str) == $str && preg_match('/\p{L}/', $str) === 1):
      return "Calm down, I know what I'm doing!";
      
      case (preg_match('/\?$/', $str) === 1):
      return "Sure.";
      
      case (strtoupper($str) == $str && preg_match('/\p{L}/', $str) === 1):
      return "Whoa, chill out!";

      default:
      return "Whatever.";
    }
  }  
}
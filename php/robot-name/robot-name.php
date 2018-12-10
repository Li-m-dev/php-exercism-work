<?php

class Robot
{
  private $name;
  private $names;

  public function __construct()
    {
      $this->names = [];
      $this->name = '';

      $this->reset();
    }
  
  public function getName ()
  {
  return $this->name;
  }

  public function reset ()
  {
    $newName = chr(rand(65,90)).chr(rand(65,90)).rand(0,9).rand(0,9).rand(0,9);
    if (!in_array($newName, $this->names)){
      $this->name = $newName;
      array_push($this->names, $newName);
    } else{
      $this->reset();
    }
  }

}
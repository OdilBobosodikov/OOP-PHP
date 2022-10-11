<?php

class Model
{

 protected $dates = [];

 public function __get($property)
 {
    if(in_array($property, $this->dates))
    {
      
        return new DateTime($this->$property);
    }
    return $this->$property;
 }
}


<?php

class Validator
{
  protected $errors = []; 

  public function validate()
  {
    $this->errors[] = 'The email is not valid';
  }

  public function fails()
  {
    return !empty($this->errors);
  }

}

$validator = new Validator();

$validator->validate();

if($validator->fails())
{
  echo "The error has occured!";
}
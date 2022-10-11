<?php


//staic variables shares common memory location and does not belong to class
//we need to be careful while using this tool

class SignUpForm
{

  public static $rules = [
    "username" => "required",
    "email" => "required|email",
    "passport" => "required|min:7"
  ];
}

$validator->validate($request, SignUpForm::$rules);
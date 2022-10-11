<?php

class User
{
  protected $username;

  public function SetUsername(string $username = 'JohnD')
  {
    $this->username = $username;
  }

  public function GetUsername()
  {
    return $this->username;
  }
}

$user = new User();
$user->SetUsername('OdiljonB');
echo $user->GetUsername();

<?php 

trait Authenticatable
{
    protected $password = '123';
    public function getPassword()
    {
    return $this->password;
    }
    public function SetPassword(string $password)
    {
        $this->password = $password;
    }
}

class User
{
  use Authenticatable;
}

class Admin
{
  use Authenticatable;
}

$user = new User();

echo $user->getPassword();
$user->SetPassword('qweqweqwe');
echo $user->getPassword();
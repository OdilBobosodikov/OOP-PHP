<?php
abstract class Service
{
  abstract function getURLRedirect();
}

class FacebookService extends Service 
{

  public function getURLRedirect()
  {
    return 'some url';
  }
}

class TwitterService extends Service 
{

  public function getURLRedirect()
  {
    return 'some url';
  }
}

$facebook = new FacebookService;
$facebook->getURLRedirect();
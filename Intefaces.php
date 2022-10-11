<?php

class Task
{
   
}

interface TaskStorageInterface
{
  public function get(int $d);
  public function store(Task $task);
}
interface ResponceInterface
{

}
class DBTaskStorage implements TaskStorageInterface, ResponceInterface
{
  public function get(int $id)
  {

  }
  public function store(Task $task)
  {

  }
}
<?php

use Todo\Models\Task;
use Todo\TaskManager;
use Todo\Storage\DatabaseTaskStorage;

require 'vendor/autoload.php';


$db = new PDO('pgsql:host=127.0.0.1;dbname=todo', 'odiljon', 'Qtunisalive_1');

$storage = new DatabaseTaskStorage($db);
$manager = new TaskManager($storage);

$task = new Task();
$task->setDescription("Learn machine learning");
$task->setDue(new DateTime("+4 weeks"));
$task->setComplete();

$manager->addTask($task);

var_dump($manager->getTasks());
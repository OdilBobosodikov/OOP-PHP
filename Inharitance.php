<?php
require 'models/UserModel.php';

$user = new UserModel();
$data = $user->createdAt;
var_dump($data);
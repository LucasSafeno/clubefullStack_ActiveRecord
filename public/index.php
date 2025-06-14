<?php
require '../vendor/autoload.php';

use app\database\models\User;

$user = new User;
$user->firstName = 'Lucas';
$user->lastName = 'Tenório';
$user->id = 1;


var_dump($user);
// $user->update(new Update);

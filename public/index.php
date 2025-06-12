<?php
require '../vendor/autoload.php';

use app\database\models\User;

$user = new User;
$user->firstName = 'Lucas';
$user->lastName = 'Tenório';

var_dump($user);

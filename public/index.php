<?php
require '../vendor/autoload.php';

use app\database\models\User;
use app\database\activerecord\Update;
use app\database\activerecord\UpdateUser;

$user = new User;
$user->firstName = 'Lucas';
$user->lastName = 'Tenório';
$user->id = 1;

$user->update(new Update);

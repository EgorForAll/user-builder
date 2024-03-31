<?php

use Builder\User;

require __DIR__ . "/User.php";

$user1 = (new User())->setName()->setSurname()->setProfession();
$user2 = (new User())->setName()->setSurname()->setProfession();
print_r($user1);
print_r($user2);

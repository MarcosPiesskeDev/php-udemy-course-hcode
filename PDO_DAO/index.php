<?php

require_once('configRequire.php');

use models\User\User;
use repositories\UserRepository\UserRepository;

/*$root = new User();

$root->loadById(2);
echo $root;

$userList = User::getUserList();
echo json_encode($userList);

$search = User::search("marcos");
echo json_encode($search);*/

$root = new User();
$repo = new UserRepository(); 
$root->setUsername('sometest');
$root->setPassword('update_works_:D');
//$repo->createUser($root);

//$repo->updateUser($root, 2);
$repo->deleteUser(5);
echo "<br>";
echo $repo->getAllUser();


//print_r($repo);


<?php

namespace interfaces\IUser;

use models\User\User;

interface IUser{
    
    public function createUser(User $user);
    
    public function getAllUser();

    public function getUserById($id);

    public function updateUser(User $user, $id);

    public function deleteUser($id);
}
<?php
namespace repositories\UserRepository;

use interfaces\IUser\IUser;
use models\User\User;
use utils\ConnectionUtil\ConnectionUtil;

class UserRepository implements IUser{
    
    public function createUser(User $user)
    {
        $sql = new ConnectionUtil();
        $sql->query("INSERT INTO user(username, password) VALUES ('".$user->getUsername()."', '".$user->getPassword()."')");
    }

    public function getAllUser()
    {            
        $sql = new ConnectionUtil();

        $results = $sql->select("SELECT id, username, password, date_register FROM user");

        echo "<br>";

        if (!empty($results)){

            for ($i = 0; $i < count($results); $i++){

            $row[] = $results[$i];
           
            }
             return json_encode(['user'=>$row]);
        }
    }

    public function getUserById($id)
    {
        $sql = new ConnectionUtil();
        $user = new User();

        $result = $sql->select("SELECT id, username, password, date_register FROM user WHERE id = :ID", array(
            ":ID"=>$id
        ));

        if (!empty($result)){

            $row = $result[0];
            
            $user->setId($row['id']);
            $user->setUsername($row['username']);
            $user->setPassword($row['password']);
            $user->setDateRegister($row['date_register']);

            return $user;
        }
    }

    public function updateUser(User $user, $id)
    {
        $sql = new ConnectionUtil();
        $result = $sql->select("SELECT username FROM user WHERE id = '".$id."'");

        if (!empty($result)){
            $sql->query("UPDATE user SET username = '".$user->getUsername()."', password = '".$user->getPassword()."' WHERE id = '".$id."'");
        }else{
            return "Doesn't exist any user with this id";
        }
    }

    public function deleteUser($id)
    {
        $sql = new ConnectionUtil();
        $sql->query("DELETE FROM user WHERE id = '".$id."'");
    }
}
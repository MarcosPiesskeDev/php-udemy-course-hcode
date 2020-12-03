<?php

class Sql extends PDO {

    private $conn;

    public function __construct()
    {
        $db = 'mysql';
        $host = '127.0.0.1';
        $db_name= 'db_php_7';
        $db_user= 'root';
        $db_password = 'root';
        
        $this->conn = new PDO($db.':host='.$host.';dbname='.$db_name, $db_user, $db_password);
    }

    private function setParams($statement, $parameters = array())
    {
        foreach($parameters as $key => $value){
            $statement->bindParam($key, $value);
        }
    }

    private function setParam($statement, $key, $value)
    {
        $statement->bindParam($key, $value);
    }

    public function query($rawQuery, $params = array())
    {
        $stmt = $this->conn->prepare($rawQuery);

        $this->setParams($stmt, $params);

        $stmt->execute();

        return $stmt;
    }

    public function select($rawQuery, $params = array()) : array
    {
        $stmt = $this->query($rawQuery, $params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
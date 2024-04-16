<?php

class Database
{
    public function connect()
    {
        //users - id, firstname, lastname, email, password
        $string = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME;
        $con = new PDO($string, DB_USER, DB_PASS);

        return $con;

    }

    public function query($query, $data = [])
    {
<<<<<<< HEAD

        $con = $this->connect();
        //stm = statement
        //1. CRUD
        
        $stm = $con->prepare($query);

        $check = $stm->execute($data);

        if($check) {
            $result = $stm->fetchAll(PDO::FETCH_OBJ);

        if(is_array($result) && count($result) > 0) {
            return $result;
=======
        $con = $this->connect();
        $stm = $con->prepare($query); // select * from (table) 

        $check = $stm->execute($data);

        if ($check){
            $result = $stm->fetchAll(PDO::FETCH_OBJ);
        
            if(is_array($result) && count($result) > 0){
                return $result;
>>>>>>> Julianna
            }
        }
        return false;
    }

    public function where($data)
    {
        $keys = array_keys($data);
<<<<<<< HEAD
        $query = "select *from users where ";
=======
       $query = "select * from users where "; 
>>>>>>> Julianna
    }
}
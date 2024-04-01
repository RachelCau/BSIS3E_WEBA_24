<?php

class Database
{
    public function connect()
    {
        //users - id, firstname, lastname, email, password
        //$string = "mysql:host=localhost;dbname=mvc_bsis3e";
        // $con = new PDO($string, 'root', '');
        $string = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME;
        $con = new PDO($string, DB_USER, DB_PASS);
        return $con;

    }

    public function query($query, $data = []) //query("Select * from users")
    {

        $con = $this->connect();
        //stm = statement
        //1. CRUD
        
        $stm = $con->prepare($query); //Select * from users

        $check = $stm->execute($data);

        if($check) 
        {
            $result = $stm->fetchAll(PDO::FETCH_OBJ);
            
            if(is_array($result) && count($result) > 0) 
            {
                return $result;
            }
        }
        return false;
    }

    public function where($data)
    {
        $keys = array_keys($data);
        $query = "select *from users where ";
    }
}

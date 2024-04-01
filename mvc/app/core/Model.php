<?php

class Model extends Database
{
<<<<<<< HEAD
    public function __construct()
    {
        if (!property_exists($this, 'table'))
        {
            $this->table = strtolower($this::class) . 's';
=======

    public function __construct()
    {
        if (!property_exists($this, 'table')) {        

            $this->table = strtolower($this::class) . 's'; // users // connects to Controllers Home.php
>>>>>>> Olalia
        }
    }

    public function findAll()
    {
<<<<<<< HEAD
        $query = "select * from $this->table"; //dynamic

        $result = $this->query($query);

        if ($result)
        {
=======
        $query = "select * from $this->table";

        $result = $this->query($query);

        if ($result) {
>>>>>>> Olalia
            return $result;
        }
        return false;
    }

<<<<<<< HEAD
    public function where($data, $data_not = [])
    {
        $keys = array_keys($data);
        $keys_not = array_keys($data_not);

        $query ="select * from $this->table where ";

        foreach ($keys as $key)
        {
            $query .= $key . " = :" . $key . " && ";
        }
        
        foreach ($keys_not as $key)
        {
=======

    public function where($data, $data_not = [])
    {

        $keys = array_keys($data);
        $keys_not = array_keys($data_not);

        $query = "select * from $this->table where ";

        foreach ($keys as $key) {
            $query .= $key . " = :" . $key . " && ";
        }

        foreach ($keys_not as $key) {
>>>>>>> Olalia
            $query .= $key . " != :" . $key . " && ";
        }

        $query = trim($query, " && ");
<<<<<<< HEAD
        show($query);
        //$query = "select * from users";

        $data = array_merge($data, $data_not);
        $result = $this->query($query, $data);

        if ($result)
        {
=======
        $data = array_merge($data, $data_not);
        $result = $this->query($query, $data);

        if ($result) {
>>>>>>> Olalia
            return $result;
        }
        return false;
    }

    public function insert($data)
    {
<<<<<<< HEAD
        //insert into  users (firstname) values (:firstname) [in PDO use colon while c# @]
        $columns = implode(',', array_keys($data));
=======
        $columns = implode(', ', array_keys($data));
>>>>>>> Olalia
        $values = implode(', :', array_keys($data));
        $query = "insert into $this->table ($columns) values (:$values)";
        show($query);
        $this->query($query, $data);

        return false;
    }

    public function update($id, $data, $column = 'id')
    {
        $keys = array_keys($data);
        $query = "update $this->table set ";

<<<<<<< HEAD
        foreach ($keys as $key)
        {
=======
        foreach ($keys as $key) {
>>>>>>> Olalia
            $query .= $key . " = :" . $key . ", ";
        }

        $query = trim($query, ", ");

        $query .= " where $column = :$column";

        $data[$column] = $id;
        $this->query($query, $data);

        return false;
    }

    public function delete($id, $column = 'id')
    {
        $data[$column] = $id;
<<<<<<< HEAD
        $query = " delete from $this->table where $column = :$column";
=======
        $query = "delete from $this->table where $column = :$column";
>>>>>>> Olalia

        $this->query($query, $data);

        return false;
    }
}
<<<<<<< HEAD

// public function where($data, $data_not = [])
//     {
//         //show($data);
//         $keys = array_keys($data);
//         //show($keys);
//         $query ="select * from users where "; // firstname = :firstname && lastname = :lastname
//         show($query);
//         foreach ($keys as $key)
//         {
//             $query .= $key . " = :" $key . " && ";
//         }
//         //show($query);
//     }
// }

=======
>>>>>>> Olalia

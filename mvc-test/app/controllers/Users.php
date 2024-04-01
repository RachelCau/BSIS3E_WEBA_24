<?php

class Users extends Controller 
{
    public function index()
    { 
        if (isset($_POST['btnsubmit'])){
        $user = new User();  
        $arr['firstname'] = $_POST['firstname'];
        $arr['lastname'] = $_POST['lastname'];
        $arr['email'] = $_POST['email'];
        $arr['password'] = $_POST['password'];

        $user->insert($arr);
        }
        $this->view('users');
    }
}
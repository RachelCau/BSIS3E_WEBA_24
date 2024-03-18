<?php
//Extends is for inheritance so you can use the view method
class Home extends Controller
{
    public function index()
    {
        $user = new User(); // This will be the new Table.
        $arr['firstname'] = 'Leeroi';
        $arr['lastname'] = 'Coles';
        // $arr['email'] = 'js@mailmail.com';
        // $arr['password'] = 'meowit';
        $data = $user->update('5', $arr); // this is how you do the update '5' is the TABLE ID, and $arr is the data

        // delete
        // $data = $user->delete('5', $arr);

        // insert
        // $data = $user->update($arr);
        $data = $user->findAll();
        show($data);

        $this->view('home');
    }
}



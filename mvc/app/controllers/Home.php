<?php
<<<<<<< HEAD
//Extends is for inheritance so you can use the view method
class Home extends Controller
{
    public function index()
    {
        
=======

class Home extends Controller
{
    public function index()
    {   
        $user = new User();
        $arr['firstname'] = 'Renato Jr.'; 
        $arr['lastname'] = 'Ren'; 
       // $arr['email'] = 'ren@gmailcom'; 
        //$arr['password'] = '1234'; 
        $data = $user->update('1',$arr);
        $data = $user->findAll();
        show($data);

>>>>>>> Julianna
        $this->view('home');
    }
}



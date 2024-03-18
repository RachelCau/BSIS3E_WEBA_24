<?php

class Home extends Controller
{
    public function index()
    {   
        $user = new User();
        $arr['firstname'] = 'Julianna'; 
        $arr['lastname'] = 'Torres'; 
        $arr['email'] = 'yanie@gmailcom'; 
        $arr['password'] = '1234'; 
        $data = $user->update('2',$arr);
        show($data);

        $this->view('home');
    }
}



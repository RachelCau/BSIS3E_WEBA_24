<?php

class Home extends Controller 
{
    public function index()
    {
        $model = new Model();
        $arr[' firstname'] = 'John';
        $arr['lastname'] = 'Doe';
        $arr['email'] = 'jd@gmail.com';
        $arr['password'] = '1234';
        $data = $user->update($arr);
        show($data);
        
        $this->view('home');
    } 
    
}
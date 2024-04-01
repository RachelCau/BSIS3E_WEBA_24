<?php

class Home extends Controller 
{
    public function index()
    {
        // $model = new Model();
        // $arr[' firstname'] = 'Pat';
        // $arr['lastname'] = 'Chui';
        // $arr['email'] = 'patchui@gmail.com';
        // $arr['password'] = '089524';
        // $data = $user->update($arr);
        // show($data);
        
        $this->view('home');
    } 
    
}
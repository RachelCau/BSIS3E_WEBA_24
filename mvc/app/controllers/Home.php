<?php

class Home extends Controller
{
    public function index()
    {
        // $user = new User(); //User class
        // $arr['firstname'] = 'Rachelle';
        // $model = new Model();
        // $arr['Lastname'] = 'Arnaiz';
        // $arr['email'] = 'mg@gmail.com';
        // $arr['password'] = '515245';
        //$arr2['firstname'] = 'Rose';
        //$data = $model->where($arr);// $data = $model->findAll(); 
        // $data = $user->update('1', $arr,); // , 'lastname' [table

        // for delete
        // $data = $user->delete('6');   
        $user = new User();
        $arr['firstname'] = 'Mark Gil';
        $arr['lastname'] = 'Arnaiz';
        $arr['email'] = 'mg@gmail.com';
        $arr['password'] = '515245';
        $data = $user->insert($arr);
        $data = $user->findAll();
        show($data);

        $this->view('home');
    }

    // public function test()
    // {
    //     echo 'Ochige!';
    // }
}

// class About extends Controller
// {
//     public function index()
//     {
//         $this->view('about');
//     }
// }
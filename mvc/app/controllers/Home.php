<?php

class Home extends Controller
{
    public function index()
    {
        $model = new Model();
        $arr['firstname'] = 'Rachel';
        //$arr2['firstname'] = 'Rose';
        $data = $model->where($arr);// $data = $model->findAll(); 
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
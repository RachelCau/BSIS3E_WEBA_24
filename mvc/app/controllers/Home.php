<?php
//Extends is for inheritance so you can use the view method
class Home extends Controller
{
    public function index()
    {
        $model = new Model();
        $arr['lastname'] = 'user';
        $data = $model->where($arr);
        show($data);

        $this->view('home');
    }
}



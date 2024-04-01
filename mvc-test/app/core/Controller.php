<?php 

class Controller
{
    public function view($name, $data = [] /*optional w or w/o value*/)
    {
        if(!empty($data)){
            extract($data);
        }
        if (file_exists('../app/views/' . $name . '.php'))
        {
            require '../app/views/' . $name . '.php';
        } else {
            require '../app/views/404.php';
        }
     }
}
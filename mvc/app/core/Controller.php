<?php 

class Controller
{
<<<<<<< HEAD

    public function view($name, $data = [])
    {
        if (!empty($data)) {
            extract($data);
        }
        
        if (file_exists('../app/views/'. $name . '.php')) {
=======
    public function view($name)
    {
        if (file_exists('../app/views/' . $name . '.php'))
        {
>>>>>>> Julianna
            require '../app/views/' . $name . '.php';
        } else {
            require '../app/views/404.php';
        }
<<<<<<< HEAD
    } 
=======
     }
>>>>>>> Julianna
}
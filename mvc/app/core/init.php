<?php
<<<<<<< HEAD
    require 'functions.php';
    require 'Controller.php';
    require 'App.php';
    require 'Database.php';
    require 'Model.php';

    spl_autoload_register(function ($class_name)
        {
            require '../app/models/' . $class_name . '.php';
        });

    // auto register sa class_namee
=======

require 'config.php';
require 'functions.php';
require 'Database.php';
require 'Controller.php';
require 'Model.php';
require 'App.php';

//automatic register ng classname 
spl_autoload_register(function ($class_name) {

    require '../app/models/' .$class_name . '.php';
});
>>>>>>> Olalia

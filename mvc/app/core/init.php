<?php
    
    require 'config.php';
    require 'functions.php';
    require 'Database.php';
    require 'Controller.php';
    require 'Model.php';
    require 'App.php';

    // auto register sa class_name
    spl_autoload_register(function ($class_name) 
    {
    require '../app/models/' .$class_name . '.php';
    });

    

<?php
//Extends is for inheritance so you can use the view method
class Home extends Controller
{
    public function index()
    {
        
        $this->view('home');
    }
}
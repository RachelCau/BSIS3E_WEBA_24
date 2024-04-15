<?php

class Users extends Controller
{
    public function index()
    {
        // if (isset($_POST['registerbtn'])) {

        //     $user = new User();
        //     $arr['firstname'] = $_POST['firstname'];
        //     $arr['lastname'] = $_POST['lastname'];
        //     $arr['email'] = $_POST['email'];
        //     $arr['password'] = $_POST['password'];

        //     $user->insert($arr);
        // }
        // $this->view('users');

        $x = new User();

        $rows = $x->findAll();
        // show($rows);


        $this->view('users/index', [
            'users' => $rows
            // 'users' => $x->findAll()
        ]);
    }

    public function create(){

        $x = new User();
    
        if(isset($_POST['create'])) {
    
          $arr['firstname'] = $_POST['firstname'];
          $arr['lastname'] = $_POST['lastname'];
          $arr['email'] = $_POST['email'];
          $arr['password'] = $_POST['password'];
      
          $x->insert($arr);
    
          redirect('users');
        }
        
        $this->view('users/create');
      }

      public function edit($id) {

        $x = new User();
    
        $arr['id'] = $id;
    
        $row = $x->first($arr);
    
        $this->view('users/edit', [
          'user' => $row
        ]);
      }
}

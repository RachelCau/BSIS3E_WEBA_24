<?php

class Users extends Controller
{
  public function index()
  {
    $x = new User();
    $rows = $x->findAll();

    $this->view('users/index', [
      'users' => $rows
    ]);
  }
// ------------------------------------------------------------------------
  public function create(){

    $x = new User();

    if(count($_POST) > 0) {
    
      // $arr['firstname'] = $_POST['firstname'];
      // $arr['lastname'] = $_POST['lastname'];
      // $arr['email'] = $_POST['email'];
      // $arr['password'] = $_POST['password'];
      $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
      
      $x->insert($_POST);

      redirect('users');
    }
    
    $this->view('users/create');
  }
// ------------------------------------------------------------------------
  public function edit($id) {

    $x = new User();

    $arr['id'] = $id;

    $row = $x->first($arr);

    if(count($_POST) > 0) {

      // $arr['firstname'] = $_POST['firstname'];
      // $arr['lastname'] = $_POST['lastname'];
      // $arr['email'] = $_POST['email'];
      // $arr['password'] = $_POST['password'];

      $x->update($id, $_POST);

      redirect('users');
    }

    $this->view('users/edit', [
      'user' => $row
    ]);
  }

  public function delete($id)
  {
    $x = new User();
    $arr['id'] = $id;
    $row = $x->first($arr);

    if (count($_POST) > 0) {

      $x->delete($id);
      
      redirect('users');
    }

    $this->view('users/delete', [
      'user' => $row
    ]);
  }
}
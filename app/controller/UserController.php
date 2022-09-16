<?php 
namespace app\controller;

use app\model\users;


class UserController extends users{

    public function SetDados(){
        $name = "Alex";
        $users = new UserController ();
        $users->setName($name);
    
      }

    public function getDados(){

        return $this->getName();
    }



    
  
}
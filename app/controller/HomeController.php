<?php

namespace app\controller;
use app\controller\UserController;

class HomeController{



  public function index(){
     $users = new UserController ();    

     return $users->getName(); 

     
  }  



}
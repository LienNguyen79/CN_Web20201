<?php
require_once('controllers'. DS .'base_controller.php');

class HomeController extends BaseController{
    function __construct()
    {
        $this->folder = 'authentication';
    }
    function login(){
        $this->render('login');
    }
    function register(){
        $this->render('register');
    }
    public function error()
    {
      $this->render('error');
    }
    public function home(){
      $this->render('home');
    }

}
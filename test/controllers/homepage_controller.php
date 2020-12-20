<?php
require_once('controllers' . DS .'base_controller.php');
class HomepageController extends BaseController{
    function __construct()
    {
        $this->folder = 'homepage';
        
    }
    function home(){
        $this->render('home');
    }
    function about(){
        $this -> render('about');
      }
}
<?php
require_once('controllers' . DS .'base_controller.php');
require_once('models'. DS .'word.php');
class HomepageController extends BaseController{
    function __construct()
    {
        $this->folder = 'homepage';
        
    }
    function home(){
        $this->render('home'); 
    }

    public function search(){
      $searchWord = $_POST['searchWord']; 
      //echo $searchWord;
      if (strlen(trim($searchWord)) > 1) {
         $words = new Word; 
         $data = $words->find($searchWord);
         $data = array('words' => $data);
         $this->render('search', $data);
      }
    }
    
    public function upload(){

      $this->render('word_form');
    }
    

    public function about(){
      $this->folder = 'homepage';
        $this -> render('about');
      }

      public function contact(){
        $this->folder = 'homepage';
        $this -> render('contact');
      }
}
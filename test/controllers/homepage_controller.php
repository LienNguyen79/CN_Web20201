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
        if (!empty($_POST['searchSubmit'])){
            $searchWord = $_POST['searchWord']; 
            if (strlen(trim($searchWord)) > 1){
               $words = new Word; 
               $data = $words->find($searchWord);
               $data = array('words' => $data);
                //$this->render('gender_search',$data);
                header("Location: ../test/index.php?controller=learn&action=gender_search");
            }
        } 
    }

    public function upload(){
        $this->render('word_form');
      }
    

    public function about(){
        $this -> render('about');
      }

      public function contact(){
        $this -> render('contact');
      }
}
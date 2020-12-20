<?php
require_once('controllers' . DS .'base_controller.php');
require_once('models'. DS .'word.php');
require_once('controllers' . DS .'homepage_controller.php');
class LearnController extends BaseController{
    function __construct(){
        $this->folder = 'learn';       
    }

    function gender(){
        $words = new Word;
        $data = $words ->genderWord();
        $data = array('words' => $data);
        $this->render('gender',$data);
    }

    function word_form(){
        $this->render('word_form');
        if(isset($_POST['submit']))
        {
        $path = "../test/assets/sound/"; //file to place within the server
        $valid_formats1 = array("mp3", "ogg", "flac"); //list of file extention to be accepted
        if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
            {
                $file1 = $_FILES['sound']['name']; //input file name in this code is file1
                $size = $_FILES['sound']['size'];

                if(strlen($file1))
                    {
                        list($txt, $ext) = explode(".", $file1);
                        if(in_array($ext,$valid_formats1))
                        {
                            $actual_image_name = $txt.".".$ext;
                            $tmp = $_FILES['sound']['tmp_name'];
                            if(move_uploaded_file($tmp, $path.$actual_image_name))
                                {
                                    //viết hàm lưu vào cơ sở dữ liệu
                                }
                            else
                                echo "failed";            
                        }
                }
            }
        }   
    }

}
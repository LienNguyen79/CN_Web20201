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

    function word_form()
    {    $this->render('word_form');
        if(isset($_POST['submit']))
        {
            $pathSound = "../test/assets/sound/"; //file to place within the server
            $valid_formats_sound = array("mp3", "ogg", "flac"); //list of file extention to be accepted
            $pathImage = "../test/assets/images/word_images/";
            $valid_formats_image = array("img", "png", "gif");
            if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
            {   $word = $_POST['word'];
                $type = $_POST['type'];
                $mean = $_POST['mean'];
                $sound="";
                $image="";
                $fileImage = $_FILES['image']['name'];
                $fileSound = $_FILES['sound']['name']; //input file name in this code is fileSound
                
                $size = $_FILES['sound']['size'];
                $note = $_POST['note'];
                if ($word=="" || $mean==""){echo '<p style="color: red; text-align: center">
                    Không được để trống từ và ý nghĩa
                        </p>';}
                else 
                {
                    if(strlen($fileSound) )
                        {
                            list($txt, $ext) = explode(".", $fileSound);
                            if(in_array($ext,$valid_formats_sound))
                            {
                                $actual_sound_name = $txt.".".$ext;
                                $tmp = $_FILES['sound']['tmp_name'];
                                //echo $tmp;
                                if(move_uploaded_file($tmp, $pathSound.$actual_sound_name))
                                    {   
                                        $sound= $pathSound.$fileSound;                                
                                    }
                                else
                                    echo "failed";            
                            }
                        }
                    
                    if(strlen($fileImage) )
                    {
                        list($txt, $ext) = explode(".", $fileImage);
                        if(in_array($ext,$valid_formats_image))
                        {
                            $actual_image_name = $txt.".".$ext;
                            $tmp = $_FILES['image']['tmp_name'];
                            if(move_uploaded_file($tmp, $pathImage.$actual_image_name))
                                {   
                                    $image= $pathImage.$fileImage;   
                                }
                            else
                                echo "failed";            
                        }
                    }
                    $data = new Word;
                    $data = $data->addWord($word, $type, $mean,$image,$sound,$note);
                    if ($data){echo '<p style="color: green; text-align: center">
                        Thêm từ thành công.
                            </p>';
                            echo '<p style="color: green; text-align: center">
                            Hãy xem trong :
                              </p>  ';
                    echo '<a  href = "../test/index.php?controller=learn&action=gender"><p style="color: red; text-align: center"> Kho từ của bạn</p> </a>';}
                }
            }

        }
        //echo $image;
    
    } 
    function test(){  
        $this->render('test');
    }
}


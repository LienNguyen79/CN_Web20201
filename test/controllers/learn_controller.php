<?php
require_once('controllers' . DS .'base_controller.php');
require_once('models'. DS .'word.php');
require_once('controllers' . DS .'homepage_controller.php');

class LearnController extends BaseController{
    public $id = "";
    function __construct(){
        $this->folder = 'learn';       
    }
   
    public function gender(){
        $words = new Word;
        $data = $words ->genderWord();
        $data = array('words' => $data);
        $this->render('gender',$data);
        
        //echo $id;
        if(isset($_POST['delete'])){
            $id = ($_POST['id']);
            $deleWord = new Word;
            $deleWord = $deleWord ->deleteWord($id);
            echo "<a href = '../test/index.php?controller=learn&action=gender' > </a>";
            //header("Location: ../test/index.php?controller=learn&action=word_form");
        }
        
    }
    public function update(){
        $id = $_GET['id'];
        $word = new Word();
        $getWord = $word->getWordById($id);
        $data['word'] = $getWord;
        $this->render('update', $data);
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
                if (empty($word) || empty($mean)){echo '<p style="color: red; text-align: center">
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
                    $data = $data->UpdateWord($id, $word, $type, $mean,$image,$sound,$note);
                    if ($data){echo '<dialog open style="color: green; text-align: center; display: middle">
                        <p>Sửa từ thành công</p>
                        <p> Hãy xem trong: Kho từ của bạn </p>
                        <a href="../test/index.php?controller=learn&action=gender"><button>OK</button></a>
                      </dialog>';}
                }
            }

        }
    }
        
    // function updateAndDelete(){
    //     $this->gender();
    //     $this->render('gender');
    //     if(isset($_POST['delete'])){
    //         $deleWord = new Word;
    //         $deleWord = $deleWord ->deleteWord($id);
            
    //     }
    //     header("Location: ../test/index.php?controller=learn&action=gender");
    // }
    
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
                if (empty($word) || empty($mean)){echo '<p style="color: red; text-align: center">
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
                    if ($data){echo '<dialog open style="color: green; text-align: center; display: middle">
                        <p>Thêm từ thành công</p>
                        <p> Hãy xem trong: Kho từ của bạn </p>
                        <a href="../test/index.php?controller=learn&action=gender"><button>OK</button></a>
                      </dialog>';}
                }
            }

        }
        //echo $image;
    
    } 

    function gender_search(){
        $this->render('gender_search');
    }
    function test(){
        $this->render('test');
    }
}


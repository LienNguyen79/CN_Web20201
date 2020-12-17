<?php
require_once('controllers' . DS .'base_controller.php');
require_once('models'. DS .'user.php');
require_once('controllers'. DS .'home_controller.php');
//require_once('views'. DS .'authentication'. DS .'login.php');

$errorMsgLogin = '';
$errorMsgReg = '';
class AuthenticationController extends BaseController
{

  function __construct()
  {
    $this->folder = 'authentication';
    
  }
  function login()
  {
    
    // echo "Như cái cc";
    require_once("views/authentication/login.php");
  
    if (isset($_POST['btn_submit'])){
      //echo 'he';
      $username = $_POST['username'];
      $email = $_POST['email'];
      $password = $_POST['password'];    
       
      if (strlen(trim($username)) > 1 && strlen(trim($email)) > 1 && strlen(trim($password)) > 1) {
        $user = new User();
        $id = $user->userLogin($username,$email, $password);
        if ($id) {
            $this->render ('home');}
        else {
            $errorMsgLogin = "Sai tài khoản hoặc mật khẩu.";
            
        }  
      }
    }
  }
  function register(){
    if (isset($_POST['btn_submit'])) {
      $username = $_POST['usernameReg'];
      $email = $_POST['emailReg'];
      $password = $_POST['passwordReg'];      
      $username_check = preg_match('~^[A-Za-z0-9_]{3,20}$~i', $username);
      $email_check = preg_match('~^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.([a-zA-Z]{2,4})$~i', $email);
      $password_check = preg_match('~^[A-Za-z0-9!@#$%^&*()_]{6,20}$~i', $password);
  
      if ($username_check && $email_check && $password_check) {
          $id = $user->userRegister($username,$email, $password);
          if ($id) {              
              render('home');
          } else {
              $errorMsgReg = "Tên người dùng hoặc Email đã tồn tại.";
          }
      } else {
          $errorMsgReg = "Vui lòng kiểm tra lại thông tin nhập vào.";
      }
  }
  }

  public function error()
  {
    $this->render('error');
  }
}
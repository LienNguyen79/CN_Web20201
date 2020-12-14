<?php
require_once('controllers' . DS .'base_controller.php');
require_once('models'. DS .'user.php');
require_once('controllers'. DS .'home_controller.php');
//require_once('views'. DS .'authentication'. DS .'login.php');
class AuthenticationController extends BaseController
{
  function __construct()
  {
    $this->folder = 'authentication';
  }

  function login()
  {
    $errorMsgLogin = '';
    if (isset($_POST['btn_submit'])){
      $username = $_POST['username'];
      $email = $_POST['email'];
      $password = $_POST['password'];     
      if (strlen(trim($usernameEmail)) > 1 && strlen(trim($email)) > 1 && strlen(trim($password)) > 1) {
        $id = $user->userLogin($username,$email, $password);
        if ($id) {
            render ('home');}
        else {
            $errorMsgLogin = "Sai tài khoản hoặc mật khẩu.";
            echo $errorMsgLogin;
        }  
      }
    }
  }

  public function error()
  {
    $this->render('error');
  }
}
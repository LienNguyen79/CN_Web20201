<?php
require_once('controllers' . DS .'base_controller.php');
require_once('models'. DS .'user.php');
require_once('controllers'. DS .'home_controller.php');
require_once('views'.DS.'authentication'. DS .'error.php');
//require_once('views'. DS .'authentication'. DS .'login.php');

class AuthenticationController extends BaseController
{

  function __construct()
  {
    $this->folder = 'authentication';    
  }
  function login()
  {
    $homeController = new HomeController;
    $homeController->login();
    $userClass = new User; 
    if (!empty($_POST['loginSubmit'])) {
      $usernameEmail = $_POST['usernameEmail'];
      $password = $_POST['password'];
      if (strlen(trim($usernameEmail)) > 1 && strlen(trim($password)) > 1) {
          $id = $userClass->userLogin($usernameEmail, $password);
          if ($id) {
              header("Location: ../test/index.php?controller=homepage&action=home");
          } else {
            echo '<p style="color: red; text-align: center">
            Vui lòng kiểm tra lại thông tin nhập vào.
                </p>';
          }
      }
  }}
  function register(){
    $homeController = new HomeController;
    $homeController->register();
    $userClass = new User;
    if (!empty($_POST['signupSubmit'])) {
      $username = $_POST['usernameReg'];
      $email = $_POST['emailReg'];
      $password = $_POST['passwordReg'];
      if (!preg_match ("/^[A-Za-z0-9_.]{6,32}@([a-zA-Z0-9]{2,12})(.[a-zA-Z]{2,12})+$/", $email)) 
        { echo '<p style="color: red; text-align: center">
          Email không hợp lệ
              </p>';}
      else {
        if (!preg_match("/^[A-Za-z0-9!.,@#$%^&*()_]{6,20}+$/",$password) && !preg_match("/^[A-Za-z0-9!.,@#$%^&*()_]{6,20}+$/",$username)) {
          echo '<p style="color: red; text-align: center">
          Tài khoản hoặc mật khẩu không hợp lệ
              </p>';
        }
        else {
          if ($username && $email && $password ) {
              $id = $userClass->userRegistration($username, $email, $password);
              
              if ($id) {
                  
                  header("Location: ../test/index.php?controller=homepage&action=home");
            
              } else {
                  echo '<p style="color: red; text-align: center">
                  Tên người dùng hoặc Email đã tồn tại
                      </p>';
              }
          } else {
              echo '<p style="color: red; text-align: center">
              Vui lòng kiểm tra lại thông tin nhập vào.
                  </p>';
          }      
        }
      }
    } 
}

  function logout(){
    $session_userId = '';
    $_SESSION['userId'] = '';
    if (empty($session_userId) && empty($_SESSION['userId'])) {
    header("Location: ../test/index.php?controller=authentication&action=login");
  }
  }

  
  function home(){
    $this->folder = 'homepage';
    $this->render('home');
  }

}
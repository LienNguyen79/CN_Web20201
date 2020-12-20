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
              //$url = 'authentication'.DS.'home.php';
              header("Location: ../test/index.php?controller=homepage&action=home");
              // $this->folder = 'authentication';
              // $this->render('home');
          } else {
            header("Location: ../test/index.php?controller=homepage&action=error");
          }
      }
  }}
  function register(){
    $homeController = new HomeController;
    $homeController->register();
     $errorMsgReg = '';
    $userClass = new User;
    if (!empty($_POST['signupSubmit'])) {
      $username = $_POST['usernameReg'];
      $email = $_POST['emailReg'];
      $password = $_POST['passwordReg'];
      //$username_check = preg_match('~^[A-Za-z0-9_]{3,20}$~i', $username);
      //$email_check = preg_match('~^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.([a-zA-Z]{2,4})$~i', $email);
      //$password_check = preg_match('~^[A-Za-z0-9!@#$%^&*()_]{6,20}$~i', $password);
      //echo "đầu cắt moi huhu";
      if ($username && $email && $password ) {
          $id = $userClass->userRegistration($username, $email, $password);
          
          if ($id) {
              
              header("Location: ../test/index.php?controller=homepage&action=home");
         
          } else {
              $errorMsgReg = "Tên người dùng hoặc Email đã tồn tại.";
              echo '<h1 style="color: red; text-align: center; font-size: 22px; margin-top:45%;">
              Tên người dùng hoặc Email đã tồn tại.
              </h1>';
          }
      } else {
          $errorMsgReg = "Vui lòng kiểm tra lại thông tin nhập vào.";
          echo '<p style="color: red; text-align: center">
          Vui lòng kiểm tra lại thông tin nhập vào.
              </p>';
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
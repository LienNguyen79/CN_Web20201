<?php
class User
{
  
  public function userLogin($usernameEmail, $password)
  {
    $db = DB();
    
    //$hash_password = hash('sha256', $password);
    $req = $db->prepare("SELECT id FROM user WHERE  (username=:usernameEmail or email=:usernameEmail) AND  password=:password");
    //echo 'SELECT * FROM user WHERE username=:username AND email=:email AND password=:hash_password';
    $req->bindParam("usernameEmail",$usernameEmail,PDO::PARAM_STR);
    //$req->bindParam(":email",$email,PDO::PARAM_STR);
    $req->bindParam("password",$password,PDO::PARAM_STR);
    $req->execute();
    $count = $req->rowCount();
    
    $data = $req->fetch(PDO::FETCH_OBJ);
    $db = null;
    if ($count) {
      $_SESSION['userId'] = $data->id;
      return true;}
    else {    
      return false;
    }
  }
  public function userRegistration($username, $email, $password)
  {
      try {
          $db = DB();
          $st = $db->prepare("SELECT id FROM user WHERE username=:username OR email=:email");
          $st->bindParam("username", $username, PDO::PARAM_STR);
          $st->bindParam("email", $email, PDO::PARAM_STR);
          $st->execute();
          $count = $st->rowCount();
          if ($count < 1) {
              $req = $db->prepare("INSERT INTO user(username,email,password) VALUES (:username,:email,:password)");
              $req->bindParam("username", $username, PDO::PARAM_STR);
              //$hash_password = hash('sha256', $password);
              $req->bindParam("email", $email, PDO::PARAM_STR);
              $req->bindParam("password", $password, PDO::PARAM_STR);
              $req->execute();
              $id = $db->lastInsertId();
              $db = null;
              $_SESSION['userId'] = $id;
              return true;

          } else {
              $db = null;
              return false;
          }
      } catch (PDOException $e) {
          echo '{"error":{"text":' . $e->getMessage() . '}}';
      }
  }
  public function userDetails($id)
  {
      try {
          $db = connectDB();
          $stmt = $db->prepare("SELECT username,email FROM user WHERE id=:id");
          $stmt->bindParam("id", $id, PDO::PARAM_INT);
          $stmt->execute();
          $data = $stmt->fetch(PDO::FETCH_OBJ);
          return $data;
      } catch (PDOException $e) {
          echo '{"error":{"text":' . $e->getMessage() . '}}';
      }
  }

}
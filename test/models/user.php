<?php
class User
{
  // public $id;
  // public $username;
  // public $email;
  // public $password;

  // function __construct($id, $username, $email, $password)
  // {
  //   $this->id = $id;
  //   $this->username = $username;
  //   $this->email = $email;
  //   $this->password = $password;
  // }

  // static function all()
  // {
  //   $list = [];
  //   $db = DB::getInstance();
  //   $req = $db->prepare('SELECT * FROM posts');
  //   $req->execute();
  //   // $output = $req->fetchAll();
  //   // var_dump($output);

  //   foreach ($req->fetchAll() as $item) {
  //     $list[] = new Post($item['id'], $item['Title'], $item['content']);
  //   }

  //   return $list;
  //   var_dump($list);
  // }
  function userLogin($username, $email, $password)
  {
    $db = DB::getInstance();
    //$hash_password = hash('sha256', $password);
    $req = $db->prepare('SELECT id FROM user WHERE username =  $username AND email=$email AND password=$password');
    //echo 'SELECT * FROM user WHERE username=:username AND email=:email AND password=:hash_password';
    $req->bindParam("username",$username,PDO::PARAM_STR);
    $req->bindParam("email",$email,PDO::PARAM_STR);
    $req->bindParam("hash_password",$hash_password,PDO::PARAM_STR);
    $req->execute();
    $count = $req->rowCount();
    $data = $req->fetch(PDO::FETCH_OBJ);
    $db = null;
    echo "SELECT * from user";
    echo 'SELECT id FROM user WHERE username =  $username AND email=$email AND password=$password';
    if ($count) {
      $_SESSION['userId'] = $data->id;
      return true;}
    else {
      return false;
    }
  }
  public function userRegistration($username, $password, $email)
  {
      try {
          $db = DB();
          $st = $db->prepare("SELECT id FROM users WHERE username=:username OR email=:email");
          $st->bindParam("username", $username, PDO::PARAM_STR);
          $st->bindParam("email", $email, PDO::PARAM_STR);
          $st->execute();
          $count = $st->rowCount();
          if ($count < 1) {
              $req = $db->prepare("INSERT INTO users(username,password,email) VALUES (:username,:hash_password,:email)");
              $req->bindParam("username", $username, PDO::PARAM_STR);
              $hash_password = hash('sha256', $password);
              $req->bindParam("hash_password", $hash_password, PDO::PARAM_STR);
              $req->bindParam("email", $email, PDO::PARAM_STR);
              $req->bindParam("name", $name, PDO::PARAM_STR);
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

}
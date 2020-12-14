<?php
class User
{
  public $id;
  public $username;
  public $email;
  public $password;

  function __construct($id, $username, $email, $password)
  {
    $this->id = $id;
    $this->username = $username;
    $this->email = $email;
    $this->password = $password;
  }

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
  static function userLogin($username, $email, $password)
  {
    $db = DB::getInstance();
    $hash_password = hash('sha256', $password);
    $req = $db->prepare('SELECT * FROM user WHERE username=:username AND email=:email AND password=:hash_password');
    $req->bindParam("username",$username,PDO::PARAM_STR);
    $req->bindParam("email",$email,PDO::PARAM_STR);
    $req->bindParam("hash_password",$hash_password,PDO::PARAM_STR);
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
}
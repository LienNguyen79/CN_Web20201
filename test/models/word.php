<?php
class Word {
    public function __construct()
    {

    }
    public function genderWord(){
        $list = [];
        $db = DB();
        $result  = $db->prepare("SELECT * FROM word WHERE user_id =:user_id");
        $result->bindParam(":user_id", $_SESSION['userId']);
        $result ->execute();
        $items = $result->fetchAll(PDO::FETCH_ASSOC);  //dùng cờ FETCH_ASSOC để chỉ lấy mỗi tên col và giá trị của col ra thôi bỏ qua mấy thứ linh tinh
        // echo '<pre>' . var_export($items, true) . '</pre>';
        return $items;
    }
    public function find($searchWord)
    {
      $db = DB();
      $req = $db->prepare("SELECT * FROM word WHERE word=:searchWord AND user_id =:user_id");
      $req->bindParam(":searchWord", $searchWord);
      $req->bindParam(":user_id", $_SESSION['userId']);
      $req->execute();
      $data = $req->fetchAll(PDO::FETCH_ASSOC);
      var_dump($data);
      return $data;
    }
}
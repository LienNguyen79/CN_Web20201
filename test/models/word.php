<?php
class Word {
    
    public function genderWord(){        
        $db = DB();
        $result  = $db->prepare("SELECT * FROM word WHERE user_id =:user_id");
        $result->bindParam(":user_id", $_SESSION['userId']);
        $result ->execute();
        $items = $result->fetchAll(PDO::FETCH_ASSOC);
        return $items;
    }
    public function find($searchWord)
    {
      $db = DB();
      $searchWord = '%' . $searchWord . '%';
      $req = $db->prepare("SELECT * FROM word WHERE user_id =:user_id AND name_word LIKE :searchWord ");
      $req->bindParam(":searchWord", $searchWord);
      $req->bindParam(":user_id", $_SESSION['userId']);
      $req->execute();
      $data = $req->fetchAll(PDO::FETCH_ASSOC);
      return $data;
    }
    public function addWord($word, $type, $mean,$image,$sound,$note)
    {
        try {
            $db = DB();

                $req = $db->prepare("INSERT INTO word(name_word,user_id,type_word,mean,image,sound, note) VALUES (:word,:user_id,:type_word,:mean,:image, :sound,:note)");
                $req->bindParam(":user_id", $_SESSION['userId']);
                $req->bindParam("word", $word, PDO::PARAM_STR);
                $req->bindParam("type_word", $type, PDO::PARAM_STR);
                $req->bindParam("mean", $mean, PDO::PARAM_STR);
                $req->bindParam("image", $image );
                $req->bindParam("sound", $sound, PDO::PARAM_STR);
                $req->bindParam("note", $note, PDO::PARAM_STR);
                $req->execute();
                $id = $db->lastInsertId();
                $db = null;
                return true;
  
            
        } catch (PDOException $e) {
            echo '{"error":{"text":' . $e->getMessage() . '}}';
        }
    }
    public function deleteWord($id){
        $db = DB();
        $req = $db->prepare("DELETE FROM word where id=:id");
        $req->bindParam(":id", $id);
        $req->execute();
    }

    public function getWordById($id){
        $db = DB();
        $result  = $db->prepare("SELECT * FROM word WHERE id =:id");
        $result->bindParam(":id", $id);
        $result ->execute();
        $items = $result->fetchAll(PDO::FETCH_ASSOC);
        return $items;
    }
    public function updateWord($id, $word, $type, $mean,$image,$sound,$note){
        $db = DB();
        try {
            $db = DB();

                $req = $db->prepare("UPDATE word SET name_word=:word, type_word=:type_word, mean=:mean, image=:image, sound=:sound, note=:note WHERE id=:id");
                $req->bindParam("word", $word, PDO::PARAM_STR);
                $req->bindParam("type_word", $type, PDO::PARAM_STR);
                $req->bindParam("mean", $mean, PDO::PARAM_STR);
                $req->bindParam("image", $image );
                $req->bindParam("sound", $sound, PDO::PARAM_STR);
                $req->bindParam("note", $note, PDO::PARAM_STR);
                $req->bindParam("id", $id, PDO::PARAM_STR);
                $req->execute();
                $id = $db->lastInsertId();
                $db = null;
                return true;
  
            
        } catch (PDOException $e) {
            echo '{"error":{"text":' . $e->getMessage() . '}}';
        }
    }
}
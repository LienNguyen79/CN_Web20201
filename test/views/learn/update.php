<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa từ</title>
    
  <link rel="stylesheet" href="assets/css/word_form_style.css" type="text/css">
  </head>
<body >
<a href = "../test/index.php?controller=homepage&action=home"><img src="../test/assets/images/back_icon.png" alt="icon" style=" width: 20px; height: 20px;">Quay lại</button></a>
<div class="wordform">
    <form enctype="multipart/form-data" id="form1" method="post" action="">
        <label >Từ:</label>
        <input type="text" id="fname" name="word" value="<?php echo $word[0]['name_word'] ?>" ><br>
        <label>Loại từ:</label>
        <input type="text" id="lname" name="type" value="<?php echo $word[0]['type_word'] ?>"><br>
        <label>Nghĩa:</label>
        <input type="text" id="fname" name="mean" value="<?php echo $word[0]['mean'] ?>"><br>
        <label>Ảnh:</label>
        <input type="file" name="image" accept=".img,.png"/><br>
        <label>Phát âm:</label>
        <input type="file" name="sound" accept=".ogg,.flac,.mp3" /><br>
        <label>Ghi chú:</label>
        <input type="text" id="fname" name="note" value="<?php echo $word[0]['note'] ?>"><br>
        <input type="submit" name="submit" value ="Sửa từ"/>
    </form>
</div>
</body>
</html>

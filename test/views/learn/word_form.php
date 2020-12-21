<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm từ mới</title>
    
  <link rel="stylesheet" href="assets/css/word_form_style.css" type="text/css">
  </head>
<body >
<div class="wordform">
    <form enctype="multipart/form-data" id="form1" method="post" action="">
        <label >Từ:</label>
        <input type="text" id="fname" name="word"><br>
        <label>Loại từ:</label>
        <input type="text" id="lname" name="type"><br>
        <label>Nghĩa:</label>
        <input type="text" id="fname" name="mean"><br>
        <label>Ảnh:</label>
        <input type="file" name="image" accept=".img,.png" /><br>
        <label>Phát âm:</label>
        <input type="file" name="sound" accept=".ogg,.flac,.mp3" /><br>
        <label>Ghi chú:</label>
        <input type="text" id="fname" name="note"><br>
        <input type="submit" name="submit" value ="Thêm từ"/>
    </form>
</div>
</body>
</html>

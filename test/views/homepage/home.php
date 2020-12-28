<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    
  <link rel="stylesheet" href="assets/css/home_style.css" type="text/css">
  </head>
<body >
<?php include_once ('views/homepage/header.php');?>
 <section>
    <div  class="banner_part">
      <h1 style="text-align:center;">Let's Learn English</h1>
      <h3 style="text-align:center;"> <i>Học, học nữa, học mãi!</h3>
      <!-- <img src="../test/assets/images/banner_img.png" alt="banner" class = "center_img"> -->
      </div>
  </section> 

  <section>
    <div  class ="midnav"> 
      <a href="../test/index.php?controller=learn&action=word_form" >Thêm từ mới</a>
      <a href="../test/index.php?controller=learn&action=gender">Kho từ của bạn</a>
      <a href="../test/index.php?controller=learn&action=test">Chế độ kiểm tra</a>
      <a href="">Tính năng khác sẽ phát triển trong tương lai</a>
    </div>
  </section>
  <section>
      <div class="banner_part">
        <img src="../test/assets/images/learning_img.png" alt ="learning" class="center_img">
      </div>
  </section>
<?php include_once ('views/homepage/footer.php'); ?>
</body>
</html>
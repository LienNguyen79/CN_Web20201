
<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    
  <link rel="stylesheet" href="assets/css/home_style.css" type="text/css">
  </head>
<body>

  <header>
    <div class="topnav">
      <a href = "../test/index.php?controller=homepage&action=home"><img src="../test/assets/images/logo.png" alt="logo"></a>
      <a class="active" href="../test/index.php?controller=homepage&action=home">Trang chủ</a>
      <a href="../test/index.php?controller=homepage&action=about">Về chúng tôi</a>
      <a href="#contact">Liên hệ</a>
      <div class="search-container">
      <form method="POST" action="">
        <input type="text" placeholder="Tìm kiếm từ.." name="search">
        <button type="submit" name = "searchSubmit"><a href = "../test/index.php?controller=learn&action=gender"></a><i class="fa fa-search"></i></button>
      </form>
      </div>
      <a href = "../test/index.php?controller=authentication&action=logout">Đăng xuất</a>
    </div>

  </header>
  <section>
    <div  class="banner_part">
      <h1 style="text-align:center;">Let's Learn English</h1>
      <img src="../test/assets/images/banner_img.png" alt="banner" class = "center_img">
      </div>
  </section> 

  <section>
    <div  class ="midnav"> 
      <a href="../test/index.php?controller=learn&action=word_form">Thêm từ mới</a>
      <a href="../test/index.php?controller=learn&action=gender">Kho từ của bạn</a>
      <a href="">Chế độ kiểm tra</a>
      <a href="">Tính năng khác sẽ phát triển trong tương lai</a>
    </div>
   
  </section>
  <footer class="footer">
    <div class="column">
        <a href="../test/index.php?controller=homepage&action=home"> <img src="../test/assets/images/logo.png" alt=""> </a> 
    </div>
    <div class="column">
      <h4>Đăng kí nhận bản tin</h4>
      <p>Cập nhật thông tin một cách nhanh nhất để không bỏ lỡ thông báo mới nào về chúng tôi
      </p>
      <form action="#">
        <div class="form-group">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder='Enter email address'
              onfocus="this.placeholder = ''"
              onblur="this.placeholder = 'Enter email address'">
            <div class="input-group-append">
              <button class="btn btn_1" type="button"><i class="ti-angle-right"></i></button>
            </div>
          </div>
        </div>
      </form>
      <div class="social_icon">
        <a href="#"> <i class="ti-facebook"></i> </a>
        <a href="#"> <i class="ti-twitter-alt"></i> </a>
        <a href="#"> <i class="ti-instagram"></i> </a>
        <a href="#"> <i class="ti-skype"></i> </a>
      </div>
    </div>
    <div class="column">
        <h4>Kết nối với chúng tôi</h4>
        <div class="contact_info">
          <p><span> Địa chỉ :</span> Số 1 Đại Cồ Việt, Phường Bách Khoa, Quận Hai Bà Trưng, Hà Nội </p>
          <p><span> Điện thoại :</span> +84 961729199</p>
          <p><span> Email : </span>Chrisgrey175@gmail.com.com </p>
        </div>
    </div>               
  </footer>

</body>
</html>
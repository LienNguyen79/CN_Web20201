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
      <a  href="../test/index.php?controller=homepage&action=home">Trang chủ</a>
      <a href="../test/index.php?controller=homepage&action=about">Về chúng tôi</a>
      <a href="../test/index.php?controller=homepage&action=contact">Liên hệ</a>
      <div class="search-container">
      <form method="POST" action="">
        <input type="text" placeholder="Tìm kiếm từ.." name="search">
        <button type="submit" name = "searchSubmit"><img src="../test/assets/images/search_icon.png" alt="icon" style=" width: 20px; height: 20px;"><a href = "../test/index.php?controller=learn&action=gender"></a></button>
      </form>
      </div>
      <a href = "../test/index.php?controller=authentication&action=logout">Đăng xuất</a>
    </div>
  </header>
  <section style="height:80%">
  <h1 style="text-align:center; text-size:20px; font-weigh:bold; margin-top:25%;"> Đây là chế độ Kiểm tra</h1>
</section>
  <footer class="footer">
    <div class="column">
        <a href="../test/index.php?controller=homepage&action=home"> <img src="../test/assets/images/logo.png" alt=""> </a> 
    </div>
    <div class="column">
      <h4>Đăng kí nhận bản tin</h4>
      <p>Cập nhật thông tin một cách nhanh nhất để không bỏ lỡ thông báo mới nào về chúng tôi
      </p>
      <form action="home">
        <div class="form-group">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder='Enter email address'
              onfocus="this.placeholder = ''"
              onblur="this.placeholder = 'Enter email address'">
            <div class="input-group-append">
              <button class="btn btn_1" type="button"><p> Gửi</p></button>
            </div>
          </div>
        </div>
      </form>
     
    </div>
    <div class="column">
        <h4>Kết nối với chúng tôi</h4>
        <div class="contact_info1">
          <p><span> Địa chỉ :</span> Số 1 Đại Cồ Việt, Phường Bách Khoa, Quận Hai Bà Trưng, Hà Nội </p>
          <p><span> Điện thoại :</span> +84 964530128</p>
          <p><span> Email : </span>huynguyenquang344@gmail.com </p>
        </div>
    </div>               
  </footer>
  
</body>
</html>
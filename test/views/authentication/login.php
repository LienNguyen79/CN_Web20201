<html>
<head>
	<title>Trang đăng nhập</title>
	<meta charset="utf-8">
	<head>
     <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">  -->
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">

</head>
<body>
<div id="login" class="col-3 mt-3">
        <div class="loginbox">
            <h3>Form đăng nhập</h3>
            <form method="post" action="" name="login">
                <img src="../test/assets/images/logo.png" alt= "logo" class="avatar">
                <label>Username or Email</label>
                <input type="text" name="usernameEmail" class="form-control" autocomplete="off"/>
                <label>Mật khẩu</label>
                <input type="password" name="password" class="form-control" autocomplete="off"/>
                <input type="submit" class="btn btn-primary" name="loginSubmit" value="Đăng nhập">
            </form>
			<h2>Bạn chưa có tài khoản? <a href = "../test/index.php?controller=authentication&action=register">Đăng ký</a></h2>
        </div>
</div>
</body>
</html>
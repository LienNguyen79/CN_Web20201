<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang đăng ký</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">

</head>
<body>
<div id="signup" class="col-3 mt-4">
        <div class="card p-3">
            <h3>Form đăng ký</h3>
            <form method="post" action="" name="signup">
				<label>Tài khoản</label>
                <input type="text" name="usernameReg" autocomplete="off" class="form-control"/>
                <label>Email</label>
                <input type="text" name="emailReg" autocomplete="off" class="form-control"/>
                <label>Mật khẩu</label>
                <input type="password" name="passwordReg" autocomplete="off" class="form-control"/>
                <input type="submit" class="btn btn-primary" name="signupSubmit" value="Đăng ký">
            </form>
            <h6><a href = "../test/index.php?controller=authentication&action=login">Login</a></h6>
        </div>
</div>
</body>
</html>
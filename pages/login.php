<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="./lib/images/vnpt_icon.ico" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="./lib/css/main.css">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Đăng nhập</title>
    </head>
    <body>
        <section class="material-half-bg">
            <div class="cover"></div>
        </section>
        <section class="login-content">
            <div class="logo">
                <h1>Quản lý cây trồng</h1>
            </div>
            <div class="login-box">
                <div class="login-form" id="fdangnhap" method="post">
                    <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>ĐĂNG NHẬP</h3>
                    <div class="form-group">
                        <label class="control-label">TÀI KHOẢN</label>
                        <input class="form-control" type="text" name="username" id="username" placeholder="Tên đăng nhập" autofocus>
                    </div>
                    <div class="form-group">
                        <label class="control-label">MẬT KHẨU</label>
                        <input class="form-control" type="password" name="password" id="password" placeholder="Mật khẩu">
                    </div>
                    <div class="form-group">
                        <div class="utility">
                        </div>
                    </div>
                    <div class="form-group btn-container">
                        <button class="btn btn-primary btn-block" onclick="$('#fdangnhap').submit();" id="login"><i class="fa fa-sign-in fa-lg fa-fw"></i>ĐĂNG NHẬP</button>
                    </div>
                </div>
            </div>
        </section>
        <script async src="./lib/js/jquery-3.2.1.min.js"></script>
        <script async src="./lib/js/lib.js"></script>
        <script type="text/javascript">
            $(function(){
                $('#fdangnhap').on('submit', function(donard){
                    donard.preventDefault();
                    var a = $(this).find('input[name="username"]').val().trim();
                    var b = $(this).find('input[name="password"]').val().trim();
                    $.ajax({
						type: 'POST',
						url: 'go',
						data: {
							for: "login",
							taikhoan: a,
							matkhau: MD5(b),
							mobile: 0
						},
						beforeSend: function(){
							//showDiv();
						}
					}).done(function(ret){
                        var val = JSON.parse(ret);
                        if (val.trangthai == "1"){
                            window.location.href = "go?page=_main";
                        } else {
                            alert("Đăng nhập thất bại! Vui lòng kiểm tra lại!");
                        }
                    });
                });
            });
        </script>
    </body>
</html>
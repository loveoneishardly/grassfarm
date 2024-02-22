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
                        <input class="form-control" type="text" placeholder="Tên đăng nhập" autofocus>
                    </div>
                    <div class="form-group">
                        <label class="control-label">MẬT KHẨU</label>
                        <input class="form-control" type="password" placeholder="Mật khẩu">
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
        <script async src="./lib/js/popper.min.js"></script>
        <script async src="./lib/js/bootstrap.min.js"></script>
        <script async src="./lib/js/main.js"></script>
        <script async src="./lib/js/plugins/pace.min.js"></script>
        <script type="text/javascript">
            $(function(){
                $('#fdangnhap').on('submit', function(donard){
                    donard.preventDefault();
                    window.location.href = "go?page=_main";
                });
            });
        </script>
    </body>
</html>
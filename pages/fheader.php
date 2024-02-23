<header class="app-header"><a class="app-header__logo" href="index.html">Quản lý cây trồng</a>
    <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
    <ul class="app-nav">
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>
            <ul class="app-notification dropdown-menu dropdown-menu-right">
                <li class="app-notification__title">You have 4 new notifications.</li>
                <div class="app-notification__content">
                    <li>
                            <a class="app-notification__item" href="javascript:;">
                            <span class="app-notification__icon">
                                <span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span>
                            </span>
                            <div>
                                <p class="app-notification__message">Lisa sent you a mail</p>
                                <p class="app-notification__meta">2 min ago</p>
                            </div>
                        </a>
                    </li>
                    <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                        <div>
                        <p class="app-notification__message">Mail server not working</p>
                        <p class="app-notification__meta">5 min ago</p>
                        </div></a></li>
                    <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                        <div>
                        <p class="app-notification__message">Transaction complete</p>
                        <p class="app-notification__meta">2 days ago</p>
                        </div></a></li>
                    <div class="app-notification__content">
                    <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                        <div>
                            <p class="app-notification__message">Lisa sent you a mail</p>
                            <p class="app-notification__meta">2 min ago</p>
                        </div></a></li>
                    <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                        <div>
                            <p class="app-notification__message">Mail server not working</p>
                            <p class="app-notification__meta">5 min ago</p>
                        </div></a></li>
                    <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                        <div>
                            <p class="app-notification__message">Transaction complete</p>
                            <p class="app-notification__meta">2 days ago</p>
                        </div></a></li>
                    </div>
                </div>
                <li class="app-notification__footer"><a href="#">See all notifications.</a></li>
            </ul>
        </li>
        
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
            <ul class="dropdown-menu settings-menu dropdown-menu-right">
                <div class="app-notification__content">
                    <li>
                        <a class="app-notification__item" href="javascript:void(0);">
                            <div>
                                <i class="fa fa-info-circle"></i>&nbsp;&nbsp;&nbsp;Thông tin tài khoản
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="app-notification__item" href="javascript:void(0);">
                            <div>
                                <i class="fa fa-lock"></i>&nbsp;&nbsp;&nbsp;Đổi mật khẩu
                            </div>
                        </a>
                    </li>
                    <li>
                        <a id="btnLogout" class="app-notification__item" href="javascript:void(0);">
                            <div>
                                <i class="fa fa-sign-out"></i>&nbsp;&nbsp;&nbsp;Thoát
                            </div>
                        </a>
                    </li>
                </div>
            </ul>
        </li>
    </ul>
</header>
<script type="text/javascript">
    $(document).ready(function(){
        $('#btnLogout').on('click', function(){
            logout();
        });
    });

    function logout(){
        cuteAlert({
            type: "question",
            title: "THOÁT",
            message: "Bạn muốn đăng xuất?",
            confirmText: "Đồng ý",
            cancelText: "Quay lại"
        }).then((e)=>{
            if (e == ("confirm")){
                $.ajax({
                    type: 'POST',
                    url: 'go',
                    data: {
                        for: "logout"
                    },
                    beforeSend: function(){
                        //showDiv();
                    }
                }).done(function(data){
                    if(data){
                        location.reload();
                    }
                });
            }
        });
    }
</script>
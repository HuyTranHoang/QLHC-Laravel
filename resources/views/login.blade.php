<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('images/logo.png') }}">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.1/css/all.css">
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">
    <title>QLHC | Login</title>
</head>
<body>
<nav class="navbar navbar-dark container-fluid bg-sakura">
    <div class="container position-relative"><a class="navbar-brand" href="#"><i class="fa-duotone fa-rocket-launch"></i> Aptech - C2206L </a>
        <h1 class="navbar-text position-absolute top-50 start-50 translate-middle text-white">Quản Lý Hành Chính</h1>
    </div>
</nav>
<section class="loginform mt-5">
    <div class="row">
        <div class="col"><img src="{{asset('images/loginForm.jpeg')}}" class="img-fluid" alt=""></div>
        <div class="col">
            <form method="POST" action="/">
                @csrf
                <div class="my-3 row text-center text-sakura"><i class="fa-duotone fa-flower fs-3"></i>
                    <h3 class="mt-3 mb-5">Hello again!</h3>
                </div>
                <div class="form-floating mb-3 col-11">
                    <input type="text" class="form-control pe-6" id="userName" name="userName"
                           placeholder="userName">
                    <label for="userName">Tài khoản</label>
                    <span><i class="fa-regular fa-at"></i></span>
                </div>
                <div class="form-floating mb-3 col-11">
                    <input type="password" class="form-control pe-6" id="password" name="password"
                           placeholder="password" autocomplete="on">
                    <label for="password">Mật khẩu</label>
                    <span><i class="fa-regular fa-lock"></i></span>
                </div>
                <button class="btn btn-sakura text-white">Đăng nhập <i class="ps-3 fa-duotone fa-right-to-bracket"></i></button>
                <div class="col">
{{--                    Login error placeholder--}}
                </div>
                <div class="col mt-3">
                    <div class="footer-login">
                        <p class="text-muted">Chưa có tài khoản? <a href="#" class="text-decoration-none">Đăng ký</a> ngay</p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
</body>
</html>

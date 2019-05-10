
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Đăng nhập</title>
    <base href="{{asset('')}}">
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->

    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="admin_asset/login/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="admin_asset/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="admin_asset/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="admin_asset/login/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="admin_asset/login/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="admin_asset/login/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="admin_asset/login/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="admin_asset/login/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="admin_asset/login/css/util.css">
    <link rel="stylesheet" type="text/css" href="admin_asset/login/css/main.css">

    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-form-title" style="">
					<span class="login100-form-title-1">
						Sign In
					</span>
            </div>
            @if(session('thongbao'))
                <div class="alert alert-danger">
                    {{session('thongbao')}}
                </div>
                @endif

            <form class="login100-form validate-form" method="POST" >
                @csrf
                <div class="wrap-input100 " >
                    <span class="label-input100">Email:</span>
                    <input class="input100" type="text" name="username" placeholder="Enter email">
                    <span class="focus-input100"></span>

                </div>

                <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
                    <span class="label-input100">Password</span>
                    <input class="input100" type="password" name="password" placeholder="Enter password">
                    <span class="focus-input100"></span>

                </div>

                <div class="flex-sb-m w-full p-b-30">
                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                        <label class="label-checkbox100" for="ckb1">
                            Remember me
                        </label>
                    </div>
                    <div>
                        <a href="register" class="txt2">
                            Register
                        </a>
                    </div>
                    <div>
                        <a href="forgot" class="txt1">
                            Forgot Password?
                        </a>
                    </div>
                </div>

                <div class="container-login100-form-btn">
                    <input class="login100-form-btn" type="submit" name="submit" value="Sign in" >
                </div>
                <div >


                </div>
            </form>
        </div>
    </div>
</div>

<!--===============================================================================================-->
<script src="admin_asset/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="admin_asset/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="admin_asset/login/vendor/bootstrap/js/popper.js"></script>
<script src="admin_asset/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="admin_asset/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="admin_asset/login/vendor/daterangepicker/moment.min.js"></script>
<script src="admin_asset/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="admin_asset/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="admin_asset/login/js/main.js"></script>

</body>
</html>

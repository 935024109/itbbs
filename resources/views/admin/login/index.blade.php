<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/admins/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="/admins/css/login.css" media="screen">

<link rel="stylesheet" type="text/css" href="/admins/css/mws-theme.css" media="screen">

<title>MWS Admin - Login Page</title>

</head>

<body>

    <div id="mws-login-wrapper">
        <div id="mws-login" >
            @if (session('success'))
            <div class="mws-form-message success">
                    {{ session('success') }}
            </div>
            @endif
            @if (session('error'))
                <div class="mws-form-message error">
                    {{ session('error') }}
                </div>
            @endif
            @if (count($errors) > 0)
			    <div class="mws-form-message error">
			        <ul>
			            @foreach ($errors->all() as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
			    
			@endif
            <h1>登录</h1>

            <div class="mws-login-lock"><i class="icon-lock"></i></div>
            <div id="mws-login-form">
                <form class="mws-form" action="/admin/login" method="post">
                    {{csrf_field()}}
                    <div class="mws-form-row">
                        <div class="mws-form-item">
                            <input type="text" name="uname" class="mws-login-username required" placeholder="用户名">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <div class="mws-form-item">
                            <input type="password" name="pwd" class="mws-login-password required" placeholder="密码">
                        </div>
                    </div>
                    <div class="mws-form-row">
                    	<input name="captcha" type="text" placeholder="验证码">  
					    <img src="{{captcha_src()}}" style="cursor: pointer" onclick="this.src='{{captcha_src()}}'+Math.random()">
					</div>
                    <div class="mws-form-row">
                        <input type="submit" value="点击登录" class="btn btn-success mws-login-button">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- JavaScript Plugins -->
    <script src="/admins/js/libs/jquery-1.8.3.min.js"></script>
    <script src="/admins/js/libs/jquery.placeholder.min.js"></script>
    <script src="/admins/custom-plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
    <script src="/admins/jui/js/jquery-ui-effects.min.js"></script>

    <!-- Plugin Scripts -->
    <script src="/admins/plugins/validate/jquery.validate-min.js"></script>

    <!-- Login Script -->
    <script src="/admins/js/core/login.js"></script>

</body>
</html>
<script type="text/javascript">  
    function re_captcha() {  
        $url = "{{ URL('/admin/captcha') }}";
        $url = $url + "/1?a=" + Math.random();
            document.getElementById('127ddf0de5a04167a9e427d883690ff6').src = $url;
        }
</script>  

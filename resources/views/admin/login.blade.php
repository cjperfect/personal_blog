<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <meta name="keywords"
          content="Flat Dark Web Login Form Responsive Templates, Iphone Widget Template, Smartphone login forms,Login form, Widget Template, Responsive Templates, a Ipad 404 Templates, Flat Responsive Templates"/>
    <link href="{{asset('css/login.css')}}" rel='stylesheet' type='text/css'/>
</head>
<body>
<!--SIGN UP-->
<div class="login-form">
    <div class="clear"></div>
    <div class="avtar">
        <img src="{{asset('images/avtar.png')}}"/>
        <form method="post" action="{{url('admin/login')}}">
            @csrf
            <input type="text" class="text" placeholder="Username" name="username" required>
            <div class="key">
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="signin">
                <input type="submit" value="Login">
            </div>
        </form>

    </div>
</div>
</body>
</html>

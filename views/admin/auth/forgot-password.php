<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>Welcome To | Admin Panel</title>
        <!-- Base File -->
        <base href="http://localhost/hotel/">
        <!-- Favicon-->
        <link rel="icon" href="../../favicon.ico" type="image/x-icon">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
        <!-- Bootstrap Core Css -->
        <link href="models/admin/css/bootstrap.css" rel="stylesheet">
        <!-- Waves Effect Css -->
        <link href="models/admin/css/waves.css" rel="stylesheet" />
        <!-- Animation Css -->
        <link href="models/admin/css/animate.css" rel="stylesheet" />
        
        <!-- Theme Custom Css -->
        <link href="models/admin/css/style.css" rel="stylesheet">
        
        <!-- Only my Css -->
        <link href="models/admin/style.css" rel="stylesheet">
        
    </head>
    <body class="fp-page">
        <div class="fp-box">
            <div class="logo">
                <a href="javascript:void(0);">Admin <b> Panel</b></a>
                <small>Admin Password Forgot</small>
            </div>
            <div class="card">
                <div class="body">
                    <form id="forgot_password" method="POST">
                        <div class="msg">
                            Enter your email address that you used to register. We'll send you an email with your username and a
                            link to reset your password.
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">email</i>
                            </span>
                            <div class="form-line">
                                <input type="email" class="form-control" name="email" placeholder="Email" required autofocus>
                            </div>
                        </div>
                        <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">RESET MY PASSWORD</button>
                        <div class="row m-t-20 m-b--5 align-center">
                            <a href="views/admin/auth/sign-in.php">Sign In!</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Jquery Core Js -->
        <script src="models/admin/js/jquery.min.js"></script>
        <!-- Bootstrap Core Js -->
        <script src="models/admin/js/bootstrap.js"></script>
        <!-- Waves Effect Plugin Js -->
        <script src="models/admin/js/waves.js"></script>
        <!-- Validation Plugin Js -->
        <script src="models/admin/js/jquery.validate.js"></script>
        <!-- Custom Js -->
        <script src="models/admin/js/admin.js"></script>
        <script src="models/admin/js/forgot-password.js"></script>
        <!-- Only My Js -->
        <script src="models/admin/js/custom.js"></script>
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>Welcome To | Admin Panel</title>
        <!-- Base File -->
        <base href="http://localhost/hotel/"">
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
    <body class="signup-page">
        <div class="signup-box">
            <div class="logo">
                <a href="javascript:void(0);">Admin <b> Panel</b></a>
                <small>Admin Sign Up</small>
            </div>
            <div class="card">
                <div class="body">
                    <form id="sign_up" method="POST" action="views/admin/auth/store.php" enctype="multipart/form-data">
                        <div class="msg">Register a new membership</div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">person</i>
                            </span>
                            <div class="form-line">
                                <input type="text" class="form-control" name="user" placeholder="Name Surname" autofocus>
                            </div>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">email</i>
                            </span>
                            <div class="form-line">
                                <input type="email" class="form-control" name="email" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">lock</i>
                            </span>
                            <div class="form-line">
                                <input type="password" class="form-control" name="password" minlength="6" placeholder="Password">
                            </div>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">lock</i>
                            </span>
                            <div class="form-line">
                                <input type="password" class="form-control" name="confirm" minlength="6" placeholder="Confirm Password">
                            </div>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">person</i>
                            </span>
                            <div class="form-line">
                                <input type="file" class="inputfile inputfile-1" id="image" name="image">
                                <label for="image"><span>Choose a Profile Picture...</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-pink">
                            <label for="terms">I read and agree to the <a href="javascript:void(0);">terms of usage</a>.</label>
                        </div>
                        <input class="btn btn-block btn-lg bg-pink waves-effect" type="submit" value="SIGN UP" />
                    </form>
                    <div class="m-t-25 m-b--5 align-center">
                        <a href="views/admin/auth/sign-in.php">You already have a membership?</a>
                    </div>
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
        <!-- <script src="models/admin/js/jquery.validate.js"></script> -->
        <!-- Custom Js -->
        <script src="models/admin/js/admin.js"></script>
        <!-- <script src="models/admin/js/sign-up.js"></script> -->
        <!-- Only My Js -->
        <script src="models/admin/js/custom.js"></script>
    </body>
</html>
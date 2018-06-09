<?php
if(!isset($_SESSION)){
    session_start();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hotel project</title>
    <!-- Base File -->
    <base href="http://localhost/hotel/">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="models/front/css/bootstrap.min.css">
    <link rel="stylesheet" href="models/front/css/font-awesome.min.css">
    <link rel="stylesheet" href="models/front/css/style.css">
    <link rel="stylesheet" href="models/front/css/responsive.css">
  
</head>

<body>
    <!-- viewport Start -->
    <div class="viewport">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="logo">
                        <a href="index.php"><img src="assets/image/logo.png" alt="image"></a>
                        <span>We're Friendly!</span>
                    </div>
                    <div class="main-menu">
                        <ul>
                            <li><a href="views/front/auth/login.php">Longin</a></li>
                            <li><a href="views/front/auth/register.php">Register</a></li>
                        </ul>
                        <div class="country-btn">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown button
                              </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Rajshahi</a>
                                    <a class="dropdown-item" href="#">Dhaka</a>
                                    <a class="dropdown-item" href="#">Comilla</a>
                                    <a class="dropdown-item" href="#">Savar</a>
                                    <a class="dropdown-item" href="#">Jamalpur</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- viewport-content Start -->
<?php
    include_once '../includes/header.php';    
        if (!isset($_SESSION['email'])){
        echo "<script>  window.location ='views/front/auth/login.php'</script>";
        }
 ?>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="dashbord-body">
                            <div class="dashbord-menu">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                    </ol>
                                </nav>
                            </div>
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <aside>
                                        <div class="blank"></div>
                                        <div class="profile">
                                            <p><i class="fa fa-caret-right" aria-hidden="true"></i> Dashbord</p>
                                            <a href="">Edit Profile</a>
                                            <a href="">Change Email</a>
                                            <a href="">Change Password</a>
                                        </div>
                                        <div class="search-room room-rentals">
                                            <p class="text-center">Room Rentals</p>
                                            <a href="">Post Room</a>
                                            <a href="">My Room <span>0</span></a>
                                            <a href="">My Bookmarks <span>0</span></a>
                                        </div>
                                        <div class="search-room room-rentals">
                                            <p class="text-center">Short Term Rentals</p>
                                            <a href="">Post Short Rental</a>
                                            <a href="">My Short Rentals<span>0</span></a>
                                            <a href="">Incoming Bookings<span>0</span></a>
                                            <a href="">Outgoing Bookings<span>0</span></a>
                                        </div>

                                        <div class="blank"></div>
                                    </aside>
                                </div>
                                <div class="col-md-8">
                                    <div class="user">
                                        <h4><i class="fa fa-user" aria-hidden="true"></i> Imran's Dashboard <span><a href="">View Profile</a></span></h4>
                                    </div>

                                    <div class="room-info">
                                        <div class="single-room">
                                            <h4>Rooms</h4>
                                            <p>Imran has posted 0 room rentals</p>
                                            <h4>Bookmarks</h4>
                                            <p>Imran has posted 0 room rentals</p>
                                        </div>
                                        <div class="single-room">
                                            <h4>My Short Rentals</h4>
                                            <p>Imran has posted 0 room rentals</p>
                                            <h4>Incoming Bookings</h4>
                                            <p>Imran has posted 0 room rentals</p>
                                            <h4>Outgoing Bookings</h4>
                                            <p>Imran has posted 0 room rentals</p>
                                        </div>
                                        <div class="contact-link">
                                            <p>Need assistance? Feel free to <a href="">contact us</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

<?php
    include_once '../includes/footer.php'
?>
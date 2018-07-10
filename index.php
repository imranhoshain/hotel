<?php
    include_once 'views/front/includes/header.php'
?>
<div class="viewport-content">
    <div class="row justify-content-between">
        <div class="col-md-7">
            <div class="hotel-search-box">
                <form>
                    <div class="form-row align-items-center">
                        <div class="col-sm-8 my-1">
                            <label class="sr-only" for="inlineFormInputName">Name</label>
                            <input type="text" class="form-control" id="inlineFormInputName" placeholder="Jane Doe">
                        </div>

                        <div class="col-auto my-1">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="hotel-tab">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                    </li>

                </ul>

            </div>

        </div>
        <div class="col-md-4">
            <div class="hotel-tab-content">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <ul>
                            <li><a href="">Lorem ipsum.</a></li>
                            <li><a href="">Lorem ipsum.</a></li>
                            <li><a href="">Lorem ipsum.</a></li>
                            <li><a href="">Lorem ipsum.</a></li>
                            <li><a href="">Lorem ipsum.</a></li>
                            <li><a href="">Lorem ipsum.</a></li>
                            <li><a href="">Lorem ipsum.</a></li>
                            <li><a href="">Lorem ipsum.</a></li>
                            <li><a href="">Lorem ipsum.</a></li>
                        </ul>
                        <ul>
                            <li><a href="">Lorem ipsum.</a></li>
                            <li><a href="">Lorem ipsum.</a></li>
                            <li><a href="">Lorem ipsum.</a></li>
                            <li><a href="">Lorem ipsum.</a></li>
                            <li><a href="">Lorem ipsum.</a></li>
                            <li><a href="">Lorem ipsum.</a></li>
                            <li><a href="">Lorem ipsum.</a></li>
                            <li class="brows-btn"><a href="">browse all</a></li>
                            
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <ul>
                            <li><a href="">Lorem ipsum.</a></li>
                            <li><a href="">Lorem ipsum.</a></li>
                            <li><a href="">Lorem ipsum.</a></li>
                            <li><a href="">Lorem ipsum.</a></li>
                            <li><a href="">Lorem ipsum.</a></li>
                            <li><a href="">Lorem ipsum.</a></li>
                            <li><a href="">Lorem ipsum.</a></li>
                            <li><a href="">Lorem ipsum.</a></li>
                            <li><a href="">Lorem ipsum.</a></li>
                        </ul>
                        <ul>
                            <li><a href="">Lorem ipsum.</a></li>
                            <li><a href="">Lorem ipsum.</a></li>
                            <li><a href="">Lorem ipsum.</a></li>
                            <li><a href="">Lorem ipsum.</a></li>
                            <li><a href="">Lorem ipsum.</a></li>
                            <li><a href="">Lorem ipsum.</a></li>
                            <li><a href="">Lorem ipsum.</a></li>
                            <li><a href="">Lorem ipsum.</a></li>
                            <li><a href="">Lorem ipsum.</a></li>
                            <li><a href="">Lorem ipsum.</a></li>
                            <li><a href="">Lorem ipsum.</a></li>
                            <li><a href="">Lorem ipsum.</a></li>
                            <li><a href="">Lorem ipsum.</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- viewport-content End -->

<div class="free-to-post">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="free-content-left">
                    <h3>Lorem ipsum dolor sit amet, consectetur adipisicing.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi facilis tempora alias voluptate tenetur eos numquam repellat illo nisi aliquid! Possimus esse quaerat, dicta temporibus autem illum, nostrum repudiandae beatae similique libero officia natus magni dolore. Explicabo quos perspiciatis, sequi id eligendi quae nihil asperiores expedita blanditiis velit, accusantium perferendis.</p>
                </div>
                <div class="free-content-right">
                    <h5><a href="signup.php"> Register </a>Now!</h5>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <h6>Or<a href="login.php"> Login </a>to your account</h6>
                </div>
            </div>
        </div>
    </div>
</div>           
<?php
    include_once 'views/front/includes/footer.php'
?>
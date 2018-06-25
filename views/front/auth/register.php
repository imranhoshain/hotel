<?php
    include_once '../includes/header.php'
?>

          
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="hotel-login">
           <h3>Register Account <span>Already a Member? <a href="views/front/auth/login.php">Login Now</a></span></h3>
            <form id="sign_up" method="POST" action="views/front/auth/store.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputName">Your Name</label>
                    <input type="name" name="name" class="form-control" id="exampleInputName" aria-describedby="nameHelp" placeholder="Enter Your Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Phone Number</label>
                    <input type="tel" name="phone" class="form-control" id="exampleInputPhone" aria-describedby="phnoelHelp" placeholder="Enter Phone Number">
                </div>
                
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                     <input type="password" class="form-control" name="password" minlength="6" placeholder="Password" required>
                </div>
                
                     <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
                      <script>tinymce.init({ selector:'textarea' });</script>
                        <textarea name="editor" id="editor"></textarea>
                <div class="form-group">
                    <label for="exampleInputPassword1">Confirm</label>
                    <input type="password" class="form-control" name="confirm" minlength="6" placeholder="Confirm Password" required>
                </div>
                <div class="form-group form-check">                                
                    <input type="checkbox" name="terms" id="terms" class="form-check-input">
                    <label class="form-check-label" for="exampleCheck1">I do not wish to receive the latest information about products, news and events updates, rewards and promotions, special privileges and initiatives from Propwall / iBilik / Carsifu, its partners and advertisers</label>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
</div>
<?php
    include_once '../includes/footer.php'
?>
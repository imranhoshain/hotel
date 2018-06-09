<?php
include_once '../includes/header.php';
include_once '../../../vendor/autoload.php';
if(isset($_POST['submit'])){
   $auth = new \App\front\auth\Auth();
   $auth->set($_POST)->login();  
}
  //var_dump($a) ;
?>

<div class="row justify-content-center">
    <div class="col-md-4">
        <div class="hotel-login">
            <h3>User Login <span>Not a member? <a href="">Register now a FREE!</a></span></h3>
            <form id="sign_in" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <a href="views/front/auth/forgot-password.php">Forgot your password?</a>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</div>

<?php
    include_once '../includes/footer.php'
?>
<?php
    include_once '../includes/header.php'
?>

<!--        contact area start-->
          <div class="contact-area">
              <div class="container">
                  <div class="row">
                      <div class="col-md-6">
                          <div class="from-heading">
                              <h2>Contact Us</h2>
                              <p><b>Lorem ipsum dolor</b> sit amet, consectetur adipisicing elit. Eaque magni quisquam blanditiis nemo earum repudiandae repellendus minus deleniti ut amet harum assumenda culpa, fuga deserunt nihil modi nobis! Dolorum, quos?</p>
                              <form action="send.php" method="post">
                                  <label for="exampleFormControlInput1">Your Email</label><br>
                                  <input type="email" name="email" placeholder="Your Email"><br>
                                  <label for="exampleFormControlInput1">Subject</label><br>
                                  <input type="text" name="subject" placeholder="Subject">
                                  <textarea name="message" placeholder="Message" id="" cols="30" rows="10"></textarea>
                                  <button type="submit">Submit</button>
                              </form>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-info">
                              <h5>Address</h5>
                              <p><b>Location, Plot 11/A,</b> <br>Road 90 & 86, <br>North Gulshan,</p>
                              <h5>Phone</h5>
                              <p>88000001881293232</p>
                              <h5>Email</h5>
                              <p><a href="">abbdkdk@gmail.com</a></p>
                              <h5>Working Hours</h5>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, ipsam.</p>
                              
                                <a class="mail-icon" href="mailto:someone@example.com"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                             
                          </div>
                      </div>
                  </div>
              </div>
          </div>
<!--        contact area End-->

<?php
    include_once '../includes/footer.php'
?>
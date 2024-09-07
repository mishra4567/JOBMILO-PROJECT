<footer>
          <div class="container text-center text-md-start bg-">
            <div class="footer-wrap">
              <div class="about">

                <?php
                                         if(isset($_SESSION['un'])){
                                            $user=$_SESSION['un'];
                                            // $id=$_GET['eid'];
                                            $sel="SELECT * FROM jb_employees WHERE e_username='$user'";
                                            $rs=$con->query($sel);
                                            $row=$rs->fetch_assoc();
                                            {?>
                                             <img src="profile_image/<?php echo $row['e_proPhoto']?>"
                                                               alt="" style="width: 50px; border-radius:70px">
                                             <?php }}else{ ?>
                                            <a href="index.php"><img src="img/logo.png" alt="" class="rounded-circle"></a>

                                    
                                    <?php }?>
                <p class="text-muted py-4">
                  Start working with Firmbee which can provide you with all the tools needed to run an effcieint business remotely.
                </p>
                <div class="social-media">
                  <a href="" class="me-2 text-reset"><img src="img/icon/facebook-icon.svg" alt=""></a>
                  <a href="" class="me-2 text-reset"><img src="img/icon/twitter-icon.svg" alt=""></a>
                  <a href="" class="me-2 text-reset"><img src="img/icon/linkedin-icon.svg" alt=""></a>
                  <a href="" class="me-2 text-reset"><img src="img/icon/instagram-icon.svg" alt=""></a>
                </div>
              </div>

              <div class="company">
                <h6 class="fw-bold">Company</h6>
                <p><a href="">About us</a></p>
                <p><a href="#">Services</a></p>
                <p><a href="#">Team</a></p>
                <p><a href="#">Pricing</a></p>
                <p><a href="#">Project</a></p>
                <p><a href="#">Careers</a></p>
                <p><a href="blog.php">Blog</a></p>
                <p><a href="login.php">Login</a></p>
              </div>
              
              <div class="useful-links">
                <h6 class="fw-bold">Useful links</h6>
                <p><a href="#">Terms of </a></p>
                <p><a href="#">Services</a></p>
                <p><a href="#">Privacy Policy</a></p>
                <p><a href="#">Documentation</a></p>
                <p><a href="#">Changelog</a></p>
                <p><a href="#">Components</a></p>
              </div>

              <div class="newsletter">
                <h6 class="fw-bold">Newsletter</h6>
                <p class="text-muted">Sign up and receive the latest tips
                  via email.</p>
                  <form id="subscribe" action="">
                    <label for="email">Youre e-mail:</label>
                    <input type="email" placeholder="e-mail:" name="email" required>
                    <button type="submit" class="main-btn">Subscribe</button>
                  </form>
              </div>
              
            </div>
            <div class="copyright d-flex align-item-center justify-content-center">
              <p>&copy; 2024 JOB-MILO | Created by <a href="" title="#">Subham & team</a></p>
             
            </div>
          </div>
        
      </footer>
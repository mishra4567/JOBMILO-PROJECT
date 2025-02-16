<nav class="navbar navbar-expand-xl fixed-top">
       <div class="container ">
              <div class="row mb-1 d-flex  align-items-center">
                     <div class="col-md-3 mb-0">
                            <?php
                            include("db/db.php");
                            if (isset($_SESSION['un'])) {
                                   $user = $_SESSION['un']; {
                            ?>
                                          <a class="navbar-brand" href="home.php"><img class="w-20" src="img/logo.png" alt="">
                                                 <span class="fill ms-2 mt-1 "><small>Job</small></span>
                                                 <span class="out me-5 mt-3">Milo </span>
                                          </a>
                                   <?php }
                            } else { ?>
                                   <a class="navbar-brand" href="index.php"><img class="w-20" src="img/logo.png" alt="">
                                          <span class="fill ms-2 mt-1 "><small>Job</small></span>
                                          <span class="out me-5 mt-3">Milo </span>
                                   </a>
                            <?php } ?>
                     </div>
              </div>

              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                     <i class="fas fa-bars"></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                     <ul class="navbar-nav">
                            <?php
                            include("db/db.php");
                            if (isset($_SESSION['un'])) {
                                   $user = $_SESSION['un']; {
                            ?>
                                          <li class="nav-card-item">
                                                 <a class="nav-link  active" href="home.php">Home</a>
                                          </li>
                                   <?php }
                            } else { ?>
                                   <li class="nav-card-item">
                                          <a class="nav-link  active" href="index.php">Home</a>
                                   </li>
                            <?php } ?>

                            <li class="nav-card-item">
                                   <a class="nav-link" href="job.php">Jobs</a>
                            </li>
                            <li class="nav-card-item">
                                   <a class="nav-link" href="aboutus.php">About</a>
                            </li>
                            <li class="nav-card-item">
                                   <a class="nav-link" href="contact.php">Contact us</a>
                            </li>
                            <li class="nav-card-item">
                                   <a class="nav-link" href="blog.php">Blog</a>
                            </li>
                     </ul>
                     <ul class="right navbar-nav ms-auto">

                            <li class="nav-card-item-right">
                                   <?php
                                   include("db/db.php");
                                   if (isset($_SESSION['role'])) {

                                   ?>


                                          <!-- Employer Area -->
                                          <?php
                                          // include("db/db.php");
                                          if (isset($_SESSION['un'])) {
                                                 $user = $_SESSION['un'];
                                                 $sel = "SELECT * FROM employer_detail WHERE  employer_user_name='$user'";
                                                 $rs = $con->query($sel);
                                                 $row = $rs->fetch_assoc(); {
                                          ?>
                                                        <div class="dropdown">
                                                               <button class="btn  dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                      <img src="emp_photo/<?php echo $row['photo'] ?>" alt="" style="width: 50px; " class="rounded-circle border border-dark ">

                                                                      <span>
                                                                             <?php echo $_SESSION['un'] ?>
                                                                      </span>
                                                               </button>

                                                               <ul class="dropdown-menu">
                                                                      <li><a class="dropdown-item" href="emp_profile.php"><i class="fa-solid fa-user"></i>Profile</a></li>
                                                                      <li><a class="dropdown-item" href="logout.php"><i class="fa-solid fa-right-from-bracket"></i>log
                                                                                    out</a></li>

                                                               </ul>
                                                        </div>

                                                 <?php  }
                                          } else { ?>

                                                 <ul class="right navbar-nav ms-auto">
                                                        <li class="nav-card-item-right">
                                                               <a class="nav-link text-dark  btn btn-outline-info " href="" data-bs-toggle="modal" data-bs-target="#emp">Sign in</a>
                                                        </li>
                                                        <li class="nav-card-item-right create-account ">
                                                               <a class="nav-link" href="" data-bs-toggle="modal" data-bs-target="#seeker">Create account</a>
                                                        </li>

                                                 </ul>
                                          <?php    } ?>
                                   <?php } else { ?>


                                          <!-- Job seeker -->
                                          <?php
                                          include("db/db.php");
                                          if (isset($_SESSION['un'])) {
                                                 $user = $_SESSION['un'];
                                                 $sel = "SELECT * FROM jb_employees WHERE e_username='$user'";
                                                 $rs = $con->query($sel);
                                                 $row = $rs->fetch_assoc(); {
                                          ?>
                                                        <div class="dropdown">
                                                               <button class="btn  dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                      <img src="profile_image/<?php echo $row['e_proPhoto'] ?>" alt="" style="width: 50px; " class="rounded-circle border border-dark ">

                                                                      <span>
                                                                             <?php echo $_SESSION['un'] ?>
                                                                      </span>
                                                               </button>

                                                               <ul class="dropdown-menu">
                                                                      <li><a class="dropdown-item" href="profile.php"><i class="fa-regular fa-user"></i> Profile</a></li>
                                                                      <li><a class="dropdown-item" href="logout.php"><i class="fa-solid fa-right-from-bracket"></i>log
                                                                                    out</a></li>

                                                               </ul>
                                                        </div>

                                                 <?php  }
                                          } else { ?>

                                                 <ul class="right navbar-nav ms-auto">
                                                        <li class="nav-card-item-right">
                                                               <a class="nav-link text-dark  btn btn-outline-info " href="" data-bs-toggle="modal" data-bs-target="#emp">Sign in</a>
                                                        </li>
                                                        <li class="nav-card-item-right create-account ">
                                                               <a class="nav-link" href="" data-bs-toggle="modal" data-bs-target="#seeker">Create account</a>
                                                        </li>

                                                 </ul>
                                          <?php    } ?>
                                   <?php } ?>





              </div>
</nav>
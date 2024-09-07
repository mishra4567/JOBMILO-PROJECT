<?php
session_start();
include("db/db.php");
if (!isset($_SESSION['un'])) {
       header("location:index.php");
} else {
       $user = $_SESSION['un'];
       if (isset($_SESSION['role'])) {
              $sel = "SELECT * FROM employer_detail WHERE employer_user_name='$user'";
              $rs = $con->query($sel);
              $row = $rs->fetch_assoc();
       } else {
              $sel = "SELECT * FROM jb_employees WHERE e_username='$user'";
              $rs = $con->query($sel);
              $row = $rs->fetch_assoc();
       }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
       <title>Bootstrap Example</title>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
       <link rel="stylesheet" href="style.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       <link rel="stylesheet" href="profile/style.css">
       <link rel="stylesheet" href="css/main.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>
       <?php include("inc/nav.php") ?>

       <!-- <nav class="navbar navbar-expand-xl fixed-top mb-4">
              <div class="container">

                     <div class="row mb-1">
                            <div class="col-md-3 mb-0">

                                   <a class="navbar-brand" href="index.php"><img class="w-30" src="img/logo.png"
                                                 alt=""></a>
                            </div>
                            <div class="row mt-0">
                                   <div class="col-md-1 navbar-text mb-0">
                                          JobMilo
                                   </div>
                            </div>
                     </div>
                     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-bars"></i>
                     </button>
                     <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                   <li class="nav-card-item">
                                          <a class="nav-link  active" href="dash.php">Home</a>
                                   </li>
                                   <li class="nav-card-item">
                                          <a class="nav-link" href="#">Jobs</a>
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


                                          <div class="dropdown">
                                                 <button class="btn  dropdown" type="button" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <img src="profile_image/<?php echo $row['e_proPhoto'] ?>" alt=""
                                                               style="width: 50px; border-radius:70px">
                                                        <span>
                                                               <?php echo $_SESSION['un'] ?>
                                                        </span>
                                                 </button>

                                                 <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                                                        <li><a class="dropdown-item" href="logout.php"><i
                                                                             class="fa-solid fa-right-from-bracket"></i>log
                                                                      out</a></li>
                                                 </ul>
                                          </div>
                                   </li>
                            </ul>
                     </div>
              </div>
       </nav> -->

       <div class="container mt-5 d-flex align-items-center justify-content-center">
              <div class="row">
                     <div class="col-md-5  mt-5 px-4">


                            <!-- PROFILE PHOTO  -->


                            <div class="card">
                                   <div class="row">
                                          <div class="col-md-4 ">

                                                 <div class="user-img">

                                                        <img src="profile_image/<?php echo $row['e_proPhoto'] ?>" alt="" class="img-fluid">

                                                        <label for="" id="uploadbtn" data-bs-toggle="modal" data-bs-target="#profile"> <i class="fa-solid fa-camera"></i> </label>
                                                 </div>

                                          </div>
                                          <div class="col-md-8">
                                                 <div class="card-body">
                                                        <h6 class="card-title mb-3">
                                                               <?php echo $row['e_name'] ?>
                                                        </h6>
                                                        <p class="card-text"><i class="fa-solid fa-graduation-cap"></i>
                                                               <?php echo $row['e_highestEducation'] ?>
                                                        </p>
                                                        <p class="card-text"><i class="fa-solid fa-location-dot"></i>
                                                               <?php echo $row['e_curLocation'] ?>
                                                        </p>
                                                        <p class="card-text"><i class="fa-solid fa-share-nodes"></i>
                                                               Share
                                                               profile</p>
                                                 </div>
                                          </div>
                                   </div>
                            </div>

                            <div class="row mt-5">

                                   <div class="col-md-12">
                                          <div class="card">
                                                 <div class="row">
                                                        <div class="col-md-6">
                                                               <div class="card-body">

                                                                      <!-- Fetch Information from db -->

                                                                      <p class="card-text">Email</p>
                                                                      <p class="card-text">
                                                                             <?php echo $row['e_email'] ?>
                                                                      </p>

                                                                      <p class="card-text">Date of birth </p>
                                                                      <p class="card-text">
                                                                             <?php echo $row['e_dathOfBirth'] ?>
                                                                      </p>

                                                                      <p class="card-text">Current location</p>
                                                                      <p class="card-text">
                                                                             <?php echo $row['e_curLocation'] ?>
                                                                      </p>
                                                               </div>

                                                        </div>
                                                        <!-- details -->
                                                        <div class="col-md-6">
                                                               <div class="card-body">

                                                                      <!-- Fetch Information from db -->

                                                                      <p class="card-text">Mobile number </p>
                                                                      <p class="card-text">
                                                                             <?php echo $row['e_phNumber'] ?>
                                                                      </p>

                                                                      <p class="card-text">Gender </p>
                                                                      <p class="card-text">
                                                                             <?php echo $row['e_gender'] ?>
                                                                      </p>

                                                                      <p class="card-text">Hometown </p>
                                                                      <p class="card-text">
                                                                             <?php echo $row['e_city'] ?>
                                                                      </p>

                                                                      <a href="post.php">post</a>

                                                               </div>
                                                        </div>
                                                        <!-- end details -->

                                                 </div>
                                          </div>

                                          <!-- post -->
                                          <div class="col-md-12 mt-3  border-rounded success">
                                                 <div class="card d-flex  ">
                                                        <div class="row d-flex   align-items-center">

                                                               <div class="col ms-5">
                                                                      <a href="post_blog_form.php" class="text-decoration-none btn btn-outline-info">Post blog</a>
                                                               </div>
                                                               <div class="col">
                                                                      <a href="#" class="text-decoration-none btn btn-success">Post job</a>
                                                               </div>
                                                        </div>
                                                 </div>
                                          </div>
                                          <!-- end of post -->

                                   </div>
                            </div>
                     </div>




                     <div class="col-md-7  mt-5">
                            <!-- <form action="upd.php" method="post" enctype="multipart/form-data"> -->

                            <!-- WORK EXPRENCE -->


                            <div class="row">
                                   <div class="col-md-12 mt-1 mb-3">
                                          <div class="card">
                                                 <div class="div d-flex ">
                                                        <h6 class="me-5" data-bs-toggle="modal" data-bs-target="#work">
                                                               Work Experience</h6>


                                                        <div class=" ms-auto">
                                                               <a href="" data-bs-toggle="modal" data-bs-target="#work"><i class="fa-solid fa-pen"></i>Edit</a>
                                                        </div>
                                                 </div>
                                                 <!-- PHP CODE -->
                                                 <p class="ms-3">
                                                        <?php echo $row['e_workExperience'] ?>
                                                 </p>
                                          </div>
                                   </div>
                            </div>



                            <!-- EDUCATION -->

                            <div class="row">
                                   <div class="col-md-12 mt-3 mb-3">
                                          <div class="card">
                                                 <div class="div d-flex ">
                                                        <h6 class="me-5" data-bs-toggle="modal" data-bs-target="#education">
                                                               Education</h6>
                                                        <div class=" ms-auto">
                                                               <a href="" data-bs-toggle="modal" data-bs-target="#education"><i class="fa-solid fa-pen"></i>Add</a>
                                                        </div>
                                                 </div>
                                                 <!-- PHP CODE -->
                                                 <p>
                                                        <?php
                                                        echo $row['e_highestEducation']; ?>
                                                 </p>
                                          </div>
                                   </div>
                            </div>



                            <!-- SKILLS -->

                            <div class="row">
                                   <div class="col-md-12 mt-3 mb-3">
                                          <div class="card ">
                                                 <div class="card-body">
                                                        <div class="div d-flex ">
                                                               <h6 class="me-5">
                                                                      Skills</h6>
                                                               <div class=" ms-auto">
                                                                      <a href="" data-bs-toggle="modal" data-bs-target="#skills"><i class="fa-solid fa-pen"></i>Edit</a>
                                                               </div>
                                                        </div>
                                                        <p>
                                                               <?php echo $row['e_skills']; ?>
                                                        </p>
                                                 </div>
                                                 <p class="card-text mt-4">Skills with the check mark have been
                                                        verified by Jobmilo.</p>
                                          </div>
                                   </div>
                            </div>
                            <!-- </div> -->



                            <!-- lANGUAGE KNOWN -->

                            <div class="row">
                                   <div class="col-md-12 mt-3 mb-3">
                                          <div class="card ">
                                                 <div class="card-body">
                                                        <div class="div d-flex ">
                                                               <h6 class="me-5">
                                                                      Language Known</h6>
                                                               <div class=" ms-auto">
                                                                      <a href="" data-bs-toggle="modal" data-bs-target="#lang"> <i class="fa-solid fa-pen"></i>
                                                                             Edit</a>
                                                               </div>
                                                        </div>
                                                        <p>
                                                               <?php
                                                               echo $row['e_language'] ?>
                                                        </p>
                                                        <p class="card-text mt-4">Skills with the check mark have been
                                                               verified by Jobmilo.</p>
                                                 </div>
                                          </div>
                                   </div>
                            </div>




                            <!-- RESUME -->

                            <div class="row ">
                                   <div class="col-md-12 mt-3 mb-3 ">
                                          <div class=" d-flex ">
                                                 <h6 class="me-5">
                                                        Resume</h6>

                                                 <div class=" ms-auto">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#resume"><i class="fa-solid fa-pen"></i> Edit</a>
                                                 </div>
                                          </div>
                                          <p>️Only visible to HRs</p>

                                          <input type="text" readonly name="pdfFile" id="pdfFile" class="form-control" value="<?php echo $row['e_resume'] ?>">

                                   </div>
                            </div>



                            <div class="row">
                                   <div class="col-md-12 mt-3 mb-3">

                                          <div class="div d-flex ">
                                                 <h6 class="me-5" data-bs-toggle="modal" data-bs-target="#education">
                                                        Other details</h6>


                                          </div>




                                   </div>
                            </div>



                            <!-- LOCATION -->
                            <div class="row">
                                   <div class="col-md-12 mt-3 mb-3">
                                          <div class="card ">
                                                 <div class="card-body">
                                                        <div class="div d-flex ">
                                                               <h6 class="me-5">
                                                                      Location</h6>
                                                               <div class=" ms-auto">
                                                                      <a href="" data-bs-toggle="modal" data-bs-target="#location"><i class="fa-solid fa-pen"></i>
                                                                             Edit</a>
                                                               </div>
                                                        </div>
                                                        <!-- LOcation php code -->
                                                        <p>
                                                               <?php echo $row['e_curLocation'] . "," . $row['e_zip'] ?>
                                                        </p>
                                                        <p class="card-text">Location with the check mark have been
                                                               verified by Jobmilo.</p>
                                                 </div>
                                          </div>
                                   </div>
                            </div>

                            <!-- Basic details -->
                            <div class="row">
                                   <div class="col-md-12 mt-3 mb-3">
                                          <div class="card ">
                                                 <div class="card-body">
                                                        <div class="div d-flex ">
                                                               <h6 class="me-5">
                                                                      Basic details</h6>
                                                               <div class=" ms-auto">
                                                                      <a href="" data-bs-toggle="modal" data-bs-target="#basic"> <i class="fa-solid fa-pen"></i>
                                                                             Edit</a>
                                                               </div>
                                                        </div>
                                                        <!-- Basic php code -->
                                                        <p>
                                                               <?php echo $row['e_name'] . " , " . $row['e_email'] . " , " . $row['e_phNumber'] ?>
                                                        </p>


                                                        <p class="card-text">All Details with are check mark have been
                                                               verified by Jobmilo.</p>
                                                 </div>
                                          </div>
                                   </div>
                            </div>


                            </form>
                     </div>
              </div>
       </div>



       <?php //include("basic_de_modal.php")
       ?>
       <?php //include("edu_modal.php")
       ?>
       <?php //include("exp_modal.php")
       ?>
       <?php //include("job_role_modal.php")
       ?>
       <?php //include("lang_modal.php")
       ?>
       <?php //include("location_modal.php")
       ?>
       <?php //include("skills_modal.php")
       ?>

       <?php include("profile/modal.php") ?>



       <script src="js/nav-bg.js"></script>

</body>

</html>
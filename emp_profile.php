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


</head>

<body>
       <?php include("inc/nav.php") ?>


       <div class="container mt-5 ">
              <div class="row d-flex  justify-content-center">
                     <div class="col-md-4  mt-5 px-4 ">
                            <!-- PROFILE PHOTO  -->
                            <div class="card">
                                   <div class="row">
                                          <div class="col-md-4 mb-2 ">
                                                 <div class="user-img">
                                                        <img src="emp_photo/<?php echo $row['photo'] ?>" alt="" class="img-fluid  profileImg rounded-circle mb-2 border border-dark w-20">

                                                        <label for="" id="uploadbtn" class="" data-bs-toggle="modal" data-bs-target="#pic"> <i class="fa-solid fa-camera d-flex justify-content-center align-items-cemter"></i> </label>
                                                 </div>
                                          </div>
                                          <div class="col-md-8">
                                                 <div class="card-body">
                                                        <h6 class="card-title mb-3">
                                                               <?php echo $row['employer_name'] ?>
                                                        </h6>

                                                        <p class="card-text"><i class="fa-solid fa-location-dot"></i>
                                                               <?php echo  $row['company_name'] ?>
                                                        </p>
                                                        <p class="card-text"><i class="fa-solid fa-share-nodes"></i>
                                                               <a href="" class="text-decoration-none"> Share
                                                                      profile</a>
                                                        </p>
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
                                                                             <?php echo $row['email'] ?>
                                                                      </p>
                                                               </div>

                                                        </div>


                                                        <div class="col-md-6">
                                                               <div class="card-body">

                                                                      <!-- Fetch Information from db -->

                                                                      <p class="card-text">Mobile number </p>
                                                                      <p class="card-text">
                                                                             <?php echo $row['phone'] ?>
                                                                      </p>
                                                               </div>
                                                        </div>
                                                 </div>
                                          </div>

                                   </div>


                            </div>

                            <div class="col-md-12 mt-3  border-rounded success">
                                   <div class="card d-flex  ">
                                          <div class="row ">

                                                 <div class="col ">
                                                        <a href="post_blog_form.php"class="text-decoration-none btn btn-outline-info" >Post blog</a>
                                                 </div>
                                                 <div class="col">
                                                        <a href="job_post_form.php" class="text-decoration-none btn btn-success">Post job</a>
                                                 </div>

                                                 <div class="col"></div>

                                                 <div class="col">
                                                
                                                 <a class="text-decoration-none  btn btn-warning" href="applicants.php">Applicants<span class="badge rounded-pill bg-danger">9</span></a>
                                                 </div>
                                                 
                                          </div>
                                          
                                   </div>
                                  
                            </div>

                     </div>
                     




                     <div class="col-md-5  mt-5">
                            <!-- <form action="upd.php" method="post" enctype="multipart/form-data"> -->

                            <!-- Name -->
                            <div class="row">
                                   <div class="col-md-12 mt-1 mb-3">
                                          <div class="card">
                                                 <div class="div d-flex ">
                                                        <h6 class="me-5" data-bs-toggle="modal" data-bs-target="#name">
                                                               Update your Name</h6>


                                                        <div class=" ms-auto">
                                                               <a href="" data-bs-toggle="modal" data-bs-target="#name"><i class="fa-solid fa-pen"></i>Edit</a>
                                                        </div>
                                                 </div>
                                                 <!-- PHP CODE -->
                                                 <p class="ms-3">
                                                        <?php echo $row['employer_name'] ?>
                                                 </p>
                                          </div>
                                   </div>
                            </div>



                            <!-- Company Name-->

                            <div class="row">
                                   <div class="col-md-12 mt-3 mb-3">
                                          <div class="card">
                                                 <div class="div d-flex ">
                                                        <h6 class="me-5" data-bs-toggle="modal" data-bs-target="#company">
                                                               Company Name</h6>
                                                        <div class=" ms-auto">
                                                               <a href="" data-bs-toggle="modal" data-bs-target="#company"><i class="fa-solid fa-pen"></i>Add</a>
                                                        </div>
                                                 </div>
                                                 <!-- PHP CODE -->
                                                 <p>
                                                        <?php
                                                        echo $row['company_name']; ?>
                                                 </p>
                                          </div>
                                   </div>
                            </div>
                            <!-- Email-->

                            <div class="row">
                                   <div class="col-md-12 mt-3 mb-3">
                                          <div class="card">
                                                 <div class="div d-flex ">
                                                        <h6 class="me-5" data-bs-toggle="modal" data-bs-target="#email">
                                                               Email</h6>
                                                        <div class=" ms-auto">
                                                               <a href="" data-bs-toggle="modal" data-bs-target="#email"><i class="fa-solid fa-pen"></i>Add</a>
                                                        </div>
                                                 </div>
                                                 <!-- PHP CODE -->
                                                 <p>
                                                        <?php
                                                        echo $row['email']; ?>
                                                 </p>
                                          </div>
                                   </div>
                            </div>
                            <!-- Phone number-->

                            <div class="row">
                                   <div class="col-md-12 mt-3 mb-3">
                                          <div class="card">
                                                 <div class="div d-flex ">
                                                        <h6 class="me-5" data-bs-toggle="modal" data-bs-target="#phone">
                                                               Phone</h6>
                                                        <div class=" ms-auto">
                                                               <a href="" data-bs-toggle="modal" data-bs-target="#ph"><i class="fa-solid fa-pen"></i>Add</a>
                                                        </div>
                                                 </div>
                                                 <!-- PHP CODE -->
                                                 <p>
                                                        <?php echo $row['phone']; ?>
                                                 </p>
                                          </div>
                                   </div>
                            </div>





                            <!-- Profile photo -->

                            <div class="row ">
                                   <div class="col-md-12 mt-3 mb-3 ">
                                          <div class=" d-flex ">
                                                 <h6 class="me-5">
                                                        Photo</h6>

                                                 <div class=" ms-auto">
                                                        <a href="" data-bs-toggle="modal" data-bs-target="#pic"><i class="fa-solid fa-pen"></i> Edit</a>
                                                 </div>
                                          </div>
                                          <p>️change your profile photo</p>
                                          <input type="text" readonly name="" class="form-control" value="<?php echo $row['photo'] ?>">

                                   </div>
                            </div>






                            </form>
                     </div>
              </div>
       </div>





       <?php include("emp_profile/modal.php") ?>



       <script src="js/nav-bg.js"></script>

</body>

</html>
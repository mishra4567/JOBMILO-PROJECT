<!DOCTYPE html>
<html lang="en">

<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Document</title>
       <!-- Latest compiled and minified CSS -->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

       <!-- Latest compiled JavaScript -->
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

       <style>
              body {
                     background-color: #f1f7eb;
              }

              .container form {
                     /* align-items: center; */
                     padding: 15px;
                     background-color: #fbfbfb;
                     margin-bottom: 12px;
                     -webkit-box-shadow: 3px 3px 3px 3px #dddada;
                     box-shadow: 3px 3px 3px 3px #dddada;
                     background-color: #dfe6e9;

              }

              form:hover {
                     -webkit-box-shadow: 5px 5px 5px 5px #beb8b8;
                     box-shadow: 5px 5px 5px 5px #afadad;
              }
       </style>
</head>

<body>

       <div class="container">
              <div class="row con mt-2 mb-5 d-flex align-items-center justify-content-center">
                     <div class="col-md-5 p-5">


                            <form action="emp_sign.php" method="POST" enctype="multipart/form-data" class="border border-success rounded mt-3 mb-5 p-4">
                                   <h4 class="d-flex align-items-center justify-content-center">Employer Registration here</h4>
                                   <hr class="mb-4">

                                   <?php
                                   session_start();
                                   if (isset($_SESSION['err'])) { ?>
                                          <div class="alert alert-danger">
                                                 <strong><?php echo $_SESSION['err']; ?>!</strong>
                                          </div>

                                   <?php //session_destroy();
                                   } ?>

                                   <p><input type="hidden" name="role" id="" value="employer"></p>

                                   <!-- Company name -->

                                   <label for="cn">Company Name</label>
                                   <input type="company_name" class="form-control mb-3" placeholder="Enter company name..." name="company" id="cn" required>


                                   <!-- Name -->
                                   <div class="row mb-3">
                                          <div class="col">
                                                 <label for="name">Name</label>
                                                 <input type="text" class="form-control" placeholder="Enter full name" name="name" id="name" required>
                                          </div>
                                          <!-- Username -->
                                          <div class="col">
                                                 <label for="username">Username</label>
                                                 <input type="text" class="form-control" placeholder="Create username.." name="username" required>
                                          </div>
                                   </div>


                                   <!-- Email of employer -->
                                   <div class="row mb-3 ms-1 me-1">
                                          <label for="email">Email</label>
                                          <input type="email" class="form-control" placeholder="Enter email.." name="email" id="email" required>
                                   </div>


                                   <!-- Phone number of em -->

                                   <label for="phone" class="mb-1">Phone</label>
                                   <input type="phone" class="form-control  mb-3" name="number" placeholder="Enter phone number" id="phone">




                                   <!-- photo of employer -->
                                   <label for="cl">Photo</label>
                                   <input type="file" name="img" id="cl" class="form-control mb-3">


                                   <!-- password -->

                                   <label for="password" class="">Password</label>
                                   <input type="password" class="form-control mb-4" name="pass" id="password" placeholder="Create strong password">



                                   <div class="row d-flex align-items-center justify-content-center">
                                          <p><input type="submit" name="sign" value="Create account" class="btn form-control" style="background-color: #92d35e;" /></p>
                                   </div>

                                   <div class="div d-flex ">
                                          <a href="index.php" class="me-5 text-decoration-none">Back</a>
                                          <div class=" ms-auto">
                                                 <a href="employer_login.php" class="text-decoration-none">Have an
                                                        account? </a>
                                          </div>
                                   </div>
                                   <div class="div d-flex ">
                                          <a href="job_seeker_login.php" class="me-5 text-decoration-none">Find job</a>
                                          <div class=" ms-auto">
                                                 <a href="employer_login.php" class="text-decoration-none">Log in </a>
                                          </div>
                                   </div>




                            </form>
                     </div>
              </div>
       </div>
</body>

</html>
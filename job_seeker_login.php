<?php
include("db/db.php");
session_start();
if(isset($_POST['login'])){
    $n=$_POST['name'];
    $e=$_POST['email'];
    $p=md5($_POST['pass']);
    $sel="SELECT * FROM jb_employees WHERE (e_email='$e' and e_name='$n') AND e_pass='$p' ";
    $rs=$con->query($sel);
    $numrow=$rs->num_rows;
    if($numrow >0 ){
        $row=$rs->fetch_assoc();
        $_SESSION['id']=$row['e_id'];
        $_SESSION['photo']=$row['e_proPhoto'];
        $_SESSION['on']=$row['e_name'];
        $_SESSION['un']=$row['e_username'];
     

        header("location:home.php");
    }else{
        $err="invalid information !";
 }
}
?>
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
                     background: #fff;
              }

              form {
                     padding: 15px;
                     background-color: #fbfbfb;
                     margin-bottom: 12px;
                     -webkit-box-shadow: 3px 3px 3px 3px #dddada;
                     box-shadow: 3px 3px 3px 3px #dddada;
                     background-color: #dfe6e9;
              }
       </style>
</head>

<body>
       <div class="container ">
              <div class="row mt-5 mb-5 d-flex align-items-center justify-content-center">

                     <div class="col-md-5">
                            <form action="" method="post" class="border border-success rounded mt-3 mb-5 p-5">
                                   <h4 class="d-flex align-items-center justify-content-center">Jobseeker Log in</h4>

                                   <?php
                                    if(isset($err)){
                                    ?>
                                   <div class="alert alert-danger">
                                          <strong>Error!</strong>
                                          <?php  echo $err;?>
                                   </div>
                                   <?php } ?>
                                   <label for="name">Name</label>
                                   <input type="text" class="form-control mb-5" placeholder="Enter full name"
                                          name="name" id="name">



                                   <label for="email">Email</label>
                                   <input type="email" class="form-control mb-5" placeholder="Enter email.."
                                          name="email" id="email">


                                   <label for="password">Password</label>
                                   <input type="password" class="form-control mb-5" name="pass" id="password"
                                          placeholder="Enter password">

                                   <p>
                                          <input type="submit"  name="login"
                                                 value="Log in" class="btn form-control"
                                                 style="background-color: #92d35e;" />
                                   </p>

                                   <div class="div d-flex ">
                                          <a href="index.php" class="me-5 text-decoration-none" >Back</a>
                                          <div class=" ms-auto">
                                                 <a href="jobseeker_signup.php" class="text-decoration-none">Don't have an
                                                        account? </a>
                                          </div>
                                   </div>
                                   <div class="div d-flex ">
                                          <a href="employer_signup.php" class="me-5 text-decoration-none" >Post job</a>
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
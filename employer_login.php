
<?php
session_start();
include("db/db.php");
// session_start();
if(isset($_POST['login'])){
    $n=$_POST['name'];
    $e=$_POST['email'];
    $p=md5($_POST['pass']);

   $sel="SELECT * FROM employer_detail Where email='$e' and password='$p' ";
    $rs=$con->query($sel);
 
    if($rs->num_rows  > 0 ){
        $row=$rs->fetch_assoc();
        $_SESSION['id']=$row['id'];
        $_SESSION['role']=$row['role'];
       //  $_SESSION['photo']=$row['e_proPhoto'];
        $_SESSION['on']=$row['employer_name'];
        $_SESSION['un']=$row['employer_user_name'];
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

                     <div class="col-md-4">
                            <form action="" method="POST" class="border border-success rounded mt-3 mb-5 p-5">
                                   <h4 class="d-flex align-items-center justify-content-center">Employer Log in</h4>
                                   <hr>

                                   <?php
                                    if(isset($err)){
                                    ?>
                                   <div class="alert alert-danger">
                                          <strong>Error!</strong>
                                          <?php  echo $err;?>
                                   </div>
                                   <?php } ?>
                                   <label for="name" class="mt-2">Name</label>
                                   <input type="text" class="form-control mb-5" placeholder="Enter full name"
                                          name="name" id="" required>



                                   <label for="email">Email</label>
                                   <input type="email" class="form-control mb-5" placeholder="Enter email.."
                                          name="email" id="" required>


                                   <label for="password">Password</label>
                                   <input type="password" class="form-control mb-5" name="pass" id=""
                                          placeholder="Enter password" required>

                                   <p>
                                          <input type="submit"  name="login"
                                                 value="Log in" class="btn form-control"
                                                 style="background-color: #92d35e;" />
                                   </p>

                                   <div class="div d-flex ">
                                          <a href="index.php" class="me-5 text-decoration-none" >Back</a>
                                          <div class=" ms-auto">
                                                 <a href="employer_signup.php" class="text-decoration-none">Don't have an
                                                        account? </a>
                                          </div>
                                   </div>
                                   <div class="div d-flex ">
                                          <a href="job_seeker_login.php" class="me-5 text-decoration-none" >Find job</a>
                                          <div class=" ms-auto">
                                                 <a href="employer_signup.php" class="text-decoration-none">sign up </a>
                                          </div>
                                   </div>
                            </form>
                     </div>
              </div>
       </div>





</body>

</html>
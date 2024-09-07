<?php
session_start();
include("db/db.php");
if (!isset($_SESSION['un'])) {
       header("location:index.php");
} else {
       $user = $_SESSION['un'];
  
} ?>

<!DOCTYPE html>
<html lang="en">


<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="Firmbee.com - Free Project Management Platform for remote teams">
<meta name="author" content="Firmbee.com - Free Project Management Platform for remote teams">
<title>https//jobmilo.com</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/0e035b9984.js" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/0e035b9984.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>



<style>
       .company__img {
              height: 50px;
              width: 50px;
              object-fit: cover;
       }

       .profileImg {
              height: 100px;
              width: 100px;
              object-fit: cover;
       }
</style>
        <!-- Applicant details -->

        <script>
       function changeInputValue() {
       // Get the input element by its ID
       var inputField = document.getElementById("inputField");
       
       // Change the value of the input field
       inputField.value = "Applied";
       if(inputField.value =="Applied"){
                     <?php
                     $u_id=$_SESSION['id'];
                     $sel="SELECT * FROM jb_employees WHERE e_id='$u_id'";
                     $rs=$con->query($sel);
                     $row=$rs->fetch_assoc();
                     $name = $row["e_name"];
                     $email = $row["e_email"];
                     $resume = $row["e_resume"];
                     $j_id = $_GET['id'];

                 


                     $ea="SELECT * FROM  job_applications WHERE employee_id ='$u_id' AND job_id ='$j_id'  ";
                     $result=$con->query($ea);
                     if($result -> num_rows > 0){
                                   $applied="You are already applied";
                                   
                            

                            $notification = "A new application has been submitted for job ID:";
                                   
                                   
                                          
                                   
                     }else{
                            $employer_id="SELECT * FROM job_details WHERE id='$j_id'";
                            $ei=$con->query($employer_id);
                            $em=$ei->fetch_assoc();
       
                            $emp_id=$em['user_id'];

                            $ins="INSERT INTO  job_applications set employee_id='$u_id',name='$name',email='$email',resume='$resume',job_id='$j_id', employer_id='$emp_id'";
                            $con->query($ins);
                     }
              

                            ?>
       }
       }
       </script>
</head>

<body>



       <?php include("inc/nav.php") ?>




       <div class="container mt-5 border-success ">
              <div class="row justify-content-center mt-5">
                     <!-- left container -->
                     <div class="col-md-6 mt-5">

                     <?php
                     if(isset($applied)){
                     ?>
                            <div class="alert alert-danger">
                            <strong><?php echo $applied;?>!</strong>
                            </div>
                     <?php }?>

                            <?php
                            include("db/db.php");
                            $id = $_GET['id'];
                            $sel = "SELECT p.id, p.company_name ,p.phone,p.photo, c.id,c.j_title,c.salary,c.description,c.work_exp,c.english,c.education,c.role,c.emp_type,c.shift FROM employer_detail p INNER JOIN job_details c ON c.id=$id";
                            $rs = $con->query($sel);
                            while ($row = $rs->fetch_assoc()) {
                            ?>

                                   <!-- list of post start -->

                                   <div class="container mb-4 p-4 mt- jobs border border-info rounded">

                                          <div class="d-flex gap-3 mt-">
                                                 <img src="emp_photo/<?php echo $row['photo'] ?>" alt="" class="company__img rounded">
                                                 <div>
                                                        <h3 class="fw-bold fs-6"><?php echo $row['j_title'] ?></h3>
                                                        <p><i class="fa-solid fa-user-tie"></i> <?php echo $row['company_name'] ?></p>
                                                 </div>
                                          </div>
                                          <div>
                                                 <?php
                                                 $c = "SELECT c.name,j.id, j.country FROM countries c INNER JOIN   job_details j ON c.id=j.country Where j.id='$id'";
                                                 $s = "SELECT s.id ,s.name,j.id, j.state FROM states s INNER JOIN   job_details j ON s.id=j.state Where j.id='$id'";
                                                 $ci = "SELECT ci.id ,ci.name, j.id,j.city FROM cities ci INNER JOIN   job_details j ON ci.id=j.city Where j.id='$id'";
                                                 // Fetch depertment information for this job listing
                                                 $dept = "SELECT jc.id ,jc.parent_cat, j.department  FROM job_category jc INNER JOIN job_details j ON jc.id=j.department WHERE j.id = '$id'";
                                                

                                                 $cou = $con->query($c);
                                                 $s = $con->query($s);
                                                 $ci = $con->query($ci);
                                                 $de = $con->query($dept);
                                               
                                                 $country = $cou->fetch_assoc();
                                                 $state = $s->fetch_assoc();
                                                 $city = $ci->fetch_assoc();
                                                 $depertment = $de->fetch_assoc();
                                                 {
                                                 ?>
                                                        <p class="fw-semibold"><i class="fa-solid fa-location-dot"></i><?php echo $country['name'] ?> , <?php echo $state['name'] ?> , <?php echo $city['name'] ?> </p>
                                                 <?php } ?>

                                                 <p class="fw-semibold"><i class="fa-solid fa-hand-holding-dollar"></i> ₹<?php echo $row['salary'] ?></p>
                                          </div>
                                          <div class="d-flex gap-5 justify-content-between">
                                                 <div class="rounded bg-secondary text-light">
                                                        <i class="fa-brands fa-critical-role"></i><?php echo $row['role'] . "  " ?> ,
                                                        <i class="fa-solid fa-user-tie"></i> <?php echo $row['emp_type'] . "  " ?> ,
                                                        <i class="fa-solid fa-business-time"> </i><?php echo $row['shift'] . "  " ?> ,
                                                        <i class="fa-solid fa-dice-two"></i><?php echo $row['work_exp'] . "  " ?> ,
                                                        <i class="fa-solid fa-user-graduate"></i> <?php echo $row['education'] . "  " ?>
                                                 </div>
                                                 <?php
                                                 if(!isset($_SESSION)){
                                                 ?>

                                                 <input type='submit'  onclick="changeInputValue()" id="inputField" value="Apply" class="btn btn-success">
                                                 <?php }?>
                                          </div>

                                   </div>

                                   <!-- list of post end -->


                                   <!-- describtion start -->
                                   <div class="container border border-success rounded mb-3 p-3">
                                          <div class="container border border-info rounded mb-2 p-2">
                                          </div>
                                          <hr>
                                          <div>
                                                 <h3 class="fw-bold fs-4">Describtion</h3>
                                                 <p>
                                                 <div>More about this Helper job</div>
                                                 </p>
                                                 <p><?php echo $row['description'] ?></p>
                                          </div>
                                          <div>
                                                 <h4 class="fw-bold fs-6"> How much salary can I expect?</h4>
                                          </div>
                                          <hr>
                                          <div>
                                                 <h3 class="fw-bold fs-4">Job Requirements</h3>
                                                 <div class="row">
                                                        <div class="col-md-6">
                                                               <div>
                                                                      <p class="fw-bold fs-6"><i class="fa-solid fa-briefcase"></i> Experience</p>
                                                                      <h5 class="fw-bold fs-6"><?php echo $row['work_exp'] ?></h5>
                                                               </div>
                                                               <div>
                                                                      <p class="fw-bold fs-6"><i class="fa-solid fa-ribbon"></i> English Level</p>
                                                                      <h5 class="fw-bold fs-6"><?php echo $row['english'] ?></h5>
                                                               </div>
                                                        </div>
                                                        <div class="col md-6">
                                                               <p class="fw-bold fs-6"><i class="fa-solid fa-user-graduate"></i> Education</p>
                                                               <h5 class="fw-bold fs-6"><?php echo $row['education'] ?></h5>
                                                        </div>
                                                 </div>
                                                 <hr>

                                          </div>
                                          <div>
                                                 <h3 class="fw-bold fs-4">Job Role</h3>
                                                 <div class="row">
                                                        <div class="col-md-6">
                                                               <div>
                                                                      <p class="fw-bold fs-6"><i class="fa-solid fa-file-invoice"></i> Department</p>
                                                                      <h5 class="fw-bold fs-6"><?php echo $depertment['parent_cat'] ?></h5>
                                                               </div>
                                                               <div>
                                                                      <p class="fw-bold fs-6"><i class="fa-solid fa-diagram-project"></i> Role / Category</p>
                                                                      <h5 class="fw-bold fs-6"><?php echo $row['role'] ?></h5>
                                                               </div>
                                                        </div>
                                                        <div class="col md-6">
                                                               <div>
                                                                      <p class="fw-bold fs-6"><i class="fa-solid fa-clock"></i> Employment Type</p>
                                                                      <h5 class="fw-bold fs-6"><?php echo $row['emp_type'] ?></h5>
                                                               </div>
                                                               <div>
                                                                      <p class="fw-bold fs-6"><i class="fa-solid fa-sun"></i> Shift</p>
                                                                      <h5 class="fw-bold fs-6"><?php echo $row['shift'] ?></h5>
                                                               </div>
                                                        </div>
                                                 </div>
                                                 <hr>

                                          </div>
                                          <div>
                                                 <h3 class="fw-bold fs-4">Interview & address details</h3>
                                                 <div class="row">
                                                        <div class="col-md-6">
                                                               <div>
                                                                      <p class="fw-bold fs-6"><i class="fa-solid fa-building-user"></i></i> Work Location</p>
                                                                      <h5 class="fw-bold fs-6">Kolkata, West Bengal, India</h5>
                                                               </div>
                                                               <div>
                                                                      <p class="fw-bold fs-6"><i class="fa-solid fa-map-location-dot"></i> Interview mode</p>
                                                                      <h5 class="fw-bold fs-6"><a href="https://wa.me/91<?php echo $row['phone'] ?>">Online/Telephonica</a></h5>
                                                               </div>
                                                        </div>
                                                        <div class="col md-6">

                                                        </div>
                                                 </div>
                                                 <hr>

                                          </div>
                                          <div>
                                                 <div class="">Provide By <h6 class="fw-bold fs-6"><?php echo $row['company_name'] ?></h6>
                                                 </div>
                                          </div>
                                   </div>
                                   <!-- describtion end -->
                     </div>

              <?php } ?>
              <!-- End of loop -->

              <!-- right container -->
              <?php
              if (isset($_SESSION['role'])) {
                     include("db/db.php");
                     if (isset($_SESSION['un'])) {
                            $user = $_SESSION['un'];
                            $sel = "SELECT * FROM employer_detail WHERE  employer_user_name='$user'";
                            $rs = $con->query($sel);
                            $row = $rs->fetch_assoc();

              ?>
                            <!-- right container -->

                            <div class="col-md-3 ">
                                   <div class="cont">
                                          <div class="container rounded d-flex flex-column align-items-center border border-info p-3 mt-5">
                                                 <img src="emp_photo/<?php echo $row['photo'] ?>" alt="" class="profileImg rounded-circle mb-2">
                                                 <p class="fw-semibold"> <?php echo $_SESSION['on'] ?></p>
                                                 <a href="emp_profile.php" class="btn btn-success"> Update Profile</a>
                                          </div>
                                   </div>
                            </div>
                     <?php }
              } else {
                     $user = $_SESSION['un'];
                     $sel = "SELECT * FROM jb_employees WHERE e_username='$user'";
                     $rs = $con->query($sel);
                     $row = $rs->fetch_assoc();

                     ?>

                     <!-- right container -->
                     <div class="col-md-3 ">
                            <div class="cont">
                                   <div class="container rounded d-flex flex-column align-items-center border border-info p-3 mt-5">
                                          <img src="profile_image/<?php echo $row['e_proPhoto'] ?>" alt="" class="profileImg rounded-circle mb-2">
                                          <p class="fw-semibold"> <?php echo $_SESSION['on'] ?></p>
                                          <a href="profile.php" class="btn btn-success"> Update Profile</a>
                                   </div>
                            </div>
                     </div>
              <?php } ?>
              </div>

              <div class="container-fluid">
                     <!-- Footer -->
                     <?php include("inc/footer.php") ?>
              </div>



              <script src="js/nav-bg.js"></script>
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
              <?php include("inc/signup_modal.php") ?>
              <?php include("inc/login_modal.php") ?>
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>








             


<?php
if ($applied) {
       echo '<script>
       $(document).ready(function(){
              $("#apply").modal("show");
       });
       </script>';
}
?>


</body>

</html>
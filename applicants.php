<?php
session_start();
include("db/db.php");
if (!isset($_SESSION['un'])) {
  header("location:index.php");
} else {
  $user = $_SESSION['un'];
  if(isset($_SESSION['role'])){
     $sel = "SELECT * FROM employer_detail WHERE employer_user_name='$user'";
    $rs = $con->query($sel);
    $row = $rs->fetch_assoc();
  }else{
    $sel = "SELECT * FROM jb_employees WHERE e_username='$user'";
    $rs = $con->query($sel);
    $row = $rs->fetch_assoc();
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Firmbee.com - Free Project Management Platform for remote teams"> 
    <title>Name of company</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0e035b9984.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/0e035b9984.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="profile/style.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>


<!-- Navbar -->      

<?php include("inc/nav.php")?>




    <main>
        <div class="main ">
          <div class="container  d-flex justify-content-center align-item-center">
            <div class="row d-flex justify-content-center align-item-center">
              <div class="col-lg-6 ms-3  col-md-8">

              <h4>- <u> Applicants List </u>-</h4>

                      <!-- PHP POST TABLE LOOP -->
                      <?php
                     
                      $employer_id = $_SESSION["id"];
                     //  $sql = "SELECT * FROM job_applications WHERE job_id IN (SELECT id FROM jobs WHERE employer_id = $employer_id)";
                      $sql="SELECT je.e_id ,je.e_name,je.e_email ,je.e_gender,je.e_highestEducation,je.e_workExperience,je.e_skills,je.e_resume , je.e_proPhoto,je.e_phNumber , ja.employee_id FROM jb_employees je INNER JOIN job_applications ja ON je.e_id=ja.employee_id WHERE job_id='14' AND employer_id='$employer_id'";
                      $result = $con->query($sql);
                      if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {?>
                                
                                <div class="container mb-4 p-4 mt- jobs border border-info rounded">

<div class="d-flex gap-3 mt-">
  <img src="profile_image/<?php echo $row['e_proPhoto'] ?>"style="width: 10%; height:10%; " alt="" class="company__img rounded " >
  <div>
    <h3 class="fw-bold fs-6"><i class="fa-solid fa-user-tie"></i> <?php echo $row['e_name'] ?></h3>
    <p> <?php echo $row['e_email'] ?></p>
    <p><i class="fa-solid fa-venus-mars"></i> <?php echo $row['e_gender'] ?></p>
    <p><i class="fa-solid fa-file"></i><iframe src="./resume_image/<?php echo $row['e_resume'] ?>" width="100%" height="250px"></iframe> </p>
    
    <p><i class="fa-brands fa-whatsapp"></i>+91- <a href="https://wa.me/"> <?php echo $row['e_phNumber'] ?></a></p>
  </div>
</div>
<div>


  

                                   
</div>
<div class="d-flex gap- justify-content-between ms-5">
  <div class="rounded bg-secondary text-light ms-4">
    <i class="fa-brands fa-critical-role"></i><?php echo $row['e_highestEducation'] ?>,
    <i class="fa-solid fa-user-tie"></i> <?php echo $row['e_workExperience'] ?>,
    <i class="fa-solid fa-business-time"></i><?php echo $row['e_skills'] ?> ,
   

  </div>
  
</div>

</div>

                     <?php      } }  else{?>
                     
                            echo "No applications found.";
                    <?php    }?>

                <!-- end of loop -->
            

             


                <nav aria-label="blog navigation">
                  <ul class="pagination">
                    <li class="page-item ">
                      <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                      </a>
                    </li>
                    <li class="page-item"><a class="page-link active" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                      </a>
                    </li>
                  </ul>
                </nav>
              </div>

              <?php include("./inc/side.php")?>
             
              
              </div>
            </div>
            <!-- end of row -->
            
          </div>
        </div>
    </main>
      <!-- Footer -->
      <?php include("inc/footer.php")?>

      <script src="js/nav-bg.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <?php include("inc/signup_modal.php")?>
    
</body>
</html>
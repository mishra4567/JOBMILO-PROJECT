<?php
session_start();
include("db/db.php");
$s = ""; // Define $s outside of the if block

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

  .con {
    padding: 15px;
    background-color: #fff;
    margin-top: 0px;
    -webkit-box-shadow: 3px 3px 3px 3px #f4f2f2;
    box-shadow: 3px 3px 3px 3px #dddada;
    background: #f2f2f2;

  }

  .con:hover {
    -webkit-box-shadow: 5px 5px 5px 5px #beb8b8;
    box-shadow: 5px 5px 5px 5px #afadad;
  }

  .jobs {
    padding: px;
    background-color: #fff;
    /* margin-top: 9rem; */
    -webkit-box-shadow: 3px 3px 3px 3px #f4f2f2;
    box-shadow: 3px 3px 3px 3px #dddada;
    margin-left: 0.3rem;

  }


  .cont {
    padding: 10px;
    background-color: #fff;


  }

  .cont .container {
    padding: 15px;
    background-color: #fff;
    margin-top: 0px;
    -webkit-box-shadow: 3px 3px 3px 3px #f4f2f2;
    box-shadow: 3px 3px 3px 3px #dddada;


  }

  .cont .container:hover {
    -webkit-box-shadow: 5px 5px 5px 5px #beb8b8;
    box-shadow: 5px 5px 5px 5px #afadad;
  }

  .sech {
    margin-top: 4.7rem;
    background-color: #fff;
  }

  .bar {
    height: 3rem;
  }

  .space {
    height: 10rem;
  }
  
</style>
</head>

<body>



  <?php include("inc/nav.php") ?>



  <div class="container-fluid mt-  sech position-fixed mb- sech_bg">
    <div class="row justify-content-center  seah_mar ">
      <div class=" col-md-8  ">
        <div class="con mb-">
          <form class="d-flex" method="get" autocomplete="off">
            <div class="input-group">
              <input type="search" class="form-control bar" name="s" placeholder="Type in your job search" aria-label="Search" aria-describedby="search-options">
              <select class="form-select" id="search-options">
                <option selected>location:</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
              </select>
              <button class="btn btn-outline-success" name="search" type="submit"><i class="fas fa-search"></i> Search</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


  <div class="space">
  </div>



  <div class="container me-0">

    <div class="row ms-5">
      <h4 class="ms-5">Showing all jobs</h4>
    </div>
  </div>







    <!-- Job Description -->
    <div class="container ">

      <div class="row justify-content-center ">
        <!-- left container -->
        <div class="col-md-6">

          <?php
          include("db/db.php");
          if (isset($_GET['s']) && $_GET['s'] != "") {
            $s = $_GET['s'];

          $sel = "SELECT p.id, p.company_name, p.phone, p.photo, c.id, c.j_title, c.salary, c.description, c.work_exp, c.english, c.education, c.role, c.emp_type, c.shift FROM employer_detail p INNER JOIN job_details c ON p.id=c.user_id WHERE
            j_title   LIKE '%$s%' OR  salary LIKE '%$s%' OR
          work_exp  LIKE '%$s%' OR english LIKE '%$s%' OR
          education LIKE '%$s%' OR   
          emp_type  LIKE '%$s%' OR shift   LIKE '%$s%' OR company_name LIKE '%$s%'";

  }else{
    $sel = "SELECT p.id, p.company_name, p.phone, p.photo, c.id, c.j_title, c.salary, c.description, c.work_exp, c.english, c.education, c.role, c.emp_type, c.shift FROM employer_detail p INNER JOIN job_details c ON p.id=c.user_id";
  }
          $rs = $con->query($sel);

          // Loop through each job listing
          while ($row = $rs->fetch_assoc()) {
            // Fetch country information for this job listing
            $c = "SELECT c.name FROM countries c INNER JOIN job_details j ON c.id=j.country WHERE j.id = " . $row['id'];
            $country_result = $con->query($c);
            $country = $country_result->fetch_assoc();

            // Fetch state information for this job listing
            $s = "SELECT s.name FROM states s INNER JOIN job_details j ON s.id=j.state WHERE j.id = " . $row['id'];
            $state_result = $con->query($s);
            $state = $state_result->fetch_assoc();

            // Fetch city information for this job listing
            $ci = "SELECT ci.name FROM cities ci INNER JOIN job_details j ON ci.id=j.city WHERE j.id = " . $row['id'];
            $city_result = $con->query($ci);
            $city = $city_result->fetch_assoc();
            // Process data from the fourth result set $ci
            // Continue processing 




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


                <p class="fw-semibold"><i class="fa-solid fa-location-dot"></i><?php echo $country['name'] ?> , <?php echo $state['name'] ?> , <?php echo $city['name'] ?> </p>

                <p class="fw-semibold"><i class="fa-solid fa-hand-holding-dollar"></i> ₹<?php echo $row['salary'] ?></p>
              </div>
              <div class="d-flex gap-3 justify-content-between">
                <div class="rounded bg-secondary text-light">
                  <i class="fa-brands fa-critical-role"></i><?php echo $row['role'] ?>,
                  <i class="fa-solid fa-user-tie"></i> <?php echo $row['emp_type'] ?>,
                  <i class="fa-solid fa-business-time"></i><?php echo $row['shift'] ?> ,
                  <i class="fa-solid fa-dice-two"></i><?php echo $row['work_exp'] ?>,
                  <i class="fa-solid fa-user-graduate"></i> <?php echo $row['education'] ?>
                </div>
                <a href="job-desc.php?id=<?php echo $row['id'] ?>"  class="btn btn-outline-info" style="white-space: nowrap;">See details</a>
              </div>

            </div>
        <?php }
         ?>
        <!-- list of post end -->



        </div>
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
      <!-- Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
      <!-- Font Awesome script -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>

</body>

</html>
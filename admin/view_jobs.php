<?php
session_start();
include("db/db.php");
$s = ""; // Define $s outside of the if block

if (!isset($_SESSION['an'])) {
  header("location:index.php");
} ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Firmbee.com - Free Project Management Platform for remote teams">
  <meta name="author" content="Firmbee.com - Free Project Management Platform for remote teams">
  <title>SB Admin 2 - Blank</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
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

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include("admin_inc/side.php") ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php include("admin_inc/top.php") ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800 d-flex align-item-center justify-content-center"> <strong><u>All job post list in your site</u></strong></h1>
          <hr>
          <div class="container ">




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
                  } else {
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
                        <img src="../emp_photo/<?php echo $row['photo'] ?>" alt="" class="company__img rounded">
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
                    <hr>
                  <?php }
                  ?>
                  <!-- list of post end -->




                </div>









              </div>
              <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
             <?php include("admin_inc/footer.php") ?> <!-- End of Footer -->

          </div>
          <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
          <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <?php include("admin_inc/logout_modal.php") ?>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>


        <script src="js/nav-bg.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Font Awesome script -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>

</body>

</html>
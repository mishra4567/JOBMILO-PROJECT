<?php
session_start();
include("db/db.php");
if (!isset($_SESSION['an'])) {
    header("location:index.php");
} else {
    $user = $_SESSION['an'];
 
        $sel = "SELECT * FROM admin WHERE name='$user'";
        $rs = $con->query($sel);
        $row = $rs->fetch_assoc();
    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

       <meta charset="utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       <meta name="description" content="">
       <meta name="author" content="">
       <title>Job Portal - Post a Job</title>
    <lin href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
       <!-- Custom fonts for this template-->
       <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
       <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

       <!-- Custom styles for this template-->
       <link href="css/sb-admin-2.min.css" rel="stylesheet">
       <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        }

        .form-control {
            border-radius: 8px;
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 0 0.25rem rgba(0, 123, 255, 0.25);
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            border-radius: 8px;
            padding: 10px 20px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .job-portal-title {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 30px;
            color: #007bff;
            text-align: center;
        }

        .job-form-label {
            font-weight: bold;
        }

        .form-text {
            font-size: 14px;
            color: #6c757d;
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
                                   <h1 class="h3 mb-2 text-gray-800 d-flex align-item-center justify-content-center"> <strong><u>Post a JOB </u></strong></h1>
                                   <hr>

                            <!-- Admin panel -->




    <div class="container">  
     
        <form id="jobForm" action="job_ins.php" method="post">

            <input type="hidden" name="eid" id="" value="<?php echo $row['id'] ?>">

            <div class="mb-3">
                <label for="j_title" class="form-label job-form-label">Job Title</label>
                <input type="text" class="form-control" id="j_title" name="j_title" required>
                <div class="form-text">Enter the job title</div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="e_name" class="form-label job-form-label">Employer Name</label>
                    <input type="text" class="form-control" id="e_name" name="e_name" value="<?php
                                                                                                echo $_SESSION['an'] ?>" required>
                    <div class="form-text">Enter the employer's name</div>
                </div>
                <div class="col-md-6">
                    <div class="row">

                        <!-- Country -->
                        <div class="col-md-4">
                            <label for="location1" class="form-label job-form-label">Country</label>
                            <div class="input-group">

                                <select class="form-select" name="country" id="cnt" onchange="mystate(this.value);" required>
                                    <option value="">-Select Country-</option>
                                    <?php
                                    $sel = "SELECT * FROM countries";
                                    $rs = $con->query($sel);
                                    while ($row = $rs->fetch_assoc()) {
                                    ?>
                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <!-- State -->
                        <div class="col-md-4">


                            <label for="location2" class="form-label job-form-label">State </label>
                            <div class="input-group">
                                <select class="form-select" name="state" id="state" onchange="mycity(this.value);" required>
                                    <option value="">-Select State-</option>

                                </select>
                            </div>
                        </div>



                        <!-- city -->
                        <div class="col-md-4">
                            <label for="location3" class="form-label job-form-label">City</label>
                            <div class="input-group">
                                <select class="form-select" id="city" name="city"  required>
                                    <option value="" disabled selected>-Select City-</option>
                                </select>
                            </div>
                        </div>



                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="salary" class="form-label job-form-label">Salary</label>
                    <input type="text" class="form-control" id="salary" name="salary" required>
                    <div class="form-text">Enter the salary range</div>
                </div>
                <div class="col-md-6">
                    <label for="emp_type" class="form-label job-form-label">Employment Type</label>

                    <div class="row mt-2">
                        <div class="col-md-12">
                            <input type="radio" id="emp_type" name="emp_type" value="Full time" required class="ms-1"> Full time
                            <input type="radio" id="emp_type" name="emp_type" value="Part time" class="ms-1" required> Part time
                            <input type="radio" id="emp_type" name="emp_type" value="Contract time" class="ms-1" required> Contract time

                        </div>
                    </div>
                    <div class="form-text">e.g., Full-time, Part-time, Contract</div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="education" class="form-label job-form-label">Depertment</label>
                    <select class="form-select" id="education" name="department" required>
                        <option value="">Select Depertment</option>
                        <?php
                        $sel = "SELECT * FROM  job_category";
                        $rs = $con->query($sel);
                        while ($row = $rs->fetch_assoc()) {
                        ?>
                            <option value="<?php echo $row['id']; ?>"><?php echo $row['parent_cat']; ?></option>
                        <?php } ?>
                    </select>
                    <div class="form-text">Select the required education level</div>
                </div>


                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="shift" class="form-label job-form-label">Shift</label>
                        <input type="text" class="form-control" id="shift" name="shift" placeholder="Day / Night shift" required>
                        <div class="form-text">Enter the shift timing</div>
                    </div>
                    <div class="col-md-6 ">
                        <label for="education" class="form-label job-form-label ms-4">Education</label>
                        <select class="form-select ms-4" id="education" name="education" required>
                            <option value="">Select education qualification</option>
                            <option value="Associate Degree">Associate Degree</option>
                            <option value="Bachelor's Degree">Bachelor's Degree</option>
                            <option value="Master's Degree">Master's Degree</option>
                            <option value="MBA">MBA</option>
                            <option value="PhD">PhD</option>
                            <option value="Other">Other</option>
                        </select>

                    </div>
                </div>
            </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="work_exp" class="form-label job-form-label">Work Experience</label>
                        <input type="text" class="form-control " id="work_exp" name="work_exp" required placeholder="Freshers / 5 year exprience">
                        <div class="form-text">Enter the required work experience</div>
                    </div>
                    <div class="col-md-6">
                        <label for="english" class="form-label job-form-label ms-4">English Proficiency</label>
                        <input type="text" class="form-control ms-4" id="english" name="english" required>
                        <div class="form-text">Enter the required level of English proficiency</div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="role" class="form-label job-form-label">Job Role</label>
                        <input type="text" class="form-control" id="role" name="role" required>
                        <div class="form-text">Enter the job role</div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label job-form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
                    <div class="form-text">Provide a detailed description of the job</div>
                </div>

                <input type="submit" class="btn btn-primary" name="btn" value="Post job">
        </form>
    </div>






                            



                            <!-- Admin panel -->
                                   
                            </div>
                            <!-- /.container-fluid -->

                     </div>
                     <!-- End of Main Content -->

                     <!-- Footer -->
                     < <?php include("admin_inc/footer.php") ?> <!-- End of Footer -->

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


           <!--Ajax script for location -->
     <!-- script -->
     <script>
              function mystate(cid) {
                     $.ajax({
                            url: "getstate.php",
                            type: 'POST',
                            data: {
                                   c: cid
                            },
                            success: function(resp) {
                                   $("#state").html(resp);
                                   $("#city").html('<option value="" disabled selected>-Select City-</option>'); // Reset city dropdown
                            }
                     });
              }

              function mycity(sid) {
                     $.ajax({
                            url: "getcity.php",
                            type: 'POST',
                            data: {
                                   s: sid
                            },
                            success: function(resp) {
                                   $("#city").html(resp);
                            }
                     });
              }
       </script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
 

    <script src="script.js"></script>
</body>

</html>
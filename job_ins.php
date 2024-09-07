<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<?php
 session_start();
include("db/db.php");

// Check if form is submitted
if (isset($_POST['btn'])) {
    // Retrieve form data
    $j_title = $_POST['j_title'];
    $e_name = $_POST['e_name'];
    // Location
    // country
    $country = $_POST['country'];
    // state 
    $state = $_POST['state'];
    // city
    $city = $_POST['city'];
    $salary = $_POST['salary'];
    $emp_type = $_POST['emp_type'];
    $education = $con->real_escape_string($_POST['education']);
    $shift = $_POST['shift'];
    $department = $_POST['department'];
    $work_exp = $_POST['work_exp'];
    $english = $_POST['english'];
    $role = $_POST['role'];
    $description = $con->real_escape_string($_POST['description']);
    $id = $_POST['eid'];




    $ins = "INSERT INTO job_details SET j_title='$j_title', e_name='$e_name', country='$country',state='$state',city='$city',  salary='$salary', emp_type='$emp_type', education='$education', shift='$shift', department='$department', work_exp='$work_exp', english='$english' ,user_id='$id', role='$role', description='$description' ,status='pending'";

    // Execute the statement
    if ($con->query($ins)) {
        $condition = true;
       
        if ( $condition) {
            echo '<!-- The Modal -->
            <div class="modal" id="postjob">
                                 <div class="modal-dialog">
                                   <div class="modal-content">
                               
                                     <!-- Modal Header -->
                                     <div class="modal-header">
                                       <h4 class="modal-title">Thank for you response</h4>
                                       <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                     </div>
                               
                                     <!-- Modal body -->
                                     <div class="modal-body">
                                     your request is under process!
                                     </div>
                               
                                     <!-- Modal footer -->
                                     <div class="modal-footer">
                                       <button type="button" class="btn btn-success" data-bs-dismiss="modal">ok</button>
                                     </div>
                               
                                   </div>
                                 </div>
                               </div>';
                               header("location:emp_profile.php");
        }
    } else {
        $err = "Error sending message!";
        echo $err;
    }
}
?>
<?php
// session_start();
if ( $condition) {
    echo '<script>
            $(document).ready(function(){
              $("#postjob").modal("show");
            });
          </script>';
}
?>

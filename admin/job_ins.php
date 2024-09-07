<?php
session_start();
include("db/db.php");

// Check if form is submitted
if (isset($_POST['btn'])) {
    // Retrieve form data
    $j_title = $_POST['j_title'];
  
              // Location
    // country
    $country = $_POST['country'];
    // state 
  $state=$_POST['state'];
    // city
    $city=$_POST['city'];
    $salary = $_POST['salary'];
    $emp_type = $_POST['emp_type'];
    $education = $con->real_escape_string($_POST['education']);
    $shift = $_POST['shift'];
    $department = $_POST['department'];
    $work_exp = $_POST['work_exp'];
    $english = $_POST['english'];
    $role = $_POST['role'];
    $description = $con->real_escape_string($_POST['description']);
    // $id = $_POST['eid'];
    $id=$_SESSION['id'];


    $admin_name=$_SESSION['an'];


 echo $ins = "INSERT INTO job_details SET j_title='$j_title', e_name='(Admin)$admin_name', country='$country',state='$state',city='$city',  salary='$salary', emp_type='$emp_type', education='$education', shift='$shift', department='$department', work_exp='$work_exp', english='$english',user_id='$id', role='$role', description='$description' ,status='approved'";

    // Execute the statement
    if ($con->query($ins)) {
        header("location:view_jobs.php");
    } else {
        echo "Error: ";
    }
}

<?php
session_start();
include("db/db.php");
if(isset($_POST['sign'])){
       $role=$_POST['role'];
       $cn=$_POST['company'];
       $n=$_POST['name'];
       $un=$_POST['username'];
       $e=$_POST['email'];
       $ph=$_POST['number'];
       $bf=$_FILES['img']['tmp_name'];
       $fn=time().$_FILES['img']['name'];
       move_uploaded_file($bf,"emp_photo/".$fn);
       $pass=md5($_POST['pass']);

       $sel="SELECT * FROM employer_detail WHERE email='$e' or employer_user_name='$un' ";
       $rs=$con->query($sel);
       if($rs->num_rows > 0 ){
              $message="Information already exists in database!!";
              $_SESSION['err']=$message;
             header("location:employer_signup.php");
       //       session_destroy();
       }else{

   
     echo  $ins="INSERT INTO employer_detail SET employer_name='$n',	employer_user_name='$un',	company_name='$cn',	email='$e' ,role='$role',	phone='$ph',	photo='$fn',	password='$pass'";
       
       if($con->query($ins)){
              header("location:employer_login.php");
       }
}
}
?>
<?php
session_start();
include("db/db.php");

              // Name
              if(isset($_POST['n'])){
                     $id=$_SESSION['id'];
                     $n=$_POST['name'];
                     $u="UPDATE employer_detail SET employer_name='$n' where id='$id'";
                     if($con->query($u)){
                            header("location:emp_profile.php");
                     }
              }
              // Company name
              if(isset($_POST['cn'])){
                     $id=$_SESSION['id'];
                     $cn=$_POST['company'];
                     $u="UPDATE employer_detail SET company_name='$cn' where id='$id'";
                     if($con->query($u)){
                            header("location:emp_profile.php");
                     }
              }
              // Email
              if(isset($_POST['em'])){
                     $id=$_SESSION['id'];
                     $e=$_POST['email'];
                     $u="UPDATE employer_detail SET email='$e' where id='$id'";
                     if($con->query($u)){
                            header("location:emp_profile.php");
                     }
              }
              // phone
              if(isset($_POST['ph'])){
                     $id=$_SESSION['id'];
                     $ph=$_POST['phone'];
                     $u="UPDATE employer_detail SET phone='$ph' where id='$id'";
                     if($con->query($u)){
                            header("location:emp_profile.php");
                     }
              }
     
              
       if(isset($_POST['pic'])){
              if(isset($_FILES['img']['tmp_name']) && $_FILES['img']['tmp_name']!=""){
                    $bf=$_FILES['img']['tmp_name'];
                    $fn=time().$_FILES['img']['name'];
                    move_uploaded_file($bf,'emp_photo/'.$fn);
                    $id=$_SESSION['id'];
                    $u="UPDATE employer_detail SET photo='$fn' where id='$id'" ;
              }else{
                    $u="UPDATE employer_detail SET  where id='$id'" ;

                    }
                    if($con->query($u)){
                     header("location:emp_profile.php");
                    }else{
                     echo "unable";
                    }

              }


//        $cn=$_POST['company'];
//        $n=$_POST['name'];
//        $un=$_POST['username'];
//        $e=$_POST['email'];
//        $ph=$_POST['number'];
//        $bf=$_FILES['img']['tmp_name'];
//        $fn=time().$_FILES['img']['name'];
//        move_uploaded_file($bf,"emp_photo/".$fn);
//        $pass=md5($_POST['pass']);
//        $id=$_SESSION['id'];

     

   
//      echo  $ins="INSERT INTO employer_detail SET employer_name='$n',	employer_user_name='$un',	company_name='$cn',	email='$e' ,role='$role',	phone='$ph',	photo='$fn',	password='$pass'";
       
//        if($con->query($ins)){
//               header("location:employer_login.php");
//        }


?>
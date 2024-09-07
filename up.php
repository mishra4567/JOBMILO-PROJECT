<?php
session_start();
include("db/db.php");
                     // WORK EXPRENCE
if(isset($_POST['expr'])){
       $id=$_SESSION['id'];
       $exp=$_POST['exp'];
       $u="UPDATE jb_employees SET e_workExperience='$exp' where e_id='$id'";
       if($con->query($u)){
              header("location:profile.php");
       }
}

                     // EDUCATION

if(isset($_POST['education'])){
       $id=$_SESSION['id'];
       $exp=$_POST['edu'];
       $u="UPDATE jb_employees SET e_highestEducation='$exp' where e_id='$id'";
       if($con->query($u)){
              header("location:profile.php");
       }
}
                     // SKILLS

       if(isset($_POST['skill'])){
              if(isset($_POST['skills'])){
              $skills=implode(" , ",$_POST['skills']);
              }else{
              $skills="";
       }
}
$id=$_SESSION['id'];

       $u="UPDATE jb_employees SET e_skills='$skills' where e_id='$id'";
       if($con->query($u)){
              header("location:profile.php");
       }
       
                     // LANGUAGE
       if(isset($_POST['language'])){
              if(isset($_POST['lang'])){
              $lang=implode(" , ",$_POST['lang']);
       }else{
              $lang="";
       }
}
$id=$_SESSION['id'];

       $up="UPDATE jb_employees SET e_language='$lang' where e_id='$id'";
       if($con->query($up)){
              header("location:profile.php");
       }

                     // LOCATION

       if(isset($_POST['location'])){

              $id=$_SESSION['id'];
              $curloc=$con->real_escape_string($_POST['curloc']);
              $hometown=$con->real_escape_string($_POST['hometown']);
               $pincode=$_POST['pincode'];
             
              $u="UPDATE jb_employees SET e_curLocation='$curloc' , e_city='$hometown' ,c_zip='$pincode' where e_id='$id'";
              if($con->query($u)){
                     header("location:profile.php");
              }
       }

                     // BASIC DETAILS
       if(isset($_POST['basic'])){

              $id=$_SESSION['id'];
              $n=$_POST['name'];
              $e=$_POST['email'];
              $g=$_POST['gender'];
              $dob=$_POST['dob'];
              $num=$_POST['number'];


              
              $u="UPDATE jb_employees SET e_name	='$n',
              e_email='$e',	 e_gender = '$g',  e_phNumber='$num' , e_dathOfBirth	='$dob',e_phNumber='$num' where e_id='$id'";
              if($con->query($u)){
                     header("location:profile.php");
              }
       }     



       // profile photo
       if(isset($_POST['profile'])){
              if(isset($_FILES['img']['tmp_name']) && $_FILES['img']['tmp_name']!=""){
                    $bf=$_FILES['img']['tmp_name'];
                    $fn=time().$_FILES['img']['name'];
                    move_uploaded_file($bf,'profile_image/'.$fn);
                    $id=$_SESSION['id'];
                    $u="UPDATE jb_employees SET e_proPhoto='$fn' where e_id='$id'" ;
              }else{
                    $u="UPDATE jb_employees SET  where e_id='$id'" ;

                    }
                    if($con->query($u)){
                     header("location:profile.php");
                    }

              }

              // Resume     

              if(isset($_POST['res'])){
              if(isset($_FILES['resume']['name']) && $_FILES['resume']['name']!=""){
              $buf=$_FILES['resume']['tmp_name'];
              $rf=time().$_FILES['resume']['name'];
              move_uploaded_file($buf,'resume_image/'.$rf);
              $id=$_SESSION['id'];

              $u="UPDATE  jb_employees SET  e_resume	='$rf' WHERE e_id='$id'";
       }else{
               $u="UPDATE  jb_employees SET  WHERE e_id='$id'";
       }
       if($con->query($u)){
              header("location:profile.php");
             }
}
?>


<?php
session_start();
include("db/db.php");
if(isset($_POST['sign'])){
       $n=$_POST['name'];
       $e=$_POST['email'];
   

       
       if(isset($_POST['gender'])){
              $g=$_POST['gender'];
              }else{
                     $g="";
              }

       $un=$con->real_escape_string($_POST['username']);
       $dob=$_POST['dob'];
  
       if(isset($_POST['exp'])){
       $exp=$_POST['exp'];
       }else{
              $exp="";
       }

       $num=$_POST['number'];


       $edu=$_POST['edu'];


       if(isset($_POST['skills'])){
              $skills=implode(",",$_POST['skills']);

       }else{
              $skills="";
       }


       if(isset($_POST['lang'])){
              $lang=implode(",",$_POST['lang']);

       }else{
              $lang="";
       }



       $curloc=$con->real_escape_string($_POST['curloc']);



       $hometown=$con->real_escape_string($_POST['hometown']);



       $buf=$_FILES['resume']['tmp_name'];
       $rf=time().$_FILES['resume']['name'];
       move_uploaded_file($buf,'resume_image/'.$rf);



       $bf=$_FILES['img']['tmp_name'];
       $fn=time().$_FILES['img']['name'];
       move_uploaded_file($bf,'profile_image/'.$fn);
       

       $pincode=$_POST['pincode'];



       $p=md5($_POST['pass']);


       $sel="SELECT * FROM jb_employees WHERE e_email='$e' OR e_username='$un' ";
       $rs=$con->query($sel);
       if($rs->num_rows > 0 ){
              $message="Information already exists in database!!";
              $_SESSION['err']=$message;
             header("location:jobseeker_signup.php");
       }
       else{
       $ins="INSERT INTO jb_employees SET 
       e_name	='$n',
       e_email='$e',	
       e_gender = '$g',
       e_username='$un',	
       e_phNumber='$num',	
       e_pass='$p',
       e_proPhoto='$fn',	
       e_dathOfBirth	='$dob',
       e_curLocation	='$curloc',
       e_city	='$hometown',
       e_zip	='$pincode',
       e_highestEducation='$edu',
       e_workExperience='$exp',	
       e_skills	='$skills',
       e_language	='$lang',
       e_resume	='$rf'";

      

       if($con->query($ins)){

 
              
              header("location:job_seeker_login.php");

       }
}
}
?>


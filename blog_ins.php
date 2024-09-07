<?php
session_start();
include("db/db.php");
if(isset($_POST['btn'])){
   
       $n=$_POST['name'];
       $date=$_POST['date'];
       $t=$_POST['title'];
       $bf=$_FILES['image']['tmp_name'];
       $fn=$_FILES['image']['name'];
       move_uploaded_file($bf,"blog_img/".$fn);
       $d=$_POST['description'];



       if(isset($_SESSION['role'])){
         $eid=$_SESSION['id'];
      echo   $ins="INSERT INTO blog_list SET title='$t',	image='$fn',	description='$d' , employer_id='$eid', name='$n',date='$date'";
              if($con->query($ins)){
                     header("location:blog.php");
              }
       }else{
         $eid=$_SESSION['id'];
              $ins="INSERT INTO blog_list SET title='$t',	image='$fn',	description='$d' , jobseeker_id='$eid', name='$n' ,date='$date'";
              if($con->query($ins)){
                     header("location:blog.php");
       }

         
       // if(isset($_SESSION['on'])){
       //        $id=$_SESSION['id'];
       //      echo  $in="INSERT INTO blog_list SET title='$t',	image='$fn',	description='$d' , jobseeker_id='$id'";
       //             if($con->query($in)){
       //                    header("location:blog.php");
       //             }
       //      }
            
       }
}
?>
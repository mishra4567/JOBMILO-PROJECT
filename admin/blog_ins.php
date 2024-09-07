<?php
session_start();
include("db/db.php");
if(isset($_POST['btn'])){
   
       $n=$_POST['name'];
       $date=$_POST['date'];
       $t=$_POST['title'];
       $bf=$_FILES['image']['tmp_name'];
       $fn=time().$_FILES['image']['name'];
       move_uploaded_file($bf,"../blog_img/".$fn);
       $d=$_POST['description'];



       if(isset($_SESSION['an'])){
         $eid=$_SESSION['id'];
         $ins="INSERT INTO blog_list SET title='$t',	image='$fn',	description='$d' , employer_id='', name='(Admin).$n',date='$date'";
              if($con->query($ins)){
                     header("location:view_blog.php");
              }
       }
}
?>
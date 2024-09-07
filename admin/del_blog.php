<?php
include("db/db.php");
$id=$_GET['did'];
$post = "SELECT * FROM  blog_list where id='$id'";
$result = $con->query($post);
$r = $result->fetch_assoc();
unlink("../blog_img/".$r['image']);
$d="DELETE  FROM blog_list where id='$id'";
if($con->query($d)){
       header("location:view_blog.php");
}
?>
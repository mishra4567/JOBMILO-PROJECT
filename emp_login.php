<?php
session_start();
include("db/db.php");
if(isset($_POST['login'])){
    $n=$_POST['name'];
    $e=$_POST['email'];
    $p=$_POST['pass'];

    $sel="SELECT * FROM employer_detail WHERE email='$e'  and password='$p'";
    $rs=$con->query($sel);
    $numrow=$rs->num_rows;
    if($numrow > 0 ){
        $row=$rs->fetch_assoc();
        $_SESSION['id']=$row['id'];
        $_SESSION['photo']=$row['photo'];
        $_SESSION['on']=$row['employer_name'];
        $_SESSION['un']=$row['employer_user_name'];
        $_SESSION['role']=$row['role'];
        header("location:home.php");
    }else{
        $err="invalid information !";
        echo $err;
 }
}
?>

<?php

include("./db/db.php");
if(isset($_POST['login'])){
    $e=$_POST['email'];
    $p=$_POST['pass'];
    $sel="SELECT * FROM jb_employees WHERE e_email='$e' AND e_pass='$p'";
    $rs=$con->query($sel);
    $numrow=$rs->num_rows;
    if($numrow > 0){
        $row=$rs->fetch_assoc();
        $_SESSION['id']=$row['e_id'];
        $_SESSION['an']=$row['e_name'];
        $_SESSION['un']=$row['e_username'];
        header("location:dash.php");

    }else{
        $err="invalid password !";
 }
}?>
<!-- The Modal -->
<div class="modal" id="login">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title ">login</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body ps-5 pe-5">

        <form action="" method="post">

          
            
           

         
              <label for="email" class="mb-2">Email</label>
              <input type="email" class="form-control mb-4" placeholder="Enter your email.." name="email" id="email">
           

            <label for="password" class="mb-2">Password</label>
            <input type="password" class="form-control mb-3" name="pass" id="password" placeholder="Enter password">
        
            <p>
              <input type="submit" name="login" value="Log in" class="btn"
              style="background-color: #92d35e;margin-left:25vw" /></p>
        </form>

      </div>

      <!-- Modal footer -->
     

    </div>
  </div>
</div>
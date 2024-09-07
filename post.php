<<?php
session_start();
include("db/db.php");
if (!isset($_SESSION['un'])) {
  header("location:index.php");
} else {
  $user = $_SESSION['un'];
  if(isset($_SESSION['role'])){
     $sel = "SELECT * FROM employer_detail WHERE employer_user_name='$user'";
    $rs = $con->query($sel);
    $row = $rs->fetch_assoc();
  }else{
    $sel = "SELECT * FROM jb_employees WHERE e_username='$user'";
    $rs = $con->query($sel);
    $row = $rs->fetch_assoc();
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Stacked form</h2>
  <form action="" method="post">
    <div class="mb-3 mt-3">
      <label for="h">Heading</label>
      <input type="text" class="form-control" id="h" placeholder="Enter heading of the job" name="head" value="0">
    </div>
    <div class="mb-3 mt-3">
      <label for="d">Description</label>
      <input type="text" class="form-control" id="d" placeholder="Enter description" name="description">
    </div>
   
    
    <button type="submit" class="btn btn-primary" name="btn">Submit</button>
  </form>
</div>

</body>
</html>

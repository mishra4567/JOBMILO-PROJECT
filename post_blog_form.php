<?php
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Page Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom CSS -->

    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-top: 50px;
        }
        h2 {
            color: #333333;
            text-align: center;
            margin-bottom: 30px;
        }
        label {
            font-weight: bold;
        }
        .form-control {
            border-radius: 5px;
        }
        button[type="submit"] {
            width: 100%;
        }
    </style>
</head>
<body>
       

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <?php
            if(isset($_SESSION['role'])){
            ?>
            <a href="emp_profile.php" class="text-decoration-none w-10 h-10"><i class="fa-solid fa-circle-left"></i> Back</a>
            <?php } else{?>
            <a href="profile.php"><i class="fa-solid fa-circle-left"></i>Back </a>
<?php }?>
            <h2>Create a New Blog Post</h2>
         
            <form action="blog_ins.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">

                <input type="hidden" name="name" value="<?php echo  $_SESSION['on']?>" id="">
                <?php
                $d= date("Y-m-d");
                ?>
                <input type="hidden" name="date" value="<?php echo $d ;?>" id="">
                    
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image URL</label>
                    <input type="file" class="form-control" id="image" name="image" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="6" required></textarea>
                </div>
                <input type="submit" class="btn btn-success" name="btn" value="Post"       ></input>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

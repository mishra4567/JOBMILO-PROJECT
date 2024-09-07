<?php
session_start();
include("db/db.php");
if (!isset($_SESSION['an'])) {
       header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

       <meta charset="utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       <meta name="description" content="">
       <meta name="author" content="">
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
            width: 70%;
        }
    </style>
       <title>SB Admin 2 - Blank</title>

       <!-- Custom fonts for this template-->
       <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
       <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

       <!-- Custom styles for this template-->
       <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

       <!-- Page Wrapper -->
       <div id="wrapper">

              <!-- Sidebar -->
              <?php include("admin_inc/side.php") ?>
              <!-- End of Sidebar -->

              <!-- Content Wrapper -->
              <div id="content-wrapper" class="d-flex flex-column">

                     <!-- Main Content -->
                     <div id="content">

                            <!-- Topbar -->
                            <?php include("admin_inc/top.php") ?>
                            <!-- End of Topbar -->

                            <!-- Begin Page Content -->
                            <div class="container-fluid">

                                   <!-- Page Heading -->
                                   <h1 class="h3 text-gray-800 d-flex align-item-center justify-content-center"> <strong><u>Post a Blog</u></strong></h1>
                                   <hr>

                            <!-- Admin panel -->


<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-8">
       
            <h2>Create a New Blog Post</h2>
         
            <form action="blog_ins.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">

                <input type="hidden" name="name" value="<?php echo  $_SESSION['an']?>" id="">
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
                    <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
                </div>
                <input type="submit" class="btn btn-success" name="btn" value="Post a Blog"       ></input>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>





                            



                            <!-- Admin panel -->
                                   
                            </div>
                            <!-- /.container-fluid -->

                     </div>
                     <!-- End of Main Content -->

                     <!-- Footer -->
                      <?php include("admin_inc/footer.php") ?> <!-- End of Footer -->

              </div>
              <!-- End of Content Wrapper -->

       </div>
       <!-- End of Page Wrapper -->

       <!-- Scroll to Top Button-->
       <a class="scroll-to-top rounded" href="#page-top">
              <i class="fas fa-angle-up"></i>
       </a>

       <!-- Logout Modal-->
       <?php include("admin_inc/logout_modal.php") ?>

       <!-- Bootstrap core JavaScript-->
       <script src="vendor/jquery/jquery.min.js"></script>
       <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

       <!-- Core plugin JavaScript-->
       <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

       <!-- Custom scripts for all pages-->
       <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
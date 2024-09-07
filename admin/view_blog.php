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
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta name="author" content="Firmbee.com - Free Project Management Platform for remote teams">
       <title>Name of company</title>
       <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
       <script src="https://kit.fontawesome.com/0e035b9984.js" crossorigin="anonymous"></script>
       <script src="https://kit.fontawesome.com/0e035b9984.js" crossorigin="anonymous"></script>
       <link rel="stylesheet" href="../css/main.css">
       <link rel="stylesheet" href="profile/style.css">
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
                                   <h1 class="h3  text-gray-800 d-flex align-item-center justify-content-center"> <strong><u>All Blog post list in your site</u></strong></h1>
                                   <hr>

                                   <!-- Admin panel -->

                                   <main>
                                          <div class="main">
                                                 <div class="container d-flex justify-content-center align-items-center">
                                                         <!-- PHP POST TABLE LOOP -->
                                                         <?php
                                                                      $post = "SELECT * FROM  blog_list ";
                                                                      $result = $con->query($post);
                                                                      while ($r = $result->fetch_assoc()) {
                                                                      ?>
                                                        <div class="row ">
                                                               <div class="col-lg-10   col-md-8">

                                                                     

<div class="all-posts">
       <div class="post-item ">
              <div class="image-fluid "><img style="width: 300px; height:fit-content;overflow:hidden;" src="../blog_img/<?php echo $r['image'] ?>" alt=""></div>
              <div class="post-main-info ms-5">
                     <h4><?php echo $r['title'] ?></h4>
                     <div class="post-meta">
                            <span><i class="far fa-user"></i> <?php echo $r['name'] ?></span><span><i class="far fa-calendar"></i> <?php echo $r['date'] ?></span><span><i class="far fa-comment-alt"></i> 0 comments</span>
                     </div>
                     <p><?php echo $r['description'] ?>
              </div>
</div>
                                                               </div>

                                                                            
                                                                      

                                                               </div>
                                                               
                                                               <div class="col-lg-2  col-md-2">
                                                                      <a href="del_blog.php?did=<?php echo $r['id']?>" class="btn btn-danger" onclick="return confirm('Are you sure?');">Delete</a>
                                                               </div>
                                                                     <!-- end of loop -->
                                                                     <?php } ?>
                                                        </div>
                                                        <!-- end of row -->

                                                 </div>
                                          </div>
                                   </main>


                                   <!-- Admin Panel -->



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

       <script src="js/nav-bg.js"></script>

       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>

</html>
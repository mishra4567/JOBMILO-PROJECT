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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Firmbee.com - Free Project Management Platform for remote teams"> 
    <title>Name of company</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0e035b9984.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/0e035b9984.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="profile/style.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>


<!-- Navbar -->

<?php include("inc/nav.php")?>




    <main>
        <div class="main">
          <div class="container d-flex justify-content-center align-items-center">
            <div class="row ">
              <div class="col-lg-7 ms-3  col-md-10">

                      <!-- PHP POST TABLE LOOP -->
                      <?php
                      $post="SELECT * FROM  blog_list ";
                      $result=$con->query($post);
                      while($r=$result->fetch_assoc()){
                      ?>

                <div class="all-posts">
                  <div class="post-item ">
                    <div class="image-fluid "><img style="width: 300px; height:fit-content;overflow:hidden;" src="blog_img/<?php echo $r['image']?>" alt=""></div>
                    <div class="post-main-info ms-5">
                      <h4><?php echo $r['title']?></h4>
                      <div class="post-meta">
                        <span><i class="far fa-user"></i> <?php echo $r['name']?></span><span><i class="far fa-calendar"></i> <?php echo $r['date']?></span><span><i class="far fa-comment-alt"></i> 0 comments</span>
                      </div>
                      <p><?php echo $r['description']?><?php echo $r['description']?></p>
                      <!-- <a href="./single-post.html" class="main-btn">View profile</a> -->
                    </div>
                  </div>
                </div>
                <hr>
                <!-- end of loop -->
                <?php }?>

             


                <nav aria-label="blog navigation">
                  <ul class="pagination">
                    <li class="page-item ">
                      <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                      </a>
                    </li>
                    <li class="page-item"><a class="page-link active" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                      </a>
                    </li>
                  </ul>
                </nav>
              </div>

              <?php include("./inc/side.php")?>
             
              
              </div>
            </div>
            <!-- end of row -->
            
          </div>
        </div>
    </main>
      <!-- Footer -->
      <?php include("inc/footer.php")?>

      <script src="js/nav-bg.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <?php include("inc/signup_modal.php")?>
    
</body>
</html>
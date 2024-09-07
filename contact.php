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
<?php
include("db/db.php");

if(isset($_POST['btn'])){
       $n=$_POST['name'];
       $e=$_POST['email'];
       $m=$_POST['message'];

       $ins="INSERT INTO contact_us SET 	name='$n',	email='$e',	message='$m'";
       if($con->query($ins)){
              $condition=true;
              if ($condition) {
                     echo '<!-- The Modal -->
                     <div class="modal" id="myModal">
                       <div class="modal-dialog">
                         <div class="modal-content">
                     
                           <!-- Modal Header -->
                           <div class="modal-header">
                             <h4 class="modal-title">Thank for you response</h4>
                             <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                           </div>
                     
                           <!-- Modal body -->
                           <div class="modal-body">
                           Report submission successfuly!
                           </div>
                     
                           <!-- Modal footer -->
                           <div class="modal-footer">
                             <button type="button" class="btn btn-success" data-bs-dismiss="modal">ok</button>
                           </div>
                     
                         </div>
                       </div>
                     </div>';
                 }

              }  else{
                  $err="Error sending message!";
                  echo $err;
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
  <title>Jobmilo.com</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/0e035b9984.js" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/0e035b9984.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <!-- Navbar Start -->
  <?php include("inc/nav.php") ?>
  <!-- Navbar End -->


  <main>
    <div class="main">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="contact-page">
              <h2 class="underscore mb-5">Please <span class="green">let us know</span> if you have any questions</h2>
              <div class="line"></div>
              <p>The inquiry page is a vital point of contact between a company and its audience. It offers a user-friendly interface for visitors to submit questions, request information, or seek assistance. By providing clear instructions and intuitive forms, the page streamlines the inquiry process, enhancing user experience and facilitating meaningful interactions.</p>
              <div class="line"></div>

              <form id="contactForm" action="" method="post">

                <!-- Name input -->
                <div class="mb-3">
                  <input class="form-control" id="name" name="name" type="text" placeholder="Name *" data-sb-validations="required" required />
                  <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                </div>

                <!-- Email address input -->
                <div class="mb-3">
                  <input class="form-control" id="emailAddress" name="email" type="email*" placeholder="Email Address *" data-sb-validations="required, email" required/>
                  <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is required.</div>
                  <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
                </div>


        
              

                <!-- Form submissions error message -->
                <div class="d-none" id="submitErrorMessage">
                  <div class="text-center text-danger mb-3">Error sending message!</div>
                </div>

                <!-- Message input -->
                <div class="mb-3">

                  <textarea class="form-control" required id="contact" name="message" type="text" placeholder="Leave a Message" style="height: 10rem;" data-sb-validations="required"></textarea>
                
                </div>

                <!-- Form submit button -->
                <div class="d-grid">
                  <button class="main-btn mt-0 disabled" id="submitButton" name="btn" type="submit">Send message</button>
                </div>
              </form>
            </div>
          </div>

          <?php include("./inc/side.php") ?>

        </div>
      </div>
    </div>
    </div>
  </main>
  <!-- Footer -->
  <?php include("inc/footer.php") ?>

  <script src="js/nav-bg.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <?php include("inc/signup_modal.php") ?>
  
<!-- Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<?php
if ($condition) {
    echo '<script>
            $(document).ready(function(){
              $("#myModal").modal("show");
            });
          </script>';
}
?>
</body>

</html>
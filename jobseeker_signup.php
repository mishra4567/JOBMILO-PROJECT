<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <style>
    body {
      background-color: #f1f7eb;
    }

    .container form {
      /* align-items: center; */
      padding: 15px;
      background-color: #fbfbfb;
      margin-bottom: 12px;
      -webkit-box-shadow: 3px 3px 3px 3px #dddada;
      box-shadow: 3px 3px 3px 3px #dddada;
      background-color: #dfe6e9;

    }

    form:hover {
      -webkit-box-shadow: 5px 5px 5px 5px #beb8b8;
      box-shadow: 5px 5px 5px 5px #afadad;
    }
  </style>
</head>

<body>

  <div class="container">
    <div class="row con mt-5 mb-5 d-flex align-items-center justify-content-center">
      <div class="col-md-8">


        <form action="./sign.php" method="POST" enctype="multipart/form-data" class="border border-success rounded mt-3 mb-5 p-5">
          <h4 class="d-flex align-items-center justify-content-center">jobseeker Registration here</h4>
          <hr class="mb-4">

          <?php
          session_start();
          if(isset($_SESSION['err'])){?>
            <div class="alert alert-danger">
  <strong><?php echo $_SESSION['err']; ?>!</strong>
</div>

       <?php session_destroy();  } ?>

          <div class="row mb-3">
            <div class="col">
              <label for="name">Name</label>
              <input type="text" class="form-control" placeholder="Enter full name" name="name" id="name">
            </div>
            <div class="col">
              <label for="email">Email</label>
              <input type="email" class="form-control" placeholder="Enter email.." name="email" id="email">
            </div>
          </div>


          <div class="row mb-3">
            <div class="col">
              <label for="" class="mb-3">Gender</label>
              <span class="d-flex gap-2">
                <input type="radio" class="" name="gender" value="Male">Male
                <input type="radio" class="" name="gender" value="Female">Female</span>
            </div>

            <div class="col">
              <label for="username">Username</label>
              <input type="text" class="form-control" placeholder="Create username.." name="username">
            </div>
          </div>

          <label for="" class="mt-3">Date of Birth</label>
          <input type="date" class="form-control" name="dob">

          <!-- Work Exprience -->
          <div class="row mb-2">
            <div class="col-md-12 ">Work Exprience</div>
          </div>
          <div class="row mt">
            <div class="col">
              <input type="radio" class="ms-4" name="exp" value="Student"><span class="ms-2">Student</span>
            </div>
            <div class="col">
              <input type="radio" class="ms-4" name="exp" value="Graduate"><span class="ms-2">Graduate</span>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col">
              <input type="radio" class="ms-4 mt-3" name="exp" value="Fresher"><span class="ms-2">Fresher</span>
            </div>
            <div class="col">
              <input type="radio" class="ms-4 mt-3" name="exp" value="Exprienced"><span class="ms-2">Exprienced</span>
            </div>
          </div>


          <div class="row">
            <div class="col">
              <!-- Phone -->
              <label for="phone" class="mb-1">Phone</label>
              <input type="phone" class="form-control  mb-3" name="number" placeholder="Enter phone number" id="phone">
            </div>
            <!-- Education -->
            <div class="col">
              <label for="edu" class="mb-1">Education</label>
              <input type="text" name="edu" id="edu" placeholder="Short form of your institute" class="form-control ">
            </div>
          </div>




          <!-- Skils -->

          <div class="row mb-2">
            <div class="col-md-12 ">Skills</div>
          </div>

          <div class="row">
            <div class="col">
              <input type="checkbox" class="ms-4" name="skills[]" value="Graphic"><span class="ms-2">Graphic</span>
            </div>
            <div class="col">
              <input type="checkbox" class="ms-4" name="skills[]" value="Animation"><span class="ms-2"> Animation</span>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <input type="checkbox" value="Software Dev" class="ms-4" name="skills[]"><span class="ms-2">Software Dev</span>
            </div>
            <div class="col">
              <input type="checkbox" value="Web Dev" class="ms-4" name="skills[]"><span class="ms-2">Web Dev</span>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <input type="checkbox" value="Python" class="ms-4" name="skills[]"><span class="ms-2">Python</span>
            </div>
            <div class="col">
              <input type="checkbox" value="Go lang" class="ms-4" name="skills[]"><span class="ms-2">Go lang</span>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <input type="checkbox" value="Android dev" class="ms-4" name="skills[]"><span class="ms-2">Android dev</span>
            </div>
            <div class="col">
              <input type="checkbox" value="Web design" class="ms-4" name="skills[]"><span class="ms-2">Web design</span>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <input type="checkbox" value="Core java" class="ms-4" name="skills[]"><span class="ms-2">Core java</span>
            </div>
            <div class="col">
              <input type="checkbox" value="Advance java" class="ms-4" name="skills[]"><span class="ms-2">Advance java</span>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <input type="checkbox" value="Spring Boot" class="ms-4" name="skills[]"><span class="ms-2">Spring Boot</span>
            </div>
            <div class="col">
              <input type="checkbox" value="Hibarnet" class="ms-4" name="skills[]"><span class="ms-2">Hibarnet</span>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <input type="checkbox" value="Core php" class="ms-4" name="skills[]"><span class="ms-2">Core php</span>
            </div>
            <div class="col">
              <input type="checkbox" value="Laravel" class="ms-4" name="skills[]"><span class="ms-2">Laravel</span>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <input type="checkbox" value="Banking" class="ms-4" name="skills[]"><span class="ms-2">Banking</span>
            </div>
            <div class="col">
              <input type="checkbox" value="Marketing" class="ms-4" name="skills[]"><span class="ms-2">Marketing</span>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <input type="checkbox" value="Project Management" class="ms-4" name="skills[]"><span class="ms-2">Project Management</span>
            </div>
            <div class="col">
              <input type="checkbox" value="Business Dev" class="ms-4" name="skills[]"><span class="ms-2">Business Dev</span>
            </div>
          </div>
          <!-- </div> -->

          <!-- Language  -->
          <div class="row mb-2 ms-2 mt-3">
            <div class="col-md-12 ">Language Known</div>
          </div>
          <div class="row">
            <div class="col ms-3">
              <input type="checkbox" class="ms-4" name="lang[]" value="Bengali"><span class="ms-2">Bengali</span>
            </div>
            <div class="col">
              <input type="checkbox" class="ms-4" name="lang[]" value="English"><span class="ms-2"> English</span>
            </div>
          </div>
          <div class="row">
            <div class="col ms-3">
              <input type="checkbox" class="ms-4" name="lang[]" value="Hindi"><span class="ms-2">Hindi</span>
            </div>
            <div class="col">
              <input type="checkbox" class="ms-4" name="lang[]" value="Franch"><span class="ms-2"> Franch</span>
            </div>
          </div>

          <!-- Location -->
          <div class="row mt-3">
            <div class="col">
              <label for="cl">Current Location</label>
              <input type="text" name="curloc" id="cl" class="form-control mb-3">
            </div>
            <div class="col">
              <label for="cl">Hometown</label>
              <input type="text" name="hometown" id="cl" class="form-control mb-3">
            </div>
          </div>


          <label for="cl">Resume</label>
          <input type="file" name="resume" id="cl" class="form-control mb-3">


          <label for="cl">Photo</label>
          <input type="file" name="img" id="cl" class="form-control mb-3">


          <div class="row mb-3">
            <div class="col">
              <label for="cl">Pincode</label>
              <input type="text" name="pincode" id="cl" class="form-control">
            </div>
            <div class="col">
              <!-- Password -->
              <label for="password" class="">Password</label>
              <input type="password" class="form-control " name="pass" id="password" placeholder="Create strong password">
            </div>
          </div>



          <div class="row d-flex align-items-center justify-content-center">
            <p>
              <input type="submit" name="sign" value="Create account" class="btn form-control" style="background-color: #92d35e;" />
            </p>
          </div>


          <div class="div d-flex ">
            <a href="index.php" class="me-5 text-decoration-none">Back</a>
            <div class=" ms-auto">
              <a href="job_seeker_login.php" class="text-decoration-none">Have an
                account? </a>
            </div>
          </div>
          <div class="div d-flex ">
            <a href="employer_login.php" class="me-5 text-decoration-none">Post job</a>
            <div class=" ms-auto">
              <a href="job_seeker_login.php" class="text-decoration-none">Log in </a>
            </div>
          </div>




        </form>
      </div>
    </div>
  </div>
</body>

</html>
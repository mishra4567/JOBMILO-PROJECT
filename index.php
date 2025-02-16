<?php
// session_start();
include("db/db.php");
if (isset($_POST['login'])) {
  $e = $_POST['email'];
  $p = $_POST['pass'];
  $sel = "SELECT * FROM jb_employees WHERE e_email='$e' AND e_pass='$p'";
  $rs = $con->query($sel);
  $numrow = $rs->num_rows;
  if ($numrow > 0) {
    $row = $rs->fetch_assoc();
    $_SESSION['an'] = $row['e_name'];
    header("location:dash.php");
  } else {
    $err = "invalid password !";
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
  <meta name="author" content="Firmbee.com - Free Project Management Platform for remote teams">
  <title>https//jobmilo.com</title>
  <!-- <link rel="preconnect" href="https://fonts.googleapis.com"> -->
  <!-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
  <!-- <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet"> -->
  <!-- <script src="https://kit.fontawesome.com/0e035b9984.js" crossorigin="anonymous"></script> -->
  <!-- <script src="https://kit.fontawesome.com/0e035b9984.js" crossorigin="anonymous"></script> -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
  <link rel="stylesheet" href="css/main.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

</head>

<body>
  <?php include("inc/nav.php") ?>
  <main>
    <!-- Intro -->
    <div class="intro">
      <div class="container">
        <div class="intro-text">
          <h1>Looking for a job?<br><span class="green">we will help you</span></h1>
          <div class="check-out">
            <p>Check out our offers</p>
            <div class="form">
              <div class="job-search ">
                <img style="width: 20px; margin-right: 30px;" src="img/icon/search-icon.svg" alt="">
                <input type="text" placeholder="Type in your job search">
              </div>
              <div class="location">
                <label for="lname">location:</label>
                <select name="location" id="location">
                  <option value="0">Wroclaw</option>
                  <option value="1">Kraków</option>
                  <option value="2">Warszawa</option>
                  <option value="3">Gdańsk</option>
                </select>
                <input class="search main-btn" type="submit" value="Search">
              </div>
            </div>
            <div class="follow">
              <span>Fallow Us</span>
              <a href=""><img src="img/icon/facebook-icon.svg" alt=""></a>
              <a href=""><img src="img/icon/twitter-icon.svg" alt=""></a>
              <a href=""><img src="img/icon/linkedin-icon.svg" alt=""></a>
            </div>
          </div>
        </div>
        <div class="intro-img">
          <img src="img/intro.png" alt="">
        </div>
      </div>
    </div>

    <!--Search by category-->
    <div class="container ">
      <div class="search-by">
        <h1>Search by <span class="green">category</span></h1>
        <a href="">All category <img style="width: 20px; margin-left: 20px;" src="/img/icon/arrow-right-icon.svg" alt=""></a>

        <!--Start carousel-->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">

          <div class="carousel-inner text-center">
            <div class="carousel-item active">
              <div class="card-item">
                <div class="photo">
                  <img class="main-state" src="img/icon/business-development.svg" alt="">
                  <img class="hover" src="img/icon/business-development-hover.svg" alt="">
                </div>
                <p>Business<br>
                  Development</p>
              </div>

              <div class="card-item">
                <div class="photo">
                  <img class="main-state" src="img/icon/graphic.svg" alt="">
                  <img class="hover" src="img/icon/graphic-hover.svg" alt="">
                </div>
                <p>Graphic<br>
                  Designer</p>
              </div>

              <div class="card-item">
                <div class="photo">
                  <img class="main-state" src="img/icon/pm.svg" alt="">
                  <img class="hover" src="img/icon/pm-hover.svg" alt="">
                </div>
                <p>Project<br>
                  Management</p>
              </div>

              <div class="card-item">
                <div class="photo">
                  <img class="main-state" src="img/icon/marketing.svg" alt="">
                  <img class="hover" src="img/icon/marketing-active.svg" alt="">
                </div>
                <p>Marketing &<br>
                  Communication</p>
              </div>

            </div>

            <div class="carousel-item">
              <div class="card-item">
                <div class="photo">
                  <img class="main-state" src="img/icon/business-development.svg" alt="">
                  <img class="hover" src="img/icon/business-development-hover.svg" alt="">
                </div>
                <p>Another<br>
                  Category</p>
              </div>

              <div class="card-item">
                <div class="photo">
                  <img class="main-state" src="img/icon/business-development.svg" alt="">
                  <img class="hover" src="img/icon/business-development-hover.svg" alt="">
                </div>
                <p>Another<br>
                  Category</p>
              </div>

              <div class="card-item">
                <div class="photo">
                  <img class="main-state" src="img/icon/business-development.svg" alt="">
                  <img class="hover" src="img/icon/business-development-hover.svg" alt="">
                </div>
                <p>Another<br>
                  Category</p>
              </div>

              <div class="card-item">
                <div class="photo">
                  <img class="main-state" src="img/icon/business-development.svg" alt="">
                  <img class="hover" src="img/icon/business-development-hover.svg" alt="">
                </div>
                <p>Another<br>
                  Category</p>
              </div>

            </div>
          </div>
          <div class="carousel-nav">
            <a class="nav-item" role="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev"><img src="img/icon/prew-arrow.svg" alt=""></a>
            <a class="nav-item" role="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next"><img src="img/icon/next-arrow.svg" alt=""></a>
          </div>
        </div>

      </div>

      <!--job offers-->
      <div class="job-offers">
        <h1>Job <span class="green">offers</span></h1>
        <a href="">All offers <img style="width: 20px; margin-left: 20px;" src="/img/icon/arrow-right-icon.svg" alt=""></a>
        <div class="row pt-5">
          <div class="image col-md-4">
            <img src="img/job-offers.png" alt="">
          </div>
          <div class="col-md-4">
            <div class="offert-wrapper">
              <div class="offert">
                <div>
                  <div class="offert-description">
                    <div class="company-logo">
                      <img src="img/icon/go-icon.svg" alt="">
                    </div>
                    <div class="description">
                      <p class="company-name">Go! SM</p>
                      <p class="description">It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    </div>
                  </div>
                  <div class="offert-meta">
                    <p class="location">location: <span class="city">Stuttgart</span></p>
                    <p class="offert-counter">Jobs: <span class="green"><strong>3</strong></span></p>
                  </div>
                </div>
              </div>
              <a href="" class="main-btn">See details</a>
            </div>
            <div class="offert-wrapper">
              <div class="offert">
                <div>
                  <div class="offert-description">
                    <div class="company-logo">
                      <img src="img/icon/create-paper-icon.svg" alt="">
                    </div>
                    <div class="description">
                      <p class="company-name">Create Paper</p>
                      <p class="description">It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    </div>
                  </div>
                  <div class="offert-meta">
                    <p class="location">location: <span class="city">Pekin</span></p>
                    <p class="offert-counter">Jobs: <span class="green"><strong>5</strong></span></p>
                  </div>
                </div>
              </div>
              <a href="" class="main-btn">See details</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="offert-wrapper">
              <div class="offert">
                <div>
                  <div class="offert-description">
                    <div class="company-logo">
                      <img src="img/icon/social-road-icon.svg" alt="">
                    </div>
                    <div class="description">
                      <p class="company-name">Social Road</p>
                      <p class="description">It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    </div>
                  </div>
                  <div class="offert-meta">
                    <p class="location">location: <span class="city">San Francisco</span></p>
                    <p class="offert-counter">Jobs: <span class="green"><strong>2</strong></span></p>
                  </div>
                </div>
              </div>
              <a href="" class="main-btn">See details</a>
            </div>
            <div class="offert-wrapper">
              <div class="offert">
                <div>
                  <div class="offert-description">
                    <div class="company-logo">
                      <img src="img/icon/point-design-icon.svg" alt="">
                    </div>
                    <div class="description">
                      <p class="company-name">Point Design</p>
                      <p class="description">It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    </div>
                  </div>
                  <div class="offert-meta">
                    <p class="location">location: <span class="city">Tempe</span></p>
                    <p class="offert-counter">Jobs: <span class="green"><strong>8</strong></span></p>
                  </div>
                </div>
              </div>
              <a href="" class="main-btn">See details</a>
            </div>
          </div>

        </div>
      </div>

      <!--Top Notch Service-->
      <div class="service text-center">
        <h1>Top Notch <span class="green">Service</span></h1>
        <div class="service-items">
          <div class="item">
            <img src="img/icon/cv-icon.svg" alt="">
            <span class="counter">2 331</span>
            <span>Job offers</span>
          </div>
          <div class="item">
            <img src="img/icon/customers.svg" alt="">
            <span class="counter">1 148</span>
            <span>Satisfied customers</span>
          </div>
          <div class="item">
            <img src="img/icon/applications.svg" alt="">
            <span class="counter">5 364</span>
            <span>Applications sent</span>
          </div>
          <div class="item">
            <img src="img/icon/projects.svg" alt="">
            <span class="counter">1 764</span>
            <span>Realized projects</span>
          </div>
        </div>
      </div>

      <!-- Newsletter -->

      <div class="update-news">
        <div class="row">
          <div class="col-md-5 news-text">
            <h2>Get your update news</h2>
            <p>If you going to use a passage of Lotem Ipsum, you need to be sure there isn’t anything embarrassing.</p>
          </div>
          <div class="col-md-7 news-form">
            <input type="email" name="email" placeholder="Enter your email" id="">
            <button type="submit">Send</button>
          </div>
        </div>
      </div>

      <div class="find-jobs text-center">
        <h1><span class="green">Find jobs</span> around<br>the world</h1>
      </div>
      <
        </div>

  </main>

  <!-- Footer -->
  <?php include("inc/footer.php") ?>

  <script src="js/nav-bg.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <?php include("inc/signup_modal.php") ?>
  <?php include("inc/login_modal.php") ?>
  <?php include("log_in_modal/login.php") ?>
  <?php include("sign-up_modal/signup.php") ?>
</body>

</html>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>


<!-- Navbar -->

<?php include("inc/nav.php")?>


    <main>
        <div class="main">
          <div class="container">
            <div class="row">
              <div class="aboutus col-lg-8">
                <h1>Welcome to <span class="green">Jobmilo</span></h1>
                <div class="img"><img src="img/teamwork.png"></div>
                  <h3><span class="green">Company </span> Overview</h3>
                  <p>jobmilo.com is the world's largest freelancing and crowdsourcing marketplace by number of users and projects. We connect over <strong> 73,187,278</strong> employers and freelancers globally from over 247 countries, regions and territories. Through our marketplace, employers can hire freelancers to do work in areas such as software development, writing, data entry and design right through to engineering, the sciences, sales and marketing, accounting and legal services.

Freelancer Limited is trading on the Australian Securities Exchange under the ticker ASX:FLN </p>
                  <br>
                  <h3>A wide <span class="green">partner</span> network:</h3>
                  <ul class="list-in-text">
                    
                    <li>Expanded Reach: Collaborate with job portals and industry platforms for wider visibility.</li>
                    <li>Customizable: Tailor partnerships to fit needs..</li>
                    <li>Efficient Recruitment: Streamline sourcing and management..</li>
                    <li>Data Insights: Optimize strategies with analytic</li>
                    <li>Cost-Effective: Expand reach without heavy investment.</li>
                  </ul>
                  <br>
                  <h3>Prove<span class="green">nance</span></h3>
                  <p>The video below illustrates the Freelancer online economy. The pink lines indicate where projects are being posted by employers, and the blue lines indicate where the projects are being performed by freelancers. Thicker lines indicate a higher dollar volume of work. White dots indicate the location of Freelancer's users. .</p>
                  <figure class="quote text-start">
                    <blockquote class="blockquote">
                      <p>"Climb mountains not to conquer, but to enjoy the journey and see the world." </p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                    — David  <cite title="Source Title">McCullough Jr.</cite>
                    </figcaption>
                  </figure>
                  

                  <div class="team text-center mt-5">
                    <h3>A <span class="green">team </span>that’s growing every day</h3>
                  <p>Growing a team mirrors tending a garden. It starts with a clear vision and strategic roles. Talent acquisition is like planting diverse, skilled seeds. Cultivating a collaborative culture is crucial, as is providing continuous learning opportunities. Effective communication and adaptability sustain growth, while recognizing achievements fuels motivation. Scaling up demands careful planning, ensuring cohesion as the team expands. Ultimately, success is harvested through collective effort and celebration.</p>
                    <div class="team-person py-3">
                      <div class="person">
                        <div class="photo"><img src="img/team-1.jpg" alt=""></div>
                        <span class="name">Subham Mandal</span>
                        <span>Softeware Developer</span>
                      </div>
                      <div class="person">
                        <div class="photo"><img src="img/pradipta.jpg" alt=""></div>
                        <span class="name">Pradipta Paul</span>
                        <span>SEO</span>
                      </div>
                      <div class="person">
                        <div class="photo"><img src="img/team-3.jpg" alt=""></div>
                        <span class="name">Anna Brown</span>
                        <span>UI Expert</span>
                      </div>
                      <div class="person">
                        <div class="photo"><img src="img/team-4.jpg" alt=""></div>
                        <span class="name"></span>
                        <span>Web Developer</span>
                      </div>
                    </div>
                  </div>
                  <div class="service text-center">
                    <h2>Why choose <span class="green">Us</span>?</h2>
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
              </div>
              <?php include("./inc/side.php")?>
              
              </div>
            </div>
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
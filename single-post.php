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
</head>

<body>
<?php include("inc/nav.php")?>

    <main>
        <div class="main">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <div class="single-post">
                  <h2>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis aut expedita.</h2>
                  <div class="post-meta text-muted">
                    <span><i class="far fa-user"></i> Posted by someone</span><span><i class="far fa-calendar"></i> 30 07 2021</span><span><i class="far fa-comment-alt"></i> 0 comments</span>
                  </div>
                  <div class="post-contant">
                    <div class="post-img"><img src="img/post-1.png" alt=""></div>
                    <h3>Lorem ipsum dolor sit amet.</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla illo corrupti debitis recusandae hic, ipsa sit quas? Autem fuga nihil voluptate dolorum similique dignissimos quaerat quidem consectetur nobis aliquid quae voluptatibus ex assumenda, amet adipisci eveniet porro soluta accusamus voluptatem doloremque, nulla impedit, culpa hic. Natus ducimus cum eveniet aliquam architecto magnam? Ab atque necessitatibus esse, ipsum excepturi eligendi ipsam veritatis praesentium blanditiis molestias culpa natus hic ex sit iste voluptatem quas, asperiores ea rem molestiae delectus tempora fugit. Ad nihil vero, debitis fuga at nostrum modi! Expedita ab ex, dolores, fugit quis optio laborum sint, officiis molestiae temporibus ratione totam odio explicabo beatae voluptatem neque deleniti iusto eaque? </p>
                    <h6>Lorem ipsum dolor sit, amet consectetur adipisicing:</h6>
                    <ul class="list-in-text">
                      <li>Lorem ipsum dolor sit amet consectetur.</li>
                      <li>Lorem ipsum dolor sit amet consectetur.</li>
                      <li>Lorem ipsum dolor sit amet consectetur.</li>
                      <li>Lorem ipsum dolor sit amet consectetur.</li>
                      <li>Lorem ipsum dolor sit amet consectetur.</li>
                    </ul>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit laudantium, labore inventore fugiat doloremque ab soluta at. Ex, corporis? Necessitatibus distinctio quam sed unde soluta delectus facilis, corporis iusto. Nihil modi eveniet laudantium quisquam a expedita est inventore doloremque, ad officiis odit earum alias asperiores. Nihil accusamus rerum delectus cumque ducimus illum temporibus ratione dolores quibusdam sint facere provident aperiam quis dignissimos reiciendis sed iure quidem eos quasi, nesciunt, ipsum voluptatem at debitis odio. Doloribus explicabo dignissimos nemo rerum sunt amet aspernatur distinctio, deleniti blanditiis cumque soluta officiis suscipit. Minima nesciunt dicta magnam aliquid inventore voluptates laudantium quaerat aperiam in.</p>
                    <figure class="quote text-start">
                      <blockquote class="blockquote">
                        <p>A well-known quote, contained in a blockquote element.</p>
                      </blockquote>
                      <figcaption class="blockquote-footer">
                        Someone famous in <cite title="Source Title">Source Title</cite>
                      </figcaption>
                    </figure>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum ab est repudiandae quasi hic sapiente earum velit fuga odio neque numquam eligendi qui tenetur ipsam, animi atque expedita eaque nesciunt in. Quidem dignissimos totam aperiam inventore quae omnis commodi, modi obcaecati qui culpa dolor, rem dolorum maxime temporibus! Consequatur pariatur quibusdam aspernatur ea, assumenda non, illum, vitae sed temporibus consequuntur quam. Exercitationem ut ad beatae explicabo! Quod fuga culpa, consectetur ipsa assumenda, ut exercitationem fugiat commodi quibusdam quam natus iure impedit recusandae aliquam nihil vitae reprehenderit, facilis deleniti cum eveniet veritatis. Atque ut blanditiis quos excepturi perferendis a, quidem modi.</p>
                    <div class="share">
                      <a class="main-btn" href=""><i class="fab fa-facebook-f"></i> FACEBOOK</a>
                      <a  class="main-btn" href=""> <i class="fab fa-google-plus-g"></i> GOOGLE+</a>
                      <a  class="main-btn" href=""><i class="fab fa-linkedin-in"></i> LINKEDIN</a>
                      <a  class="main-btn" href=""><i class="fab fa-pinterest-p"></i> PINTEREST</a>
                    </div>
                    <div class="navigation">
                      <a class="prew"><i class="fas fa-chevron-left"></i> PREVIOUS</a>
                      <a class="next">NEXT <i class="fas fa-chevron-right"></i></a>
                    </div>
                    <div class="line"></div>
      
                    <form id="commentForm">
      
                      <!-- Message input -->
                      <div class="mb-3">
                        <label class="form-label" for="comment">Leave a Comment</label>
                        <textarea class="form-control" id="comment" type="text" placeholder="" style="height: 10rem;" data-sb-validations="required"></textarea>
                        <div class="invalid-feedback" data-sb-feedback="message:required">Comment is required.</div>
                      </div>
      
                      <!-- Name input -->
                      <div class="mb-3">
                        <input class="form-control" id="name" type="text" placeholder="Name *" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                      </div>
                  
                      <!-- Email address input -->
                      <div class="mb-3">
                        <input class="form-control" id="emailAddress" type="email*" placeholder="Email Address *" data-sb-validations="required, email" />
                        <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is required.</div>
                        <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
                      </div>
                  
                  
                      <!-- Form submissions success message -->
                      <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3">Form submission successful!</div>
                      </div>
                  
                      <!-- Form submissions error message -->
                      <div class="d-none" id="submitErrorMessage">
                        <div class="text-center text-danger mb-3">Error sending message!</div>
                      </div>
                  
                      <!-- Form submit button -->
                      <div class="d-grid">
                        <button class="main-btn" id="submitButton" type="submit">Post Comment</button>
                      </div>
                    </form>
                  </div>
                  
                </div>
              </div>
              <div class="sidebar col-lg-4">
                <div class="input-group">
                  <div class="form-outline">
                    <input id="search-input" type="search" id="form1" class="form-control" placeholder="search" />
                  </div>
                  <button id="search-button" type="button" class="btn dark">
                    <i class="fas fa-search"></i>
                  </button>
                </div>

                <div class="search-by-sidebar mt-5">
                  <h3>Search by <span class="green">category</span></h3>
                  <a href="">All category <img style="width: 20px; margin-left: 20px;" src="/img/icon/arrow-right-icon.svg" alt=""></a>
        
                    <!--Start carousel-->
                    <div id="carouselsidebar" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
           
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
        
                          </div>
        
                          <div class="carousel-item">
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
                                <img class="main-state"src="img/icon/marketing.svg" alt="">
                                <img class="hover" src="img/icon/marketing-active.svg" alt="">
                              </div>
                              <p>Marketing &<br>
                                Communication</p>
                            </div>
        
                          </div>
                       </div>
                       <div class="carousel-nav">
                        <a class="nav-item" role="button" data-bs-target="#carouselsidebar" data-bs-slide="prev"><img src="img/icon/prew-arrow.svg" alt=""></a>
                        <a class="nav-item" role="button" data-bs-target="#carouselsidebar" data-bs-slide="next"><img src="img/icon/next-arrow.svg" alt=""></a>
                       </div>
                    </div>
        
                </div>
                
                <div class="recent-posts my-5">
                  <h4>Recent <span class="green">Posts</span></h4>
                  <div class="post-item">
                    <a href="single-post.html" class="post-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
                    <div class="post-meta">
                      <span><i class="far fa-user"></i> Posted by someone</span><span><i class="far fa-calendar"></i> 30 07 2021</span><span><i class="far fa-comment-alt"></i> 0 comments</span>
                    </div>
                    <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt perspiciatis ex ipsam similique blanditiis. Culpa hic quia...</p>
                  </div>
                  <div class="post-item">
              
                    <a href="single-post.html" class="post-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
                    <div class="post-meta">
                      <span><i class="far fa-user"></i> Posted by someone</span><span><i class="far fa-calendar"></i> 30 07 2021</span><span><i class="far fa-comment-alt"></i> 0 comments</span>
                    </div>
                    <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt perspiciatis ex ipsam similique blanditiis. Culpa hic quia...</p>
                  </div>
  
                  <div class="post-item">
              
                    <a href="single-post.html" class="post-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
                    <div class="post-meta">
                      <span><i class="far fa-user"></i> Posted by someone</span><span><i class="far fa-calendar"></i> 30 07 2021</span><span><i class="far fa-comment-alt"></i> 0 comments</span>
                    </div>
                    <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt perspiciatis ex ipsam similique blanditiis. Culpa hic quia...</p>
                  </div>
                  <a href="">View all posts <img style="width: 20px; margin-left: 20px;" src="/img/icon/arrow-right-icon.svg" alt=""></a>
                  
              </div>
              
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
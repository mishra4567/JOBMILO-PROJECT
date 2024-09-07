<!-- The Modal -->
<div class="modal" id="signup">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Sign up</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body ">

        <form action="./sign.php" method="POST" enctype="multipart/form-data">


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

          <!-- Education level -->
          <div class="row">
            <div class="col">
                <!-- Phone -->
          <label for="phone" class="mb-1">Phone</label>
          <input type="phone" class="form-control  mb-3" name="number" placeholder="Enter phone number" id="phone">
            </div>
            <!-- Education -->
            <div class="col">
              <label for="edu" class="mb-1">Education</label>
              <input type="text" name="edu" id="edu" placeholder="Short form of your institute"
                class="form-control ">
            </div>
          </div>
        



          <!-- Skils -->

          <div class="row mb-2">
            <div class="col-md-12 ">Work Exprience</div>
          </div>

          <div class="row">
            <div class="col">
              <input type="checkbox" class="ms-4" name="skills[]"><span class="ms-2">Graphic</span>
            </div>
            <div class="col">
              <input type="checkbox" class="ms-4" name="skills[]"><span class="ms-2"> Animation</span>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <input type="checkbox" class="ms-4" name="skills[]"><span class="ms-2">Software Dev</span>
            </div>
            <div class="col">
              <input type="checkbox" class="ms-4" name="skills[]"><span class="ms-2">Web Dev</span>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <input type="checkbox" class="ms-4" name="skills[]"><span class="ms-2">Python</span>
            </div>
            <div class="col">
              <input type="checkbox" class="ms-4" name="skills[]"><span class="ms-2">Go lang</span>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <input type="checkbox" class="ms-4" name="skills[]"><span class="ms-2">Android dev</span>
            </div>
            <div class="col">
              <input type="checkbox" class="ms-4" name="skills[]"><span class="ms-2">Web design</span>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <input type="checkbox" class="ms-4" name="skills[]"><span class="ms-2">Core java</span>
            </div>
            <div class="col">
              <input type="checkbox" class="ms-4" name="skills[]"><span class="ms-2">Advance java</span>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <input type="checkbox" class="ms-4" name="skills[]"><span class="ms-2">Spring Boot</span>
            </div>
            <div class="col">
              <input type="checkbox" class="ms-4" name="skills[]"><span class="ms-2">Hibarnet</span>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <input type="checkbox" class="ms-4" name="skills[]"><span class="ms-2">Core php</span>
            </div>
            <div class="col">
              <input type="checkbox" class="ms-4" name="skills[]"><span class="ms-2">Laravel</span>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <input type="checkbox" class="ms-4" name="skills[]"><span class="ms-2">Banking</span>
            </div>
            <div class="col">
              <input type="checkbox" class="ms-4" name="skills[]"><span class="ms-2">Marketing</span>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <input type="checkbox" class="ms-4" name="skills[]"><span class="ms-2">Project Management</span>
            </div>
            <div class="col">
              <input type="checkbox" class="ms-4" name="skills[]"><span class="ms-2">Business Dev</span>
            </div>
          </div>
      <!-- </div> -->

      <!-- Language  -->
      <div class="row mb-2 ms-2">
        <div class="col-md-12 ">Language Known</div>
      </div>
      <div class="row">
        <div class="col ms-3">
          <input type="checkbox" class="ms-4" name="lang[]"><span class="ms-2">Bengali</span>
        </div>
        <div class="col">
          <input type="checkbox" class="ms-4" name="lang[]"><span class="ms-2"> English</span>
        </div>
      </div>
      <div class="row">
        <div class="col ms-3">
          <input type="checkbox" class="ms-4" name="lang[]"><span class="ms-2">Hindi</span>
        </div>
        <div class="col">
          <input type="checkbox" class="ms-4" name="lang[]"><span class="ms-2"> Franch</span>
        </div>
      </div>

      <!-- Location -->
      <div class="row">
        <div class="col">
          <label for="cl">Current Location</label>
          <input type="text" name="curloc" id="cl" class="form-control mb-3">
        </div>
        <div class="col">
          <label for="cl">Hometown</label>
          <input type="text" name="hometown" id="cl" class="form-control mb-3">
        </div>
      </div>
     

    


      <div class="row">
        <div class="col">
          <label for="cl">Pincode</label>
          <input type="text" name="pincode" id="cl" class="form-control">
        </div>
        <div class="col">
    <!-- Password -->

          <label for="password" class="">Password</label>
          <input type="password" class="form-control " name="pass" id="password"
            placeholder="Create strong password">
        </div>
      </div>

      <input type="submit" name="sign" value="Create account" class="btn"
      style="background-color: #92d35e;margin-left:21vw" />
   



   
  </form>
</div>

   

   



  </div>

  <!-- Modal footer -->
  
</div>
</div>
</div>
       
       <?php
      //  session_start();
      //  include("./db/db.php");
       $id=$_SESSION['id'];
       $sel="SELECT * FROM jb_employees WHERE e_id='$id'";
       $rs=$con->query($sel);
       $row=$rs->fetch_assoc();
       ?>
      <!-- <form action="upd.php" method="post" enctype="multipart/form-data">      -->
        <!-- <p><input type="hidden" name="id" id="" value="<?php //echo $row['e_id']?>"></p>                 -->
                                 
                                 <!--Work Exprience Modal  -->


<!-- The Modal -->
<div class="modal" id="work">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header d-flex align-items-center justify-content-center">
        <h6 class="modal-title">Work Experience</h6>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="row">
          <div class="col">
       <form action="up.php" method="post">
          
            <p><input class="ms-4" <?php if($row['e_workExperience']== "Student"){echo "checked";} ?> type="radio" name="exp" value="Student">Student</p>
          </div>
          <div class="col">
          <input type="radio" class="ms-4" name="exp" value="Graduate" <?php if($row['e_workExperience']== "Graduate"){echo "checked";} ?>><span class="ms-2">Graduate</span>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <input type="radio" class="ms-4 mt-3" name="exp" value="Fresher"><span class="ms-2"<?php if($row['e_workExperience']== "Fresher"){echo "checked";} ?>>Fresher</span>
          </div>
          <div class="col">
            <input type="radio" class="ms-4 mt-3" name="exp"value="Exprienced"<?php if($row['e_workExperience']== "Exprienced"){echo "checked";} ?>><span class="ms-2">Exprienced</span>
          </div>
        </div>
      <div class="row mt-2">
        <div class="col-md-12 me-1">

          <input type="submit" name="expr" id="" value="update" class="btn btn-success ">
        </div>
      </div>

       </form>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
      
      </div>

    </div>
  </div>
</div>




                                   <!-- Education Modal -->

<!-- The Modal -->
<div class="modal" id="education">
       <div class="modal-dialog">
         <div class="modal-content">
     
           <!-- Modal Header -->
           <div class="modal-header " >
             <h5 class="modal-title">Recent education level</h5>
             <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
           </div>
     
           <!-- Modal body -->
           <form action="up.php" method="post">
           <div class="modal-body mt-4">
             <input type="text" name="edu" id="" placeholder="Short form of your institute" class="form-control" value="<?php echo $row['e_highestEducation']?>">
             <div class="row me-1 mt-4">

<input type="submit" name="education" id="" value="Change" class="btn btn-success ">
</div>
           </div>
          
     </form>
           <!-- Modal footer -->
           <div class="modal-footer mt-4">
             <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
           </div>
     
         </div>
       </div>
     </div>



                                   <!-- Skills Modal -->

     <!-- The Modal -->
<div class="modal" id="skills">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Choose Multiple skills</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        

        <div class="modal-body">
          <div class="row">
            <form action="up.php" method="post">
            <h6>IT Domain</h6>
          </div>
          <div class="row">
            <div class="col">
              <?php
                     $skills=explode(",",$row['e_skills']);
                     ?>
              <input type="checkbox" class="ms-4" name="skills[]" value="Graphic" <?php if(in_array("Graphic",$skills)){ echo "checked"; }?>><span class="ms-2">Graphic</span>
            </div>
            <div class="col">
              <input type="checkbox" class="ms-4" name="skills[]"value="Animation" <?php if(in_array("Animation",$skills)){ echo "checked"; }?>><span class="ms-2"> Animation</span>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <input type="checkbox" class="ms-4" name="skills[]" value="Software Dev"<?php if(in_array("Software Dev",$skills)){ echo "checked"; }?>><span class="ms-2">Software Dev</span>
            </div>
            <div class="col">
              <input type="checkbox" class="ms-4" name="skills[]" value="Web Dev"<?php if(in_array("Web Dev",$skills)){ echo "checked"; }?>><span class="ms-2">Web Dev</span>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <input type="checkbox" class="ms-4" name="skills[]" value="Python"<?php if(in_array("Python",$skills)){ echo "checked"; }?>><span class="ms-2">Python</span>
            </div>
            <div class="col">
              <input type="checkbox" class="ms-4" name="skills[]" value="Go lang" <?php if(in_array("Go lang",$skills)){ echo "checked"; }?>><span class="ms-2">Go lang</span>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <input type="checkbox" class="ms-4" name="skills[]" value="Android dev" <?php if(in_array("Android dev",$skills)){ echo "checked"; }?>><span class="ms-2">Android dev</span>
            </div>
            <div class="col">
              <input type="checkbox" class="ms-4" name="skills[]" value="Web design" <?php if(in_array("Web design",$skills)){ echo "checked"; }?>><span class="ms-2">Web design</span>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <input type="checkbox" class="ms-4" name="skills[]" value="Core java" <?php if(in_array("Core java",$skills)){ echo "checked"; }?>><span class="ms-2">Core java</span>
            </div>
            <div class="col">
              <input type="checkbox" class="ms-4" name="skills[]" value="Advance java" <?php if(in_array("Advance java",$skills)){ echo "checked"; }?>><span class="ms-2">Advance java</span>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <input type="checkbox" class="ms-4" name="skills[]" value="Spring Boot" <?php if(in_array("Spring Boot",$skills)){ echo "checked"; }?> ><span class="ms-2">Spring Boot</span>
            </div>
            <div class="col">
              <input type="checkbox" class="ms-4" name="skills[]" value="Hibarnet"  <?php if(in_array("Hibarnet",$skills)){ echo "checked"; }?>><span class="ms-2">Hibarnet</span>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <input type="checkbox" class="ms-4" name="skills[]" value="Core php"  <?php if(in_array("Core php",$skills)){ echo "checked"; }?>><span class="ms-2">Core php</span>
            </div>
            <div class="col">
              <input type="checkbox" class="ms-4" name="skills[]" value="Laravel" <?php if(in_array("Laravel",$skills)){ echo "checked"; }?>><span class="ms-2">Laravel</span>
            </div>
          </div>
        </div>
       
<div class="row">
  <h6>Non IT</h6>
</div>
        <div class="row">
          <div class="col">
            <input type="checkbox" class="ms-4" name="skills[]" value="Banking" <?php if(in_array("Banking",$skills)){ echo "checked"; }?>><span class="ms-2">Banking</span>
          </div>
          <div class="col">
            <input type="checkbox" class="ms-4" name="skills[]" value="Marketing" <?php if(in_array("Marketing",$skills)){ echo "checked"; }?>><span class="ms-2">Marketing</span>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <input type="checkbox" class="ms-4" name="skills[]"value="Project Management"  <?php if(in_array("Project Management",$skills)){ echo "checked"; }?>><span class="ms-2">Project Management</span>
          </div>
          <div class="col">
            <input type="checkbox" class="ms-4" name="skills[]" value="Business Developement"<?php if(in_array("Business Developement",$skills)){ echo "checked"; }?>><span class="ms-2">Business Developement</span>
          </div>
        </div>
        <div class="row ms-1 me-1 mt-4">
<input type="submit" name="skill" id="" value="Upgrade" class="btn btn-success ">
</div>
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>




                  <!-- Language Known Modal -->



                  <!-- The Modal -->
<div class="modal" id="lang">
       <div class="modal-dialog">
         <div class="modal-content">
     
           <!-- Modal Header -->
           <div class="modal-header">
             <h4 class="modal-title">Modal Heading</h4>
             <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
           </div>
     
           <!-- Modal body -->
           <div class="modal-body">
            <form action="up.php" method="post">
            <?php
                     $lang=explode(",",$row['e_language']);
                     ?>
           <div class="row">
            <div class="col">
              <input type="checkbox" class="ms-4" name="lang[]" value="Bengali" <?php if(in_array("Bengali",$lang)){ echo "checked"; }?>><span class="ms-2">Bengali</span>
            </div>
            <div class="col">
              <input type="checkbox" class="ms-4" name="lang[]" value="English"<?php if(in_array("English",$lang)){ echo "checked"; }?>><span class="ms-2"> English</span>
            </div>
          </div>  
          <div class="row">
            <div class="col">
              <input type="checkbox" class="ms-4" name="lang[]" value="Hindi"<?php if(in_array("Hindi",$lang)){ echo "checked"; }?>><span class="ms-2">Hindi</span>
            </div>
            <div class="col">
              <input type="checkbox" class="ms-4" name="lang[]"  value="Franch"<?php if(in_array("Franch",$lang)){ echo "checked"; }?>><span class="ms-2"> Franch</span>
            </div>
          </div>
          <div class="row me-1 ms-1"><input type="submit" name="language" id="" class="btn btn-success"></div>
          </form>
           </div>

           
     
           <!-- Modal footer -->
           <div class="modal-footer">
             <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
           </div>
     
         </div>
       </div>
     </div>



                          <!-- Location Modal -->




                          <!-- The Modal -->
<div class="modal" id="location">
       <div class="modal-dialog">
         <div class="modal-content">
     
           <!-- Modal Header -->
           <div class="modal-header">
             <h4 class="modal-title">Address verification</h4>
             <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
           </div>
     
           <!-- Modal body -->
           <div class="modal-body">
            <form action="up.php" method="post">
            <label for="cl">Current Location</label>
           <input type="text" name="curloc" id="cl" class="form-control mb-3" value="<?php echo $row['e_curLocation']?>">

            <label for="cl">Hometown</label>
           <input type="text" name="hometown" id="cl" class="form-control mb-3" value="<?php echo $row['e_city']?>">
           
            <label for="pin">Pincode</label>
           <input type="text" name="pincode" id="pin" class="form-control mb-3" value="<?php echo $row['e_zip']?>">
           </form>
           <div class="row ms-1 me-1 mt-4">
<input type="submit" name="location" id="" value="Upgrade" class="btn btn-success ">
</div>
           </div>
     
           <!-- Modal footer -->
           <div class="modal-footer">
             <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
           </div>
     
         </div>
       </div>
     </div>



                            <!-- Basic Details Modal -->




<!-- The Modal -->
<div class="modal" id="basic">
       <div class="modal-dialog">
         <div class="modal-content">
     
           <!-- Modal Header -->
           <div class="modal-header">
             <h4 class="modal-title">Modal Heading</h4>
             <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
           </div>
     
           <!-- Modal body -->
           <div class="modal-body">
            <form action="up.php" method="post">
            <div class="row mt-3  mb-3 ms-2 me-2">
              <label for=""class="mb-1">Upgrade name</label>
               <input type="text" name="name" id="" class="form-control" value="<?php echo $row['e_name']?>">
            </div>

            <div class="row mt-3  mb-3 ms-2 me-2">
              <label for="Email"class="mb-1">Upgrade Email</label>
               <input type="email" name="email" id="Email" class="form-control" value="<?php echo $row['e_email']?>">
             
            </div>

            <div class="row mt-3  mb-3 ms-2 me-2">
              <label for="Email"class="mb-1">Gender</label>
              <div class="row">
                <div class="col">
               <input type="radio" name="gender" id="Email" value="Male" <?php if($row['e_gender']=='Male') { echo "checked";} ?>><span>Male</span>
                </div>
                <div class="col">
               <input type="radio" name="gender" id="Email"  value="Female" <?php if($row['e_gender']=='Female') { echo "checked";} ?>><span>Female</span>
               </div>
              </div>
              

             
            </div>
            
           
            <div class="row  mt-3  mb-3 ms-2 me-2">
              <label for="DOB" class="mb-1">Upgrade DOB</label>
              <input type="date" name="dob" id="DOB" class="form-control" value="<?php echo $row['e_dathOfBirth']?>">
            </div>
            <div class="row  mt-3  mb-3 ms-2 me-2">
              <label for="" class="mb-1">Phone number</label>
              <input type="text" name="number" id="" class="form-control" value="<?php echo $row['e_phNumber']?>">
            </div>
            <div class="row ms-1 me-1 mt-4">
<input type="submit" name="basic" id="" value="Upgrade" class="btn btn-success ">

</div>
</form>
           </div>
     
           <!-- Modal footer -->
           <div class="modal-footer">
             <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
           </div>
     
         </div>
       </div>
     </div>



        <!-- Profile Picture -->

     <div class="modal" id="profile">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header d-flex align-items-center justify-content-center">
        <h6 class="modal-title">Profile picture</h6>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="row">
          <div class="col">
       <form action="up.php" method="post" enctype="multipart/form-data">
        <div class="row d-flex align-items-center justify-content-center">

       <img style="width: 100px;" src="profile_image/<?php echo $row['e_proPhoto']?>" alt="" >
       </div>
       <div class="row mt-2 ms-2">
        <input type="file" name="img" id="" class="form-control">
       </div>

        
        <div class="row ms-1 me-1 mt-4">
<input type="submit" name="profile" id="" value="Upgrade" class="btn btn-success ">


</div>
      
       </form>
        </div>
      </div>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>



          <!-- Resume picture -->


      <!-- Modal  -->

     <div class="modal" id="resume">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header d-flex align-items-center justify-content-center">
        <h6 class="modal-title">Upgrade your resume </h6>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="row">
          <div class="col">
       <form action="up.php" method="post" enctype="multipart/form-data">
        <div class="row d-flex align-items-center justify-content-center ms-2 me-2">

         <input type="text" readonly name="resume" id="pdfFile" class="form-control" value="<?php echo $row['e_resume']?>">
       

         <img style="width: 100px;" src="resume_image/<?php echo $row['e_resume']?>" alt="" download>
        
         

         <!-- <a href="<?php //echo $fileUrl; ?>" ><img src="" alt="">Download File</a> -->

        <!-- <object class="pdf" data="resume_image/<?php // echo $row['e_resume']?>"
            width="100"
            height="300">
    </object> -->

    <!-- <iframe src="resume_image/<?php //['e_resume']?>" width="100%" height="600px" ></iframe> -->

    <!-- <embed src="resume_image/<?php // echo $row['e_resume']?>" type="application/pdf" width="100" height="600px" download/> -->


       <!-- <img style="width: 100px;" src="resume_image/<?php //echo $row['e_resume']?>" alt="" > -->
       </div>


       <div class="row mt-3 ms-2 me-2">
        <input type="file" name="resume" id="" class="form-control">
       </div>

        
        <div class="row ms-1 me-1 mt-4">
<input type="submit" name="res" id="" value="Upgrade Resume" class="btn btn-success ">


</div>
      
       </form>
        </div>
      </div>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

     </form> 
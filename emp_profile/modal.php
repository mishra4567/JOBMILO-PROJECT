       <?php
       //  session_start();
       //  include("./db/db.php");
       $id = $_SESSION['id'];
       $sel = "SELECT * FROM employer_detail WHERE id='$id'";
       $rs = $con->query($sel);
       $row = $rs->fetch_assoc();
       ?>



       <!-- Name Modal -->

       <!-- The Modal -->
       <div class="modal" id="name">
              <div class="modal-dialog">
                     <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                   <h4 class="modal-title"></h4>
                                   <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                   <form action="upd.php" method="post">
                                          <label for="cl">Update Name</label>
                                          <input type="text" name="name" id="cl" class="form-control mb-3" value="<?php echo $row['employer_name'] ?>">
                                          <div class="row ms-1 me-1 mt-4">
                                                 <input type="submit" name="n" id="" value="upgrade" class="btn btn-success ">
                                          </div>
                            </div>
                            </form>
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                   <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>
                     </div>
              </div>
       </div>
       <!-- company_name Modal -->

       <!-- The Modal -->
       <div class="modal" id="company">
              <div class="modal-dialog">
                     <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                   <h4 class="modal-title">Upgrade company name</h4>
                                   <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                   <form action="upd.php" method="post">
                                          <label for="cl">Company Name</label>
                                          <input type="text" name="company" id="cl" class="form-control mb-3" value="<?php echo $row['company_name'] ?>">
                                          <div class="row ms-1 me-1 mt-4">
                                                 <input type="submit" name="cn" id="" value="Upgrade" class="btn btn-success ">
                                          </div>
                            </div>
                            </form>
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                   <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>

                     </div>
              </div>
       </div>

       <!-- email Modal -->

       <!-- The Modal -->
       <div class="modal" id="email">
              <div class="modal-dialog">
                     <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                   <h4 class="modal-title">Upgrade email</h4>
                                   <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                   <form action="upd.php" method="post">
                                          <label for="cl">Company Name</label>
                                          <input type="text" name="email" id="cl" class="form-control mb-3" value="<?php echo $row['email'] ?>">
                                          <div class="row ms-1 me-1 mt-4">
                                                 <input type="submit" name="em" id="" value="Upgrade" class="btn btn-success ">
                                          </div>
                            </div>
                            </form>
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                   <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>

                     </div>
              </div>
       </div>
       <!-- Phone Modal -->

       <!-- The Modal -->
       <div class="modal" id="ph">
              <div class="modal-dialog">
                     <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                   <h4 class="modal-title">Upgrade Phone</h4>
                                   <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                   <form action="upd.php" method="post">
                                          <label for="cl">Upgrade phone</label>
                              <input type="text" name="phone" id="cl" class="form-control mb-3" value="<?php echo $row['phone'] ?>">
                                          <div class="row ms-1 me-1 mt-4">
                                                 <input type="submit" name="ph" id="" value="Upgrade" class="btn btn-success ">
                                          </div>
                            </div>
                            </form>
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                   <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>

                     </div>
              </div>
       </div>








       <!-- Profile Picture -->

]
       <!-- The Modal -->
       <div class="modal" id="pic">
              <div class="modal-dialog">
                     <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                   <h4 class="modal-title">Upgrade profile picture</h4>
                                   <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                   <form action="upd.php" method="post" enctype="multipart/form-data">
                                          <label for="cl">Upgrade picture</label>
                                          <div class="row d-flex justify-content-center">

                                                 <img src="emp_photo/<?php echo $row['photo'] ?>" style="width:150px;" alt="">
                                          </div>
                                          <div class="row mt-3 ms-2 me-2">

                                                 <input type="file" name="img" id="" class="form-control ">
                                          </div>
                                          <div class="row ms-1 me-1 mt-4">
                                                 <input type="submit" name="pic" id="" value="Upgrade" class="btn btn-success ">
                                          </div>
                            </div>
                            </form>
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                   <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>

                     </div>
              </div>
       </div>




       </form>
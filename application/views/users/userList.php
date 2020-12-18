

<div class="x_content">
    <div class="col-sm-5"> <a href="<?php echo base_url('jobs/dashbord')?>">Home</a>  </i> / <a href="#">User</a> </div></br></br></br>
   <input type="button" class="btn btn-success" value="Crate New <?php echo $page_title?>" name="newuser" data-toggle="modal" data-target="#newuser">
     
    
</div>
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <p class="text-muted font-13 m-b-30">
                    <h1><?php //echo $page_title?></h1> 
                    </p>
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>User Role</th>
                        
                          <th>Edit</th>
                          
                        </tr>
                      </thead>


                      <tbody>

                        <?php 

                          $user =  $this->User_model->user_list();
                          foreach ($user as $user) {
                         
                        ?>
                        <tr>
                          <td><?php echo $user->user_name?>  </td>
                          <td>
                          <?php if($user->user_role==1){ echo 'Director';} ?>
                          <?php if($user->user_role==2){ echo 'Secretary';} ?>
                          <?php if($user->user_role==3){ echo 'Manager';} ?>
                          <?php if($user->user_role==4){ echo 'Tech Support';} ?>
                          </td>
                          
                          
                          <td>                  
                         
                           <a href="" data-toggle="modal" data-target="#passwd<?php echo $user->user_id?>"> <i class="fa fa-key fa-2x text-danger"></i></a>
                           <a href="" data-toggle="modal" data-target="#edit<?php echo $user->user_id?>"> <i class="fa fa-edit fa-2x text-success"></i></a>                            
                         
                          </td>
                        </tr>



                        <!-- The Modal -->
<div class="modal fade" id="passwd<?php echo $user->user_id?>">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"><?php echo $user->user_name?> Password Reset</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="" method="post">
        <input type="hidden" class="form-control" name="user_id" value="<?php echo $user->user_id?>" >
        <input type="text" class="form-control" name="pass" > </br>
        <input type="submit" class="btn btn-success" value="Save" name="resetpass">
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>




<!-- The Modal -->
<div class="modal fade" id="edit<?php echo $user->user_id?>">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"><?php echo $user->user_name?> User Role</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="" method="post">
        <input type="hidden" class="form-control" name="user_id" value="<?php echo $user->user_id?>" >
        
                <div class="form-group">
                <label for="sel1" >Select User Role:</label>
                <select class="form-control" id="sel1" name="user_role">
                    <option value="1">Director</option>
                    <option value="2">Secretary</option>
                    <option value="3">Manager</option>
                    <option value="4">Tech Support</option>
                </select>
        </div>

         </br>
        <input type="submit" class="btn btn-success" value="Save" name="roleupdate">
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

                      
                        <?php }?>
                     
                      </tbody>
                    </table>
                  </div>
                  </div>
              </div>
             




<!-- new user  Modal -->
<div class="modal fade" id="newuser">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Ad New User</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form action="" method="post">

      <div class="row">
      <div class="col">
            <div class="form-group">
             <label for="usr">User Name:</label>
             <input type="text" class="form-control" id="usr" name="user_name" required>
            </div>
      </div>
      <div class="col">
         <div class="form-group">
             <label for="usr">Password:</label>
             <input type="password" class="form-control" id="usr" name="user_password" required>
         </div>
      </div>

      <div class="col">
      <div class="form-group">
                <label for="sel1" >Select User Role:</label>
                <select class="form-control" id="sel1" name="user_role" required>
                    <option value="1">Director</option>
                    <option value="2">Secretary</option>
                    <option value="3">Manager</option>
                    <option value="4">Tech Support</option>
                </select>
        </div>
      
      </div>
      </div>
      
       



        <input type="submit" class="btn btn-success" value="Save" name="newuser">



        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
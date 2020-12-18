

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
                          <th>Customer Name</th>
                          <th>Contact No</th>                        
                          <th>Email</th>
                          <th>Balance</th>
                          <th>Edit</th>
                          
                        </tr>
                      </thead>


                      <tbody>

                        <?php 

                          $dev =  $this->Developer_model->developer_list();
                          foreach ($dev as $key=>$row) {
                         
                        ?>
                        <tr>
                          <td><?php echo $row->developers_name?>  </td>
                          <td><?php echo $row->developers_contact?></td>
                          <td><?php echo $row->developers_totals?></td>                         
                          <td><?php echo $row->developers_balance?></td>  
                          <td>              
                          <a href="" data-toggle="modal" data-target="#edit<?php echo $row->developers_id?>"> <i class="fa fa-edit fa-2x text-success"></i></a>                            
                           </td>
                        </tr>







<!-- The Modal -->
<div class="modal fade" id="edit<?php echo $row->developers_id?>">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"><?php echo $row->developers_name?> Customer Update</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="" method="post">
        <input type="hidden" class="form-control" name="developers_id" value="<?php echo $row->developers_id?>" >
        
        <div class="row">
          <div class="col">
                <div class="form-group">
                <label for="usr">Customer Name:</label>
                <input type="text" class="form-control" id="usr"  name="customer_name" value="<?php echo $row->developers_name?>" readonly >
                </div>
          </div>
        <div class="col">
          <div class="form-group">
              <label for="usr">Contat no:</label>
              <input type="text" class="form-control" name="customer_contact_no" value="<?php echo $row->developers_contact?>" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" required>
          </div>
        </div>

      </div>


      <div class="row">
          <div class="col">
                <div class="form-group">
                <label for="usr">Email:</label>
                <input type="email" class="form-control" id="usr" name="customer_email" value="<?php echo $row->developers_email?>">
                </div>
          </div>
        <div class="col">
          <div class="form-group">
              <label for="usr">Account Details:</label>
              <textarea rows="" cols="" class="form-control" name="customer_account_details"><?php echo $row->developers_bankDetails?></textarea>
             
          </div>
        </div>

      </div>
    

         </br>
        <input type="submit" class="btn btn-success" value="Save" name="cutomerupdate">
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
        <h4 class="modal-title">New Developer</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form action="" method="post">

      <div class="row">
          <div class="col">
                <div class="form-group">
                <label for="usr">Developer Name:</label>
                <input type="text" class="form-control" id="usr"  name="developers_name" required>
                </div>
          </div>
        <div class="col">
          <div class="form-group">
              <label for="usr">Contat no:</label>
              <input type="text" class="form-control" name="developers_contact"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" required>
          </div>
        </div>

      </div>


      <div class="row">
          <div class="col">
                <div class="form-group">
                <label for="usr">Email:</label>
                <input type="email" class="form-control" id="usr" name="developers_email">
                </div>
          </div>
        <div class="col">
          <div class="form-group">
              <label for="usr">Account Details:</label>
              <textarea rows="" cols="" class="form-control" name="developers_bankDetails"></textarea>
             
          </div>
        </div>

      </div>


      
      <div class="row">
        <div class="col">
                <div class="form-group">
                <label for="sel1">Select list:</label>
                <select class="form-control" id="sel1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
                </div>
        </div>

        <div class="col">
                <div class="form-group">
                <label for="sel1">Select list:</label>
                <select class="form-control" id="sel1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
                </div>
        </div>

        

      </div>



      
       



        <input type="submit" class="btn btn-success" value="Save" name="new_customer">



        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>


<div class="x_content">
    <div class="col-sm-5"> <a href="<?php echo base_url('jobs/dashbord')?>">Home</a>  </i> / <a href="#">User</a> </div></br></br></br>
 <a href="<?php echo base_url('jobs/new_job')?>">  <input type="button" class="btn btn-success" value="Crate New <?php echo $page_title?>" ></a>
     
    
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
                          <th>Job Name</th>
                          <th>Customer</th>                        
                          <th>Devloper</th>
                          <th>Pograss</th>
                          <th>Date Count</th>
                          
                        </tr>
                      </thead>


                      <tbody>

                        <?php 

                          $job =  $this->Jobs_model->pending_Job_List();
                          foreach ($job as $job) {
                         
                        ?>
                        <tr>
                          <td><?php echo $job->job_name?>  </td>
                          <td>
                          <?php echo $job->customer_name ?>
                          
                          </td>
                          
                          
                          <td>                  
                         
                          
                         
                          </td>
                          <td></td>
                          <td></td>
                        </tr>



                      
                        <?php }?>
                     
                      </tbody>
                    </table>
                  </div>
                  </div>
              </div>
             


<!--------
 <a href="" data-toggle="modal" data-target="#passwd<?php echo $job->job_id?>"> <i class="fa fa-key fa-2x text-danger"></i></a>
                           <a href="" data-toggle="modal" data-target="#edit<?php echo $job->job_id?>"> <i class="fa fa-edit fa-2x text-success"></i></a>                            

                           !------------->
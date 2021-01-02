

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
                          <th></th>
                          
                        </tr>
                      </thead>


                      <tbody>

                        <?php 

                          $job =  $this->Jobs_model->pending_Job_List();
                          foreach ($job as $job) {
                         
                        ?>
                        <tr>
                          <td><?php echo $job->job_name?>  </td>
                          <td><?php echo $job->customer_name ?>  </td>
                          <td><?php echo $job->developers_name ?></div>
                          <td>
                              <?php if($job->developers_status==1){ echo 'Not Started';} ?>
                              <?php if($job->developers_status==2){ echo 'Started';} ?>
                              <?php if($job->developers_status==3){ echo 'Started';} ?>
                              </td>
                          <td>

                            <?php 
                            if($job->developers_status==2){
                                $now = time();
                                $your_date = strtotime($job->job_targat_date);
                                $datediff = $your_date - $now;                          
                                echo round($datediff / (60 * 60 * 24));
                            }
                            ?>
                          </td>
                          <td>
                              <?php if(!empty($job->job_cost)){?>
                          <a href="" data-toggle="modal" data-target="#advance<?php echo $job->job_id?>"> <i class="fa fa-money fa-2x text-success" ></i></a>
                         <?php }?>
                          <a href="" data-toggle="modal" data-target="#edit<?php echo $job->job_id?>"> <i class="fa fa-dashcube fa-2x text-success"></i></a>
                          <a href="" data-toggle="modal" data-target="#edit<?php echo $job->job_id?>"> <i class="fa fa-edit fa-2x text-success"></i></a>
                          </td>
                        </tr>




 <!-- The Modal -->
<div class="modal fade" id="advance<?php echo $job->job_id?>">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"><?php echo $job->job_name?> Advance </h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       <form action="" method="post">

       <input class="form-control" type="hidden" name="job_id"  value="<?php echo $job->job_id?>" />

       <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Advance<span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6">
                    <input class="form-control" type="text" class='email' name="job_cost" data-validate-linked='email' required='required' /></div>
                </div>



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
             


<!--------
 <a href="" data-toggle="modal" data-target="#passwd<?php echo $job->job_id?>"> <i class="fa fa-key fa-2x text-danger"></i></a>
                                                      

                           !------------->
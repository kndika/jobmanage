
<h2>ff</h3>

<div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Customer Name<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                            <select class="form-control"  required="required" name="job_customer_id">
                                                <?php 
                                                  $customer=$this->Jobs_model->customer_list();
                                                  foreach ($customer as $cu){  echo '<option value="'.$cu->customer_id.'">'. $cu->customer_name.'</option>';}
                                                ?>                                                  
                                               </select>
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Developer<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <select class="form-control"  required="required" name="job_developers_id">
                                                <?php 
                                                  $devolp=$this->Jobs_model->developer_list();
                                                  foreach ($devolp as $de){  echo '<option value="'.$de->developers_id.'">'. $de->developers_name.'</option>';}
                                                ?>  
                                                </select>
                                                </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Job Name<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" name="job_name" class='email' required="required" type="text" /></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Job Cost<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" type="text" class='email' name="job_cost" data-validate-linked='email'  /></div>
                                        </div>
                                       
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Targat Date<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" class='date' type="date" name="job_targat_date" required='required'></div>
                                        </div>

                                         
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Requament<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <textarea  id="editor"  class="form-control" cols="20" required='required' name="job_requament"></textarea>
                                                </div>
                                        </div>


<div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
                <a href="<?php echo base_url('manage/dashbord')?>" class="site_title"><img src="<?php echo base_url('images/logo1.png')?>" class="col-sm-1"></i> <span><?php echo TITEL; ?></span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                  <img src="<?php echo base_url('images/user.png')?>" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $this->session->user_id?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3></h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-cogs"></i> Setting   <?php if(empty($this->session->admin_permission)){ echo '<em class="text-danger">   No Permission</em>';}?><span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                    
                     <?php //if(!empty($this->session->admin_permission)){ ?>
                    <!-- users -->
                    <li>
                          <a><i class="fa fa-user"></i> Users <span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                              <li>  <a href="<?php echo base_url('user/users')?>">Users List</a></li>
                          </ul>
                    </li>

                    
                    <!-- Branch's -->
                    
                    
                       <li>
                          <a><i class="fa fa-cart-plus"></i> Customer <span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                              <li>  <a href="<?php echo base_url('customer/customer')?>">Customer</a></li>                            
                          </ul>
                       </li>

                          <li>
                          <a><i class="fa fa-stack-overflow"></i>Developer<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                              <li>  <a href="<?php echo base_url('developer/developer')?>">Developer</a></li>
                              
                          </ul>
                       </li>


                     <?php //}?>
                    </ul>
                  </li>
                 
                
                
              </div>




              <div class="menu_section">             
                <h3>Job's Manage</h3>              
                <ul class="nav side-menu">
                <?php  //if($this->session->user_designation==1){ ?>
                  <li><a><i class="fa fa-cubes"></i> Jobs <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                   <li> <a href="<?php echo base_url('product/manufacture')?>">New Job</a></li>
                   <li> <a href="<?php echo base_url('product/product_name')?>">Product Name</a></li>
                   <li> <a href="<?php echo base_url('product/stockItem')?>">Stock Item</a></li>
                   <li> <a href="<?php echo base_url('product/deleteStockItem')?>">Delet Stock Item</a></li>
                   <?php // }?>
                  </ul>                  
                  </li>
                 
                     
                  <li><a><i class="fa fa-dropbox"></i>BILL GRN <span class="fa fa-chevron-down"></span></a>                  
                    <ul class="nav child_menu">
                    <?php  //if($this->session->user_designation==1){?>
                   <li> <a href="<?php echo base_url('grn/newgrn')?>">New GRN</a></li>
                   <li> <a href="<?php echo base_url('grn/grnlist')?>">GRN List</a></li>
                   <li> <a href="<?php echo base_url('grn/finishGrn')?>">Payment Done GRN</a></li> 
                   <li> <a href="<?php echo base_url('grn/paidpayments')?>">Paid Payment's</a></li>                    
                   <?php //}?>
                  </ul>                  
                  </li>
             

                  <li><a><i class="fa fa-shopping-cart"></i>Selling<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                   <li> <a href="<?php echo base_url('invoice/newone')?>">New Invoice</a></li>
                   <li> <a href="<?php echo base_url('invoice/list')?>">Panding Invoice</a></li>

                   <?php  //if($this->session->user_designation==1){?>
                   <li> <a href="<?php echo base_url('invoice/pendingPayments')?>">Panding Payments</a></li> 
                   <?php //}?>

                   <li> <a href="<?php echo base_url('invoice/completlist')?>">Complet Invoice</a></li>
                   <li> <a href="<?php echo base_url('invoice/completpayment')?>">Complet Payment</a></li>
                                    
                  </ul>
                  </li>



                    <!------ report !-------->
                    <li><a><i class="fa fa-file-word-o"></i> Report <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        
                        <li><a>GRN<span class="fa fa-chevron-down"></span></a>

                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="level2.html">Level Two</a>
                            </li>
                            <li><a href="#level2_1">Level Two</a>
                            </li>
                            <li><a href="#level2_2">Level Two</a>
                            </li>
                          </ul>                          
                        </li>


                        <li><a>Invoice<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li class="sub_menu"><a href="level2.html">Level Two</a>
                          </li>
                          <li><a href="#level2_1">Level Two</a>
                          </li>
                          <li><a href="#level2_2">Level Two</a>
                          </li>
                        </ul>                          
                        </li>


                        
                        <li><a>Expenses<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li class="sub_menu"><a href="level2.html">Level Two</a>
                          </li>
                          <li><a href="#level2_1">Level Two</a>
                          </li>
                          <li><a href="#level2_2">Level Two</a>
                          </li>
                        </ul>                          
                        </li>
                       
                       
                    </ul>
                  </li>  
              
                </ul>



              

            

              </div>

              





            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
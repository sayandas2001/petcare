<?php $this->load->view('admin/include/head'); ?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i>contact
        <small>Edit</small>
      </h1>
    </section>
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Edit Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php $this->load->helper("form"); ?>
                    <form role="form" enctype='multipart/form-data' action="<?php echo base_url() ?>contact/editcontactConfig" method="post" id="contact" role="form">
                        <input type="hidden" value="<?php echo $contactInfo->id; ?>" name="id" id="" />
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="name">name</label><span class="text-red">*</span>
                                        <input type="text" class="form-control required" value="<?php echo $contactInfo->name; ?>" id="name" name="name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="email">email</label><span class="text-red">*</span>
                                        <input type="text" class="form-control required" value="<?php echo $contactInfo->email; ?>" id="email" name="email">
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="address">address</label><span class="text-red">*</span>
                                        <input type="textarea" class="form-control required" value="<?php echo $contactInfo->address; ?>" id="address" name="address">
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone_no">phone_no</label>
                                        <input type="text" class="form-control required" id="phone_no" value="<?php echo $contactInfo->phone_no;?>" name="phone_no" maxlength="128">
                                    </div>
                                </div>
                            </div>
                            </div>
                            <input type="submit" class="btn btn-primary" value="Submit" />
                            <button type="button" class="btn btn-primary" value="Back" onclick="goBack()">Back</button>
                            <input type="reset" class="btn btn-default" value="Reset" />
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <?php
                    $this->load->helper('form');
                    $error = $this->session->flashdata('error');
                    if($error)
                    {
                ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('error'); ?>                    
                </div>
                <?php } ?>
                <?php  
                    $success = $this->session->flashdata('success');
                    if($success)
                    {
                ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php } ?>
            </div>
        </div>    
    </section>
</div>

<?php $this->load->view('admin/include/footer'); ?>
 

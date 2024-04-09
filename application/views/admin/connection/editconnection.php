<?php $this->load->view('admin/include/head'); ?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i>conection
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
                    <form role="form" enctype='multipart/form-data' action="<?php echo base_url() ?>conection/editconnectionConfig" method="post" id="connection" role="form">
                        <input type="hidden" value="<?php echo $Info->id; ?>" name="id" id="" />
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="title">Title</label><span class="text-red">*</span>
                                        <input type="text" class="form-control required" value="<?php echo $Info->title; ?>" id="title" name="title">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="image">Image</label><span class="text-red">*</span>
                                        <input type="button" class="form-control image-preview-filename" value="<?php echo set_value('image', $Info->image); ?>" disabled="disabled">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                                <span class="fa fa-remove"></span>Clear
                                            </button>
                                            <div class="btn btn-primary image-preview-input">
                                                <span class="fa fa-repeat"></span>
                                                <span class="image-preview-input-title">File Browse</span>
                                                <input type="file" accept="image/png, image/jpeg, image/gif"  value="<?php echo $Info->image; ?>" id="image" name="image"/>
                                            </div>
                                        </span>
                                        <?php if(!empty($Info->image)) { ?>
                                            <img src="<?php echo base_url('uploads/connection/original/'.$Info->image); ?>" width="150" height="100">
                                        <?php } else { ?>
                                            <td class="text-center"><img src="<?php echo assets_url(); ?>uploads/blank.jpg" width="100" height="100"></td>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="description">description</label><span class="text-red">*</span>
                                        <input type="textarea" class="form-control required" value="<?php echo $Info->description; ?>" id="description" name="description">
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
 

<?php $this->load->view('admin/include/head'); ?>
<style>
   input[type="file"] {
   display: block;
   }
   .imageThumb {
   max-height: 75px;
   border: 2px solid;
   padding: 1px;
   cursor: pointer;
   }
   .pip {
   display: inline-block;
   margin: 10px 10px 0 0;
   }
   .img-delete {
   display: block;
   background: #444;
   border: 1px solid black;
   color: white;
   text-align: center;
   cursor: pointer;
   }
   .img-delete:hover {
   background: white;
   color: black;
   }
</style>
<div class="page-title-area">
   <div class="row align-items-center">
      <div class="col-sm-6">
         <div class="breadcrumbs-area clearfix">
            <h4 class="page-title pull-left">About Us</h4>
         </div>
      </div>
      <div class="col-sm-6 clearfix">
         <div class="search-ar pull-right">
         </div>
      </div>
   </div>
</div>
<div class="main-content-inner">
   <div class="row">
      <div class="col-12 mt-5">
         <?php if($this->session->flashdata('error_msg')!=""){ ?>
         <div class="alert alert-danger" role="alert">
            <?php echo $this->session->flashdata('error_msg'); ?>
         </div>
         <?php } ?>
         <div class="card">
            <div class="card-body">
                <form name="myForm" id="contact" method="post" action="<?php echo admin_url() ?>connection/connectionedit" role="form" enctype='multipart/form-data'>
                    <input type="hidden" value="<?php echo $connect->id; ?>" name="id" id="id" />
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title">title</label>
                                        <input type="title" class="form-control required title" id="title" value="<?php echo $connect->title; ?>" name="title">
                                  </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="image">Image</label><span class="text-red">*</span>
                                        <input type="button" class="form-control image-preview-filename" value="<?php echo set_value('image', $connect->image); ?>">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                                <span class="fa fa-remove"></span>Clear
                                            </button>
                                            <div class="btn btn-primary image-preview-input">
                                                <span class="fa fa-repeat"></span>
                                                <span class="image-preview-input-title">File Browse</span>
                                                <input type="file" accept="image/png, image/jpeg, image/gif"  value="<?php echo $connect->image; ?>" id="image" name="image"/>
                                            </div>
                                        </span>
                                        <?php if(!empty($connect->image)) { ?>
                                            <img src="<?php echo base_url('uploads\connection\original/'.$connect->image); ?>" width="150" height="100">
                                        <?php } else { ?>
                                            <td class="text-center"><img src="<?php echo assets_url(); ?>uploads/blank.jpg" width="100" height="100"></td>
                                        <?php } ?>
                                    </div>
                                </div> 
                            </div>                
                            <div class="form-group">
                            <label for="description" class="col-form-label">Description </label>
                            <input class="form-control" type="text" name="description" id="description" value="<?php echo $connect->description; ?>">
                        </div>
                        </div> 
                        <div class="box-footer">
                           <input type="submit" class="btn btn-primary" />
                           <button type="button" class="btn btn-primary" value="Back" onclick="goBack()">Back</button>
                           <input type="reset" class="btn btn-default" value="Reset" />
                        </div>        
                </form>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
<!-- main content area end -->
<!-- footer area start-->
<?php $this->load->view('admin/include/footer'); ?>

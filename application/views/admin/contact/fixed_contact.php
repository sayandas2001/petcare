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
            <h4 class="page-title pull-left">Contact Us</h4>
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
         <?php if($this->session->flashdata('error_msg') != ""){ ?>
         <div class="alert alert-danger" role="alert">
            <?php echo $this->session->flashdata('error_msg'); ?>
         </div>
         <?php } ?>
         <div class="card">
            <div class="card-body">
                <form name="myForm" id="contact" method="post" action="<?php echo admin_url() ?>contact/contactedit" role="form" enctype='multipart/form-data'>
                    <input type="hidden" value="<?php echo $info->id; ?>" name="id" id="id" />
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control required" id="name" value="<?php echo $info->name; ?>" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control required" id="email" value="<?php echo $info->email; ?>" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address" class="col-form-label">Address</label>
                            <input class="form-control" type="text" name="address" id="address" value="<?php echo $info->address; ?>">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone_no">Phone No</label>
                                    <input type="text" class="form-control required" id="phone_no" value="<?php echo $info->phone_no;?>" name="phone_no" maxlength="128">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <input type="submit" class="btn btn-primary" />
                        <button type="button" class="btn btn-primary" onclick="goBack()">Back</button>
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

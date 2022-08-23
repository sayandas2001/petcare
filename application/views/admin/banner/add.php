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
            <h4 class="page-title pull-left">New Banner </h4>
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
               <h4 class="header-title">Create New Banner
                  <a href="<?= admin_url(); ?>banner" class="btn btn-danger float-right">Back</a>
               </h4>
               <?php
               echo form_open_multipart(admin_url().'banner/add', array('method'=>'post','name'=>'form1', 'id'=>'form1','class'=>'form-frame', 'autocomplete'=>"off"));
               ?>
                  <div class="form-group">
                  <label for="title" class="col-form-label"> title </label>
                  <input class="form-control" type="text" name="title" id="title" >
               </div>
               <div class="form-group">
                  <label for="banner_image" class="col-form-label">banner image </label>
                  <input class="form-control" type="file" name="banner_image" id="banner_image" >
               </div>
               <div class="form-group">
                  <label for="short_desc" class="col-form-label">Short desc </label>
                  <input class="form-control" type="text" name="short_desc" id="short_desc" >
                  
               </div>
               <div class="form-group">
                  <label for="link_url" class="col-form-label">link url </label>
                  <input class="form-control" type="text" name="link_url" id="link_url" >
               </div>
               <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4" >Submit</button>
               <a href="<?= admin_url(); ?>banner" class="btn btn-danger mt-4 ml-3">Cancel</a>
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
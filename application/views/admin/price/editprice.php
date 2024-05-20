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
            <h4 class="page-title pull-left"> price</h4>
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
               <h4 class="header-title">Create New price
                  <a href="<?= admin_url(); ?>price" class="btn btn-danger float-right">Back</a>
               </h4>
               <?php 
                  echo form_open_multipart(admin_url().'price/editprice', array('method'=>'post','name'=>'form1', 'id'=>'form1','class'=>'form-frame', 'autocomplete'=>"off"));
                  ?>
                  <input type="hidden" value="<?php echo $priceInfo->id; ?>" name="id" id="id" />
                <div class="form-group">
                  <label for="title" class="col-form-label"> Title </label>
                  <input class="form-control" type="text" name="title" id="title" value="<?php echo $priceInfo->title; ?>">
               </div>
               <div class="form-group">
                  <label for="price" class="col-form-label"> price </label>
                  <input class="form-control" type="text" name="price" id="price" value="<?php echo $priceInfo->price; ?>">
               </div>
               <div class="form-group">
                  <label for="description" class="col-form-label">Description </label>
                  <input class="form-control" type="text" name="description" id="description" value="<?php echo $priceInfo->description; ?>">
               </div>
               <div class="form-group">
                  <label for="link" class="col-form-label">link </label>
                  <input class="form-control" type="text" name="link" id="link" value="<?php echo $priceInfo->link; ?>">
               </div>
               <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4" >Submit</button>
               <a href="<?= admin_url(); ?>price" class="btn btn-danger mt-4 ml-3">Cancel</a>
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

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
            <h4 class="page-title pull-left"> booking</h4>
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
               <h4 class="header-title">Create New booking
                  <a href="<?= admin_url(); ?>bboking" class="btn btn-danger float-right">Back</a>
               </h4>
               <?php 
                  echo form_open_multipart(admin_url().'booking/editbooking', array('method'=>'post','name'=>'form1', 'id'=>'form1','class'=>'form-frame', 'autocomplete'=>"off"));
                  ?>
                  <input type="hidden" value="<?php echo $bookingInfo->id; ?>" name="id" id="id" />
                <div class="form-group">
                  <label for="name" class="col-form-label"> Name </label>
                  <input class="form-control" type="text" name="name" id="name" value="<?php echo $bookingInfo->name; ?>">
               </div>
               <div class="form-group">
                  <label for="email" class="col-form-label"> Email </label>
                  <input class="form-control" type="text" name="email" id="email" value="<?php echo $bookingInfo->email; ?>">
               </div>
               <div class="form-group">
                  <label for="date" class="col-form-label">Date </label>
                  <input class="form-control" type="text" name="date" id="date" value="<?php echo $bookingInfo->date; ?>">
               </div>
               <div class="form-group">
                  <label for="service" class="col-form-label">service </label>
                  <input class="form-control" type="text" name="service" id="service" value="<?php echo $bookingInfo->service; ?>">
               </div>
               <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4" >Submit</button>
               <a href="<?= admin_url(); ?>booking" class="btn btn-danger mt-4 ml-3">Cancel</a>
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

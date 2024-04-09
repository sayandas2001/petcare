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
            <h4 class="page-title pull-left">New Blog</h4>
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
               <h4 class="header-title">Create New assistance
                  <a href="<?= admin_url(); ?>assistance" class="btn btn-danger float-right">Back</a>
               </h4>
               <?php 
                  echo form_open_multipart(admin_url().'assistance/editassistance', array('method'=>'post','name'=>'form1', 'id'=>'form1','class'=>'form-frame', 'autocomplete'=>"off"));
                  ?>
                  <input type="hidden" value="<?php echo $assistanceInfo->id; ?>" name="id" id="id" />
               <div class="form-group">
                  <label for="title" class="col-form-label">assistance Title </label>
                  <input class="form-control" type="text" name="title" id="title" value="<?php echo $assistanceInfo->title; ?>">
               </div>
               <div class="form-group">
                    <label for="image">Image</label><span class="text-red">*</span>
                    <input type="button" class="form-control image-preview-filename" value="<?php echo set_value('image', $assistanceInfo->image); ?>" disabled="disabled">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                            <span class="fa fa-remove"></span>Clear
                        </button>
                        <div class="btn btn-primary image-preview-input">
                            <span class="fa fa-repeat"></span>
                            <span class="image-preview-input-title">File Browse</span>
                            <input type="file" accept="image/png, image/jpeg, image/gif" id="image" name="image"/>
                        </div>
                    </span>
                    <?php if(!empty($assistanceInfo->image)) { ?>
                        <img src="<?php echo base_url('uploads/assistance/original/'.$assistanceInfo->image); ?>" width="150" height="100">
                    <?php } else { ?>
                        <td class="text-center"><img src="<?php echo assets_url(); ?>uploads/blank.jpg" width="100" height="100"></td>
                    <?php } ?>
               </div>
               <div class="form-group">
                  <label for="description" class="col-form-label">Description </label>
                  <input class="form-control" type="text" name="description" id="description" value="<?php echo $assistanceInfo->description; ?>">
               </div>
               <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4" >Submit</button>
               <a href="<?= admin_url(); ?>assistance" class="btn btn-danger mt-4 ml-3">Cancel</a>
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

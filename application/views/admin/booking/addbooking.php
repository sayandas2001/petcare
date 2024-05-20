<?php $this->load->view('admin/include/head'); ?>
<style>
    /* Your custom styles */
</style>
<div class="page-title-area">
    <!-- Your page title area HTML -->
</div>
<div class="main-content-inner">
    <div class="row">
        <div class="col-12 mt-5">
            <?php if($this->session->flashdata('error_msg')!=""){ ?>
            <div class="alert alert-danger" role="alert">
                <?= $this->session->flashdata('error_msg'); ?>
            </div>
            <?php } ?>
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">booking
                        <a href="<?= admin_url(); ?>booking" class="btn btn-danger float-right">Back</a>
                    </h4>
                    <?= form_open_multipart(admin_url().'booking/add', array('method'=>'post','name'=>'form1', 'id'=>'form1','class'=>'form-frame', 'autocomplete'=>"off")); ?>
                    <div class="form-group">
                        <label for="name" class="col-form-label">Name</label>
                        <input class="form-control" type="text" name="name" id="name">
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-form-label">Email</label>
                        <input class="form-control" type="text" name="email" id="email">
                    </div>              
                    <div class="form-group">
                        <label for="date" class="col-form-label">Date</label>
                        <input class="form-control" id="date" name="date" id="date">
                    </div>
                    <div class="form-group">
                        <label for="service" class="col-form-label">service</label>
                        <input class="form-control" type="text" name="service" id="service">
                    </div> 
                    <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
                    <a href="<?= admin_url(); ?>booking" class="btn btn-danger mt-4 ml-3">Cancel</a> 
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('admin/include/footer'); ?>

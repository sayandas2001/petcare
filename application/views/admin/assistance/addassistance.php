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
                    <h4 class="header-title">Create assistance
                        <a href="<?= admin_url(); ?>assistance" class="btn btn-danger float-right">Back</a>
                    </h4>
                    <?= form_open_multipart(admin_url().'assistance/add', array('method'=>'post','name'=>'form1', 'id'=>'form1','class'=>'form-frame', 'autocomplete'=>"off")); ?>
                    <div class="form-group">
                        <label for="title" class="col-form-label">assistance Title</label>
                        <input class="form-control" type="text" name="title" id="title">
                    </div>
                    <div class="form-group">
                        <label for="image" class="col-form-label">assistance Image</label>
                        <input class="form-control" type="file" name="image" id="image">
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="4" cols="60"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
                    <a href="<?= admin_url(); ?>assistance" class="btn btn-danger mt-4 ml-3">Cancel</a> 
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('admin/include/footer'); ?>

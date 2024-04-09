<?php $this->load->view('admin/include/head'); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>
    /* Your custom styles */
</style>
<div class="page-title-area">
    <!-- Your page title area HTML -->
</div>
<div class="main-content-inner">
    <div class="row">
        <div class="col-12 mt-5">
            <?php if ($this->session->flashdata('success_msg')): ?>
                <div class="alert alert-success" role="alert">
                    <?= $this->session->flashdata('success_msg'); ?>
                </div>
            <?php endif; ?>
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">service
                        <a href="<?= admin_url() ?>service/add" class="btn btn-info float-right">+ Add New service</a>
                    </h4>
                    <div class="single-table">
                        <div class="col-sm-12 table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead class="bg-light text-capitalize">
                                    <tr>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(!empty($allservice)) {
                                        foreach($allservice as $value) { ?>
                                            <tr>
                                                <td><?= $value->title ?></td>
                                                <td>
                                                    <?php if ($value->image != (null || '')) : ?>
                                                    <img src="<?php echo base_url('uploads/service/original/'. $value->image); ?>" style="height: 79px; width: 104px;">
                                                    <?php else : ?>
                                                    <?php endif; ?> 
                                                </td>
                                                <td><?= $value->description ?></td>
                                                <td>
                                                    <a href="<?= admin_url() . 'service/update/' . $value->id ?>">
                                                        <span class="glyphicon glyphicon-edit"></span>
                                                    </a>
                                                    <a href="<?= admin_url() . 'service/delete/' . $value->id ?>">
                                                        <span class="glyphicon glyphicon-trash servicedel_confirmation"></span>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php } 
                                    } else { ?>
                                        <tr><td colspan="4" style="text-align: center;">No data found.</td></tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <?= $this->pagination->create_links() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('admin/include/footer'); ?>

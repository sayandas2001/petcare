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
                    <h4 class="header-title">booking
                        <a href="<?= admin_url() ?>booking/add" class="btn btn-info float-right">+ Add book</a>
                    </h4>
                    <div class="single-table">
                        <div class="col-sm-12 table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead class="bg-light text-capitalize">
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Date</th>
                                        <th>Service</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(!empty($allbook)) {
                                        foreach($allbook as $value) { ?>
                                            <tr>
                                                <td><?= $value->name ?></td>
                                                <td><?= $value->email ?></td>
                                                <td><?= $value->date ?></td>
                                                <td><?= $value->service ?></td>
                                                <td>
                                                    <a href="<?= admin_url() . 'booking/update/' . $value->id ?>">
                                                        <span class="glyphicon glyphicon-edit"></span>
                                                    </a>
                                                    <a href="<?= admin_url() . 'booking/delete/' . $value->id ?>">
                                                        <span class="glyphicon glyphicon-trash bookingdel_confirmation"></span>
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

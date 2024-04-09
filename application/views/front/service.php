<?php $this->load->view('front/include/head'); ?>

    <!-- Services Start -->
<div class="container-fluid bg-light pt-5">
    <div class="container py-5">
        <div class="row pb-3">
            <?php foreach ($allservice as $value): ?>
                <div class="col-md-6 col-lg-4 mb-4">
                <img class="w-100" src="<?php echo base_url(); ?>uploads/service/original/<?php echo $value->image; ?>" alt="image">
                    <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
                        <h3 class="flaticon-house display-3 font-weight-normal text-secondary mb-3"></h3>
                        <h3 class="mb-3"><?php echo $value->title; ?></h3>
                        <p><?php echo $value->description; ?></p>
                        <a class="text-uppercase font-weight-bold" href="">Read More</a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <?php $this->load->view('front/include/footer'); ?>
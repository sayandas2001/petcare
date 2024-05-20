<?php $this->load->view('front/include/head'); ?>

    <!-- Services Start -->
<div class="container-fluid bg-light pt-5">
    <div class="container py-5">
        <div class="row pb-3">
            <?php foreach ($allcost as $value): ?>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
                    <h3 class="mb-3"><?php echo $value->title; ?></h3>
                        <h3 class="mb-3"><?php echo $value->price; ?></h3>
                        <p><?php echo $value->description; ?></p>
                        <a href="<?php echo $value->link;?>" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4" target="_blank"> sign  Now</a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <?php $this->load->view('front/include/footer'); ?>
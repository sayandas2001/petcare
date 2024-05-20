<?php $this->load->view('front/include/head'); ?>
<div class="container-fluid">
    <div class="container">
        <div class="row align-items-center">
            <?php if (!empty($allbook)) { ?>
                <?php foreach ($allbook as $value) { ?>
                    <div class="col-lg-5">
                        <div class="bg-primary py-5 px-4 px-sm-5">
                            <h3 class="mb-3"><?php echo $value->name; ?></h3>
                            <h3 class="mb-3"><?php echo $value->email; ?></h3>
                            <h3 class="mb-3"><?php echo $value->date; ?></h3>
                            <p class="mb-3"><?php echo $value->service; ?></p>
                        </div>
                    </div>
                <?php } ?>
            <?php } else { ?>
                <p>No bookings available.</p>
            <?php } ?>
        </div>
    </div>
</div> 

<?php $this->load->view('front/include/footer'); ?>

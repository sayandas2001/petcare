<?php $this->load->view('front/include/head'); ?>

   <section class="carousel slide" id="banner">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">
            <?php if (!empty($AllBanner)) {
               $i=1;
               foreach ($AllBanner as $key => $value) { ?>
                  <div class="carousel-item <?php echo (($i==1)?'active':'')?>" style="background: url(<?php echo base_url('uploads/banner/original/' . $value->banner_image); ?>);">
                     <div class="banner-caption">
                        <div class="container">
                           <div class="row">
                              <div class="col-md-10 mx-auto">
                                 <div class="hero-text">
                                    <h6 class="animated fadeInDown"><?php echo $value->title ?></h6>
                                    <h1 class="animated fadeInUp"><?php echo $value->short_desc ?></h1>
                                    <a href="<?php echo $value->link_url ?>" target="_blank" class="btn btn-primary btn-1 mt-2 animated fadeInUp">Contact Us</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
            <?php $i++; } }?>
         </div>
         <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <i class="fal fa-chevron-left"></i>
            <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <i class="fal fa-chevron-right"></i>
            <span class="sr-only">Next</span>
         </a>
      </div>
   </section>

   <section class="about-sec pt-50">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-md-6">
               <h2><?php echo $whoarewe->title; ?> <img src="<?php echo assets_url(); ?>user/images/palok_06.png"></h2>
               <p><?php echo $whoarewe->short_description; ?></p>
               <a href="<?php echo base_url() ?>whoarewe"><i class='fas fa-sign-out-alt' style='font-size:40px;color:#09355c'></i></a>
            </div>
            <div class="col-md-6">
               <div class="box-ar">
                  <img src="<?php echo base_url('uploads/whoweare/original/' . $whoarewe->image); ?>" class="w-100">
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="img-box-sec ptb-100 mb-5">
      <div class="container">
         <h1 style="text-align: center;">The urgent need for Krishna Consciousness</h1>
         <div class="img-box-ar">
            <div class="img-box-scroll-owl owl-carousel owl-theme">
               <?php if (!empty($AllMainCat)) {
                  $i=1;
                  foreach ($AllMainCat as $key => $value) { ?>
                     <div class="item text-center">
                        <div class="img-box m-1">
                           <div class="img">
                              <img src="<?php echo base_url('uploads/krishna_consciousness/original/' . $value->image); ?>">
                           </div>
                           <div class="img-text">
                              <h3><?php echo $value->title; ?></h3>
                              <p><?php echo $value->short_description; ?></p>
                              <a href="<?php echo base_url() ?>krishna_consciousness/main_category/<?php echo $value->slug; ?>">Read More <i class="fas fa-chevron-double-right"></i></a>
                           </div>
                        </div>
                     </div>
               <?php $i++; } }?>
            </div>
         </div>
      </div>
   </section>

   <!-- <section class="icon-sec">
      <div class="container">
         <div class="icon-bg">
            <div class="icon-owl">
               <div class="icons-scroll-owl owl-carousel owl-theme">
                  <div class="item text-center">
                     <div class="cat-icon-ar">
                        <div class="icon">
                           <img src="<?php echo assets_url(); ?>user/images/icon-1.png">
                        </div>
                        <div class="icon-text mt-2">
                           <h3>Gita Questions Answered</h3>
                           <p>Lorem Ipsum is simply dummy text of the printing</p>
                        </div>
                     </div>
                  </div>
                  <div class="item text-center">
                     <div class="cat-icon-ar">
                        <div class="icon">
                           <img src="<?php echo assets_url(); ?>user/images/icon-2.png">
                        </div>
                        <div class="icon-text mt-2">
                           <h3>Peace & Happiness</h3>
                           <p>Lorem Ipsum is simply dummy text of the printing</p>
                        </div>
                     </div>
                  </div>
                  <div class="item text-center">
                     <div class="cat-icon-ar">
                        <div class="icon">
                           <img src="<?php echo assets_url(); ?>user/images/icon-3.png">
                        </div>
                        <div class="icon-text mt-2">
                           <h3>Faith in God</h3>
                           <p>Lorem Ipsum is simply dummy text of the printing</p>
                        </div>
                     </div>
                  </div>
                  <div class="item text-center">
                     <div class="cat-icon-ar">
                        <div class="icon">
                           <img src="<?php echo assets_url(); ?>user/images/icon-4.png">
                        </div>
                        <div class="icon-text mt-2">
                           <h3>Marriage & Family</h3>
                           <p>Lorem Ipsum is simply dummy text of the printing</p>
                        </div>
                     </div>
                  </div>
                  <div class="item text-center">
                     <div class="cat-icon-ar">
                        <div class="icon">
                           <img src="<?php echo assets_url(); ?>user/images/icon-2.png">
                        </div>
                        <div class="icon-text mt-2">
                           <h3>Peace & Happiness</h3>
                           <p>Lorem Ipsum is simply dummy text of the printing</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section> -->

   <section class="cat-box-sec footeruper-box orange-bg ptb-100" style="background: url(<?php echo base_url('uploads/founderacarya/original/' . $founderacarya->image); ?>); width: 100%; height: 500px; background-size:cover ;">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-md-8">
               <h3>Our founder Acharya</h3>
               <h2><?php echo $founderacarya->title; ?></h2>
               <p><?php echo $founderacarya->short_description; ?></p>
               <a href="<?php echo base_url() ?>founder_acharya" class="read-more">Read More</a>
            </div>
         </div>
      </div>
   </section>

   <section class="cat-box-sec grey-bg ptb-100 mt--50">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-md-6">
               <div class="box-ar">
                  <img src="<?php echo base_url('uploads/iskconpanihati/original/' . $iskconpanihati_details->image); ?>">
               </div>
            </div>
            <div class="col-md-6">
               <h2><?php echo $iskconpanihati_details->title; ?> <img src="<?php echo assets_url(); ?>user/images/palok_06.png"></h2>
               <?php echo $iskconpanihati_details->short_description; ?>
               <a href="<?php echo base_url() ?>iskcon_panihati"><i class='fas fa-sign-out-alt' style='font-size:40px;color:#09355c'></i></a>
            </div>
         </div>
      </div>
   </section>

   <section class="img-box-sec ptb-100 mb-5">
      <div class="container">
      <h1 style="text-align: center;">Spiritual Oasis</h1>
         <div class="img-box-ar">
            <div class="img-box-scroll-owl owl-carousel owl-theme">
               <?php if (!empty($AllSpiritual)) {
                  $i=1;
                  foreach ($AllSpiritual as $key => $value) { ?>
                     <div class="item text-center">
                        <div class="img-box m-1">
                           <div class="img">
                              <img src="<?php echo base_url('uploads/spiritualoasis/original/' . $value->image); ?>">
                           </div>
                           <div class="img-text">
                              <h3><?php echo $value->title; ?></h3>
                              <p><?php echo $value->short_desc; ?></p>
                              <a href="<?php echo base_url() ?>spiritual_oasis/view/<?php echo $value->slug; ?>">Read More <i class="fas fa-chevron-double-right"></i></a>
                           </div>
                        </div>
                     </div>
               <?php $i++; } }?>
            </div>
         </div>
      </div>
   </section>

   <section class="img-box-sec ptb-100 mb-5">
      <div class="container">
      <h1 style="text-align: center;">Upcoming events</h1>
         <div class="img-box-ar">
            <div class="img-box-scroll-owl owl-carousel owl-theme">
               <?php if (!empty($AllEvents)) {
                  $i=1;
                  foreach ($AllEvents as $key => $value) { ?>
                     <div class="item text-center">
                        <div class="img-box m-1">
                           <div class="img">
                              <img src="<?php echo base_url('uploads/events/original/' . $value->image); ?>">
                           </div>
                           <div class="img-text">
                              <h3><?php echo $value->title; ?></h3>
                              <p><?php echo $value->short_desc; ?></p>
                              <a href="<?php echo base_url() ?>events/view/<?php echo $value->slug; ?>">Read More <i class="fas fa-chevron-double-right"></i></a>
                           </div>
                        </div>
                     </div>
               <?php $i++; } }?>
            </div>
         </div>
      </div>
   </section>

   <section class="img-box-sec ptb-100 mb-5">
      <div class="container">
         <h1 style="text-align: center;">Online Donation</h1>
         <div class="img-box-ar">
            <div class="img-box-scroll-owl owl-carousel owl-theme">
               <?php if (!empty($AllMainCatevent)) {
                  $i=1;
                  foreach ($AllMainCatevent as $key => $value) { ?>
                     <div class="item text-center">
                        <div class="img-box m-1">
                           <div class="img">
                              <img src="<?php echo base_url('uploads/online_donation/original/' . $value->image); ?>">
                           </div>
                           <div class="img-text">
                              <h3><?php echo $value->title; ?></h3>
                              <p><?php echo $value->short_description; ?></p>
                              <a href="<?php echo base_url() ?>online_donation/view/<?php echo $value->slug; ?>">Read More <i class="fas fa-chevron-double-right"></i></a>
                           </div>
                        </div>
                     </div>
               <?php $i++; } }?>
            </div>
         </div>
      </div>
   </section>

<?php $this->load->view('front/include/footer'); ?>
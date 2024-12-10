<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?php echo $app.' - '.$title; ?></title>

  <!-- bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">

  <!-- swiper -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/swiper-bundle.min.css">

  <!-- datepicker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.datetimepicker.css">

  <!-- jquery ui -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui.min.css">

  <!-- common -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/common.css">

  <!-- animations -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animations.css">

  <!-- welcome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/welcome.css">

</head>
<body class="scrollbar-hidden">
    <!-- <section id="preloader" class="spalsh-screen">
        <div class="circle text-center">
        <div>
            <h1><?php echo $app; ?></h1>
            <p><?php echo $description; ?></p>
        </div>
        </div>
        <div class="loader-spinner">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        </div>
    </section> -->

    <main>
        <!-- onboarding start -->
        <section class="onboarding">
            <div class="swiper onboarding-swiper">
                <div class="swiper-wrapper">
                    <!-- item-1 -->
                    <div class="swiper-slide">
                    <div class="image position-relative">
                        <img src="assets/images/onboarding/slide-1.png" alt="Slide" class="w-100 h-100 object-fit-cover">
                    </div>
                    <div class="content text-center">
                        <h2>Best travel destinations in the world</h2>
                        <p>Semper in cursus magna et eu varius nunc adipiscing. Elementum justo, laoreet id semiru forigive you.
                        </p>
                    </div>
                    </div>

                    <!-- item-2 -->
                    <div class="swiper-slide">
                    <div class="image position-relative">
                        <img src="assets/images/onboarding/slide-2.png" alt="Slide" class="w-100 h-100 object-fit-cover">
                    </div>
                    <div class="content text-center">
                        <h2>Meet the needs of the holidays</h2>
                        <p>Semper in cursus magna et eu varius nunc adipiscing. Elementum justo, laoreet id semiru forigive you.
                        </p>
                    </div>
                    </div>

                    <!-- item-3 -->
                    <div class="swiper-slide">
                    <div class="image position-relative">
                        <img src="assets/images/onboarding/slide-3.png" alt="Slide" class="w-100 h-100 object-fit-cover">
                    </div>
                    <div class="content text-center">
                        <h2>Go on holiday with a smile</h2>
                        <p>Semper in cursus magna et eu varius nunc adipiscing. Elementum justo, laoreet id semiru forigive you.
                        </p>
                    </div>
                    </div>

                    <!-- item-4 -->
                    <div class="swiper-slide">
                    <div class="image position-relative">
                        <img src="assets/images/onboarding/welcome.png" alt="Slide" class="w-100 h-100 object-fit-cover">
                    </div>
                    <div class="content text-center">
                        <h2>We are here to make your holiday easier</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a href="<?php echo base_url('index/login');?>" class="btn-primary btn-get-started">Get Started</a>
                        <h6>Don’t have an account? <a href="<?php echo base_url('index/register');?>">Register</a></h6>
                    </div>
                    </div>
                </div>
            </div>
            <div class="slider-footer">
                <div class="row align-items-center">
                    <div class="col-6">
                        <button type="button" class="skip-btn">
                            <img src="assets/svg/arrow-circle.svg" alt="Arrow">
                            Skip
                        </button>
                    </div>
                    <div class="col-6">
                        <div class="custom-pagination swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php $this->load->view('mobile/_js'); ?>
</body>
</html>


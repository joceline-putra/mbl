<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from devsaidul.com/tm2/html/preview/pages/auth/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Nov 2024 08:52:23 GMT -->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?php echo $app.' - '.$title; ?></title>

  <!-- favicon -->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.png" type="image/x-icon">
  <?php $this->load->view('mobile/_css'); ?>
</head>
<body class="scrollbar-hidden">
  <!-- splash-screen start -->
  <section id="preloader" class="spalsh-screen">
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
  </section>
  <!-- splash-screen end -->


  <main>
    <!-- otp start -->
    <section class="auth signin-email enter-otp">
      <div class="page-title">
        <button type="button" class="back-btn back-page-btn d-flex align-items-center justify-content-center rounded-full">
          <img src="../assets/svg/arrow-left-black.svg" alt="Icon">
        </button>
      </div>
  
      <div class="heading">
        <h2>Enter OTP</h2>
        <p>We have just sent you 4 digit code via your email <span>example@mail.com</span></p>
      </div>
  
      <div class="auth-form">
        <div class="digit-group">
          <input type="text" id="digit-1" name="digit-1" data-next="digit-2" autofocus />
          <input type="text" id="digit-2" name="digit-2" data-next="digit-3" data-previous="digit-1" />
          <input type="text" id="digit-3" name="digit-3" data-next="digit-4" data-previous="digit-2" />
          <input type="text" id="digit-4" name="digit-4" data-previous="digit-3" />
        </div>
        <button type="button" class="btn-primary" data-bs-toggle="modal" data-bs-target="#loginSuccess">Continue</button>
        <h6>Didn’t receive code? <button type="button">Resend Code</button></h6>
      </div>
    </section>
    <!-- otp end -->
  </main>

  <!-- modal start -->
  <div class="modal fade loginSuccessModal modalBg" id="loginSuccess" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body text-center">
          <img src="../assets/svg/check-green.svg" alt="Check">
          <h3>You have logged in successfully</h3>
          <p class="mb-32">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          <a href="<?php echo base_url('index/home'); ?>" class="btn-primary">Continue</a>
        </div>
      </div>
    </div>
  </div>
  <!-- modal end -->
  <?php $this->load->view('mobile/_js'); ?>
</body>

<!-- Mirrored from devsaidul.com/tm2/html/preview/pages/auth/forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Nov 2024 08:52:53 GMT -->
</html>
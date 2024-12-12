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
    <!-- signin-email start -->
    <section class="auth signin-email">
      <div class="page-title text-center">
        <button type="button" class="back-btn back-page-btn d-flex align-items-center justify-content-center rounded-full">
          <img src="../assets/svg/arrow-left-black.svg" alt="Icon">
        </button>
        <h3 class="main-title">Sign In</h3>
      </div>
      <div class="auth-form">
        <form action="#">
          <div class="d-flex flex-column gap-16">
            <div>
              <label for="lemail2">Email Address</label>
              <input type="email" id="lemail2" placeholder="Enter your email address" class="input-field d-block">
            </div>
            <div>
              <label for="lpass">Password</label>
              <div class="position-relative">
                <input type="password" id="lpass" data-pssws-shown="false" placeholder="Enter your password" class="input-psswd input-field d-block">
                <button type="button" class="eye-btn">
                  <span class="eye-off">
                    <img src="../assets/svg/eye-off.svg" alt="Eye Off">
                  </span>
                  <span class="eye-on d-none">
                    <img src="../assets/svg/eye-on.svg" alt="Eye Off">
                  </span>
                </button>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <div class="d-flex align-items-center gap-8">
                <input type="checkbox" id="lremember" class="input-field-checkbox d-block">
                <label for="lremember" class="checkbox-label">Remember Me</label>
              </div>
              <a href="<?php echo base_url('index/forget_password');?>" class="fs-14 fw-600 forgot-pass d-inline-block">Forgot Password</a>
            </div>
          </div>
          <a href="<?php echo base_url('index/otp');?>" class="btn-primary">Sign In</a>
        </form>
  
        <div class="divider d-flex align-items-center justify-content-center gap-12">
          <span class="d-inline-block"></span>
          <small class="d-inline-block">Or continue with</small>
          <span class="d-inline-block"></span>
        </div>
  
        <div class="d-flex flex-column gap-16">
          <button type="button" class="social-btn" data-bs-toggle="modal" data-bs-target="#loginSuccess">
            <img src="../assets/svg/icon-google.svg" alt="Google">
            Continue with Google
          </button>
          <button type="button" class="social-btn apple" data-bs-toggle="modal" data-bs-target="#loginSuccess">
            <img src="../assets/svg/icon-apple.svg" alt="Apple">
            Continue with Apple
          </button>
        </div>
  
        <h6>Don’t have an account? <a href="<?php echo base_url('index/register');?>">Sign Up</a></h6>
      </div>
    </section>
    <!-- signin-email end -->
  </main>

  <!-- modal start -->
  <div class="modal fade loginSuccessModal modalBg" id="loginSuccess" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body text-center">
          <img src="../assets/svg/check-green.svg" alt="Check">
          <h3>You have logged in successfully</h3>
          <p class="mb-32">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          <a href="<?php echo base_url('index/home');?>" class="btn-primary">Continue</a>
        </div>
      </div>
    </div>
  </div>
  <!-- modal end -->

  <?php $this->load->view('mobile/_js'); ?>
</body>

<!-- Mirrored from devsaidul.com/tm2/html/preview/pages/auth/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Nov 2024 08:52:25 GMT -->
</html>
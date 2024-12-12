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
    <!-- forgot-pass start -->
    <section class="auth signin-email forgot-pass">
      <div class="page-title">
        <button type="button" class="back-btn back-page-btn d-flex align-items-center justify-content-center rounded-full">
          <img src="../assets/svg/arrow-left-black.svg" alt="Icon">
        </button>
      </div>
  
      <div class="heading">
        <h2>Forgot Password</h2>
        <p>Recover your account password</p>
      </div>
  
      <div class="auth-form">
        <form action="#">
          <div>
            <label for="femail">Email</label>
            <input type="email" id="femail" placeholder="Enter your email" class="input-field">
          </div>
          <a href="<?php echo base_url('index/create_new_password');?>" class="btn-primary">Continue</a>
        </form>
      </div>
    </section>
    <!-- forgot-pass end -->
  </main>
  <?php $this->load->view('mobile/_js'); ?>
</body>

<!-- Mirrored from devsaidul.com/tm2/html/preview/pages/auth/forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Nov 2024 08:52:53 GMT -->
</html>
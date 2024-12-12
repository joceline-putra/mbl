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
    <!-- create-pass start -->
    <section class="auth signin-email create-pass">
      <div class="page-title text-center">
        <button type="button" class="d-flex align-items-center justify-content-center rounded-full">
          <img src="../assets/svg/arrow-left-black.svg" alt="Icon">
        </button>
      </div>
  
      <div class="heading">
        <h2>Create a
          New Password</h2>
        <p>Enter your new password</p>
      </div>
  
      <div class="auth-form">
        <form action="#">
          <div class="d-flex flex-column gap-16">
            <div>
              <label for="cpass">Password</label>
              <div class="position-relative">
                <input type="password" id="cpass" data-pssws-shown="false" placeholder="Enter your password" class="input-psswd input-field d-block">
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
            <div>
              <label for="ccpass">Confirm Password</label>
              <div class="position-relative">
                <input type="password" id="ccpass" data-pssws-shown="false" placeholder="Confirm your password" class="input-psswd input-field d-block">
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
          </div>
          <a href="<?php echo base_url('index/login');?>" class="btn-primary">Continue</a>
        </form>
      </div>
    </section>
    <!-- create-pass end -->
  </main>
  
  <?php $this->load->view('mobile/_js'); ?>
</body>

<!-- Mirrored from devsaidul.com/tm2/html/preview/pages/auth/forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Nov 2024 08:52:53 GMT -->
</html>
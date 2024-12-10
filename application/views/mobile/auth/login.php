<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from devsaidul.com/tm2/html/preview/pages/auth/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Nov 2024 08:52:23 GMT -->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Travgo</title>

  <!-- favicon -->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.png" type="image/x-icon">
  <?php $this->load->view('mobile/_css'); ?>
</head>
<body class="scrollbar-hidden">
  <!-- splash-screen start -->
  <section id="preloader" class="spalsh-screen">
    <div class="circle text-center">
      <div>
        <h1>Travgo</h1>
        <p>Discover Your Destinition</p>
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

  <main class="auth-main">
    <!-- menu, side-menu start -->
    <section class="wrapper dz-mode">
      <!-- menu -->
      <div class="menu">
        <button class="toggle-btn">
          <img src="<?php echo base_url(); ?>assets/svg/menu/burger-white.svg" alt="" class="icon">
        </button>
        <div class="btn-grp d-flex align-items-center gap-16">
          <label for="mode-change" class="mode-change d-flex align-items-center justify-content-center">
            <input type="checkbox" id="mode-change">
            <img src="<?php echo base_url(); ?>assets/svg/menu/sun-white.svg" alt="icon" class="sun">
            <img src="<?php echo base_url(); ?>assets/svg/menu/moon-white.svg" alt="icon" class="moon">
          </label>
          <a href="../profile/user-profile.html">
            <img src="<?php echo base_url(); ?>assets/svg/menu/profile-white.svg" alt="icon">
          </a>
        </div>
      </div>
      <div class="m-menu__overlay"></div>
      <!-- main menu -->
      <div class="m-menu">
        <div class="m-menu__header">
          <button class="m-menu__close">
            <img src="<?php echo base_url(); ?>assets/svg/menu/close-white.svg" alt="icon">
          </button>
          <div class="menu-user">
            <img src="<?php echo base_url(); ?>assets/images/profile/avatar.png" alt="avatar">
            <div >
              <a href="#!">angela mayer</a>
              <h3>
                Verified user · Membership
              </h3>
            </div>
          </div>
        </div>
        <ul>
          <li>
            <h2 class="menu-title">menu</h2>
          </li>

          <li>
              <a href="../home.html">
                <div class="d-flex align-items-center gap-16">
                  <span class="icon">
                    <img src="<?php echo base_url(); ?>assets/svg/menu/pie-white.svg" alt="">
                  </span>
                  overview
                </div>
                <img src="<?php echo base_url(); ?>assets/svg/menu/chevron-right-black.svg" alt="">
              </a>
          </li>
          <li>
              <a href="<?php echo base_url(); ?>page.html">
                <div class="d-flex align-items-center gap-16">
                  <span class="icon">
                    <img src="<?php echo base_url(); ?>assets/svg/menu/page-white.svg" alt="">
                  </span>
                  pages
                </div>
                <img src="<?php echo base_url(); ?>assets/svg/menu/chevron-right-black.svg" alt="">
              </a>
          </li>
          <li>
            <h2 class="menu-title">others</h2>
          </li>

          <li>
            <label class="a-label__chevron" for="item-4">
              <span class="d-flex align-items-center gap-16">
                <span class="icon">
                  <img src="<?php echo base_url(); ?>assets/svg/menu/grid-white.svg" alt="">
                </span>
                components
              </span>
              <img src="<?php echo base_url(); ?>assets/svg/menu/chevron-right-black.svg" alt="">
            </label>
            <input type="checkbox" id="item-4" name="item-4" class="m-menu__checkbox">
            <div class="m-menu">
              <div class="m-menu__header">
                <label class="m-menu__toggle" for="item-4">
                  <img src="<?php echo base_url(); ?>assets/svg/menu/back-white.svg" alt="">
                </label>
                <span class="m-menu__header-title">components</span>
              </div>
              <ul>
                <li>
                  <a href="<?php echo base_url(); ?>components/splash-screen.html">
                    <div class="d-flex align-items-center gap-16">
                      <span class="icon">
                        <img src="<?php echo base_url(); ?>assets/svg/menu/box-white.svg" alt="icon">
                      </span>
                      splash screen
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <label class="a-label__chevron" for="item-5">
              <span class="d-flex align-items-center gap-16">
                <span class="icon">
                  <img src="<?php echo base_url(); ?>assets/svg/menu/gear-white.svg" alt="">
                </span>
                settings
              </span>
              <img src="<?php echo base_url(); ?>assets/svg/menu/chevron-right-black.svg" alt="">
            </label>
            <input type="checkbox" id="item-5" name="item-5" class="m-menu__checkbox">
            <div class="m-menu">
              <div class="m-menu__header">
                <label class="m-menu__toggle" for="item-5">
                  <img src="<?php echo base_url(); ?>assets/svg/menu/back-white.svg" alt="">
                </label>
                <span class="m-menu__header-title">settings</span>
              </div>
              <ul>
                <li>
                  <a href="../profile/user-address.html">
                    <div class="d-flex align-items-center gap-16">
                      <span class="icon">
                        <img src="<?php echo base_url(); ?>assets/svg/menu/box-white.svg" alt="icon">
                      </span>
                      My Address
                    </div>
                  </a>
                </li>
                <li>
                  <a href="../profile/user-payment.html">
                    <div class="d-flex align-items-center gap-16">
                      <span class="icon">
                        <img src="<?php echo base_url(); ?>assets/svg/menu/box-white.svg" alt="icon">
                      </span>
                      Payment Method
                    </div>
                  </a>
                </li>
                <li>
                  <a href="../profile/change-password.html">
                    <div class="d-flex align-items-center gap-16">
                      <span class="icon">
                        <img src="<?php echo base_url(); ?>assets/svg/menu/box-white.svg" alt="icon">
                      </span>
                      Change Password
                    </div>
                  </a>
                </li>
                <li>
                  <a href="../profile/forgot-password.html">
                    <div class="d-flex align-items-center gap-16">
                      <span class="icon">
                        <img src="<?php echo base_url(); ?>assets/svg/menu/box-white.svg" alt="icon">
                      </span>
                      Forgot Password
                    </div>
                  </a>
                </li>
                <li>
                  <a href="../profile/security.html">
                    <div class="d-flex align-items-center gap-16">
                      <span class="icon">
                        <img src="<?php echo base_url(); ?>assets/svg/menu/box-white.svg" alt="icon">
                      </span>
                      Security
                    </div>
                  </a>
                </li>
                <li>
                  <a href="../profile/user-language.html">
                    <div class="d-flex align-items-center gap-16">
                      <span class="icon">
                        <img src="<?php echo base_url(); ?>assets/svg/menu/box-white.svg" alt="icon">
                      </span>
                      Language
                    </div>
                  </a>
                </li>
                <li>
                  <a href="../profile/notifications.html">
                    <div class="d-flex align-items-center gap-16">
                      <span class="icon">
                        <img src="<?php echo base_url(); ?>assets/svg/menu/box-white.svg" alt="icon">
                      </span>
                      Notifications
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="dz-switch">
            <div class="a-label__chevron">
              <div class="d-flex align-items-center gap-16">
                <span class="icon">
                  <img src="<?php echo base_url(); ?>assets/svg/menu/moon-white.svg" alt="">
                </span>
                switch to dark mode
              </div>
              <label class="toggle-switch" for="enableMode">
                <input type="checkbox" id="enableMode" class="mode-switch">
                <span class="slider"></span>
              </label>
            </div>
          </li>
        </ul>
      </div>
      <!-- end main menu -->
    </section>
    <!-- menu, side-menu end -->

    <!-- signin start -->
    <section class="auth signin">
      <div class="heading">
        <h2>Hi, Welcome Back!</h2>
        <p>Lorem ipsum dolor sit amet</p>
      </div>
  
      <div class="form-area auth-form">
        <form action="#">
          <div>
            <label for="lemail1">Email</label>
            <input type="email" id="lemail1" placeholder="Enter your email address" class="input-field">
          </div>
          <a href="<?php echo base_url('login_email');?>" class="btn-primary">Continue with Email</a>
        </form>
  
        <div class="divider d-flex align-items-center justify-content-center gap-12">
          <span class="d-inline-block"></span>
          <small class="d-inline-block">Or continue with</small>
          <span class="d-inline-block"></span>
        </div>
  
        <div class="d-flex flex-column gap-16">
          <button type="button" class="social-btn" data-bs-toggle="modal" data-bs-target="#loginSuccess">
            <img src="<?php echo base_url(); ?>assets/svg/icon-google.svg" alt="Google">
            Continue with Google
          </button>
          <button type="button" class="social-btn apple" data-bs-toggle="modal" data-bs-target="#loginSuccess">
            <img src="<?php echo base_url(); ?>assets/svg/icon-apple.svg" alt="Apple">
            Continue with Apple
          </button>
        </div>
  
        <h6>Don’t have an account? <a href="<?php echo base_url('register');?>">Sign Up</a></h6>
      </div>
    </section>
    <!-- signin end -->
  </main>

  <!-- modal start -->
  <div class="modal fade loginSuccessModal modalBg" id="loginSuccess" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body text-center">
          <img src="<?php echo base_url(); ?>assets/svg/check-green.svg" alt="Check">
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

<!-- Mirrored from devsaidul.com/tm2/html/preview/pages/auth/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Nov 2024 08:52:25 GMT -->
</html>
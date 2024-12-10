<main class="profile-main user-address">
    <!-- page-title -->
    <div class="page-title">
      <button type="button" class="back-btn back-page-btn d-flex align-items-center justify-content-center rounded-full">
        <img src="../assets/svg/arrow-left-black.svg" alt="arrow">
      </button>
      <h3 class="main-title">My Address</h3>
      <a href="<?php echo base_url('index/user_address_add');?>" class="plus-btn d-flex align-items-center justify-content-center ms-auto">
        <img src="../assets/svg/plus-square.svg" alt="icon">
      </a>
    </div>

    <!-- all-address start -->
    <section class="all-address p-24">
      <!-- card 1 -->
      <div class="address-card">
        <label for="address-1" class="custom-check-container address-container">
          <input type="radio" name="address" id="address-1" checked>
          <span class="checkmark"></span>
          <small class="text d-block">
            <small class="address-card-title d-block">Andy Andrew</small>
            <small class="address-card-phn pt-04 pb-8 d-block">+1 234 567 890</small>
            <small class="address-card-phn d-block">1234 Your Road No #6789 <br> Your City, Country</small>
          </small>
        </label>
        <button type="button" class="change-add">Change Address</button>
      </div>

      <!-- card 2 -->
      <div class="address-card mt-16">
        <label for="address-2" class="custom-check-container address-container">
          <input type="radio" name="address" id="address-2">
          <span class="checkmark"></span>
          <small class="text d-block">
            <small class="address-card-title d-block">Elevenia Kalia</small>
            <small class="address-card-phn pt-04 pb-8 d-block">+1 234 567 890</small>
            <small class="address-card-phn d-block">1234 Your Road No #6789 <br> Your City, Country</small>
          </small>
        </label>
        <button type="button" class="change-add">Change Address</button>
      </div>
    </section>
    <!-- all-address end -->

    <!-- select-btn start -->
    <div class="select-btn bottom-btn px-24 pt-24 pb-36" style="margin-bottom:60px;">
      <button type="button" class="btn-primary">Select Address</button>
    </div>
    <!-- select-btn end -->
  </main>
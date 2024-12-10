<main class="profile-main user-payment">
    <!-- page-title -->
    <div class="page-title">
      <button type="button" class="back-btn back-page-btn d-flex align-items-center justify-content-center rounded-full">
        <img src="../assets/svg/arrow-left-black.svg" alt="arrow">
      </button>
      <h3 class="main-title">My Payment</h3>
      <a href="<?php echo base_url('index/user_payment_add');?>" class="plus-btn d-flex align-items-center justify-content-center ms-auto rounded-full">
        <img src="../assets/svg/plus-outline.svg" alt="icon">
      </a>
    </div>

    <!-- payment-method start -->
    <section class="payment-method px-24">
      <!-- visa -->
      <label for="visa-card" class="custom-check-container payment-container pt-16">
        <input type="radio" name="payment" id="visa-card" checked>
        <span class="checkmark"></span>
        <span class="d-flex gap-12">
          <span class="icon shrink-0 rounded-full d-flex align-items-center justify-content-center">
            <img src="../assets/images/profile/visa.png" alt="card" class="img-fluid">
          </span>
          <span class="d-block text flex-grow pb-16">
            <small class="d-block payment-method-card-title">BCA (Bank Central Asia)</small>
            <small class="d-block pt-04 pb-8 payment-method-card-num">•••• •••• •••• 12345</small>
            <small class="d-block payment-method-card-num">Brooklyn Simmons</small>
          </span>
        </span>
      </label>

      <!-- master -->
      <label for="master-card" class="custom-check-container payment-container pt-16">
        <input type="radio" name="payment" id="master-card">
        <span class="checkmark"></span>
        <span class="d-flex gap-12">
          <span class="icon shrink-0 rounded-full d-flex align-items-center justify-content-center">
            <img src="../assets/images/profile/master.png" alt="card" class="img-fluid">
          </span>
          <span class="d-block text flex-grow pb-16">
            <small class="d-block payment-method-card-title">BCA (Bank Central Asia)</small>
            <small class="d-block pt-04 pb-8 payment-method-card-num">•••• •••• •••• 12345</small>
            <small class="d-block payment-method-card-num">Brooklyn Simmons</small>
          </span>
        </span>
      </label>
    </section>
    <!-- payment-method end -->

    <!-- select-btn start -->
    <div class="select-btn bottom-btn px-24 pt-24 pb-36" style="margin-bottom:60px;">
      <button type="button" class="btn-primary">Select Payment</button>
    </div>
    <!-- select-btn end -->
  </main>
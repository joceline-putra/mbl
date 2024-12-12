<main class="booking-main checkout-vacation">
    <!-- page-title -->
    <div class="page-title">
      <button type="button" class="back-btn back-page-btn d-flex align-items-center justify-content-center rounded-full">
        <img src="../../assets/svg/arrow-left-black.svg" alt="arrow">
      </button>
      <h3 class="main-title"><?php echo $title;?></h3>
    </div>

    <!-- customer-info start -->
    <section class="customer-info px-24 pb-12">
      <div class="title mb-16">
        <h4>Customer Info</h4>
      </div>

      <ul>
        <li class="d-flex align-items-center justify-content-between">
          <p>Name</p>
          <p>Andy Lexian</p>
        </li>
        <li class="d-flex align-items-center justify-content-between">
          <p>Email</p>
          <p>example@mail.com</p>
        </li>
      </ul>
    </section>
    <!-- customer-info end -->

    <!-- order-info start -->
    <section class="order-info px-24 pt-12 pb-24">
      <div class="title mb-16">
        <h4>Order Info</h4>
      </div>

      <!-- order item -->
      <div class="item d-flex align-items-center gap-16 w-100">
        <div class="image shrink-0 overflow-hidden radius-8">
          <img src="../../assets/images/booking/loc-1.png" alt="Place" class="img-fluid w-100 h-100 object-fit-cover">
        </div>

        <div class="content flex-grow">
          <h4><?php echo $title; ?></h4>
          <p class="d-flex align-items-center gap-04 location mt-04">
            <img src="../../assets/svg/map-marker.svg" alt="icon">
            Indonesia
          </p>
          <p class="rating d-flex align-items-center gap-04 mt-16">
            <img src="../../assets/svg/star-yellow.svg" alt="icon">
            4.4 <span>(41)</span>
          </p>
          
        </div>
      </div>

      <!-- date visit -->
      <div class="search mt-16">
        <h6 class="mb-8">Date Visit</h6>
        <label for="vdate" class="w-100 d-flex align-items-center gap-8 radius-24" data-bs-toggle="modal" data-bs-target="#visitDateModal">
          <input type="text" id="vdate" placeholder="Date" class="input-field">
          <span class="icon shrink-0">
            <img src="../../assets/svg/calendar.svg" alt="calendar">
          </span>
        </label>
      </div>

      <!-- number of people -->
      <div class="mt-16">
        <h6 class="mb-8">Number of people</h6>
        <input type="text" placeholder="Number of people" class="input-field">
      </div>

      <!-- price -->
      <div class="price border-b d-flex align-items-center justify-content-between pt-16 pb-24">
        <p>Price</p>
        <p><span>$32</span> / Person</p>
      </div>

      <!-- total-price -->
      <div class="price d-flex align-items-center justify-content-between pt-24">
        <p>Total</p>
        <p><span>$160</span></p>
      </div>

      <!-- promo-code -->
      <div class="promo-code py-24">
        <div class="sub-title mb-16">
          <h4>Promo Code</h4>
        </div>

        <div class="d-flex align-items-center gap-8 input-area">
          <input type="text" placeholder="Input code" class="flex-grow">
          <button type="button" class="shrink-0">Apply</button>
        </div>
      </div>

      <!-- promo-price -->
      <div class="price border-b pb-24 promo-price d-flex align-items-center justify-content-between">
        <p>Promo</p>
        <p><span>-$10</span></p>
      </div>

      <!-- total-price -->
      <div class="price d-flex align-items-center justify-content-between pt-24">
        <p>Total Pay</p>
        <p><span>$150</span></p>
      </div>

      <!-- payment-method -->
      <div class="payment-method pt-24">
        <div class="sub-title mb-16">
          <h4>Payment Method</h4>
        </div>
        <ul>
          <li class="mb-16">
            <label for="visa" class="pay-card-container d-flex align-items-center gap-20">
              <img src="../../assets/images/booking/visa.png" alt="Visa">
              <span>•••• •••• •••• 87652</span>
              <input type="radio" name="pay-card" id="visa">
              <span class="checkmark"></span>
            </label>
          </li>
          <li>
            <label for="master" class="pay-card-container d-flex align-items-center gap-20">
              <img src="../../assets/images/booking/master.png" alt="master">
              <span>•••• •••• •••• 87652</span>
              <input type="radio" name="pay-card" id="master">
              <span class="checkmark"></span>
            </label>
          </li>
        </ul>
      </div>

      <!-- pay-btn -->
      <div class="pay-btn mt-64" style="margin-bottom:60px;">
        <button type="button" class="btn-primary" data-bs-toggle="modal" data-bs-target="#orderSuccessModal">Pay Now</button>
      </div>

    </section>
    <!-- order-info end -->
  </main>

  <!-- date-modal start -->
  <div class="modal fade visitDateModal dateModal modalBg" id="visitDateModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header justify-content-center">
          <h1 class="modal-title" id="visitDateModalLabel">Date Visit</h1>
        </div>
        <div class="modal-body">
          <input type="text" id="visitDateInput"/>

          <div class="btns d-flex align-items-center gap-16">
            <button type="button" class="radius-20 w-50 cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
            <button type="button" class="radius-20 w-50 apply-btn" data-bs-dismiss="modal" aria-label="Close">Apply</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- date-modal end -->

  <!-- checkout date-modal start -->
  <div class="modal fade orderSuccessModal modalBg" id="orderSuccessModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body text-center">
          <img src="../../assets/images/booking/thumsup.png" alt="">
          <h3 class="pt-30">Order Successful</h3>
          <p class="pt-8 pb-30">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          <a href="<?php echo base_url('index/home'); ?>" class="btn-primary">Continue</a>
        </div>
      </div>
    </div>
  </div>
  <!-- checkout date-modal end -->
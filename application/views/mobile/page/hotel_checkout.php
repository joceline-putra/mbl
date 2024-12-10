
<main class="booking-main checkout-hotel">
    <!-- page-title -->
    <div class="page-title">
      <button type="button" class="back-btn back-page-btn d-flex align-items-center justify-content-center rounded-full">
        <img src="../assets/svg/arrow-left-black.svg" alt="arrow">
      </button>
      <h3 class="main-title">Checkout</h3>
    </div>

    <div class="details-body">
      <!-- order item -->
      <section class="order-info pb-12">
        <!-- item -->
        <div class="item d-flex align-items-center gap-16 w-100">
          <div class="image shrink-0 overflow-hidden radius-8">
            <img src="../assets/images/booking/loc-2.png" alt="Place" class="img-fluid w-100 h-100 object-fit-cover">
          </div>
    
          <div class="content flex-grow">
            <h4>The Lalit New Delhi</h4>
            <p class="d-flex align-items-center gap-04 location mt-04">
              <img src="../assets/svg/map-marker.svg" alt="icon">
              Uttar Pradesh, India 
            </p>
            <p class="rating d-flex align-items-center gap-04 mt-16">
              <img src="../assets/svg/star-yellow.svg" alt="icon">
              4.4 <span>(41)</span>
            </p>
          </div>
        </div>
      </section>

      <!-- customer-info start -->
      <section class="customer-info py-12">
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
      <section class="customer-info order-info py-12">
        <!-- title -->
        <div class="title mb-16">
          <h4>Order Info</h4>
        </div>

        <ul class="pb-24">
          <li class="d-flex align-items-center justify-content-between">
            <p>length of stay</p>
            <p>3 days 2 nights</p>
          </li>
          <li class="d-flex align-items-center justify-content-between">
            <p>Check In</p>
            <p>June 12, 2022</p>
          </li>
          <li class="d-flex align-items-center justify-content-between">
            <p>Check Out</p>
            <p>June 14, 2022</p>
          </li>
          <li class="d-flex align-items-center justify-content-between">
            <p>Type Room</p>
            <p>Presidential Suite</p>
          </li>
        </ul>

        <!-- total-price -->
        <div class="price border-t d-flex align-items-center justify-content-between pt-24">
          <p>Total</p>
          <p><span>$320</span></p>
        </div>

        <!-- promo-code -->
        <div class="promo-code pt-24 pb-16">
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
          <p><span>-$20</span></p>
        </div>
  
        <!-- total-price -->
        <div class="price d-flex align-items-center justify-content-between pt-24">
          <p>Total Pay</p>
          <p><span>$300</span></p>
        </div>
      </section>


      <!-- payment-method -->
      <section class="payment-method pt-12">
        <div class="title mb-16">
          <h4>Payment Method</h4>
        </div>
        <ul>
          <li class="mb-16">
            <label for="visa" class="pay-card-container d-flex align-items-center gap-20">
              <img src="../assets/images/booking/visa.png" alt="Visa">
              <span>•••• •••• •••• 87652</span>
              <input type="radio" name="pay-card" id="visa">
              <span class="checkmark"></span>
            </label>
          </li>
          <li>
            <label for="master" class="pay-card-container d-flex align-items-center gap-20">
              <img src="../assets/images/booking/master.png" alt="master">
              <span>•••• •••• •••• 87652</span>
              <input type="radio" name="pay-card" id="master">
              <span class="checkmark"></span>
            </label>
          </li>
        </ul>
      </section>

      <!-- pay-btn -->
      <div class="pay-btn mt-64" style="margin-bottom:60px;">
        <button type="button" class="btn-primary" data-bs-toggle="modal" data-bs-target="#orderSuccessModal">Pay Now</button>
      </div>
    </div>
    <!-- order-info end -->
  </main>

  <!-- checkout date-modal start -->
  <div class="modal fade orderSuccessModal modalBg" id="orderSuccessModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body text-center">
          <img src="../assets/images/booking/thumsup.png" alt="">
          <h3 class="pt-30">Order Successful</h3>
          <p class="pt-8 pb-30">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          <a href="<?php echo base_url('index/home'); ?>" class="btn-primary">Continue</a>
        </div>
      </div>
    </div>
  </div>
  <!-- checkout date-modal end -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?php echo $app.' - '.$title; ?></title>

  <?php $this->load->view('mobile/_css'); ?>
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/home.css">
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

  <?php 
  if(isset($_view) && $_view)
      $this->load->view($_view);
  if(isset($_js_file) && $_js_file)
      $this->load->view($_js_file);
  ?>  

  <!-- bottom navigation start -->
  <footer class="bottom-nav">
    <ul class="d-flex align-items-center justify-content-around w-100 h-100">
      <li>
        <a href="<?php echo base_url('index/home'); ?>">
          <img src="<?php echo base_url(); ?>assets/svg/bottom-nav/home-active.svg" alt="home">
        </a>
      </li>
      <li>
        <a href="<?php echo base_url('index/explore'); ?>">
          <img src="<?php echo base_url(); ?>assets/svg/bottom-nav/category.svg" alt="category">
        </a>
      </li>
      <li>
        <a href="<?php echo base_url('index/ticket_booked'); ?>">
          <img src="<?php echo base_url(); ?>assets/svg/bottom-nav/ticket.svg" alt="ticket">
        </a>
      </li>
      <li>
        <a href="<?php echo base_url('index/user_profile'); ?>">
          <img src="<?php echo base_url(); ?>assets/svg/bottom-nav/profile.svg" alt="profile">
        </a>
      </li>
    </ul>
  </footer>
  <!-- bottom navigation end -->

  <!-- service modal start -->
  <div class="modal fade serviceModal bottomModal modalBg" id="serviceModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="modal-close rounded-full" data-bs-dismiss="modal" aria-label="Close">
            <img src="../assets/svg/close-black.svg" alt="Close">
          </button>
          <h1 class="modal-title">Layanan Kami</h1>
        </div>
        <div class="modal-body">

          <!-- item 2 -->
          <a href="<?php echo base_url('index/service_checkout/zakat');?>">
            <figure class="item text-center">
              <div class="image rounded-full d-flex align-items-center justify-content-center m-auto">
                <img src="../assets/images/home/002-zakat.png" alt="car" class="img-fluid backface-hidden">
              </div>
              <figcaption>Zakat</figcaption>
            </figure>
          </a>

          <!-- item 3 -->
          <a href="<?php echo base_url('index/service_checkout/sedekah');?>">
            <figure class="item text-center">
              <div class="image rounded-full d-flex align-items-center justify-content-center m-auto">
                <img src="../assets/images/home/003-zakat-1.png" alt="hotel" class="img-fluid backface-hidden">
              </div>
              <figcaption>Sedekah</figcaption>
            </figure>
          </a>

          <!-- item 1 -->
          <a href="<?php echo base_url('index/service_checkout/wakaf');?>">
            <figure class="item text-center">
              <div class="image rounded-full d-flex align-items-center justify-content-center m-auto">
                <img src="../assets/images/home/005-donation-1.png" alt="airport" class="img-fluid backface-hidden">
              </div>
              <figcaption>Wakaf</figcaption>
            </figure>
          </a>

          <!-- item 4 -->
          <a href="<?php echo base_url('index/service_checkout/qurban');?>">
            <figure class="item text-center">
              <div class="image rounded-full d-flex align-items-center justify-content-center m-auto">
                <img src="../assets/images/home/001-slaughter.png" alt="airport" class="img-fluid backface-hidden">
              </div>
              <figcaption>Qurban</figcaption>
            </figure>
          </a>

          <!-- item 5 -->
          <a style="display:none;" href="<?php echo base_url('index/service_location');?>">
            <figure class="item text-center">
              <div class="image rounded-full d-flex align-items-center justify-content-center m-auto">
                <img src="../assets/images/home/cafe.png" alt="car" class="img-fluid backface-hidden">
              </div>
              <figcaption>Cafe</figcaption>
            </figure>
          </a>

          <!-- item 6 -->
          <a style="display:none;" href="<?php echo base_url('index/service_location');?>">
            <figure class="item text-center">
              <div class="image rounded-full d-flex align-items-center justify-content-center m-auto">
                <img src="../assets/images/home/luggage.png" alt="hotel" class="img-fluid backface-hidden">
              </div>
              <figcaption>Luggage</figcaption>
            </figure>
          </a>

          <!-- item 7 -->
          <a style="display:none;" href="<?php echo base_url('index/service_location');?>">
            <figure class="item text-center">
              <div class="image rounded-full d-flex align-items-center justify-content-center m-auto">
                <img src="../assets/images/home/boat.png" alt="car" class="img-fluid backface-hidden">
              </div>
              <figcaption>Ship</figcaption>
            </figure>
          </a>

          <!-- item 8 -->
          <a style="display:none;" href="<?php echo base_url('index/service_location');?>">
            <figure class="item text-center">
              <div class="image rounded-full d-flex align-items-center justify-content-center m-auto">
                <img src="../assets/images/home/camera.png" alt="hotel" class="img-fluid backface-hidden">
              </div>
              <figcaption>Camera </figcaption>
            </figure>
          </a>

        </div>
      </div>
    </div>
  </div>
  <!-- service modal end -->

  <!-- filter modal start -->
  <div class="modal fade filterModal bottomModal" id="filterModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="modal-close rounded-full" data-bs-dismiss="modal" aria-label="Close">
            <img src="../assets/svg/close-black.svg" alt="Close">
          </button>
          <h1 class="modal-title">Filter</h1>
        </div>
        <div class="modal-body">
          <!-- price range -->
          <div class="pb-12">
            <h4 class="content-title">Price Range</h4>
            <div class="filter-range">
              <div id="price-slider-range"></div>
              <div class="price-range w-100 d-flex align-items-center justify-content-between">
                <input type="text" id="amount1">
                <input type="text" id="amount2">
              </div>
            </div>
          </div>

          <!-- popular filters -->
          <div class="py-12">
            <h4 class="content-title">Popular Filters</h4>
            <ul class="popular-filters">
              <li>
                <label for="hotel" class="filter-label">
                  <input type="checkbox" id="hotel" >
                  Hotels (340)
                </label>
              </li>
              <li>
                <label for="pool" class="filter-label">
                  <input type="checkbox" id="pool" checked>
                  Swimming Pool (340)
                </label>
              </li>
              <li>
                <label for="stars" class="filter-label">
                  <input type="checkbox" id="stars">
                  5 stars (100)
                </label>
              </li>
              <li>
                <label for="bathroom" class="filter-label">
                  <input type="checkbox" id="bathroom">
                  Private Bathroom (200)
                </label>
              </li>
              <li>
                <label for="breakfast" class="filter-label">
                  <input type="checkbox" id="breakfast">
                  Breakfast Included (115)
                </label>
              </li>
              <li>
                <label for="kitchen" class="filter-label">
                  <input type="checkbox" id="kitchen">
                  Kitchen (10)
                </label>
              </li>
            </ul>
          </div>

          <!-- star rating -->
          <div class="py-12">
            <h4 class="content-title">Star Rating</h4>
            <ul class="star-rating">
              <li>
                <label for="star1" class="filter-label">
                  <input type="radio" name="star" id="star1" >
                  <img src="../assets/svg/star-yellow.svg" alt="star">
                </label>
              </li>
              <li>
                <label for="star2" class="filter-label">
                  <input type="radio" name="star" id="star2" >
                  <img src="../assets/svg/star-yellow.svg" alt="star">
                  <img src="../assets/svg/star-yellow.svg" alt="star">
                </label>
              </li>
              <li>
                <label for="star3" class="filter-label">
                  <input type="radio" name="star" id="star3" >
                  <img src="../assets/svg/star-yellow.svg" alt="star">
                  <img src="../assets/svg/star-yellow.svg" alt="star">
                  <img src="../assets/svg/star-yellow.svg" alt="star">
                </label>
              </li>
              <li>
                <label for="star4" class="filter-label">
                  <input type="radio" name="star" id="star4" checked>
                  <img src="../assets/svg/star-yellow.svg" alt="star">
                  <img src="../assets/svg/star-yellow.svg" alt="star">
                  <img src="../assets/svg/star-yellow.svg" alt="star">
                  <img src="../assets/svg/star-yellow.svg" alt="star">
                </label>
              </li>
              <li>
                <label for="star5" class="filter-label">
                  <input type="radio" name="star" id="star5" >
                  <img src="../assets/svg/star-yellow.svg" alt="star">
                  <img src="../assets/svg/star-yellow.svg" alt="star">
                  <img src="../assets/svg/star-yellow.svg" alt="star">
                  <img src="../assets/svg/star-yellow.svg" alt="star">
                  <img src="../assets/svg/star-yellow.svg" alt="star">
                </label>
              </li>
            </ul>
          </div>

          <!-- apply-filter -->
          <div class="py-12">
            <a href="<?php echo base_url('index/search_result');?>" class="btn-primary apply-filter-btn">Apply Filter</a>
          </div>

          <!-- clear-all -->
          <div class="pt-12">
            <button type="button" class="clear-all-btn" data-bs-dismiss="modal" aria-label="Close">Clear All</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- filter modal end -->
  
  <?php $this->load->view('mobile/_js'); ?>
</body>
</html>
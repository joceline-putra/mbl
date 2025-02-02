<main class="details hotel-details">
    <!-- banner start -->
    <section class="banner position-relative">
      <img src="../assets/images/details/banner-2.png" alt="Banner" class="w-100 img-fluid">
      
      <!-- title -->
      <div class="page-title">
        <button type="button" class="back-btn back-page-btn d-flex align-items-center justify-content-center rounded-full">
          <img src="../assets/svg/arrow-left-black.svg" alt="arrow">
        </button>
        <h3 class="main-title">Hotel Details</h3>
      </div>
    </section>
    <!-- banner end -->

    <!-- details-body start -->
    <section class="details-body">
      <!-- details-title -->
      <section class="d-flex align-items-center gap-8 details-title">
        <div class="flex-grow">
          <h3>The Lalit New Delhi</h3>
          <ul class="d-flex align-items-center gap-8">
            <li class="d-flex align-items-center gap-04">
              <img src="../assets/svg/map-marker.svg" alt="icon">
              <p>Uttar Pradesh, India</p>
            </li>
            <li class="d-flex align-items-center gap-04">
              <img src="../assets/svg/star-yellow.svg" alt="icon">
              <p><span>4.4</span> (41 Reviews)</p>
            </li>
          </ul>
        </div>
        <span class="d-flex align-items-center justify-content-center rounded-full shrink-0">
          <img src="../assets/svg/heart-red-light.svg" alt="">
        </span>
      </section>

      <!-- facilities -->
      <section class="facilities pt-32 pb-16">
        <!-- title -->
        <div class="title d-flex align-items-center justify-content-between">
          <h4 class="shrink-0">Common Facilities</h4>
          <button type="button" data-bs-toggle="modal" data-bs-target="#serviceModal" class="shrink-0 d-inline-block">See All</button>
        </div>

        <div class="grid gap-24">
          <!-- item 1 -->
          <div class="item text-center">
            <div class="icon d-flex align-items-center justify-content-center rounded-full">
              <img src="../assets/svg/wind.svg" alt="icon">
            </div>
            <p>Ac</p>
          </div>

          <!-- item 2 -->
          <div class="item text-center">
            <div class="icon d-flex align-items-center justify-content-center rounded-full">
              <img src="../assets/svg/building.svg" alt="icon">
            </div>
            <p>Restaurant</p>
          </div>

          <!-- item 3 -->
          <div class="item text-center">
            <div class="icon d-flex align-items-center justify-content-center rounded-full">
              <img src="../assets/svg/water.svg" alt="icon">
            </div>
            <p>Swimming Pool</p>
          </div>

          <!-- item 4 -->
          <div class="item text-center">
            <div class="icon d-flex align-items-center justify-content-center rounded-full">
              <img src="../assets/svg/24-support.svg" alt="icon">
            </div>
            <p>24-Hours Front Desk</p>
          </div>

        </div>
      </section>

      <!-- details-info -->
      <section class="details-info py-16">
        <div class="title">
          <h4>Details</h4>
        </div>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tortor ac leo lorem nisl. Viverra vulputate sodales quis et dui, lacus. Iaculis eu egestas leo egestas vel. 
          <button type="button">More Details</button>
        </p>
      </section>

      <!-- reviews start -->
      <section class="reviews py-16">
        <!-- title -->
        <div class="title d-flex align-items-center justify-content-between">
          <h4 class="shrink-0">Reviews</h4>
          <a href="<?php echo base_url('index/hotel_review');?>" class="shrink-0 d-inline-block">See All</a>
        </div>

        <!-- review card -->
        <div class="review-card d-flex gap-16">
          <div class="shrink-0 image overflow-hidden rounded-full">
            <img src="../assets/images/details/avatar-2.png" alt="Avatar" class="img-fluid w-100">
          </div>

          <div class="flex-grow">
            <div class="d-flex align-items-center justify-content-between">
              <h4>Jhone Kenoady</h4>
              <span class="d-inline-block">23 Nov 2022</span>
            </div>
            <ul class="d-flex align-items-center gap-8">
              <li><img src="../assets/svg/star-yellow.svg" alt="icon"></li>
              <li><img src="../assets/svg/star-yellow.svg" alt="icon"></li>
              <li><img src="../assets/svg/star-yellow.svg" alt="icon"></li>
              <li><img src="../assets/svg/star-yellow.svg" alt="icon"></li>
              <li><img src="../assets/svg/star-yellow.svg" alt="icon"></li>
            </ul>
            <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
          </div>
        </div>
      </section>
      <!-- reviews end -->

      <!-- location start -->
      <section class="details-location pt-16">
        <!-- title -->
        <div class="title">
          <h4>Location</h4>
        </div>

        <!-- map -->
        <div class="overflow-hidden radius-16 map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d846588.5514550178!2d-118.35899906676545!3d34.01855672774309!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos%20Angeles%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1701149305360!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </section>
      <!-- location end -->
    </section>
    <!-- details-body end -->

    <!-- details-footer start -->
    <section style="margin-bottom:60px;" class="details-footer d-flex align-items-center justify-content-between gap-8 w-100">
      <p>$32 <span>$312</span></p>
      <a href="<?php echo base_url('index/hotel_book');?>">Book Now</a>
    </section>
    <!-- details-footer end -->
  </main>

  <!-- service modal start -->
  <div class="modal fade serviceModal bottomModal modalBg" id="serviceModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="modal-close rounded-full" data-bs-dismiss="modal" aria-label="Close">
            <img src="../assets/svg/close-black.svg" alt="Close">
          </button>
          <h1 class="modal-title">All Facilities</h1>
        </div>
        <div class="modal-body">
          <div class="facilities">
            <div class="grid gap-24">
              <!-- item 1 -->
              <div class="item text-center">
                <div class="icon d-flex align-items-center justify-content-center rounded-full">
                  <img src="../assets/svg/wind.svg" alt="icon">
                </div>
                <p>Ac</p>
              </div>

              <!-- item 2 -->
              <div class="item text-center">
                <div class="icon d-flex align-items-center justify-content-center rounded-full">
                  <img src="../assets/svg/building.svg" alt="icon">
                </div>
                <p>Restaurant</p>
              </div>

              <!-- item 3 -->
              <div class="item text-center">
                <div class="icon d-flex align-items-center justify-content-center rounded-full">
                  <img src="../assets/svg/water.svg" alt="icon">
                </div>
                <p>Swimming Pool</p>
              </div>

              <!-- item 4 -->
              <div class="item text-center">
                <div class="icon d-flex align-items-center justify-content-center rounded-full">
                  <img src="../assets/svg/24-support.svg" alt="icon">
                </div>
                <p>24-Hours Front Desk</p>
              </div>

              <!-- item 4 -->
              <div class="item text-center">
                <div class="icon d-flex align-items-center justify-content-center rounded-full">
                  <img src="../assets/svg/building.svg" alt="icon">
                </div>
                <p>Modern Room</p>
              </div>

              <!-- item 2 -->
              <div class="item text-center">
                <div class="icon d-flex align-items-center justify-content-center rounded-full">
                  <img src="../assets/svg/24-support.svg" alt="icon">
                </div>
                <p>24-Hours Security</p>
              </div>

              <!-- item 3 -->
              <div class="item text-center">
                <div class="icon d-flex align-items-center justify-content-center rounded-full">
                  <img src="../assets/svg/water.svg" alt="icon">
                </div>
                <p>Beautiful View</p>
              </div>

              <!-- item 4 -->
              <div class="item text-center">
                <div class="icon d-flex align-items-center justify-content-center rounded-full">
                  <img src="../assets/svg/wind.svg" alt="icon">
                </div>
                <p>Open Space</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- service modal end -->
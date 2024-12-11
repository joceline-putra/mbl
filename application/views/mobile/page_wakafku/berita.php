<main class="details vacation-details">
    <!-- banner start -->
    <section class="banner position-relative">
      <img src="../../assets/images/details/banner-1.png" alt="Banner" class="w-100 img-fluid">
      
      <!-- title -->
      <div class="page-title">
        <button type="button" class="back-btn back-page-btn d-flex align-items-center justify-content-center rounded-full">
          <img src="../../assets/svg/arrow-left-black.svg" alt="arrow">
        </button>
        <h3 class="main-title"><?php echo $title; ?></h3>
      </div>
    </section>
    <!-- banner end -->

    <!-- details-body start -->
    <section class="details-body">
      <!-- details-title -->
      <section class="d-flex align-items-center gap-8 details-title">
        <div class="flex-grow">
          <h3>Taj Mahal</h3>
          <ul class="d-flex align-items-center gap-8">
            <li class="d-flex align-items-center gap-04">
              <img src="../../assets/svg/map-marker.svg" alt="icon">
              <p>Uttar Pradesh, India</p>
            </li>
            <li class="d-flex align-items-center gap-04">
              <img src="../../assets/svg/star-yellow.svg" alt="icon">
              <p><span>4.4</span> (41 Reviews)</p>
            </li>
          </ul>
        </div>
        <span class="d-flex align-items-center justify-content-center rounded-full shrink-0">
          <img src="../../assets/svg/heart-red-light.svg" alt="">
        </span>
      </section>

      <!-- details-info -->
      <section class="details-info pt-32 pb-16">
        <div class="title">
          <h4>Details</h4>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tortor ac leo lorem nisl. Viverra vulputate sodales quis et dui, lacus. Iaculis eu egestas leo egestas vel. Ultrices ut magna nulla facilisi commodo enim, orci feugiat pharetra. Id sagittis, ullamcorper turpis ultrices platea pharetra.</p>
      </section>

      <!-- guide start -->
      <section class="guide py-16">
        <!-- title -->
        <div class="title">
          <h4>Tour Guide</h4>
        </div>

        <!-- cards -->
        <div class="d-flex gap-24 all-cards scrollbar-hidden">
          <!-- item 1 -->
          <a href="<?php echo base_url('index/guide_profile');?>" class="d-flex gap-16 item w-fit shrink-0">
            <div class="image position-relative shrink-0">
              <img src="../../assets/images/home/guide-3.png" alt="guide" class="guide-img object-fit-cover img-fluid radius-12">
              <div class="rating d-flex align-items-center gap-04 w-fit">
                <img src="../../assets/svg/star-yellow.svg" alt="Star">
                <span class="d-inline-block">4.0</span>
              </div>
            </div>

            <div class="content">
              <h4>Emilia Ricardo</h4>
              <h5>$25 (1 Day)</h5>
              <p class="d-flex align-items-center gap-8 location">
                <img src="../../assets/svg/map-black.svg" alt="icon">
                Polynesia, French 
              </p>
            </div>
          </a>

          <!-- item 2 -->
          <a href="<?php echo base_url('index/guide_profile');?>" class="d-flex gap-16 item w-fit shrink-0">
            <div class="image position-relative shrink-0">
              <img src="../../assets/images/home/guide-4.png" alt="guide" class="guide-img object-fit-cover img-fluid radius-12">
              <div class="rating d-flex align-items-center gap-04 w-fit">
                <img src="../../assets/svg/star-yellow.svg" alt="Star">
                <span class="d-inline-block">4.0</span>
              </div>
            </div>

            <div class="content">
              <h4>Jonsky Alexia</h4>
              <h5>$30 (1 Day)</h5>
              <p class="d-flex align-items-center gap-8 location">
                <img src="../../assets/svg/map-black.svg" alt="icon">
                South America 
              </p>
            </div>
          </a>

        </div>
      </section>
      <!-- guide end -->

      <!-- reviews start -->
      <section class="reviews py-16">
        <!-- title -->
        <div class="title d-flex align-items-center justify-content-between">
          <h4 class="shrink-0">On Budget Tour</h4>
          <a href="<?php echo base_url('index/hotel_review');?>" class="shrink-0 d-inline-block">See All</a>
        </div>

        <!-- review card -->
        <div class="review-card d-flex gap-16">
          <div class="shrink-0 image overflow-hidden rounded-full">
            <img src="../../assets/images/details/avatar-1.png" alt="Avatar" class="img-fluid w-100">
          </div>

          <div class="flex-grow">
            <div class="d-flex align-items-center justify-content-between">
              <h4>Jhone Kenoady</h4>
              <span class="d-inline-block">23 Nov 2022</span>
            </div>
            <ul class="d-flex align-items-center gap-8">
              <li><img src="../../assets/svg/star-yellow.svg" alt="icon"></li>
              <li><img src="../../assets/svg/star-yellow.svg" alt="icon"></li>
              <li><img src="../../assets/svg/star-yellow.svg" alt="icon"></li>
              <li><img src="../../assets/svg/star-yellow.svg" alt="icon"></li>
              <li><img src="../../assets/svg/star-yellow.svg" alt="icon"></li>
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
    <section style="margin-bottom:80px;" class="details-footer d-flex align-items-center justify-content-between gap-8 w-100">
      <p>$32 <span>/Person</span></p>
      <a href="<?php echo base_url('index/vacation_checkout');?>">Book Now</a>
    </section>
    <!-- details-footer end -->
  </main>
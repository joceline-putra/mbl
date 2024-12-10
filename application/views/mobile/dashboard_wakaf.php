<main class="home">
    <!-- menu, side-menu start -->
    <section class="wrapper dz-mode">
      <!-- menu -->
      <div class="menu">
        <button class="toggle-btn">
          <img src="../assets/svg/menu/burger-white.svg" alt="" class="icon">
        </button>
        <div class="btn-grp d-flex align-items-center gap-16">
          <label for="mode-change" class="mode-change d-flex align-items-center justify-content-center">
            <input type="checkbox" id="mode-change">
            <img src="../assets/svg/menu/sun-white.svg" alt="icon" class="sun">
            <img src="../assets/svg/menu/moon-white.svg" alt="icon" class="moon">
          </label>
          <a href="<?php echo base_url('index/user_profile');?>">
            <img src="../assets/svg/menu/profile-white.svg" alt="icon">
          </a>
        </div>
      </div>
      <div class="m-menu__overlay"></div>
      <!-- main menu -->
      <div class="m-menu">
        <div class="m-menu__header">
          <button class="m-menu__close">
            <img src="../assets/svg/menu/close-white.svg" alt="icon">
          </button>
          <div class="menu-user">
            <img src="../assets/images/profile/avatar.png" alt="avatar">
            <div >
              <a href="#!">Andi Doe</a>
              <h3>
                Verified Member
              </h3>
            </div>
          </div>
        </div>
        <ul>
          <li>
            <h2 class="menu-title">menu</h2>
          </li>

          <li>
              <a href="home.html">
                <div class="d-flex align-items-center gap-16">
                  <span class="icon">
                    <img src="../assets/svg/menu/pie-white.svg" alt="">
                  </span>
                  overview
                </div>
                <img src="../assets/svg/menu/chevron-right-black.svg" alt="">
              </a>
          </li>
          <li>
              <a href="../page.html">
                <div class="d-flex align-items-center gap-16">
                  <span class="icon">
                    <img src="../assets/svg/menu/page-white.svg" alt="">
                  </span>
                  pages
                </div>
                <img src="../assets/svg/menu/chevron-right-black.svg" alt="">
              </a>
          </li>
          <li>
            <h2 class="menu-title">others</h2>
          </li>

          <li>
            <label class="a-label__chevron" for="item-4">
              <span class="d-flex align-items-center gap-16">
                <span class="icon">
                  <img src="../assets/svg/menu/grid-white.svg" alt="">
                </span>
                components
              </span>
              <img src="../assets/svg/menu/chevron-right-black.svg" alt="">
            </label>
            <input type="checkbox" id="item-4" name="item-4" class="m-menu__checkbox">
            <div class="m-menu">
              <div class="m-menu__header">
                <label class="m-menu__toggle" for="item-4">
                  <img src="../assets/svg/menu/back-white.svg" alt="">
                </label>
                <span class="m-menu__header-title">components</span>
              </div>
              <ul>
                <li>
                  <a href="../components/splash-screen.html">
                    <div class="d-flex align-items-center gap-16">
                      <span class="icon">
                        <img src="../assets/svg/menu/box-white.svg" alt="icon">
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
                  <img src="../assets/svg/menu/gear-white.svg" alt="">
                </span>
                settings
              </span>
              <img src="../assets/svg/menu/chevron-right-black.svg" alt="">
            </label>
            <input type="checkbox" id="item-5" name="item-5" class="m-menu__checkbox">
            <div class="m-menu">
              <div class="m-menu__header">
                <label class="m-menu__toggle" for="item-5">
                  <img src="../assets/svg/menu/back-white.svg" alt="">
                </label>
                <span class="m-menu__header-title">settings</span>
              </div>
              <ul>
                <li>
                  <a href="profile/user-address.html">
                    <div class="d-flex align-items-center gap-16">
                      <span class="icon">
                        <img src="../assets/svg/menu/box-white.svg" alt="icon">
                      </span>
                      My Address
                    </div>
                  </a>
                </li>
                <li>
                  <a href="profile/user-payment.html">
                    <div class="d-flex align-items-center gap-16">
                      <span class="icon">
                        <img src="../assets/svg/menu/box-white.svg" alt="icon">
                      </span>
                      Payment Method
                    </div>
                  </a>
                </li>
                <li>
                  <a href="profile/change-password.html">
                    <div class="d-flex align-items-center gap-16">
                      <span class="icon">
                        <img src="../assets/svg/menu/box-white.svg" alt="icon">
                      </span>
                      Change Password
                    </div>
                  </a>
                </li>
                <li>
                  <a href="profile/forgot-password.html">
                    <div class="d-flex align-items-center gap-16">
                      <span class="icon">
                        <img src="../assets/svg/menu/box-white.svg" alt="icon">
                      </span>
                      Forgot Password
                    </div>
                  </a>
                </li>
                <li>
                  <a href="profile/security.html">
                    <div class="d-flex align-items-center gap-16">
                      <span class="icon">
                        <img src="../assets/svg/menu/box-white.svg" alt="icon">
                      </span>
                      Security
                    </div>
                  </a>
                </li>
                <li>
                  <a href="profile/user-language.html">
                    <div class="d-flex align-items-center gap-16">
                      <span class="icon">
                        <img src="../assets/svg/menu/box-white.svg" alt="icon">
                      </span>
                      Language
                    </div>
                  </a>
                </li>
                <li>
                  <a href="profile/notifications.html">
                    <div class="d-flex align-items-center gap-16">
                      <span class="icon">
                        <img src="../assets/svg/menu/box-white.svg" alt="icon">
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
                  <img src="../assets/svg/menu/moon-white.svg" alt="">
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

    <!-- info start -->
    <section class="info d-flex align-items-start justify-content-between pb-12">
      <div class="d-flex align-items-center justify-content-between gap-14">
        <div class="image shrink-0 rounded-full overflow-hidden">
          <img src="../assets/images/home/avatar.png" alt="avatar" class="w-100 h-100 object-fit-cover">
        </div>
        <div>
          <h3>Hi, Andy</h3>
          <p class="d-flex align-items-center gap-04">
            <img src="../assets/svg/map-marker.svg" alt="icon">
            Rp. 2.000.000
          </p>
        </div>
      </div>

      <!-- <ul class="d-flex align-items-center gap-16">
        <li>
          <a href="notification.html" class="d-flex align-items-center justify-content-center rounded-full position-relative">
            <img src="../assets/svg/bell-black.svg" alt="icon">
            <span class="dot"></span>
          </a>
        </li>
        <li>
          <a href="chat/message.html" class="d-flex align-items-center justify-content-center rounded-full position-relative">
            <img src="../assets/svg/message-square-dots.svg" alt="icon"> Top Up
            <span class="dot"></span>
          </a>
        </li>
      </ul> -->
      <div class="d-flex align-items-center gap-04" style="width:35%;">
        <a href="#" class="btn-primary" style="padding:10px 0;">Top Up</a>
      </div>
    </section>
    <!-- info end -->

    <!-- search start -->
    <section class="search py-12">
      <form action="#">
        <div class="form-inner w-100 d-flex align-items-center gap-8 radius-24">
          <img src="../assets/svg/search.svg" alt="search" class="shrink-0">
          <input type="search" class="input-search input-field" placeholder="Pencarian">
          <div class="filter shrink-0">
            <button type="button" class="d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#filterModal">
              <img src="../assets/svg/filter-black.svg" alt="filter">
            </button>
          </div>
        </div>
      </form>
    </section>
    <!-- search end -->

    <!-- Layanan start -->
    <section class="service py-12">
      <!-- item 1 -->
      <a href="<?php echo base_url('index/service_location');?>">
        <figure class="item text-center">
          <div class="image rounded-full d-flex align-items-center justify-content-center m-auto">
            <img src="../assets/images/home/airport.png" alt="airport" class="img-fluid backface-hidden">
          </div>
          <figcaption>Wakaf</figcaption>
        </figure>
      </a>

      <!-- item 2 -->
      <a href="<?php echo base_url('index/service_location');?>">
        <figure class="item text-center">
          <div class="image rounded-full d-flex align-items-center justify-content-center m-auto">
            <img src="../assets/images/home/car-rental.png" alt="car" class="img-fluid backface-hidden">
          </div>
          <figcaption>Zakat</figcaption>
        </figure>
      </a>

      <!-- item 3 -->
      <a href="<?php echo base_url('index/service_location');?>">
        <figure class="item text-center">
          <div class="image rounded-full d-flex align-items-center justify-content-center m-auto">
            <img src="../assets/images/home/hotel.png" alt="hotel" class="img-fluid backface-hidden">
          </div>
          <figcaption>Sedekah</figcaption>
        </figure>
      </a>

      <!-- item 4 -->
      <figure class="item text-center" data-bs-toggle="modal" data-bs-target="#serviceModal">
        <div class="image rounded-full d-flex align-items-center justify-content-center m-auto">
          <img src="../assets/images/home/category.png" alt="category" class="img-fluid backface-hidden">
        </div>
        <figcaption>More</figcaption>
      </figure>
    </section>
    <!-- Layanan end -->
    
    <!-- Dakwah start -->
    <section class="visited py-12">
      <!-- title -->
      <div class="title d-flex align-items-center justify-content-between">
        <h2 class="shrink-0">Dakwah & Kajian</h2>
        <div class="custom-pagination visited-pagination"></div>
      </div>

      <div class="swiper visited-swiper">
        <div class="swiper-wrapper">
          <!-- item-1 -->
          <div class="swiper-slide place-card">
            <a href="<?php echo base_url('index/vacation_detail');?>">
              <div class="image position-relative">
                <img src="../assets/images/home/item-1.png" alt="desert" class="img-fluid w-100 overflow-hidden radius-8">
                <span class="d-flex align-items-center justify-content-center rounded-full">
                  <img src="../assets/svg/heart-red.svg" alt="icon">
                </span>
              </div>
              <div class="content">
                <h4>Tahiti Beach</h4>
                <p class="d-flex align-items-center gap-04 location">
                  <img src="../assets/svg/map-marker.svg" alt="icon">
                  Polynesia, French
                </p>
                <div class="price d-flex align-items-center justify-content-between">
                  <h3>$235</h3>
                  <p class="d-flex align-items-center gap-04">
                    <img src="../assets/svg/star-yellow.svg" alt="icon">
                    4.4 <span>(32)</span>
                  </p>
                </div>
              </div>
            </a>
          </div>

          <!-- item-2 -->
          <div class="swiper-slide place-card">
            <a href="<?php echo base_url('index/vacation_detail');?>">
              <div class="image position-relative">
                <img src="../assets/images/home/item-2.png" alt="desert" class="img-fluid w-100 overflow-hidden radius-8">
                <span class="d-flex align-items-center justify-content-center rounded-full">
                  <img src="../assets/svg/heart-black.svg" alt="icon">
                </span>
              </div>
              <div class="content">
                <h4>St. Lucia Mountain</h4>
                <p class="d-flex align-items-center gap-04 location">
                  <img src="../assets/svg/map-marker.svg" alt="icon">
                  South America
                </p>
                <div class="price d-flex align-items-center justify-content-between">
                  <h3>$235</h3>
                  <p class="d-flex align-items-center gap-04">
                    <img src="../assets/svg/star-yellow.svg" alt="icon">
                    4.4 <span>(41)</span>
                  </p>
                </div>
              </div>
            </a>
          </div>

          <!-- item-3 -->
          <div class="swiper-slide place-card">
            <a href="<?php echo base_url('index/vacation_detail');?>">
              <div class="image position-relative">
                <img src="../assets/images/home/item-1.png" alt="desert" class="img-fluid w-100 overflow-hidden radius-8">
                <span class="d-flex align-items-center justify-content-center rounded-full">
                  <img src="../assets/svg/heart-red.svg" alt="icon">
                </span>
              </div>
              <div class="content">
                <h4>Tahiti Beach</h4>
                <p class="d-flex align-items-center gap-04 location">
                  <img src="../assets/svg/map-marker.svg" alt="icon">
                  Polynesia, French
                </p>
                <div class="price d-flex align-items-center justify-content-between">
                  <h3>$235</h3>
                  <p class="d-flex align-items-center gap-04">
                    <img src="../assets/svg/star-yellow.svg" alt="icon">
                    4.4 <span>(32)</span>
                  </p>
                </div>
              </div>
            </a>
          </div>

          <!-- item-4 -->
          <div class="swiper-slide place-card">
            <a href="<?php echo base_url('index/vacation_detail');?>">
              <div class="image position-relative">
                <img src="../assets/images/home/item-2.png" alt="desert" class="img-fluid w-100 overflow-hidden radius-8">
                <span class="d-flex align-items-center justify-content-center rounded-full">
                  <img src="../assets/svg/heart-black.svg" alt="icon">
                </span>
              </div>
              <div class="content">
                <h4>St. Lucia Mountain</h4>
                <p class="d-flex align-items-center gap-04 location">
                  <img src="../assets/svg/map-marker.svg" alt="icon">
                  South America
                </p>
                <div class="price d-flex align-items-center justify-content-between">
                  <h3>$235</h3>
                  <p class="d-flex align-items-center gap-04">
                    <img src="../assets/svg/star-yellow.svg" alt="icon">
                    4.4 <span>(41)</span>
                  </p>
                </div>
              </div>
            </a>
          </div>

        </div>
      </div>
    </section>
    <!-- Dakwah end -->

    <!-- Donatur start -->
    <section class="guide py-12">
      <!-- title -->
      <div class="title d-flex align-items-center justify-content-between">
        <h2 class="shrink-0">Donatur</h2>
        <a href="<?php echo base_url('index/tour_guide');?>" class="shrink-0 d-inline-block">Lihat Semua</a>
      </div>

      <!-- cards -->
      <div class="d-flex gap-24 all-cards scrollbar-hidden">
        <!-- item 1 -->
        <a href="<?php echo base_url('index/guide_profile'); ?>" class="d-flex gap-16 item w-fit shrink-0">
          <div class="image position-relative shrink-0">
            <img src="../assets/images/home/guide-1.png" alt="guide" class="guide-img object-fit-cover img-fluid radius-12">
            <div class="rating d-flex align-items-center gap-04 w-fit">
              <img src="../assets/svg/star-yellow.svg" alt="Star">
              <span class="d-inline-block">4.0</span>
            </div>
          </div>

          <div class="content">
            <h4>Emilia Ricardo</h4>
            <h5>$25 (1 Day)</h5>
            <p class="d-flex align-items-center gap-8 location">
              <img src="../assets/svg/map-black.svg" alt="icon">
              Polynesia, French 
            </p>
          </div>
        </a>

        <!-- item 2 -->
        <a href="<?php echo base_url('index/guide_profile'); ?>" class="d-flex gap-16 item w-fit shrink-0">
          <div class="image position-relative shrink-0">
            <img src="../assets/images/home/guide-2.png" alt="guide" class="guide-img object-fit-cover img-fluid radius-12">
            <div class="rating d-flex align-items-center gap-04 w-fit">
              <img src="../assets/svg/star-yellow.svg" alt="Star">
              <span class="d-inline-block">4.0</span>
            </div>
          </div>

          <div class="content">
            <h4>Jonsky Alexia</h4>
            <h5>$30 (1 Day)</h5>
            <p class="d-flex align-items-center gap-8 location">
              <img src="../assets/svg/map-black.svg" alt="icon">
              South America 
            </p>
          </div>
        </a>

      </div>
    </section>
    <!-- Donatur end -->

    <!-- Berita start -->
    <section class="budget pt-12">
      <!-- title -->
      <div class="title d-flex align-items-center justify-content-between">
        <h2 class="shrink-0">Berita</h2>
        <a href="<?php echo base_url('index/hotel'); ?>" class="shrink-0 d-inline-block">Lihat Semua</a>
      </div>

      <ul>
        <!-- item 1 -->
        <li>
          <a href="<?php echo base_url('index/hotel_detail'); ?>" class="d-flex align-items-center gap-12">
            <div class="image shrink-0 overflow-hidden radius-8">
              <img src="../assets/images/home/budget-1.png" alt="Place" class="img-fluid w-100 h-100 object-fit-cover">
            </div>

            <div class="content shrink-0 d-flex align-items-center gap-12 justify-content-between flex-grow">
              <div>
                <h4>Ledadu Beach</h4>
                <h5>3 days 2 nights</h5>
                <p class="d-flex align-items-center gap-8 location">
                  <img src="../assets/svg/map-marker.svg" alt="icon">
                  Australia 
                </p>
              </div>
              <p class="price"><span>$20</span>/Person</p>
            </div>
          </a>
        </li>

        <!-- item 2 -->
        <li>
          <a href="<?php echo base_url('index/hotel_detail'); ?>" class="d-flex align-items-center gap-12">
            <div class="image shrink-0 overflow-hidden radius-8">
              <img src="../assets/images/home/budget-2.png" alt="Place" class="img-fluid w-100 h-100 object-fit-cover">
            </div>
  
            <div class="content shrink-0 d-flex align-items-center gap-12 justify-content-between flex-grow">
              <div>
                <h4>Endigada Beach</h4>
                <h5>5 days 4 nights</h5>
                <p class="d-flex align-items-center gap-8 location">
                  <img src="../assets/svg/map-marker.svg" alt="icon">
                  Australia 
                </p>
              </div>
              <p class="price"><span>$25</span>/Person</p>
            </div>
          </a>
        </li>
      </ul>
    </section>
    <!-- Berita end -->

</main>
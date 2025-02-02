<main class="search-result">
    <!-- title -->
    <div class="page-title">
      <button type="button" class="back-btn back-page-btn d-flex align-items-center justify-content-center rounded-full">
        <img src="../assets/svg/arrow-left-black.svg" alt="arrow">
      </button>
      <h3 class="main-title">Search Destination</h3>
    </div>

    <!-- search start -->
    <section class="search pb-12">
      <form action="#">
        <!-- search start -->
        <div class="search pb-24">
          <div class="form-inner w-100 d-flex align-items-center gap-8 radius-24">
            <img src="../assets/svg/search.svg" alt="search" class="shrink-0">
            <input type="search" class="input-search input-field" placeholder="Search...">
            <div class="filter shrink-0">
              <button type="button" class="d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#filterModal">
                <img src="../assets/svg/filter-black.svg" alt="filter">
              </button>
            </div>
          </div>
        </div>
        <!-- search end -->

        <div class="grid">
          <!-- date -->
          <label for="sdate" class="w-100 d-flex align-items-center gap-8 radius-24" data-bs-toggle="modal" data-bs-target="#selectDateModal">
            <input type="text" id="sdate" placeholder="Date" class="input-field">
            <span class="icon shrink-0">
              <img src="../assets/svg/calendar.svg" alt="calendar">
            </span>
          </label>

          <!-- location -->
          <label for="slocation" class="w-100 d-flex align-items-center gap-8 radius-24" data-bs-toggle="modal" data-bs-target="#selectLocationModal">
            <input type="text" id="slocation" placeholder="Location" class="input-field">
            <span class="icon shrink-0">
              <img src="../assets/svg/map-marker.svg" alt="calendar">
            </span>
          </label>
        </div>
      </form>
    </section>
    <!-- search end -->

    <!-- recommended start -->
    <section class="recommended py-12">
      <!-- title -->
      <div class="title d-flex align-items-center justify-content-between">
        <h2 class="shrink-0">Recommendation</h2>
        <a href="explore.html" class="shrink-0 d-inline-block">See All</a>
      </div>

      <!-- places -->
      <div class="grid">
        <!-- item-1 -->
        <div class="place-card">
          <a href="vacation-details.html">
            <div class="image position-relative">
              <img src="../assets/images/home/item-7.png" alt="desert" class="img-fluid w-100 overflow-hidden radius-8">
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
        <div class="place-card">
          <a href="vacation-details.html">
            <div class="image position-relative">
              <img src="../assets/images/home/item-8.png" alt="desert" class="img-fluid w-100 overflow-hidden radius-8">
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
                  4.4 <span>(32)</span>
                </p>
              </div>
            </div>
          </a>
        </div>

        <!-- item-3 -->
        <div class="place-card">
          <a href="vacation-details.html">
            <div class="image position-relative">
              <img src="../assets/images/home/item-9.png" alt="desert" class="img-fluid w-100 overflow-hidden radius-8">
              <span class="d-flex align-items-center justify-content-center rounded-full">
                <img src="../assets/svg/heart-black.svg" alt="icon">
              </span>
            </div>
            <div class="content">
              <h4>Cappadocia</h4>
              <p class="d-flex align-items-center gap-04 location">
                <img src="../assets/svg/map-marker.svg" alt="icon">
                Turki
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
        <div class="place-card">
          <a href="vacation-details.html">
            <div class="image position-relative">
              <img src="../assets/images/home/item-10.png" alt="desert" class="img-fluid w-100 overflow-hidden radius-8">
              <span class="d-flex align-items-center justify-content-center rounded-full">
                <img src="../assets/svg/heart-red.svg" alt="icon">
              </span>
            </div>
            <div class="content">
              <h4>Hanalei Bay</h4>
              <p class="d-flex align-items-center gap-04 location">
                <img src="../assets/svg/map-marker.svg" alt="icon">
                Hawaii
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

        <!-- item-5 -->
        <div class="place-card">
          <a href="vacation-details.html">
            <div class="image position-relative">
              <img src="../assets/images/home/item-4.png" alt="desert" class="img-fluid w-100 overflow-hidden radius-8">
              <span class="d-flex align-items-center justify-content-center rounded-full">
                <img src="../assets/svg/heart-black.svg" alt="icon">
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

        <!-- item-6 -->
        <div class="place-card">
          <a href="vacation-details.html">
            <div class="image position-relative">
              <img src="../assets/images/home/item-6.png" alt="desert" class="img-fluid w-100 overflow-hidden radius-8">
              <span class="d-flex align-items-center justify-content-center rounded-full">
                <img src="../assets/svg/heart-black.svg" alt="icon">
              </span>
            </div>
            <div class="content">
              <h4>St. Lucia Mountain</h4>
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

      </div>
    </section>
    <!-- recommended end -->
  </main>

  <!-- location-modal start -->
  <div class="modal fade selectLocationModal modalBg" id="selectLocationModal" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" data-bs-dismiss="modal" aria-label="Close" class="d-flex align-items-center justify-content-center">
            <img src="../assets/svg/close-black.svg" alt="close">
          </button>
          <h1 class="modal-title" id="selectLocationModalLabel">Location</h1>
        </div>
        <div class="modal-body">
          <form action="#">
            <div class="grid">
              <label for="locSearch" class="d-flex align-items-center gap-8 radius-24">
                <img src="../assets/svg/search.svg" alt="search" class="shrink-0">
                <input type="text" placeholder="Search location" class="flex-grow" id="locSearch">
              </label>
              <button type="button" class="radius-20">Send</button>
            </div>
          </form>

          <ul class="loc-list scrollbar-hidden">
            <li class="d-flex align-items-center gap-12">
              <span class="d-flex align-items-center justify-content-center shrink-0 rounded-full">
                <img src="../assets/svg/map-black.svg" alt="icon">
              </span>
              <div>
                <h5>Encinitas</h5>
                <p>260-C North El Camino Real</p>
              </div>
            </li>
            <li class="d-flex align-items-center gap-12">
              <span class="d-flex align-items-center justify-content-center shrink-0 rounded-full">
                <img src="../assets/svg/map-black.svg" alt="icon">
              </span>
              <div>
                <h5>San Marcos</h5>
                <p>591 Grand Avenue </p>
              </div>
            </li>
            <li class="d-flex align-items-center gap-12">
              <span class="d-flex align-items-center justify-content-center shrink-0 rounded-full">
                <img src="../assets/svg/map-black.svg" alt="icon">
              </span>
              <div>
                <h5>Roseville</h5>
                <p>1186 Roseville Pkwy</p>
              </div>
            </li>
            <li class="d-flex align-items-center gap-12">
              <span class="d-flex align-items-center justify-content-center shrink-0 rounded-full">
                <img src="../assets/svg/map-black.svg" alt="icon">
              </span>
              <div>
                <h5>San Ramon</h5>
                <p>3141 Crow Canyon Place</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- location-modal end -->
  
  <!-- date-modal start -->
  <div class="modal fade selectDateModal dateModal modalBg" id="selectDateModal" tabindex="-1" aria-labelledby="selectDateModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header justify-content-center">
          <h1 class="modal-title" id="selectDateModalLabel">Date</h1>
        </div>
        <div class="modal-body">
          <input type="text" id="selectDateInput"/>

          <div class="btns d-flex align-items-center gap-16">
            <button type="button" class="radius-20 w-50 cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
            <button type="button" class="radius-20 w-50 apply-btn" data-bs-dismiss="modal" aria-label="Close">Apply</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- date-modal end -->

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
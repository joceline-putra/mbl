<main class="explore">    
    <!-- search start -->
    <section class="search py-12">
      <form action="#">
        <div class="form-inner w-100 d-flex align-items-center gap-8 radius-24">
          <img src="../assets/svg/search.svg" alt="search" class="shrink-0">
          <input type="search" class="input-search input-field" placeholder="Search...">
          <div class="filter shrink-0">
            <button type="button" class="d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#filterModal">
              <img src="../assets/svg/filter-black.svg" alt="filter">
            </button>
          </div>
        </div>
      </form>
    </section>
    <!-- search end -->

    <!-- all-place start -->
    <section class="all-place py-12">
      <!-- tab list -->
      <ul class="place-filter-btns d-flex align-items-center tab-list gap-12 w-100 scrollbar-hidden">
        <li class="active">
          <button type="button" data-filter="all">All</button>
        </li>
        <li>
          <button type="button" data-filter=".popular">Popular</button>
        </li>
        <li>
          <button type="button" data-filter=".recommendation">Recommendation</button>
        </li>
        <li>
          <button type="button" data-filter=".frequent">Frequently visited</button>
        </li>
      </ul>

      <!-- places -->
      <div id="place-cards" class="grid">
        <!-- item-1 -->
        <div class="place-card mix popular frequent">
          <a href="vacation-details.html">
            <div class="image position-relative">
              <img src="../assets/images/home/item-2.png" alt="desert" class="img-fluid w-100 overflow-hidden radius-8">
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
        <div class="place-card mix recommendation popular">
          <a href="vacation-details.html">
            <div class="image position-relative">
              <img src="../assets/images/home/item-1.png" alt="desert" class="img-fluid w-100 overflow-hidden radius-8">
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
        <div class="place-card mix frequent recommendation">
          <a href="vacation-details.html">
            <div class="image position-relative">
              <img src="../assets/images/home/item-3.png" alt="desert" class="img-fluid w-100 overflow-hidden radius-8">
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
        <div class="place-card mix recommendation frequent">
          <a href="vacation-details.html">
            <div class="image position-relative">
              <img src="../assets/images/home/item-4.png" alt="desert" class="img-fluid w-100 overflow-hidden radius-8">
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
        <div class="place-card mix recommendation popular">
          <a href="vacation-details.html">
            <div class="image position-relative">
              <img src="../assets/images/home/item-5.png" alt="desert" class="img-fluid w-100 overflow-hidden radius-8">
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
        <div class="place-card mix frequent popular">
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
    <!-- all-place end -->
</main>
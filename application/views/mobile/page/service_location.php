<main class="service-loc">
    <!-- title -->
    <div class="page-title">
      <button type="button" class="back-btn back-page-btn d-flex align-items-center justify-content-center rounded-full">
        <img src="../assets/svg/arrow-left-black.svg" alt="arrow">
      </button>
      <h3 class="main-title">Airport</h3>
    </div>

    <!-- map -->
    <div id="map" class="map"></div>
  </main>

  <!-- list location modal start -->
  <div class="modal fade locationModal bottomModal" id="locationModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="modal-close rounded-full" data-bs-dismiss="modal" aria-label="Close">
            <img src="../assets/svg/close-black.svg" alt="Close">
          </button>
          <h1 class="modal-title">List Location</h1>
        </div>
        <div class="modal-body">
          <ul class="item-list">
            <!-- item 1 -->
            <li class="item d-flex align-items-center gap-12 w-100" data-bs-target="#locationModal2" data-bs-toggle="modal">
              <div class="image shrink-0 overflow-hidden radius-8">
                <img src="../assets/images/service-loc/loc-1.png" alt="Place" class="img-fluid w-100 h-100 object-fit-cover">
              </div>
    
              <div class="content flex-grow">
                <h4>San Francisco International Airport</h4>
                <p class="rating d-flex align-items-center gap-04">
                  <img src="../assets/svg/star-yellow.svg" alt="icon">
                  4.4 <span>(41)</span>
                </p>
                <p class="d-flex align-items-center gap-8 location">
                  <img src="../assets/svg/map-black.svg" alt="icon">
                  San Francisco, Amerika Serikat 
                </p>
              </div>
            </li>

            <!-- item 2 -->
            <li class="item d-flex align-items-center gap-12 w-100" data-bs-target="#locationModal2" data-bs-toggle="modal">
              <div class="image shrink-0 overflow-hidden radius-8">
                <img src="../assets/images/service-loc/loc-2.png" alt="Place" class="img-fluid w-100 h-100 object-fit-cover">
              </div>
    
              <div class="content flex-grow">
                <h4>Bandar Udara Internasional Oakland</h4>
                <p class="rating d-flex align-items-center gap-04">
                  <img src="../assets/svg/star-yellow.svg" alt="icon">
                  4.4 <span>(41)</span>
                </p>
                <p class="d-flex align-items-center gap-8 location">
                  <img src="../assets/svg/map-black.svg" alt="icon">
                  Oakland, Amerika Serikat 
                </p>
              </div>
            </li>

            <!-- item 3 -->
            <li class="item d-flex align-items-center gap-12 w-100" data-bs-target="#locationModal2" data-bs-toggle="modal">
              <div class="image shrink-0 overflow-hidden radius-8">
                <img src="../assets/images/service-loc/loc-3.png" alt="Place" class="img-fluid w-100 h-100 object-fit-cover">
              </div>
    
              <div class="content flex-grow">
                <h4>Silicon Valley Airport shuttle & Taxi Service</h4>
                <p class="rating d-flex align-items-center gap-04">
                  <img src="../assets/svg/star-yellow.svg" alt="icon">
                  4.4 <span>(41)</span>
                </p>
                <p class="d-flex align-items-center gap-8 location">
                  <img src="../assets/svg/map-black.svg" alt="icon">
                  San Francisco, Amerika Serikat 
                </p>
              </div>
            </li>

            <!-- item 3 -->
            <li class="item d-flex align-items-center gap-12 w-100" data-bs-target="#locationModal2" data-bs-toggle="modal">
              <div class="image shrink-0 overflow-hidden radius-8">
                <img src="../assets/images/service-loc/loc-2.png" alt="Place" class="img-fluid w-100 h-100 object-fit-cover">
              </div>
    
              <div class="content flex-grow">
                <h4>Bandar Udara Internasional Oakland</h4>
                <p class="rating d-flex align-items-center gap-04">
                  <img src="../assets/svg/star-yellow.svg" alt="icon">
                  4.4 <span>(41)</span>
                </p>
                <p class="d-flex align-items-center gap-8 location">
                  <img src="../assets/svg/map-black.svg" alt="icon">
                  Oakland, Amerika Serikat 
                </p>
              </div>
            </li>

          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- list location modal end -->

  <!-- location detail modal start -->
  <div class="modal fade locationModal locationModal2" id="locationModal2" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <div class="item d-flex align-items-center gap-12 w-100">
            <div class="image shrink-0 overflow-hidden radius-8">
              <img src="../assets/images/service-loc/loc-2.png" alt="Place" class="img-fluid w-100 h-100 object-fit-cover">
            </div>
  
            <div class="content flex-grow">
              <h4>San Francisco International Airport</h4>
              <p class="rating d-flex align-items-center gap-04">
                <img src="../assets/svg/star-yellow.svg" alt="icon">
                4.4 <span>(41)</span>
              </p>
              <p class="d-flex align-items-center gap-8 location">
                <img src="../assets/svg/map-black.svg" alt="icon">
                San Francisco 
              </p>
            </div>
          </div>

          <ul class="btn-list d-flex align-items-center gap-24 mt-24">
            <li>
              <a href="#" class="active d-flex align-items-center justify-content-center rounded-full">
                <img src="../assets/svg/world-black.svg" alt="icon">
              </a>
            </li>
            <li>
              <a href="#" class="d-flex align-items-center justify-content-center rounded-full">
                <img src="../assets/svg/subdirectory-black.svg" alt="icon">
              </a>
            </li>
            <li>
              <a href="#" class="d-flex align-items-center justify-content-center rounded-full">
                <img src="../assets/svg/heart-black.svg" alt="icon">
              </a>
            </li>
            <li>
              <a href="#" class="d-flex align-items-center justify-content-center rounded-full">
                <img src="../assets/svg/phone-black.svg" alt="icon">
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- location detail modal end -->
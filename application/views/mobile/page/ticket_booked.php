<main class="ticket">
    <!-- page-title -->
    <div class="page-title">
      <h3 class="main-title">My Booked</h3>
    </div>

    <!-- tab -->
    <section class="ticket-tab">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="booked-tab" data-bs-toggle="tab" data-bs-target="#booked-tab-pane" type="button" role="tab" aria-controls="booked-tab-pane" aria-selected="true">Booked</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="history-tab" data-bs-toggle="tab" data-bs-target="#history-tab-pane" type="button" role="tab" aria-controls="history-tab-pane" aria-selected="false">History</button>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="booked-tab-pane" role="tabpanel" aria-labelledby="booked-tab" tabindex="0">
          <!-- item 1 -->
          <div class="ticket-card radius-8">
            <!-- card-title -->
            <div class="card-title d-flex align-items-center justify-content-between">
              <p>22 march 2022, Thu</p>
              <span>Will Come</span>
            </div>

            <!-- card-item -->
            <div class="card-item d-flex align-items-center gap-16 w-100">
              <div class="image shrink-0 overflow-hidden radius-8">
                <img src="../assets/images/ticket/img-1.png" alt="Place" class="img-fluid w-100 h-100 object-fit-cover">
              </div>
      
              <div class="content flex-grow">
                <h4>The Lalit New Delhi</h4>
                <p class="d-flex align-items-center gap-04 location mt-04">
                  <img src="../assets/svg/map-marker.svg" alt="icon">
                  Uttar Pradesh, India 
                </p>
                <p class="rating d-flex align-items-center gap-04 mt-16">
                  <img src="../assets/svg/star-yellow.svg" alt="icon">
                  4.4 <span>(41 Reviews)</span>
                </p>
              </div>
            </div>

            <!-- card-footer -->
            <div class="card-footer d-flex align-items-center justify-content-between">
              <div>
                <p>Total Price</p>
                <h3>$320</h3>
              </div>

              <a href="<?php echo base_url('index/ticket_detail');?>">Detail</a>
            </div>

          </div>

          <!-- item 2 -->
          <div class="ticket-card radius-8">
            <!-- card-title -->
            <div class="card-title d-flex align-items-center justify-content-between">
              <p>22 march 2022, Thu</p>
              <span>Will Come</span>
            </div>

            <!-- card-item -->
            <div class="card-item d-flex align-items-center gap-16 w-100">
              <div class="image shrink-0 overflow-hidden radius-8">
                <img src="../assets/images/ticket/img-3.png" alt="Place" class="img-fluid w-100 h-100 object-fit-cover">
              </div>
      
              <div class="content flex-grow">
                <h4>Taj Mahal</h4>
                <p class="d-flex align-items-center gap-04 location mt-04">
                  <img src="../assets/svg/map-marker.svg" alt="icon">
                  Uttar Pradesh, India 
                </p>
                <p class="rating d-flex align-items-center gap-04 mt-16">
                  <img src="../assets/svg/star-yellow.svg" alt="icon">
                  4.4 <span>(41 Reviews)</span>
                </p>
              </div>
            </div>

            <!-- card-footer -->
            <div class="card-footer d-flex align-items-center justify-content-between">
              <div>
                <p>Total Price</p>
                <h3>$320</h3>
              </div>

              <a href="<?php echo base_url('index/ticket_detail');?>">Detail</a>
            </div>

          </div>

          <!-- item 3 -->
          <div class="ticket-card radius-8">
            <!-- card-title -->
            <div class="card-title d-flex align-items-center justify-content-between">
              <p>22 march 2022, Thu</p>
              <span>Will Come</span>
            </div>

            <!-- card-item -->
            <div class="card-item d-flex align-items-center gap-16 w-100">
              <div class="image shrink-0 overflow-hidden radius-8">
                <img src="../assets/images/ticket/img-2.png" alt="Place" class="img-fluid w-100 h-100 object-fit-cover">
              </div>
      
              <div class="content flex-grow">
                <h4>The Lalit New Delhi</h4>
                <p class="d-flex align-items-center gap-04 location mt-04">
                  <img src="../assets/svg/map-marker.svg" alt="icon">
                  Uttar Pradesh, India 
                </p>
                <p class="rating d-flex align-items-center gap-04 mt-16">
                  <img src="../assets/svg/star-yellow.svg" alt="icon">
                  4.4 <span>(41 Reviews)</span>
                </p>
              </div>
            </div>

            <!-- card-footer -->
            <div class="card-footer d-flex align-items-center justify-content-between">
              <div>
                <p>Total Price</p>
                <h3>$320</h3>
              </div>

              <a href="<?php echo base_url('index/ticket_detail');?>">Detail</a>
            </div>

          </div>
        </div>
        <div class="tab-pane fade" id="history-tab-pane" role="tabpanel" aria-labelledby="history-tab" tabindex="0">
          <!-- item 1 -->
          <div class="ticket-card history radius-8">
            <!-- card-title -->
            <div class="card-title d-flex align-items-center justify-content-between">
              <p>22 march 2022, Thu</p>
              <span>Finished</span>
            </div>

            <!-- card-item -->
            <div class="card-item d-flex align-items-center gap-16 w-100">
              <div class="image shrink-0 overflow-hidden radius-8">
                <img src="../assets/images/ticket/img-4.png" alt="Place" class="img-fluid w-100 h-100 object-fit-cover">
              </div>
      
              <div class="content flex-grow">
                <h4>The Lalit New Delhi</h4>
                <p class="d-flex align-items-center gap-04 location mt-04">
                  <img src="../assets/svg/map-marker.svg" alt="icon">
                  Uttar Pradesh, India 
                </p>
                <p class="rating d-flex align-items-center gap-04 mt-16">
                  <img src="../assets/svg/star-yellow.svg" alt="icon">
                  4.4 <span>(41 Reviews)</span>
                </p>
              </div>
            </div>

            <!-- card-footer -->
            <div class="card-footer">
              <div class="top d-flex align-items-center justify-content-between">
                <div>
                  <p>Total Price</p>
                  <h3>$320</h3>
                </div>
  
                <button type="button" class="rating" data-bs-toggle="modal" data-bs-target="#reviewModal">Rating</button>
              </div>
              <a href="<?php echo base_url('index/ticket_detail');?>">Detail</a>
            </div>

          </div>

          <!-- item 2 -->
          <div class="ticket-card history radius-8">
            <!-- card-title -->
            <div class="card-title d-flex align-items-center justify-content-between">
              <p>22 march 2022, Thu</p>
              <span>Finished</span>
            </div>

            <!-- card-item -->
            <div class="card-item d-flex align-items-center gap-16 w-100">
              <div class="image shrink-0 overflow-hidden radius-8">
                <img src="../assets/images/ticket/img-2.png" alt="Place" class="img-fluid w-100 h-100 object-fit-cover">
              </div>
      
              <div class="content flex-grow">
                <h4>The Lalit New Delhi</h4>
                <p class="d-flex align-items-center gap-04 location mt-04">
                  <img src="../assets/svg/map-marker.svg" alt="icon">
                  Uttar Pradesh, India 
                </p>
                <p class="rating d-flex align-items-center gap-04 mt-16">
                  <img src="../assets/svg/star-yellow.svg" alt="icon">
                  4.4 <span>(41 Reviews)</span>
                </p>
              </div>
            </div>

            <!-- card-footer -->
            <div class="card-footer">
              <div class="top d-flex align-items-center justify-content-between">
                <div>
                  <p>Total Price</p>
                  <h3>$320</h3>
                </div>
  
                <button type="button" class="rating" data-bs-toggle="modal" data-bs-target="#reviewModal">Rating</button>
              </div>
              <a href="<?php echo base_url('index/ticket_detail');?>">Detail</a>
            </div>

          </div>
        </div>
      </div>
    </section>
</main>

  <!-- service modal start -->
  <div class="modal fade reviewModal bottomModal" id="reviewModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="modal-close rounded-full" data-bs-dismiss="modal" aria-label="Close">
            <img src="../assets/svg/close-black.svg" alt="Close">
          </button>
          <h1 class="modal-title">Give a Review</h1>
        </div>
        <div class="modal-body">
          <ul class="ratingW d-flex align-items-center justify-content-center">
            <li class="on">
              <a href="javascript:void(0);">
                <img src="../assets/svg/star-yellow-big.svg" class="star-yellow" alt="Star">
                <img src="../assets/svg/star-gray.svg" class="star-gray" alt="Star">
              </a>
            </li>
            <li class="on">
              <a href="javascript:void(0);">
                <img src="../assets/svg/star-yellow-big.svg" class="star-yellow" alt="Star">
                <img src="../assets/svg/star-gray.svg" class="star-gray" alt="Star">
              </a>
            </li>
            <li class="on">
              <a href="javascript:void(0);">
                <img src="../assets/svg/star-yellow-big.svg" class="star-yellow" alt="Star">
                <img src="../assets/svg/star-gray.svg" class="star-gray" alt="Star">
              </a>
            </li>
            <li>
              <a href="javascript:void(0);">
                <img src="../assets/svg/star-yellow-big.svg" class="star-yellow" alt="Star">
                <img src="../assets/svg/star-gray.svg" class="star-gray" alt="Star">
              </a>
            </li>
            <li>
              <a href="javascript:void(0);">
                <img src="../assets/svg/star-yellow-big.svg" class="star-yellow" alt="Star">
                <img src="../assets/svg/star-gray.svg" class="star-gray" alt="Star">
              </a>
            </li>
          </ul>

          <div class="msg">
            <h6>Detail Review</h6>
            <textarea placeholder="Give a Review"></textarea>
          </div>
          <button type="button" data-bs-dismiss="modal" aria-label="Close" class="btn-primary">Submit</button>
        </div>
      </div>
    </div>
  </div>
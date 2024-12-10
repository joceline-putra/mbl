<main class="profile-main">
    <!-- page-title -->
    <div class="page-title">
      <button type="button" class="back-btn back-page-btn d-flex align-items-center justify-content-center rounded-full">
        <img src="../assets/svg/arrow-left-black.svg" alt="arrow">
      </button>
      <h3 class="main-title">Add New Card</h3>
    </div>

    <!-- add-card start -->
    <section class="add-card p-24 pt-0">
      <form action="#">
        <div class="mb-24">
          <label>Card Number</label>
          <input type="text" placeholder="Enter Card Number" class="input-field">
        </div>
        <div class="mb-24">
          <label>Card Holder Name</label>
          <input type="text" placeholder="Enter Holder Name" class="input-field">
        </div>
        <div class="grid">
          <div>
            <label>Expired</label>
            <input type="text" placeholder="MM/YY" class="input-field">
          </div>
          <div>
            <label>CVC Code</label>
            <input type="text" placeholder="CVC" class="input-field">
          </div>
        </div>
      </form>
    </section>

    <!-- add-card-btn start -->
    <div class="add-card-btn px-24 pt-24 pb-36 bottom-btn" style="margin-bottom:60px;">
      <button type="button" class="btn-primary">Add Card</button>
    </div>
    <!-- add-card-btn end -->
  </main>
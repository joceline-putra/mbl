<main>
    <!-- page-title -->
    <div class="page-title">
      <button type="button" class="back-btn back-page-btn d-flex align-items-center justify-content-center rounded-full">
        <img src="../assets/svg/arrow-left-black.svg" alt="arrow">
      </button>
      <h3 class="main-title">New Address</h3>
    </div>

    <!-- add-address start -->
    <section class="add-address p-24 pt-0">
      <form action="#">
        <div class="mb-24">
          <label>Full Name</label>
          <input type="text" placeholder="Enter Full Name / Home / Office " class="input-field">
        </div>
        <div class="mb-24">
          <label>Country</label>
          <div class="position-relative">
            <img src="../assets/svg/arrow-ios-back.svg" alt="icon" class="icon">
            <select class="input-field">
              <option value="0">Select Country</option>
              <option value="1">America</option>
              <option value="2">Bangladesh</option>
              <option value="3">Canada</option>
              <option value="4">India</option>
              <option value="5">London</option>
            </select>
          </div>
        </div>
        <div class="mb-24">
          <label>City</label>
          <div class="position-relative">
            <img src="../assets/svg/arrow-ios-back.svg" alt="icon" class="icon">
            <select class="input-field">
              <option value="0">Select City</option>
              <option value="1">Dhaka</option>
              <option value="2">Los Angeles</option>
              <option value="3">Wichita</option>
              <option value="4">Kolkata</option>
              <option value="5">Philadelphia</option>
            </select>
          </div>
        </div>
        <div class="mb-24">
          <label>State</label>
          <div class="position-relative">
            <img src="../assets/svg/arrow-ios-back.svg" alt="icon" class="icon">
            <select class="input-field">
              <option value="0">Select State</option>
              <option value="1">Montgomery</option>
              <option value="2">Anchorage</option>
              <option value="3">Chicago</option>
              <option value="4">Louisville</option>
              <option value="5">Detroit</option>
            </select>
          </div>
        </div>
        <div class="mb-24">
          <label>Zip Code</label>
          <input type="text" placeholder="Enter Zip Code" class="input-field">
        </div>
        <div class="mb-32">
          <label>Detail Address</label>
          <textarea placeholder="Enter Your Address" class="input-field"></textarea>
        </div>
        <div style="margin-bottom:60px;">
          <button type="button" class="btn-primary">Save Address</button>
        </div>
      </form>
    </section>
    <!-- add-address end -->
  </main>
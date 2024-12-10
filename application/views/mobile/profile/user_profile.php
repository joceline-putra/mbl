<main class="user-profile">
    <!-- profile-heading start -->
    <section class="user-profile-heading d-flex align-items-center justify-content-between">
      <div class="d-flex align-items-center gap-12">
        <div class="image rounded-full overflow-hidden shrink-0">
          <img src="../assets/images/profile/avatar.png" alt="avatar" class="img-fluid w-100 h-100 object-fit-cover">
        </div>
        <div>
          <h3>Andy Lexsian</h3>
          <p class="d-flex align-items-center gap-04 location mt-04">
            <img src="../assets/svg/map-marker.svg" alt="icon">
            Uttar Pradesh, India 
          </p>
        </div>
      </div>

      <a href="user-info.html" class="edit-info">
        <img src="../assets/svg/edit.svg" alt="icon">
      </a>
    </section>
    <!-- profile-heading end -->

    <!-- user-personal start -->
    <section class="user-personal">
      <!-- Personal Info -->
      <div class="mt-32">
        <h4 class="mb-16">Personal Info</h4>
        <ul class="setting-list">
          <li>
            <a href="user-address.html" class="d-flex align-items-center justify-content-between">
              <div class="d-flex align-items-center gap-12 shrink-0">
                <img src="../assets/svg/location.svg" alt="icon">
                <p>My Address</p>
              </div>
  
              <img src="../assets/svg/chevron-right.svg" alt="Icon">
            </a>
          </li>
          <li>
            <a href="user-payment.html" class="d-flex align-items-center justify-content-between">
              <div class="d-flex align-items-center gap-12 shrink-0">
                <img src="../assets/svg/work.svg" alt="icon">
                <p>Payment Method</p>
              </div>
  
              <img src="../assets/svg/chevron-right.svg" alt="Icon">
            </a>
          </li>
        </ul>
      </div>

      <!-- Security -->
      <div class="mt-32">
        <h4 class="mb-16">Security</h4>
        <ul class="setting-list">
          <li>
            <a href="change-password.html" class="d-flex align-items-center justify-content-between">
              <div class="d-flex align-items-center gap-12 shrink-0">
                <img src="../assets/svg/lock-close.svg" alt="icon">
                <p>Change Password</p>
              </div>
  
              <img src="../assets/svg/chevron-right.svg" alt="Icon">
            </a>
          </li>
          <li>
            <a href="forgot-password.html" class="d-flex align-items-center justify-content-between">
              <div class="d-flex align-items-center gap-12 shrink-0">
                <img src="../assets/svg/lock-open.svg" alt="icon">
                <p>Forgot Password</p>
              </div>
  
              <img src="../assets/svg/chevron-right.svg" alt="Icon">
            </a>
          </li>
          <li>
            <a href="security.html" class="d-flex align-items-center justify-content-between">
              <div class="d-flex align-items-center gap-12 shrink-0">
                <img src="../assets/svg/shield.svg" alt="icon">
                <p>Security</p>
              </div>
  
              <img src="../assets/svg/chevron-right.svg" alt="Icon">
            </a>
          </li>
          <li>
            <a href="notifications.html" class="d-flex align-items-center justify-content-between">
              <div class="d-flex align-items-center gap-12 shrink-0">
                <img src="../assets/svg/bell-black.svg" alt="icon">
                <p>Notifications</p>
              </div>
  
              <img src="../assets/svg/chevron-right.svg" alt="Icon">
            </a>
          </li>
        </ul>
      </div>

      <!-- General -->
      <div class="mt-32">
        <h4 class="mb-16">General</h4>
        <ul class="setting-list">
          <li>
            <a href="user-language.html" class="d-flex align-items-center justify-content-between">
              <div class="d-flex align-items-center gap-12 shrink-0">
                <img src="../assets/svg/globe.svg" alt="icon">
                <p>Language</p>
              </div>
  
              <img src="../assets/svg/chevron-right.svg" alt="Icon">
            </a>
          </li>
          <li>
            <a href="#" class="d-flex align-items-center justify-content-between">
              <div class="d-flex align-items-center gap-12 shrink-0">
                <img src="../assets/svg/trash.svg" alt="icon">
                <p>Clear Cache</p>
              </div>
  
              <small>88 MB</small>
            </a>
          </li>
        </ul>
      </div>

      <!-- About -->
      <div class="mt-32">
        <h4 class="mb-16">About</h4>
        <ul class="setting-list">
          <li>
            <a href="legal-policy.html" class="d-flex align-items-center justify-content-between">
              <div class="d-flex align-items-center gap-12 shrink-0">
                <img src="../assets/svg/shield-round.svg" alt="icon">
                <p>Legal and Policies</p>
              </div>
  
              <img src="../assets/svg/chevron-right.svg" alt="Icon">
            </a>
          </li>
          <li>
            <a href="help-support.html" class="d-flex align-items-center justify-content-between">
              <div class="d-flex align-items-center gap-12 shrink-0">
                <img src="../assets/svg/question.svg" alt="icon">
                <p>Help & Support</p>
              </div>
  
              <img src="../assets/svg/chevron-right.svg" alt="Icon">
            </a>
          </li>
          <li>
            <div class="d-flex align-items-center justify-content-between">
              <div class="d-flex align-items-center gap-12 shrink-0">
                <img src="../assets/svg/activity.svg" alt="icon">
                <p class="mode-text">Dark Mode</p>
              </div>
  
              <label class="toggle-switch">
                <input type="checkbox" class="mode-switch" id="check-mode">
                <span class="slider"></span>
              </label>
            </div>
          </li>
        </ul>
      </div>
    </section>
    <!-- user-personal end -->

    <!-- logout button start -->
    <div class="py-32">
      <button type="button" class="btn-primary-outline" data-bs-toggle="modal" data-bs-target="#logOutModal">Log Out</button>
    </div>
    <!-- logout button end -->

</main>
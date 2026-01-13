  <nav class="nav <?php echo (basename($_SERVER['PHP_SELF']) == 'room-details.php') ? 'visible' : ''; ?>" id="navbar" style="background: white; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
      <div class="nav-container">
        <div class="logo">
          <img
            src="assets/logo/logo_icon.png"
            alt="Dateinam Logo Icon"
            class="logo-img"
          />
          <img
            src="assets/logo/logo_name.png"
            alt="Dateinam Logo Name"
            class="logo-title"
          />
        </div>
        <div class="mobile-menu-toggle" id="mobileToggle">
          <div class="hamburger-line"></div>
          <div class="hamburger-line"></div>
          <div class="hamburger-line"></div>
        </div>
        <ul class="nav-menu" id="navMenu">
          <li><a href="index.php#home">Home</a></li>
          <li><a href="index.php#rooms">Rooms</a></li>
          <li><a href="index.php#amenities">Amenities</a></li>
          <li><a href="index.php#contact">Contact Us</a></li>
        </ul>
      </div>
    </nav>
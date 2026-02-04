<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dateinam Guesthouse - Your Home Away From Home</title>
    <link rel="stylesheet" href="assets/styles/style.css?t=<?php echo time(); ?>" />
    <link rel="stylesheet" href="assets/styles/footer.css" />
    <link rel="stylesheet" href="assets/styles/about.css" />
    <link
      rel="icon"
      href="assets/logo/logo_icon_white_bg_circle.png"
      type="image/png"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    />
  </head>
  <body>
    <div class="floating-elements"></div>
   <?php include 'includes/navbar.php'; ?>

    <section class="hero" id="home">
      <div class="hero-content">
        <h1>Dateinam Guesthouse</h1>
        <p>Experience comfort and peace in the heart of nature</p>
        <a href="#rooms" class="cta-button">Explore Our Rooms</a>
      </div>
    </section>

    <section>
      <div class="container welcome-section">
        <div class="message">
          <div class="section-title">
            <span class="leading-line"></span>Welcome to
          </div>
          <h1 class="font-accent">Dateinam Guesthouse</h1>
          <p>
            Nestled in the picturesque Shillong, Dateinam Guesthouse offers a
            tranquil escape from the hustle and bustle of everyday life.
            <br />
            <br />
            Our homestay boasts a selection of beautifully appointed rooms
            designed to provide the utmost comfort and relaxation.
            <br />
            <br />
            With a dedicated team committed to ensuring your every need is met,
            Dateinam Guesthouse promises a memorable and rejuvenating experience
            for all our guests.
          </p>
        </div>
        <div class="display-image"></div>
      </div>
    </section>

    <section class="section" id="rooms">
      <div class="container">
        <h2 class="section-title">Our Beautiful Rooms</h2>
        <p class="section-subtitle">
          Choose from our carefully designed accommodations
        </p>
        <div class="rooms-grid"></div>
      </div>
    </section>

    <div class="parallax-section" id="amenities">
      <div class="container">
        <h2 class="section-title">Our Amenities</h2>
        <p class="section-subtitle">Everything you need for a perfect stay</p>

        <div class="amenities-grid">
          <div class="amenity-card">
            <div class="amenity-icon"><i class="fas fa-shower"></i></div>
            <h3>Geazers</h3>
            <p>Refreshing outdoor pool with mountain views</p>
          </div>
          <div class="amenity-card">
            <div class="amenity-icon"><i class="fas fa-utensils"></i></div>
            <h3>Food</h3>
            <p>Authentic local and international cuisine</p>
          </div>
          <div class="amenity-card">
            <div class="amenity-icon"><i class="fas fa-car"></i></div>
            <h3>Parking</h3>
            <p>Secure parking space for all guests</p>
          </div>
          <div class="amenity-card">
            <div class="amenity-icon"><i class="fas fa-wifi"></i></div>
            <h3>WiFi</h3>
            <p>High-speed internet throughout the property</p>
          </div>
          <div class="amenity-card">
            <div class="amenity-icon"><i class="fas fa-tv"></i></div>
            <h3>TV</h3>
            <p>Modern equipment for your workout needs</p>
          </div>
          <div class="amenity-card">
            <div class="amenity-icon"><i class="fas fa-leaf"></i></div>
            <h3>Garden & Terrace</h3>
            <p>Beautiful landscaped gardens to relax</p>
          </div>
        </div>
      </div>
    </div>

    <!-- <section class="section" id="policies" style="background: #f8f9fc">
      <div class="container" style="max-width: 1100px; margin: auto">
        <h2 class="section-title">Our Guest Policies</h2>
        <p class="section-subtitle" style="margin-bottom: 3rem">
          To ensure a smooth and comfortable stay
        </p>

        <div
          style="
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
          "
        >
          <div
            class="policy-card"
            style="
              background: white;
              border-radius: 15px;
              padding: 1.5rem;
              box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
            "
          >
            <h4 style="margin-bottom: 0.5rem">
              <i class="fas fa-clock"></i> Check-in
            </h4>
            <p style="color: #555">From 2:00 PM onwards</p>
          </div>

          <div
            class="policy-card"
            style="
              background: white;
              border-radius: 15px;
              padding: 1.5rem;
              box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
            "
          >
            <h4 style="margin-bottom: 0.5rem">
              <i class="fas fa-suitcase"></i> Check-out
            </h4>
            <p style="color: #555">Until 11:00 AM</p>
          </div>

          <div
            class="policy-card"
            style="
              background: white;
              border-radius: 15px;
              padding: 1.5rem;
              box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
            "
          >
            <h4 style="margin-bottom: 0.5rem">
              <i class="fas fa-times"></i> Cancellation
            </h4>
            <p style="color: #555">Free until 24 hours before arrival</p>
          </div>

          <div
            class="policy-card"
            style="
              background: white;
              border-radius: 15px;
              padding: 1.5rem;
              box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
            "
          >
            <h4 style="margin-bottom: 0.5rem">
              <i class="fas fa-smoking-ban"></i> Smoking
            </h4>
            <p style="color: #555">Not allowed inside rooms</p>
          </div>

          <div
            class="policy-card"
            style="
              background: white;
              border-radius: 15px;
              padding: 1.5rem;
              box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
            "
          >
            <h4 style="margin-bottom: 0.5rem">
              <i class="fas fa-paw"></i> Pets
            </h4>
            <p style="color: #555">Allowed on request</p>
          </div>

          <div
            class="policy-card"
            style="
              background: white;
              border-radius: 15px;
              padding: 1.5rem;
              box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
            "
          >
            <h4 style="margin-bottom: 0.5rem">
              <i class="fas fa-volume-xmark"></i> Quiet Hours
            </h4>
            <p style="color: #555">10:00 PM – 7:00 AM</p>
          </div>
        </div>
      </div>
    </section> -->

    <section class="section" id="booking">
      <div class="container">
        <h2 class="section-title">Book Your Stay</h2>
        <p class="section-subtitle">
          We'd love to welcome you to Dateinam Guesthouse
        </p>

        <div class="contact-form">
          <form id="bookingForm">
            <div class="booking_form_input">
              <!-- Full Name -->
              <div class="form-group" style="flex: 1 1 48%">
                <label for="name">Full Name</label>
                <input
                  type="text"
                  id="name"
                  name="name"
                  placeholder="e.g. John Doe"
                  required
                />
              </div>

              <!-- Email -->
              <!-- <div class="form-group" style="flex: 1 1 48%">
                <label for="email">Email Address</label>
                <input
                  type="email"
                  id="email"
                  name="email"
                  placeholder="e.g. john@example.com"
                  required
                />
              </div> -->

              <!-- Phone -->
              <div class="form-group" style="flex: 1 1 32%">
                <label for="phone">Phone Number</label>
                <input
                  type="tel"
                  id="phone"
                  name="phone"
                  placeholder="e.g. +91 9876543210"
                  required
                />
              </div>

              <!-- Check-in -->
              <div class="form-group" style="flex: 1 1 32%">
                <label for="checkin">Check-in Date</label>
                <input type="date" id="checkin" name="checkin" required />
              </div>

              <!-- Check-out -->
              <div class="form-group" style="flex: 1 1 32%">
                <label for="checkout">Check-out Date</label>
                <input type="date" id="checkout" name="checkout" required />
              </div>

              <!-- Room Type -->
              <div class="form-group" style="flex: 1 1 48%">
                <label for="roomtype">Room Type</label>
                <select id="roomtype" name="roomtype" required>
                  <option value="">Choose a Room</option>
                </select>
              </div>

              <!-- Guests -->
              <div class="form-group" style="flex: 1 1 48%">
                <label for="guests">Number of Guests</label>
                <select id="guests" name="guests" required>
                  <option value="">Select</option>
                  <option value="1">1 Guest</option>
                  <option value="2">2 Guests</option>
                  <option value="3">3 Guests</option>
                  <option value="4">4 Guests</option>
                </select>
              </div>

              <!-- Special Requests -->
              <div class="form-group" style="flex: 1 1 100%">
                <label for="message">Special Requests (optional)</label>
                <textarea
                  id="message"
                  name="message"
                  rows="4"
                  placeholder="e.g. Need airport pickup or vegetarian meals..."
                ></textarea>
              </div>
            </div>

            <!-- Book Button -->
            <div style="margin-top: 20px">
              <button
                type="submit"
                class="cta-button"
                style="width: 100%; font-size: 1.1rem"
              >
                Book Now
              </button>
            </div>
          </form>
        </div>
      </div>
    </section>

    <section class="section" id="contact" style="background: #f9f9ff">
      <div class="container">
        <h2 class="section-title">Get in Touch</h2>
        <p class="section-subtitle">
          Whether it's a question, feedback, or help with a reservation — we're
          here for you.
        </p>

        <div
          style="
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            margin-top: 3rem;
            align-items: center;
          "
        >
          <!-- Contact Info Card -->
          <div
            style="
              flex: 1 1 350px;
              background: white;
              border-radius: 20px;
              padding: 2rem;
              box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            "
          >
            <h3 style="margin-bottom: 1.5rem; font-size: 1.5rem; color: #333">
              Contact Information
            </h3>

            <div style="margin-bottom: 1rem">
              <div style="font-size: 1.1rem; margin-bottom: 0.3rem">
                📍 <strong>Address</strong>
              </div>
              <p>
                <a
                  href="https://maps.google.com/?q=New+Shillong,+Meghalaya,+India"
                  target="_blank"
                  rel="noopener"
                  style="
                    color: #667eea;
                    text-decoration: none;
                    position: relative;
                  "
                  onmouseout="this.style.textDecoration='none'"
                >
                  New Shillong, Meghalaya, India
                </a>
              </p>
            </div>

            <div style="margin-bottom: 1rem">
              <div style="font-size: 1.1rem; margin-bottom: 0.3rem">
                📞 <strong>Phone</strong>
              </div>
              <p>
                <a
                  href="tel:+919876543210"
                  style="color: #667eea; text-decoration: none"
                  >+91 98765 43210</a
                >
              </p>
            </div>

            <div style="margin-bottom: 1rem">
              <div style="font-size: 1.1rem; margin-bottom: 0.3rem">
                📧 <strong>Email</strong>
              </div>
              <p>
                <a
                  href="mailto:stay@dateinamguesthouse.com"
                  style="color: #667eea; text-decoration: none"
                  >stay@dateinamguesthouse.com</a
                >
              </p>
            </div>

            <div>
              <div style="font-size: 1.1rem; margin-bottom: 0.3rem">
                🕒 <strong>Hours</strong>
              </div>
              <p style="color: #555">Available 24/7</p>
            </div>
          </div>

          <!-- Google Map Card -->
          <div
            style="
              flex: 1 1 500px;
              border-radius: 20px;
              overflow: hidden;
              box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            "
          >
            <iframe
              src="https://www.google.com/maps?q=New+Shillong+Meghalaya&output=embed"
              width="100%"
              height="350"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
        </div>
      </div>
    </section>

    <!-- Floating Book Now Button -->
    <a href="#booking" class="floating-book-btn">Book Now</a>

    <?php include 'includes/footer.php'; ?>

    <!-- Modals -->
    <div id="roomModal" class="modal">
      <div class="modal-content" id="modalContent"></div>
    </div>

    <script src="assets/rooms.js"></script>
    <script src="assets/main.js?t=<?php echo time(); ?>"></script>
  </body>
</html>

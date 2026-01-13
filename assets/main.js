// Rooms data is loaded from rooms.js
let currentImageIndex = 0;
let currentGallery = [];

// Set current year in footer
document.getElementById("year").textContent = new Date().getFullYear();

// Render rooms dynamically
function renderRooms() {
  const grid = document.querySelector(".rooms-grid");
  grid.innerHTML = "";

  rooms.forEach((room) => {
    const featuresList = room.features
      .map((feature) => `<li>${feature}</li>`)
      .join("");

    const card = document.createElement("div");
    card.className = "room-card";
    card.setAttribute("onclick", `window.location.href='room-details.php?id=${room.id}'`);
    card.innerHTML = `
               <div class="room-image" style="background-image: url('${room.gallery[0]
      }'); background-size: cover; background-position: center;"></div>
              <div class="room-content">
                <h3 class="room-title">${room.name}</h3>
                <ul class="room-features">${featuresList}</ul>
                <div class="price">₹${room.price.toLocaleString()}/night</div>
              </div>
            `;
    grid.appendChild(card);
  });
}
function changeGalleryImage(direction) {
  if (!currentGallery.length) return;

  currentImageIndex += direction;

  if (currentImageIndex < 0) currentImageIndex = currentGallery.length - 1;
  if (currentImageIndex >= currentGallery.length) currentImageIndex = 0;

  const newImage = currentGallery[currentImageIndex];
  const allThumbs = document.querySelectorAll(".modal-thumb");
  const activeThumb = allThumbs[currentImageIndex];

  setModalImage(newImage, activeThumb, currentImageIndex);
}

// Function to set the main image in the modal
function setModalImage(imageUrl, clickedThumb, index) {
  const mainImage = document.getElementById("modalMainImage");
  const thumbs = document.querySelectorAll(".modal-thumb");

  mainImage.src = imageUrl;
  thumbs.forEach((t) => t.classList.remove("active"));
  clickedThumb.classList.add("active");

  currentImageIndex = index;
}

// Function to open the modal with room details
function openModal(roomId) {
  const room = rooms.find((r) => r.id === roomId);
  if (!room) return;

  currentGallery = room.gallery;
  currentImageIndex = 0;

  const modal = document.getElementById("roomModal");
  const modalContent = document.getElementById("modalContent");

  const galleryThumbnails = room.gallery
    .map(
      (img, i) => `
        <img
          src="${img}"
          class="modal-thumb ${i === 0 ? "active" : ""}"
          onclick="setModalImage('${img}', this, ${i})"
        />
      `
    )
    .join("");

  modalContent.innerHTML = `
    <span class="close open_modal_rooms" onclick="closeModal()" >&times;</span>

    <div class="open_modal_rooms_container">
      <!-- Left: Image + Arrows + Gallery -->
      <div class="room_details">
        <div style="position: relative;">
         <div class="modal_image_container"> <img id="modalMainImage" src="${room.gallery[0]
    }"  /></div>
          <button class="gallery_button_left" onclick="changeGalleryImage(-1)"> <i class="fas fa-chevron-left"></i></button>
          <button class="gallery_button_right" onclick="changeGalleryImage(1)"> <i class="fas fa-chevron-right"></i></button>
        </div>

        <div id="modalGallery" >
          ${galleryThumbnails}
        </div>
      </div>

      <!-- Right: Room Details -->
      <div class="modal_gallery">
        <h2 class="mg-b-10">${room.name}</h2>
        <div class="mg-b-10">${room.description || ""}</div>
        <ul class="room_details_list" >
          ${room.features.map((f) => `<li>${f}</li>`).join("")}
        </ul>
        <div class="room_details_price">₹${room.price.toLocaleString()}/night</div>
        <div class="room_details_btn_ctn">
          <button class="cta-button" onclick="scrollToBooking('${room.id
    }')">Book Now</button>
        </div>
      </div>
    </div>
  `;

  modal.style.display = "flex";
  document.body.style.overflow = "hidden";
}

// Function to close the modal
function closeModal() {
  document.getElementById("roomModal").style.display = "none";
  document.body.style.overflow = "auto";
}

// Function to scroll to booking form and set room type
function scrollToBooking(roomId) {
  const formSection = document.getElementById("bookingForm");
  const roomSelect = document.getElementById("roomtype");

  // Set the selected room type
  if (roomSelect) {
    roomSelect.value = roomId;
  }

  // Close modal
  closeModal();

  // Scroll to form smoothly
  if (formSection) {
    formSection.scrollIntoView({
      behavior: "smooth",
      block: "start",
    });
  }
}
// Function to populate room options in the booking form
function populateRoomOptions() {
  const roomSelect = document.getElementById("roomtype");

  // Clear any existing options except the placeholder
  roomSelect.innerHTML = '<option value="">Choose a Room</option>';

  rooms.forEach((room) => {
    const option = document.createElement("option");
    option.value = room.id;
    option.textContent = `${room.name} – ₹${room.price.toLocaleString()}/night`;
    roomSelect.appendChild(option);
  });
}

window.addEventListener("DOMContentLoaded", () => {
  renderRooms();
  populateRoomOptions();
});

// Call it when DOM is loaded
window.addEventListener("DOMContentLoaded", renderRooms);

// Mobile menu toggle functionality
const mobileToggle = document.getElementById("mobileToggle");
const navMenu = document.getElementById("navMenu");

mobileToggle.addEventListener("click", function () {
  this.classList.toggle("active");
  navMenu.classList.toggle("active");
});

// Close mobile menu when clicking on a link
document.querySelectorAll(".nav-menu a").forEach((link) => {
  link.addEventListener("click", function () {
    mobileToggle.classList.remove("active");
    navMenu.classList.remove("active");
  });
});

// Close mobile menu when clicking outside
document.addEventListener("click", function (event) {
  if (!event.target.closest(".nav-container")) {
    mobileToggle.classList.remove("active");
    navMenu.classList.remove("active");
  }
});

// Navigation scroll effect
window.addEventListener("scroll", function () {
  const navbar = document.getElementById("navbar");
  if (window.scrollY > 100) {
    navbar.classList.add("visible");
  } else {
    navbar.classList.remove("visible");
  }
});

// Smooth scrolling for navigation links
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute("href"));
    if (target) {
      target.scrollIntoView({
        behavior: "smooth",
        block: "start",
      });
    }
  });
});

window.addEventListener("click", function (event) {
  if (event.target.classList.contains("modal")) {
    event.target.style.display = "none";
    document.body.style.overflow = "auto";
  }
});

// Form submission
document.getElementById("bookingForm").addEventListener("submit", function (e) {
  e.preventDefault();

  // Collect form data
  const formData = new FormData(this);
  const booking = Object.fromEntries(formData);

  // Calculate total nights and cost
  const checkin = new Date(booking.checkin);
  const checkout = new Date(booking.checkout);
  const nights = Math.ceil((checkout - checkin) / (1000 * 60 * 60 * 24));

  const roomPrices = {
    deluxe: 3500,
    standard: 2500,
    family: 4200,
    executive: 4800,
    single: 1800,
  };

  const totalCost = nights * roomPrices[booking.roomtype] || 0;

  // Show confirmation
  alert(`🎉 Booking Request Submitted!

      Name: ${booking.name}
      Room: ${booking.roomtype.charAt(0).toUpperCase() + booking.roomtype.slice(1)
    } Room
      Check-in: ${booking.checkin}
      Check-out: ${booking.checkout}
      Guests: ${booking.guests}
      Total Nights: ${nights}
      Total Cost: ₹${totalCost.toLocaleString()}

      We'll contact you within 24 hours to confirm your reservation!`);

  // Reset form
  this.reset();
});

// Create floating elements (optimized for mobile)
function createFloatingElements() {
  const container = document.querySelector(".floating-elements");
  const isMobile = window.innerWidth <= 768;
  const elementCount = isMobile ? 8 : 20; // Fewer elements on mobile

  for (let i = 0; i < elementCount; i++) {
    const element = document.createElement("div");
    element.classList.add("floating-element");
    element.style.left = Math.random() * 100 + "%";
    element.style.top = Math.random() * 100 + "%";
    element.style.animationDelay = Math.random() * 10 + "s";
    element.style.animationDuration = Math.random() * 10 + 10 + "s";
    container.appendChild(element);
  }
}

// Initialize floating elements
createFloatingElements();

// Parallax effect (disabled on mobile for better performance)
window.addEventListener("scroll", function () {
  if (window.innerWidth > 768) {
    const scrolled = window.pageYOffset;
    const parallax = document.querySelector(".parallax-section");
    const speed = scrolled * 0.5;
    if (parallax) {
      // parallax.style.backgroundPosition = `center ${speed}px`;
    }
  }
});

// Add touch-friendly interactions
document.querySelectorAll(".room-card").forEach((card) => {
  // Mouse events for desktop
  card.addEventListener("mouseenter", function () {
    if (window.innerWidth > 768) {
      this.style.transform = "translateY(-10px) scale(1.02)";
    }
  });

  card.addEventListener("mouseleave", function () {
    if (window.innerWidth > 768) {
      this.style.transform = "translateY(0) scale(1)";
    }
  });

  // Touch events for mobile
  card.addEventListener("touchstart", function () {
    this.style.transform = "scale(0.98)";
  });

  card.addEventListener("touchend", function () {
    this.style.transform = "scale(1)";
  });
});

// Optimize animations for mobile
function optimizeForDevice() {
  const isMobile = window.innerWidth <= 768;
  const elements = document.querySelectorAll(".room-card, .amenity-card");

  elements.forEach((element) => {
    if (isMobile) {
      // Simpler animations for mobile
      element.style.transition = "all 0.3s ease-out";
    } else {
      // Full animations for desktop
      element.style.transition = "all 0.6s ease-out";
    }
  });
}

// Run optimization on load and resize
optimizeForDevice();
window.addEventListener("resize", optimizeForDevice);

// Animate elements on scroll
function animateOnScroll() {
  const elements = document.querySelectorAll(".room-card, .amenity-card");
  elements.forEach((element) => {
    const elementTop = element.getBoundingClientRect().top;
    const windowHeight = window.innerHeight;

    if (elementTop < windowHeight * 0.8) {
      element.style.opacity = "1";
      element.style.transform = "translateY(0)";
    }
  });
}

// Initial setup for scroll animations
document.querySelectorAll(".room-card, .amenity-card").forEach((element) => {
  element.style.opacity = "0";
  element.style.transform = "translateY(50px)";
  element.style.transition = "all 0.6s ease-out";
});

window.addEventListener("scroll", animateOnScroll);
window.addEventListener("load", animateOnScroll);

// Set minimum date for booking form
const today = new Date().toISOString().split("T")[0];
document.getElementById("checkin").setAttribute("min", today);

document.getElementById("checkin").addEventListener("change", function () {
  const checkinDate = new Date(this.value);
  checkinDate.setDate(checkinDate.getDate() + 1);
  const checkoutMin = checkinDate.toISOString().split("T")[0];
  document.getElementById("checkout").setAttribute("min", checkoutMin);
});

document.getElementById("checkout").addEventListener("change", function () {
  const checkinDate = new Date(document.getElementById("checkin").value);
  const checkoutDate = new Date(this.value);
  if (checkoutDate <= checkinDate) {
    alert("Check-out date must be after Check-in date.");
    this.value = "";
  }
});

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Details</title>
    <link rel="stylesheet" href="assets/styles/style.css" />
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
    <style>
      
        
        .room-container {
            max-width: 1200px;
            margin: 50px auto 0;
            padding: 20px;
        }
        
        .room-details {
            background: white;
            padding: 30px;
            margin-bottom: 40px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        
        .room-header {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin-bottom: 30px;
        }
        
        .room-gallery {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .main-image-container img {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 8px;
        }

        .gallery-thumbnails {
            display: flex;
            gap: 10px;
            overflow-x: auto;
            padding: 5px 0;
        }

        .gallery-thumbnails img {
            width: 80px;
            height: 60px;
            object-fit: cover;
            border-radius: 4px;
            cursor: pointer;
            border: 2px solid transparent;
            transition: all 0.3s;
            position: relative;
        }

        .gallery-thumbnails img::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0);
            transition: background 0.3s;
            border-radius: 4px;
        }

        .gallery-thumbnails img:hover::after {
            background: rgba(0, 0, 0, 0.4);
        }

        .gallery-thumbnails img.active {
            border-color: #007bff;
        }
        
        .room-info h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
        }
        
        .room-info p {
            font-size: 1.2em;
            color: #666;
            margin-bottom: 20px;
        }
        
        .room-specs {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            margin: 20px 0;
        }
        
        .spec {
            padding: 10px;
            background: #f9f9f9;
            border-left: 4px solid #007bff;
        }

        .room-features{
            display: grid;
        }

        .room-features h3 {
            font-size: 1.3em;
            color: #333;
        }

        .room-features ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .room-features li {
            color: #555;
            font-size: 1.1em;
            display: flex;
            align-items: center;
        }

       

        .room-features li::before {
            content: "✓";
            color: #007bff;
            font-weight: bold;
            margin-right: 10px;
            font-size: 1.1em;
        }
        
        .description {
            margin-top: 30px;
            line-height: 1.6;
            color: #555;
        }

        .description h3 {
            font-size: 1.3em;
            margin-bottom: 12px;
            color: #333;
        }

        .other-rooms{
            padding: 0 1.5rem;
        }
        
        .other-rooms h2 {
            font-size: 2em;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #007bff;
        }
        
        .rooms-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 20px;
        }
        
        .room-card {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            cursor: pointer;
            transition: transform 0.3s;
        }
        
        .room-card:hover {
            transform: translateY(-5px);
        }
        
        .room-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        
        .room-card-content {
            padding: 15px;
        }
        
        .room-card h3 {
            font-size: 1.3em;
            margin-bottom: 8px;
        }
        
        .room-card p {
            color: #666;
            font-size: 0.95em;
        }
        
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
            border: none;
            cursor: pointer;
        }
        
        .btn:hover {
            background-color: #0056b3;
        }
        
        @media (max-width: 768px) {
            .room-container {
                padding: 10px;
                margin-top: 30px;
            }

            .room-details {
                padding: 20px;
            }

            .room-header {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .main-image-container img {
                height: 300px;
            }

            .gallery-thumbnails {
                gap: 8px;
            }

            .gallery-thumbnails img {
                width: 70px;
                height: 50px;
            }

            .room-info h1 {
                font-size: 2em;
            }

            .room-info p {
                font-size: 1.1em;
            }

            .room-specs {
                grid-template-columns: 1fr;
                gap: 10px;
            }

            .rooms-grid {
                grid-template-columns: 1fr;
                gap: 15px;
            }

            .room-card {
                margin: 0;
            }
        }

        @media (max-width: 480px) {
            .room-container {
                padding: 5px;
            }

            .room-details {
                padding: 15px;
            }

            .room-gallery {
                gap: 10px;
            }

            .main-image-container img {
                height: 200px;
                border-radius: 6px;
            }

            .gallery-thumbnails {
                gap: 6px;
                padding: 3px 0;
            }

            .gallery-thumbnails img {
                width: 50px;
                height: 40px;
                border-radius: 3px;
            }

            .room-info h1 {
                font-size: 1.6em;
            }

            .room-info p {
                font-size: 0.95em;
            }

            .spec {
                padding: 6px;
                font-size: 0.9em;
            }

            .room-features h3 {
                font-size: 1.1em;
            }

            .room-features li {
                font-size: 0.9em;
                padding: 6px 0;
            }

            .description h3 {
                font-size: 1.1em;
            }

            .other-rooms h2 {
                font-size: 1.4em;
            }

            .rooms-grid {
                gap: 2rem;
                margin-top: 1rem;
            }

            .room-card img {
                height: 150px;
            }

            .room-card h3 {
                font-size: 1.1em;
            }

            .room-card p {
                font-size: 0.85em;
            }
        }
    </style>
</head>
<body>
    <?php include 'includes/navbar.php'; ?>

    <div class="room-container">
        <!-- Room Details Section -->
        <div class="room-details">
            <div class="room-header">
                <div class="room-gallery">
                    <div class="main-image-container">
                        <img id="mainRoomImage" src="" alt="Room">
                    </div>
                    <div class="gallery-thumbnails" id="galleryThumbnails">
                        <!-- Thumbnails will be loaded here -->
                    </div>
                </div>
                <div class="room-info">
                    <h1 id="roomName"></h1>
                    <p id="roomPrice"></p>
                    <div class="room-specs">
                        <div class="spec">
                            <strong>Guests:</strong> <span id="roomGuests"></span>
                        </div>
                        <div class="spec">
                            <strong>Beds:</strong> <span id="roomBeds"></span>
                        </div>
                        <div class="spec">
                            <strong>Size:</strong> <span id="roomSize"></span>
                        </div>
                    </div>
                     <div class="description">
                        <h3>Description</h3>
                        <p id="roomDescription"></p>
                    </div>
                    <div class="room-features">
                        <h3>Features</h3>
                        <ul id="roomFeatures">
                            <!-- Features will be loaded here -->
                        </ul>
                    </div>
                   
                </div>
            </div>
        </div>

        <!-- Other Rooms Section -->
        <div class="other-rooms">
            <h2>Other Rooms</h2>
            <div class="rooms-grid" id="otherRoomsGrid">
                <!-- Other rooms will be loaded here -->
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>

    <script src="assets/rooms.js"></script>
    <script src="assets/main.js"></script>
    <script>
        // Get room ID from URL query parameter
        const urlParams = new URLSearchParams(window.location.search);
        const roomId = urlParams.get('id') || 'deluxe';

        // Display selected room details
        function displayRoomDetails(id) {
            const room = rooms.find(r => r.id === id);
            if (room) {
                // Set main image
                document.getElementById('mainRoomImage').src = room.gallery[0];

                // Populate thumbnails
                const thumbnailsContainer = document.getElementById('galleryThumbnails');
                thumbnailsContainer.innerHTML = '';
                room.gallery.forEach((imgSrc, index) => {
                    const thumb = document.createElement('img');
                    thumb.src = imgSrc;
                    thumb.alt = `${room.name} ${index + 1}`;
                    thumb.className = index === 0 ? 'active' : '';
                    thumb.onclick = () => changeMainImage(imgSrc, thumb);
                    thumbnailsContainer.appendChild(thumb);
                });

                document.getElementById('roomName').textContent = room.name;
                document.getElementById('roomPrice').textContent = room.price;
                document.getElementById('roomGuests').textContent = room.guests;
                document.getElementById('roomBeds').textContent = room.beds;
                document.getElementById('roomSize').textContent = room.size;
                document.getElementById('roomDescription').textContent = room.description;

                // Populate features
                const featuresContainer = document.getElementById('roomFeatures');
                featuresContainer.innerHTML = '';
                if (room.features && room.features.length > 0) {
                    room.features.forEach(feature => {
                        const li = document.createElement('li');
                        li.textContent = feature;
                        featuresContainer.appendChild(li);
                    });
                }
            }
        }

        // Change main image when thumbnail is clicked
        function changeMainImage(src, clickedThumb) {
            document.getElementById('mainRoomImage').src = src;
            // Update active thumbnail
            const thumbs = document.querySelectorAll('.gallery-thumbnails img');
            thumbs.forEach(thumb => thumb.classList.remove('active'));
            clickedThumb.classList.add('active');
        }

        // Display other rooms
        function displayOtherRooms(currentId) {
            const otherRooms = rooms.filter(r => r.id !== currentId);
            const grid = document.getElementById('otherRoomsGrid');
            grid.innerHTML = '';

            otherRooms.forEach(room => {
                const card = document.createElement('div');
                card.className = 'room-card';
                card.innerHTML = `
                    <img src="${room.gallery[0]}" alt="${room.name}">
                    <div class="room-card-content">
                        <h3>${room.name}</h3>
                        <p>${room.price}</p>
                        <button class="btn" onclick="goToRoom('${room.id}')">View Details</button>
                    </div>
                `;
                grid.appendChild(card);
            });
        }

        // Navigate to room details
        function goToRoom(id) {
            window.location.href = `room-details.php?id=${id}`;
        }

        // Initialize page
        displayRoomDetails(roomId);
        displayOtherRooms(roomId);
    </script>
</body>
</html>

<?php 
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RentRide - Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="index services slideshow" href="index services slideshow.css">
    <style>
        /* Add your CSS styles here if you prefer inline styles */
        
        /* Add this CSS to prevent image stretching */
        .service-item img {
            width: 100%;
            height: 200px; /* Set a fixed height for the images */
            object-fit: cover;
        }

        .service-item .slideshow-container img {
            width: 100%;
            height: 200px; /* Set a fixed height for the slideshow images */
            object-fit: cover;
        }

        .service-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .service-item {
            flex: 1 1 calc(33.333% - 20px); /* Adjust as needed */
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .service-item .service-content {
            padding: 10px;
            text-align: center;
        }

        /* Header styling */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #000;
            color: #fff;
        }

        .logo {
            display: flex;
            align-items: left;
        }

        .logo img {
            width: 150px;
            height: auto;
            margin-right: 10px;
        }

        .greeting {
            font-size: 24px;
            color: green;
            margin-left: 20px; /* Adjust the space between the logo and greeting */
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
        }

        .login-button {
            background-color: #ff6600;
            padding: 10px 20px;
            border-radius: 5px;
            color: #fff;
        }

        /* Other styles */
        .login-container {
            display: flex;
            flex: 1;
            align-items: center;
            justify-content: center;
            padding: 20px;
            background: linear-gradient(to right, #000 50%, #f0f0f0 50%);
        }

        .login-form {
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            margin-right: -4px;
        }

        .login-form h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .login-form p {
            font-size: 14px;
            text-align: center;
            margin-bottom: 20px;
        }

        .login-form .form-group {
            margin-bottom: 15px;
        }

        .login-form label {
            display: block;
            margin-bottom: 5px;
        }

        .login-form input[type="text"],
        .login-form input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .login-form .forgot-password {
            display: block;
            text-align: right;
            margin-top: -10px;
            margin-bottom: 10px;
            font-size: 12px;
        }

        .login-form button {
            width: 100%;
            padding: 10px;
            background-color: #000;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .login-form button:hover {
            background-color: #333;
        }

        .login-form .signup-btn {
            display: inline-block;
            width: 100%;
            padding: 10px;
            background-color: #fff;
            color: #000;
            border: 2px solid #000;
            text-align: center;
            border-radius: 4px;
            text-decoration: none;
        }

        .login-form .signup-btn:hover {
            background-color: #f04d22;
            color: #fff;
        }

        .login-image {
            display: none;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: #000;
            color: #fff;
            margin-top: auto;
        }

        /* Responsive Styles */
        @media (min-width: 768px) {
            .login-container {
                flex-direction: row;
            }

            .login-image {
                display: block;
                flex: 1;
                padding-left: 20px;
            }

            .login-image img {
                width: 100%;
                height: auto;
                border-radius: 8px;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <a href="index.php">
                <img src="img/logo.png" alt="RentRide Logo">
            </a>
            <div class="greeting">Hello, <?php echo htmlspecialchars($user_data['user_name']); ?></a></div>
        </div>
        <nav>
            <ul>
                <li><a href="services.html" class="services-button">Services</a></li>
                <li class="dropdown">
                    <a href="vehicle.html" class="vehicle-button">Vehicle</a>
                    <ul class="dropdown-content">
                        <li><a href="cars.html">Cars</a></li>
                        <li><a href="vans.html">Vans</a></li>
                    </ul>
                </li>
                <li><a href="faq.html" class="faq-button">FAQ</a></li>
                <li><a href="terms.html" class="terms-button">Terms & Conditions</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
        <div class="hero-section">
            <h1>Welcome to RentRide</h1>
            <p>Your trusted partner for car rentals. Search, Compare & Save with RentRide.</p>
        </div>
    
        <section class="about">
            <h2>About RentRide</h2>
            <p>RentRide stands at the forefront of the car rental industry, offering unparalleled services globally.
                With a vast network spanning over 60,000 locations worldwide, RentRide ensures that wherever your
                journey takes you, a reliable and comfortable vehicle is always within reach. Our commitment lies in
                providing an effortless and convenient rental experience, designed to meet the diverse needs of
                travelers around the world. Whether you're planning a business trip, a family vacation, or simply
                exploring a new city, RentRide guarantees a seamless process from reservation to return. Our mission is
                rooted in enhancing your travel experience by offering a wide range of vehicles, competitive rates, and
                exceptional customer service. At RentRide, we strive to transform your travels into memorable
                adventures, ensuring every mile you drive is as enjoyable as your destination.</p>
        </section>
    
        <section class="services">
            <h2>Our Services</h2>
            <div class="service-grid">
                <div class="service-item">
                    <div class="slideshow-container">
                        <div class="mySlides">
                            <img src="img/Audi A4.webp" alt="Wide range of vehicles to choose from">
                        </div>
                        <div class="mySlides">
                            <img src="img/bmw 3 series.png" alt="Different models of vehicles">
                        </div>
                        <div class="mySlides">
                            <img src="img/bmw i7.png" alt="Different models of vehicles">
                        </div>
                        <div class="mySlides">
                            <img src="img/Honda City.png" alt="Different models of vehicles">
                        </div>
                    </div>
                    <div class="service-content">
                        <p>Wide range of vehicles to choose from</p>
                    </div>
                </div>
                <div class="service-item">
                    <img src="Img/FlexTime.png" alt="Flexible rental periods">
                    <div class="service-content">
                        <p>Flexible rental periods</p>
                    </div>
                </div>
                <div class="service-item">
                    <img src="Img/Affordable.png" alt="Affordable rates">
                    <div class="service-content">
                        <p>Affordable rates</p>
                    </div>
                </div>
                <div class="service-item">
                    <img src="Img/Cust Support (1).png" alt="24/7 customer support">
                    <div class="service-content">
                        <p>24/7 customer support</p>
                    </div>
                </div>
                <div class="service-item">
                    <img src="Img/On-line (1).png" alt="Easy online booking and cancellations">
                    <div class="service-content">
                        <p>Easy online booking and cancellations</p>
                    </div>
                </div>
            </div>
        </section>
        <script src="index services slideshow.js"></script>

        <section class="reviews">
            <div class="rev-section">
                <h2 class="title">Customer Reviews</h2>
                <div class="review-grid">
                    <div class="review-item">
                        <img src="img/random user img (indian).jpeg" alt="User 1">
                        <div class="review-content">
                            <p class="review-name">Saminy.T</p>
                            <p class="review-location">Cyberjaya, Malaysia</p>
                            <div class="review-rating">★★★★★</div>
                            <p class="review-description">"RentRide made my travel experience so much easier! The
                                booking process was seamless and the car was in great condition."</p>
                        </div>
                    </div>
                    <div class="review-item">
                        <img src="img/random user img (white chocolate).jpeg" alt="User 2">
                        <div class="review-content">
                            <p class="review-name">John D.</p>
                            <p class="review-location">Kuala Lumpur, Malaysia</p>
                            <div class="review-rating">★★★★☆</div>
                            <p class="review-description">"I highly recommend RentRide for anyone looking to rent a car.
                                Excellent service and great prices!"</p>
                        </div>
                    </div>
                    <div class="review-item">
                        <img src="img/some random asian lady.jpeg" alt="User 3">
                        <div class="review-content">
                            <p class="review-name">Emily P.</p>
                            <p class="review-location">Cyberjaya, Malaysia</p>
                            <div class="review-rating">★★★★★</div>
                            <p class="review-description">"RentRide exceeded my expectations with their professional
                                service and vehicle quality."</p>
                        </div>
                    </div>
                    <div class="review-item">
                        <img src="img/random user img (nigga).jpeg" alt="User 4">
                        <div class="review-content">
                            <p class="review-name">David M.</p>
                            <p class="review-location">Kuala Lumpur, Malaysia</p>
                            <div class="review-rating">★★★★★</div>
                            <p class="review-description">"Great experience overall. Booking was simple and the car was
                                clean and comfortable."</p>
                        </div>
                    </div>
                    <div class="review-item">
                        <img src="img/random user img (italian women).jpeg" alt="User 5">
                        <div class="review-content">
                            <p class="review-name">Sophia L.</p>
                            <p class="review-location">Cyberjaya, Malaysia</p>
                            <div class="review-rating">★★★★☆</div>
                            <p class="review-description">"Smooth process from start to finish. Will definitely use
                                RentRide again for my next trip."</p>
                        </div>
                    </div>
                    <div class="review-item">
                        <img src="img/random user img (mexican).jpeg" alt="User 6">
                        <div class="review-content">
                            <p class="review-name">Michael R.</p>
                            <p class="review-location">Kuala Lumpur, Malaysia</p>
                            <div class="review-rating">★★★★★</div>
                            <p class="review-description">"The customer service team was very helpful and responsive.
                                Highly recommend RentRide!"</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer-distributed">
        <div class="footer-left">
            <h3>Rent<span>Ride</span></h3>
            <p class="footer-links">
                <a href="index.html" class="link-1">Home</a>
                <a href="services.html">Services</a>
                <a href="index.html">About</a>
                <a href="faq.html">Faq</a>
                <a href="terms.html">Terms&Conditions</a>
            </p>
            <p class="footer-company-name">RentRide © 2024</p>
        </div>
        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>SO-5-6.Menaraa 1,No 3 Jalan Bangsar</span> KL Eco City, Kuala Lumpur</p>
            </div>
            <div>
                <i class="fa fa-phone"></i>
                <p>+601131386772</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:support@company.com">support@RentRide.com</a></p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-company-about">
                <span>About the company</span>
                Rent Ride: Your trusted partner in seamless car rental experiences, offering a diverse fleet and
                exceptional service tailored to your journey's needs.
            </p>
            <div class="footer-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-github"></i></a>
            </div>
        </div>
    </footer>
</body>

</html>
	


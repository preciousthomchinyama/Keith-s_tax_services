<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taxi Service</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: Arial, sans-serif;
        }

        /* HERO */
        .hero {
            background: url('https://images.unsplash.com/photo-1519003722824-194d4455a60c') no-repeat center center/cover;
            height: 90vh;
            color: white;
            display: flex;
            align-items: center;
            text-align: center;
        }

        .hero-overlay {
            background: rgba(0,0,0,0.6);
            padding: 50px;
            width: 100%;
        }

        .section-title {
            margin-bottom: 40px;
            font-weight: bold;
        }

        .service-card {
            transition: 0.3s;
        }

        .service-card:hover {
            transform: translateY(-5px);
        }

        .footer {
            background: #111;
            color: #ccc;
            padding: 20px;
            text-align: center;
        }

        .btn-custom {
            background: #ffc107;
            border: none;
        }

        .btn-custom:hover {
            background: #e0a800;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Taxi Service</a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#services" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
                <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- HERO -->
<section class="hero">
    <div class="hero-overlay">
        <h1 class="display-4">Reliable Taxi Services</h1>
        <p>Safe, Fast & Affordable Rides Across Malawi</p>
        <a href="#contact" class="btn btn-custom btn-lg mt-3">Book Now</a>
    </div>
</section>

<!-- SERVICES -->
<section id="services" class="py-5">
    <div class="container text-center">
        <h2 class="section-title">Our Services</h2>
        <div class="row">

            <div class="col-md-4">
                <div class="card service-card p-3">
                    <h5>Airport Transfers</h5>
                    <p>Quick and reliable airport pickups and drop-offs.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card service-card p-3">
                    <h5>City Rides</h5>
                    <p>Comfortable transport within the city anytime.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card service-card p-3">
                    <h5>Tours & Travel</h5>
                    <p>Explore Malawi with guided travel services.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ABOUT -->
<section id="about" class="bg-light py-5">
    <div class="container text-center">
        <h2 class="section-title">About Us</h2>
        <p>
            We provide reliable taxi services across Malawi. Our goal is to ensure safe,
            comfortable, and timely transportation for all our clients.
        </p>
    </div>
</section>

<!-- GALLERY -->
<section class="py-5">
    <div class="container text-center">
        <h2 class="section-title">Gallery</h2>
        <div class="row">

            <div class="col-md-4 mb-3">
                <img src="https://images.unsplash.com/photo-1502877338535-766e1452684a" class="img-fluid rounded">
            </div>

            <div class="col-md-4 mb-3">
                <img src="https://images.unsplash.com/photo-1493238792000-8113da705763" class="img-fluid rounded">
            </div>

            <div class="col-md-4 mb-3">
                <img src="https://images.unsplash.com/photo-1511919884226-fd3cad34687c" class="img-fluid rounded">
            </div>

        </div>
    </div>
</section>

<!-- TESTIMONIALS -->
<section class="bg-light py-5">
    <div class="container text-center">
        <h2 class="section-title">What Clients Say</h2>

        <p>"Very reliable service, always on time!"</p>
        <p>"Best taxi experience I've had in Malawi."</p>

    </div>
</section>

<!-- CONTACT -->
<section id="contact" class="py-5">
    <div class="container">
        <h2 class="section-title text-center">Book a Ride</h2>

        <form>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" placeholder="Your Name">
                </div>

                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" placeholder="Phone Number">
                </div>

                <div class="col-12 mb-3">
                    <textarea class="form-control" rows="4" placeholder="Your Message"></textarea>
                </div>

                <div class="col-12 text-center">
                    <button class="btn btn-custom">Submit</button>
                </div>
            </div>
        </form>
    </div>
</section>

<!-- FOOTER -->
<div class="footer">
    <p>© 2026 Taxi Service | All Rights Reserved</p>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
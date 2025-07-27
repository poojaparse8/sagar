<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="./css/style.css">
    <!-- bootstrap links -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- owl carousal -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" />

    <style>
        .banner {
            position: relative;
            background-image: url(./images/banner-img.jpg);
            width: 100%;
            height: 80vh;
            background-position: end;
            background-size: cover;
        }
        .card{
            height: 900px;
        }
    </style>

</head>

<body>
    <div class="wrapper">
        <!-- Banner Section -->
        <div class="banner position-relative">
            <?php require './inc/header.php' ?>
            <div class="d-flex justify-content-center align-items-center h-100 text-light">
                <h1 class="pricing">Pricing</h1>
            </div>
        </div>
        <div class="choose-plan">
            <div class="plan text-center">
                <h2>Choose a plan</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat, excepturi earum consequatur nostrum cumque labore voluptatem porro harum, consectetur praesentium facilis quaerat autem culpa unde. Aut quibusdam aliquid illum sit.</p>
            </div>

            <div class="container-fluid py-5">
                <div class="row g-4 justify-content-center">
                    <!-- Card 1: Basic Package -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="card pricing-card shadow-lg border-0 h-100">
                            <div class="card-body text-center py-5">
                                <h5 class="card-title fw-bold">Basic Package</h5>
                                <p class="card-text text-muted">Perfect for personal shoots.</p>
                                <h2 class="fw-bold">$99</h2>
                                <ul class="list-unstyled mt-3">
                                    <li>1 Hour Session</li>
                                    <li>10 Edited Photos</li>
                                    <li>Online Gallery</li>
                                </ul>
                                <a href="#" class="btn btn-primary mt-4">Book Now</a>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2: Standard Package -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="card pricing-card shadow-lg border-0 h-100">
                            <div class="card-body text-center  py-5">
                                <h5 class="card-title fw-bold">Standard Package</h5>
                                <p class="card-text text-muted">Ideal for small events and families.</p>
                                <h2 class="fw-bold">$199</h2>
                                <ul class="list-unstyled mt-3">
                                    <li>2 Hour Session</li>
                                    <li>20 Edited Photos</li>
                                    <li>Online Gallery & USB</li>
                                </ul>
                                <a href="#" class="btn btn-primary mt-4">Book Now</a>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3: Premium Package -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="card pricing-card shadow-lg border-0 h-100">
                            <div class="card-body text-center  py-5">
                                <h5 class="card-title fw-bold">Premium Package</h5>
                                <p class="card-text text-muted">Great for weddings and special events.</p>
                                <h2 class="fw-bold">$399</h2>
                                <ul class="list-unstyled mt-3">
                                    <li>4 Hour Session</li>
                                    <li>50 Edited Photos</li>
                                    <li>Customized Album</li>
                                </ul>
                                <a href="#" class="btn btn-primary mt-4">Book Now</a>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4: Elite Package -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="card pricing-card shadow-lg border-0 h-100">
                            <div class="card-body text-center  py-5">
                                <h5 class="card-title fw-bold">Elite Package</h5>
                                <p class="card-text text-muted">The ultimate choice for all-day coverage.</p>
                                <h2 class="fw-bold">$599</h2>
                                <ul class="list-unstyled mt-3">
                                    <li>Full-Day Session</li>
                                    <li>100+ Edited Photos</li>
                                    <li>Premium Album & USB</li>
                                </ul>
                                <a href="#" class="btn btn-primary mt-4">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- bootstrap link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jquery link -->
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- owl carousal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- Include GSAP Library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>


</body>

</html>
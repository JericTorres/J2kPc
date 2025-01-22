<?php
session_start(); // Start the session to manage user state

// If the user is not logged in, redirect them to the homepage
if (!isset($_SESSION['username'])) {
    header("Location: ../HOMEPAGE/Home.php");
    exit(); // Ensure no further processing occurs
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>J2K PC HOMEPAGE</title>
    <link rel="stylesheet" href="Home.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="../HOMEPAGE/Home.php">
                <img src="../HOMEPAGE/logo.webp" alt="J2K Logo" style="height: 40px; margin-right: 8px;">
                <span style="color: #00ff00;">J2K</span> Shop
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="itemsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">About</a>
                        <ul class="dropdown-menu" aria-labelledby="itemsDropdown">
                            <li><a class="dropdown-item" href="../Service/service.html">Developer</a></li>
                            <li><a class="dropdown-item" href="#">Contact us</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="itemsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Item Name</a>
                        <ul class="dropdown-menu" aria-labelledby="itemsDropdown">
                            <li><a class="dropdown-item" href="../Product/Processors.php">Processor</a></li>
                            <li><a class="dropdown-item" href="#">Motherboard</a></li>
                            <li><a class="dropdown-item" href="#">Power Supply</a></li>
                            <li><a class="dropdown-item" href="#">Graphics Card</a></li>
                            <li><a class="dropdown-item" href="#">SSD</a></li>
                            <li><a class="dropdown-item" href="#">RAM</a></li>
                            <li><a class="dropdown-item" href="#">Cases</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="brandsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Brands</a>
                        <ul class="dropdown-menu" aria-labelledby="brandsDropdown">
                            <li><a class="dropdown-item" href="#">AMD</a></li>
                            <li><a class="dropdown-item" href="#">Intel</a></li>
                            <li><a class="dropdown-item" href="#">Gigabyte</a></li>
                            <li><a class="dropdown-item" href="#">MSI</a></li>
                            <li><a class="dropdown-item" href="#">Corsair</a></li>
                            <li><a class="dropdown-item" href="#">Kingston</a></li>
                            <li><a class="dropdown-item" href="#">Galax</a></li>
                            <li><a class="dropdown-item" href="#">Gamdias</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Product/cart.html">
                            <i class="fas fa-chart-pie"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <?php if (isset($_SESSION['username'])): ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="userDropdown">
                                    <li><a class="dropdown-item" href="../UserProfile/profile.php">Profile</a></li>
                                    <li><a class="dropdown-item" href="../Signup/logout.php">Logout</a></li>
                                </ul>
                            </li>
                        <?php else: ?>
                        <?php endif; ?>
                    </li>                
                </ul>
            </div>
        </div>
    </nav>

    <!-- Carousel and Content Sections -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="carousel-caption">
                    <div class="row">
                        <div class="col-lg-5 col-md-12 col-12">
                            <div class="banner-info">
                                <h5>Best Sale!</h5>
                                <p>Graphics Card</p>
                                <p>Gigabyte GeForce RTX 3070 Ti</p>
                                <p><a href="../product-card/product-card/index.html" class="btn btn-primary mt-3">Learn More</a></p>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-12 col-12 imgBox" data-hover="GRAPHICS CARD/2.jpg">
                            <img src="GRAPHICS CARD/1.jpg" class="img-fluid" alt="Graphics Card">
                        </div>
                    </div>
                </div>
            </div>
            <!-- More carousel items can be added here -->
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="../HOMEPAGE/Home.js"></script>
</body>
</html>

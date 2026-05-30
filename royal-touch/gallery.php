```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal Touch Hair Salon</title>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            background:#fff0f5;
            font-family:Arial, sans-serif;
        }

        /* Navbar */
        .navbar{
            background:#ff3399;
        }

        .navbar-brand{
            color:white !important;
            font-size:25px;
            font-weight:bold;
        }

        .navbar-brand img{
            width:70px;
            height:70px;
            border-radius:50%;
            object-fit:cover;
        }

        .nav-link{
            color:white !important;
            margin-left:15px;
            font-size:18px;
        }

        .nav-link:hover{
            color:black !important;
        }

        /* Hero Section */
        .hero{
            background:url('banner.jpg');
            background-size:cover;
            background-position:center;
            height:400px;
            display:flex;
            justify-content:center;
            align-items:center;
            color:white;
            text-align:center;
        }

        .hero h1{
            font-size:60px;
            background:rgba(0,0,0,0.5);
            padding:20px;
            border-radius:10px;
        }

        /* Gallery Section */
        .gallery-section{
            padding:60px 0;
        }

        .gallery-title{
            text-align:center;
            color:#ff3399;
            margin-bottom:40px;
            font-weight:bold;
        }

        .gallery-box{
            overflow:hidden;
            border-radius:15px;
            box-shadow:0px 0px 10px gray;
            margin-bottom:30px;
            background:white;
            transition:0.5s;
        }

        .gallery-box img{
            width:100%;
            height:300px;
            object-fit:cover;
            transition:0.5s;
        }

        .gallery-box img:hover{
            transform:scale(1.1);
        }

        .gallery-content{
            padding:15px;
            text-align:center;
        }

        .gallery-content h4{
            color:#ff3399;
            margin-bottom:10px;
        }

        footer{
            background:#ff3399;
            color:white;
            text-align:center;
            padding:20px;
            margin-top:40px;
        }

        footer i{
            margin-right:8px;
        }
    </style>
</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container">

        <a href="#" class="navbar-brand">
            <img src="images/logo.png" alt="logo">
            Royal Touch
        </a>

        <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a href="home.php" class="nav-link">Home</a>
                </li>

                <li class="nav-item">
                    <a href="about_us.php" class="nav-link">About Us</a>
                </li>

                <li class="nav-item">
                    <a href="gallery.php" class="nav-link">Gallery</a>
                </li>

                <li class="nav-item">
                    <a href="appointment.php" class="nav-link">Appointment</a>
                </li>

                <li class="nav-item">
                    <a href="contact_us.php" class="nav-link">Contact Us</a>
                </li>

                <li class="nav-item">
                    <a href="login.php" class="nav-link">Login</a>
                </li>

            </ul>

        </div>
    </div>
</nav>

<!-- Hero Section -->
<div class="hero">
    <h1>Our Hair Salon Gallery</h1>
</div>

<!-- Gallery Section -->
<div class="container gallery-section">

    <h2 class="gallery-title">
        Beautiful Hair Styles
    </h2>

    <div class="row">

        <!-- Image 1 -->
        <div class="col-lg-4 col-md-6">
            <div class="gallery-box">
                <img src="images/g-1.jpg" alt="Hair Style">

                <div class="gallery-content">
                    <h4>Elegant Hair Styling</h4>
                    <p>Professional hair styling for a glamorous and modern look.</p>
                </div>
            </div>
        </div>

        <!-- Image 2 -->
        <div class="col-lg-4 col-md-6">
            <div class="gallery-box">
                <img src="images/g-2.jpg" alt="Hair Style">

                <div class="gallery-content">
                    <h4>Hair Coloring</h4>
                    <p>Trendy hair colors designed to match your unique personality.</p>
                </div>
            </div>
        </div>

        <!-- Image 3 -->
        <div class="col-lg-4 col-md-6">
            <div class="gallery-box">
                <img src="images/g-3.jpg" alt="Hair Style">

                <div class="gallery-content">
                    <h4>Bridal Hair Design</h4>
                    <p>Beautiful bridal hairstyles for weddings and special occasions.</p>
                </div>
            </div>
        </div>

        <!-- Image 4 -->
        <div class="col-lg-4 col-md-6">
            <div class="gallery-box">
                <img src="images/g-4.jpg" alt="Hair Style">

                <div class="gallery-content">
                    <h4>Silky Hair Treatment</h4>
                    <p>Get smooth, shiny, and healthy hair with expert care.</p>
                </div>
            </div>
        </div>

        <!-- Image 5 -->
        <div class="col-lg-4 col-md-6">
            <div class="gallery-box">
                <img src="images/g-5.jpg" alt="Hair Style">

                <div class="gallery-content">
                    <h4>Modern Hair Cut</h4>
                    <p>Stylish haircuts inspired by the latest beauty trends.</p>
                </div>
            </div>
        </div>

        <!-- Image 6 -->
        <div class="col-lg-4 col-md-6">
            <div class="gallery-box">
                <img src="images/g-6.jpg" alt="Hair Style">

                <div class="gallery-content">
                    <h4>Luxury Hair Spa</h4>
                    <p>Relax and refresh your hair with premium spa treatments.</p>
                </div>
            </div>
        </div>
       
<!-- Image 7 -->
<div class="col-lg-4 col-md-6">
    <div class="gallery-box">
        <img src="images/g-7.jpg" alt="Hair Style">

        <div class="gallery-content">
            <h4>Curly Hair Styling</h4>
            <p>Stylish curly hairstyles for a bold and fashionable appearance.</p>
        </div>
    </div>
</div>

<!-- Image 8 -->
<div class="col-lg-4 col-md-6">
    <div class="gallery-box">
        <img src="images/g-8.jpg" alt="Hair Style">

        <div class="gallery-content">
            <h4>Hair Smoothening</h4>
            <p>Professional smoothening treatments for silky and shiny hair.</p>
        </div>
    </div>
</div>

<!-- Image 9 -->
<div class="col-lg-4 col-md-6">
    <div class="gallery-box">
        <img src="images/g-9.jpg" alt="Hair Style">

        <div class="gallery-content">
            <h4>Party Hair Makeover</h4>
            <p>Trendy party hairstyles designed for special events and celebrations.</p>
        </div>
    </div>
</div>



    </div>
</div>

<!-- Footer -->
<footer>

    <h5>Royal Touch</h5>

    <p>Beautiful Hair, Beautiful You.</p>

    <p>
        <i class="bi bi-telephone-fill"></i>
        +91 7847384787
    </p>

    <p>
        <i class="bi bi-envelope-fill"></i>
        royaltouch223@gmail.com
    </p>

    <p>
        <i class="bi bi-instagram"></i>
        @royal_touch
    </p>

    <p>
        © 2026 Royal Touch | All Rights Reserved
    </p>

</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
```

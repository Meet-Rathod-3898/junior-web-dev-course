<?php
include 'connect.php';

if(isset($_POST['book']))
  {
     $fullname=$_POST['fullname'];
        $email=$_POST['email'];
           $phone=$_POST['phone'];  
            $services=$_POST['services'];  
             $date=$_POST['app_date'];  
              $time=$_POST['app_time'];   
             $message=$_POST['message'];

      $query="INSERT INTO appointment(fullname,email,phone,services,app_date,app_time,message) VALUES
     ('$fullname','$email','$phone','$services','$date','$time','$message') ";
     $data= mysqli_query($con,$query);
     if($data){
        echo"<script>alert('appointment booked seccessfully')</script>";
     }
     else{
        echo"<script>alert('appointment booked failed')</script>";
     }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
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

        /* FORM SECTION */
        .appointment-box{
            background:white;
            padding:30px;
            border-radius:15px;
            box-shadow:0px 0px 10px gray;
            margin-top:50px;
            margin-bottom:50px;
        }
        .heading{
            text-align:center;
            color:#ff3399;
            margin-bottom:25px;
        }
        .btn-custom{
            background:#ff3399;
            color:white;
            width:100%;
        }
          .btn-custom:hover{
            background:#e60073;
            color:white;
          }

         /* FOOTER */
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
    <!-- NAVBAR -->
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

<!-- Appoitment FORM -->
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="appointment-box">
                <h2 class="heading">
                    Book Your Appointment
                </h2>
                <form method="post">
            <div class="mb-3">
                <label >Full Name</label>
                <input type="text" name="fullname" class="form-control" required>
            </div>
              <div class="mb-3">
                <label >Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
              <div class="mb-3">
                <label >Phone Number</label>
                <input type="number" name="phone" class="form-control" required>
            </div>
            <div class="mb-3">
                <label >Select Services</label>
                <select name="services" class="form-select" required>
                 
<option value="">Choose Services</option>
<option>Men Hair Cut</option>
<option>Beard Styling</option>
<option>Hair Coloring</option>
<option>Hair Smoothening</option>
<option>Hair Spa</option>
<option>Keratin Treatment</option>
<option>Head Massage</option>
<option>Facial</option>
<option>Shaving</option>
<option>Classic Hair Styling</option>
<option>Modern Fade Cut</option>
<option>Hair Wash</option>
<option>Dandruff Treatment</option>
<option>Bridal Groom Package</option>
<option>Skin Cleanup</option>

                </select>
            </div>
              <div class="mb-3">
                <label >appointment Date</label>
                <input type="date" name="app_date" class="form-control" required>
            </div>
              <div class="mb-3">
                <label >appointment Time</label>
                <input type="time" name="app_time" class="form-control" required>
            </div>
              <div class="mb-3">
                <label >Message</label>
                <textarea name="message" rows="4" class="form-control" required></textarea>
            </div>
       <button type="submit" name="book" class="btn btn-custom">
                        Book Appointment
                    </button>
                    
            </form>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
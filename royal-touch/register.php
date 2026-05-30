<?php
include 'connect.php';

if(isset($_POST['register']))
{
    $fullname = trim($_POST['fullname']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Check empty fields
    if($fullname == "" || $email == "" || $password == "")
    {
        echo "<script>alert('All fields are required');</script>";
    }
    else
    {
        // Check email already exists
        $check_query = "SELECT * FROM register WHERE email = ?";
        $check_stmt = mysqli_prepare($con, $check_query);
        mysqli_stmt_bind_param($check_stmt, "s", $email);
        mysqli_stmt_execute($check_stmt);

        $result = mysqli_stmt_get_result($check_stmt);

        if(mysqli_num_rows($result) > 0)
        {
            echo "<script>alert('Email already exists');</script>";
        }
        else
        {
            // Encrypt password
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Insert data
            $query = "INSERT INTO register(fullname,email,password) VALUES(?,?,?)";

            $stmt = mysqli_prepare($con, $query);

            mysqli_stmt_bind_param($stmt, "sss", $fullname, $email, $hashed_password);

            $data = mysqli_stmt_execute($stmt);

            if($data)
            {
                echo "<script>alert('Registration successful');</script>";
            }
            else
            {
                echo "<script>alert('Registration failed');</script>";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
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
            width:60px;
            height:60px;
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

        /* Register Box */
        .register-box{
            width:400px;
            background:white;
            padding:30px;
            border-radius:15px;
            margin:auto;
            margin-top:70px;
            box-shadow:0px 0px 10px gray;
        }

        h1{
            text-align:center;
            color:#ff3399;
            margin-bottom:20px;
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
    </style>
</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container">

        <a href="#" class="navbar-brand">
            <img src="images/logo.png" alt="">
            Royal Touch
        </a>

        <button class="navbar-toggler bg-light"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">

            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a href="home.php" class="nav-link">HOME</a>
                </li>

                <li class="nav-item">
                    <a href="about.php" class="nav-link">About Us</a>
                </li>

                <li class="nav-item">
                    <a href="gallery.php" class="nav-link">Gallery</a>
                </li>

                <li class="nav-item">
                    <a href="appointment.php" class="nav-link">Book Appointment</a>
                </li>

                <li class="nav-item">
                    <a href="contact.php" class="nav-link">Contact Us</a>
                </li>

            </ul>

        </div>

    </div>
</nav>

<!-- Registration Form -->
<div class="register-box">

    <h1>Create Account</h1>

    <form action="" method="post">

        <div class="mb-3">
            <label>Full Name</label>
            <input type="text"
                   name="fullname"
                   class="form-control"
                   required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email"
                   name="email"
                   class="form-control"
                   required>
        </div>

        <div class="mb-3">
            <label>Password</label>
            <input type="password"
                   name="password"
                   class="form-control"
                   required>
        </div>

        <button type="submit"
                name="register"
                class="btn btn-custom">
            Register
        </button>

    </form>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
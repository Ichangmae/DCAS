<?php
// Check if admin is logged in, if not, redirect to login page
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: admin_login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN PANEL</title>
    <!-- Add your CSS and JavaScript files here -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
  body {
            background: url("img/admin.pnl.jpg") no-repeat;
            background-size: cover;
            background-position: center;
            height: 100vh;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: transparent; 
        }

        .nav-link {
            color: #333;
            font-size: 18px; 
        }

        .login-container h1{
            font-size: 50px;
            font-weight: bold;
            text-align: center;
            margin-top: 50px;
        }

        .btn-secondary {
            background-color: transparent;
            border-color: transparent;
            color: red;
            font-family: 'Merriweather', sans-serif;
            font-size: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            padding: 10px 25px;
        }

        .button-container {
            text-align: center;
            margin-top: 50px;
        }

        .btn-primary {
            background-color: transparent;
            border-color: transparent;
            color: black;
            font-weight: bold;
            font-family: 'Merriweather', sans-serif;
            font-size: 30px;
            padding: 10px 10px; 
            margin: 10px; 
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            background: rgba(255, 255, 255, 0.8);
            margin-top: 30px;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link btn btn-secondary" href="admin_login.php"><b>Log Out</b></a>
            </li>
        </ul>
    </nav>

    <div class="container">
        <div class="login-container">
            <h1 class="text-center mb-4">Admin Panel</h1>
        </div>

        <div class="container mt-4">
            <div class="button-container">
                <div class="row">
                    <div class="col-md-4">
                        <a href="patient_records.php" class="btn btn-primary">PATIENT RECORDS</a>
                    </div>
                    <div class="col-md-4">
                        <a href="appointments.php" class="btn btn-primary">APPOINTMENTS</a>
                    </div>
                    <div class="col-md-4">
                        <a href="procedures.php" class="btn btn-primary">PROCEDURES</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <a href="appointment_procedures.php" class="btn btn-primary">APPOINTMENT PROCEDURES</a>
                    </div>
                    <div class="col-md-4">
                        <a href="dentist.php" class="btn btn-primary">DENTIST</a>
                    </div>
                    <div class="col-md-4">
                        <a href="payment.php" class="btn btn-primary">PAYMENT</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APPOINTMENTS</title>
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

    label {
      font-family: 'Merriweather', sans-serif;
      font-size: 20px;
      color: black;
      text-align: left;
    }

    .login-container h1{
        font-size: 50px;
        font-weight: bold;
        text-align: center;
        margin-top: 50px;
        margin-bottom: 50px;
    }

    table {
      font-family: 'Merriweather', sans-serif;
      font-size: 20px;
      color: black;
      border-collapse: collapse;
      width: 100%;
      border: 3px solid black;
      text-align: center;
    }

    th, td {
      border: 3px solid black;
      padding: 15px;
    }

    .button-container {
      color: black;
      font-family: 'Merriweather', sans-serif;
      text-align: center;
    }

    .btn-primary {
      background-color: transparent;
      border-color: transparent;
      color: green;
      font-family: 'Merriweather', sans-serif;
      font-size: 20px;
    }

    .btn-danger {
      background-color: transparent;
      border-color: transparent;
      color: red;
      font-family: 'Merriweather', sans-serif;
      font-size: 20px;
    }

    .btn-secondary{
      background-color: transparent;
      border-color: transparent;
      color: blue;
      font-family: 'Merriweather', sans-serif;
      font-size: 20px;
    }

    .form-group {
      font-family: 'Merriweather', sans-serif;
      font-size: 20px;
      margin-bottom: 20px;
      margin-left: 20px;
    }

    .form-group label {
      font-family: 'Merriweather', sans-serif;
      font-size: 20px;
      margin-bottom: 20px;
      font-weight: bold;
    }

    .form-control {
      width: 90%;
      font-size: 20px;
      padding: 10px 20px;
      height: auto; 
    }
  </style>
</head>
<body>

  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link btn btn-secondary" href="admin_panel.php"><b>Back</b></a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link btn btn-danger" href="admin_login.php"><b>Log Out</b></a>
      </li>
    </ul>
  </nav>

  <div class="container">
    <div class="login-container">
        <h1 class="text-center mb-4">APPOINTMENTS</h1>
    </div>

    <!-- Add Button -->
    <br>
    <br>
    <br>
    <div class="button-container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <a class="btn btn-primary btn-block" href="#"><b>ADD</b></a>
        </div>
      </div>
    </div>

    <!-- Display Table -->
    <div class="table-responsive">
      <table class="table mt-4">
        <thead>
          <tr>
          <th>Appointment ID</th>
          <th>Patient ID</th>
          <th>Date</th>
          <th>Time</th>
          <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <!-- Add table rows dynamically -->
          <tr>
          <td>1001</td>
          <td>1</td>
          <td>24/04/2024</td>
          <td>10:00 am</td>
            <td>
              <button type="button" class="btn btn-secondary">Edit</button>
              <button type="button" class="btn btn-primary">Save</button>
            </td>
          </tr>
          <tr>
          <td>1002</td>
          <td>2</td>
          <td>24/04/2024</td>
          <td>12:00 pm</td>
            <td>
              <button type="button" class="btn btn-secondary">Edit</button>
              <button type="button" class="btn btn-primary">Save</button>
            </td>
          </tr>
          <!-- Add more rows here -->
        </tbody>
      </table>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
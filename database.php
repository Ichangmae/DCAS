<?php
// Database configuration
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "dental_clinic";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to create tables
function createTables($conn) {
    // Create patients table
    $sql = "CREATE TABLE patients (
        PatientID INT AUTO_INCREMENT PRIMARY KEY,
        Patient_Lastname VARCHAR(100) NOT NULL,
        Phone_Number VARCHAR(20) NOT NULL,
        Primary_Dentist VARCHAR(100)
    )";
    $conn->query($sql);

    // Create appointments table
    $sql = "CREATE TABLE appointments (
        AppointmentID INT AUTO_INCREMENT PRIMARY KEY,
        PatientID INT NOT NULL,
        Appointment_Date DATE NOT NULL,
        Appointment_Time TIME NOT NULL,
        FOREIGN KEY (PatientID) REFERENCES patients(PatientID)
    )";
    $conn->query($sql);

    // Create procedures table
    $sql = "CREATE TABLE procedures (
        ProcedureID INT AUTO_INCREMENT PRIMARY KEY,
        Procedure_Name VARCHAR(100) NOT NULL,
        Procedure_Price DECIMAL(10, 2) NOT NULL,
        Procedure_Description TEXT NOT NULL
    )";
    $conn->query($sql);

    // Create appointment_details table
    $sql = "CREATE TABLE appointment_details (
        AppointmentDetailID INT AUTO_INCREMENT PRIMARY KEY,
        AppointmentID INT NOT NULL,
        ProcedureID INT NOT NULL,
        EmployeeID INT NOT NULL,
        FOREIGN KEY (AppointmentID) REFERENCES appointments(AppointmentID),
        FOREIGN KEY (ProcedureID) REFERENCES procedures(ProcedureID)
    )";
    $conn->query($sql);

    // Create dentists table
    $sql = "CREATE TABLE dentists (
        EmployeeID INT AUTO_INCREMENT PRIMARY KEY,
        LastName VARCHAR(100) NOT NULL,
        FirstName VARCHAR(100) NOT NULL,
        Title VARCHAR(100) NOT NULL
    )";
    $conn->query($sql);

    // Create payments table
    $sql = "CREATE TABLE payments (
        PaymentID INT AUTO_INCREMENT PRIMARY KEY,
        AppointmentID INT NOT NULL,
        Payment_Amount DECIMAL(10, 2) NOT NULL,
        Payment_Date DATE NOT NULL,
        FOREIGN KEY (AppointmentID) REFERENCES appointments(AppointmentID)
    )";
    $conn->query($sql);
}

// Function to insert procedure prices
function insertProcedurePrices($conn) {
    $procedures = array(
        array("Dental bonding", 5000),
        array("Dental crowns", 10000),
        array("Bridgework", 15000),
        array("Cosmetic fillings", 3000),
        array("Root canal therapy", 8000),
        array("Invisalign", 80000),
        array("Dental veneers", 12000),
        array("Teeth cleanings", 1500),
        array("Dentures", 20000),
        array("Teeth whitening", 6000),
        array("Tooth extractions", 2000)
    );

    $sql = "INSERT INTO procedures (Procedure_Name, Procedure_Price, Procedure_Description) VALUES (?, ?, '')";

    $stmt = $conn->prepare($sql);

    foreach ($procedures as $procedure) {
        $stmt->bind_param("sd", $procedure[0], $procedure[1]);
        $stmt->execute();
    }

    $stmt->close();
}

// Call the function to create tables
createTables($conn);

// Call the function to insert procedure prices
insertProcedurePrices($conn);

// Close the connection
$conn->close();
?>

<?php
$servername = "localhost";
$username = "root";  // Default for XAMPP
$password = "";      // Default is empty
$database = "student_db"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $_POST['name'];
$roll = $_POST['roll'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$department = $_POST['department'];
$course = $_POST['course'];
$contact = $_POST['contact'];
$address = $_POST['address'];

// Prepare SQL query
$sql = "INSERT INTO students (name, roll, email, dob, gender, department, course, contact, address) 
        VALUES ('$name', '$roll', '$email', '$dob', '$gender', '$department', '$course', '$contact', '$address')";

if ($conn->query($sql) === TRUE) {
    echo "Student registered successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>

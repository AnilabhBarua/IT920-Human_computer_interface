<?php
// Establish database connection
$host = "localhost";
$user = "root";  // Change if necessary
$password = "";  // Change if necessary
$dbname = "student_db";  // Update with your database name

$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to sanitize input
function sanitizeInput($data) {
    return htmlspecialchars(strip_tags(trim($data)));
}

// Validate and sanitize inputs
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = sanitizeInput($_POST["name"]);
    $roll = sanitizeInput($_POST["roll"]);
    $email = sanitizeInput($_POST["email"]);
    $dob = sanitizeInput($_POST["dob"]);
    $gender = sanitizeInput($_POST["gender"]);
    $department = sanitizeInput($_POST["department"]);
    $course = sanitizeInput($_POST["course"]);
    $contact = sanitizeInput($_POST["contact"]);
    $address = sanitizeInput($_POST["address"]);

    // Name validation (only letters and spaces)
    if (!preg_match("/^[a-zA-Z\s]+$/", $name)) {
        $errors[] = "Invalid name: Only letters and spaces allowed.";
    }

    // Roll Number validation (only numbers)
    if (!ctype_digit($roll)) {
        $errors[] = "Invalid roll number: Only numbers allowed.";
    }

    // Email validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    // Date of Birth validation (Must be at least 18 years old)
    $dobYear = date("Y", strtotime($dob));
    $currentYear = date("Y");
    if (($currentYear - $dobYear) < 18) {
        $errors[] = "Invalid DOB: You must be at least 18 years old.";
    }

    // Contact number validation (exactly 10 digits)
    if (!preg_match("/^\d{10}$/", $contact)) {
        $errors[] = "Invalid contact number: Must be 10 digits.";
    }

    // If no errors, insert into database
    if (empty($errors)) {
        $stmt = $conn->prepare("INSERT INTO students (name, roll, email, dob, gender, department, course, contact, address) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssss", $name, $roll, $email, $dob, $gender, $department, $course, $contact, $address);

        if ($stmt->execute()) {
            echo "Registration successful!";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        // Display validation errors
        foreach ($errors as $error) {
            echo "<p style='color: red;'>$error</p>";
        }
    }
}

$conn->close();
?>

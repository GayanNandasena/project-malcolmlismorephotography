<?php
session_start(); // Start the session

// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "malcolm_lismore_photography";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect form data
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email_ad = $_POST['email_ad'];
$event_type = $_POST['event_type'];
$preferred_date = $_POST['preferred_date'];
$preferred_time = $_POST['preferred_time'];
$floating_phone = $_POST['floating_phone'];
$location = $_POST['location'];
$package = $_POST['underline_select'];
$details = $_POST['details'];

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO bookings (first_name, last_name, email_ad, event_type, preferred_date, preferred_time, floating_phone, location, package, details) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssssss", $first_name, $last_name, $email_ad, $event_type, $preferred_date, $preferred_time, $floating_phone, $location, $package, $details);

// Execute the statement
if ($stmt->execute()) {
    $_SESSION['message'] = "Your booking request has been successfully submitted";
    $_SESSION['msg_type'] = "success";
} else {
    $_SESSION['message'] = "Error: " . $stmt->error;
    $_SESSION['msg_type'] = "error";
}

// Close the statement and connection
$stmt->close();
$conn->close();

// Redirect back to the form page
header("Location: " . $_SERVER['HTTP_REFERER']);
exit();
?>

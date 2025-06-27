<?php
session_start();

// Database connection
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "freelancerconnect";  // Your database name

$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get submitted form data
$email = trim($_POST['email']);
$password = $_POST['password'];

// Prevent SQL injection
$email = $conn->real_escape_string($email);

// Fetch user from database
$sql = "SELECT * FROM users WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();

    // Verify password
    if (password_verify($password, $user['password'])) {
        // Successful login
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['email'] = $user['email'];

        header("Location: dashboard.php");
        exit();
    } else {
        echo "❌ Incorrect password.";
    }
} else {
    echo "❌ No user found with that email.";
}

$conn->close();
?>

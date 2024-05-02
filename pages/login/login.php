<?php

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mindful";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$email = $_POST['email'];
$password = $_POST['password'];

// Check if user exists
$sql = "SELECT * FROM users WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();

    // Verify password
    if (password_verify($password, $user['password'])) {
        // Set session variables
        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['name'];

        // Return success
        $response = array(
            'success' => true,
            'message' => 'Login successful.'
        );
        echo json_encode($response);
    } else {
        // Return error
        $response = array(
            'success' => false,
            'message' => 'Invalid password.'
        );
        echo json_encode($response);
    }
} else {
    // Return error
    $response = array(
        'success' => false,
        'message' => 'User not found.'
    );
    echo json_encode($response);
}

$stmt->close();
$conn->close();

?>
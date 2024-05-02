<?php

// Database connection
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "mindful";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are provided
    if (isset($_POST['name'], $_POST['email'], $_POST['password'], $_POST['gender'], $_POST['address'], $_POST['mobile'], $_POST['countryCode'])) {
        // Get form data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $mobile = $_POST['mobile'];
        $countryCode = $_POST['countryCode'];

        // Insert data into the database
        $sql = "INSERT INTO users (name, email, password, gender, address, mobile, country_code)
                VALUES (?, ?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssss", $name, $email, $password, $gender, $address, $mobile, $countryCode);

        if ($stmt->execute()) {
    // Redirect to successful.html
    header("Location: successful.html");
    exit(); // Ensure that no further code is executed after the redirect
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


        $stmt->close();
    } else {
        echo "Error: All fields are required";
    }
} else {
    echo "Error: Form data not submitted";
}

$conn->close();

?>

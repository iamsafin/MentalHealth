<?php
// Check if user is logged in
session_start();
if (!isset($_SESSION['user_id'])) {
    // Redirect to login.html
    header("Location: login.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="nav">
        <div class="branding">
            <img src="./assets/girl_2.png" alt="girl" class="girl" />
            <h1>Mindful<span class="stroke"> Journey</span></h1>
        </div>
        <div class="links">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#software">Software</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="./pages/feedback/feedback.html">Feedback</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>

    <div class="container">
        <h1>Welcome to the Dashboard</h1>
        <p>Welcome, <?php echo $_SESSION['user_name']; ?>!</p>
    </div>
</body>
</html>

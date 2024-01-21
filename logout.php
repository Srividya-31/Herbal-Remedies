<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header('location: login.php');
    exit();
}

// Handle logout confirmation
if (isset($_GET['confirm']) && $_GET['confirm'] === 'yes') {
    // Unset all session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();

    // Redirect to the login page
    header('location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Logout Confirmation</title>
    <style>
        /* Styling for the popup */

        body {
            background: url('background.jpg') no-repeat center center fixed; 
            /* Adjust the background properties as needed */
            background-size: cover;
        }


        .popup {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: transparent; /* Set the background to transparent */
}


        .popup-content {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
        }

        .popup-buttons {
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="popup">
    <div class="popup-content">
        <p>Are you sure you want to logout?</p>
        <div class="popup-buttons">
            <a href="logout.php?confirm=yes">Yes</a>
            <a href="index.html">No</a>
        </div>
    </div>
</div>

</body>
</html>

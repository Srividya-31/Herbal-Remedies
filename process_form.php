<?php
// Connect to the database
$conn = new mysqli('localhost', 'root', '', 'userdatabase');

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}






if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form data
    
    // Assuming you have a database connection here
    // Example: Save form data to the database
    
    $category = $_POST["category"];
    
    // Perform any additional processing as needed
    
    // Redirect to the appropriate visualization page based on the selected category
    switch ($category) {
        case "cold":
            header("Location: visualization_cold.php");
            break;
        case "cough":
            header("Location: visualization_cough.php");
            break;
        case "fever":
            header("Location: visualization_fever.php");
            break;
        // Add cases for other categories as needed
        default:
            // Redirect to a default page or handle accordingly
            header("Location: index.php");
            break;
    }
}



// Close the database connection
$conn->close();
?>

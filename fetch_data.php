<?php
// Connect to the database
$conn = new mysqli('localhost', 'root', '', 'userdatabase');

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the selected category (default to "option1" if not provided)
$selectedCategory = isset($_GET['category']) ? $_GET['category'] : 'cold';

// Fetch data from the database for the selected category
$sql = "SELECT category, COUNT(*) as count FROM user_data WHERE category = '$selectedCategory' GROUP BY category";
$result = $conn->query($sql);

// Convert the result to JSON
$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

echo json_encode($data);

// Close the database connection
$conn->close();
?>

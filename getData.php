<?php

// Function to read CSV file and return data as JSON
function getChartData($filePath)
{
    $categories = [];
    $counts = [];

    if (($handle = fopen($filePath, "r")) !== false) {
        // Read subsequent rows as data
        while (($row = fgetcsv($handle, 1000, ",")) !== false) {
            // Assuming the first column contains categorical values
            $category = $row[0];

            // Count occurrences of each category
            if (!isset($counts[$category])) {
                $counts[$category] = 1;
            } else {
                $counts[$category]++;
            }
        }

        // Extract categories and counts
        $categories = array_keys($counts);
        $data = array_values($counts);

        fclose($handle);
    }

    return json_encode(['categories' => $categories, 'data' => $data]);
}

// Provide the path to your CSV file
$filePath = 'herbal.csv';

// Get chart data
$chartData = getChartData($filePath);

// Output the chart data as JSON
echo $chartData;
?>

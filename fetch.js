// category1ChartScript.js

document.addEventListener('DOMContentLoaded', function () {
    // Load data for Category 1 from PHP file
    fetch('fetch_data.php?category=cold')
        .then(response => response.json())
        .then(data => {
            createChart(data);
        })
        .catch(error => console.error('Error loading chart data:', error));

    // Function to create the bar chart
    function createChart(data) {
        var ctx = document.getElementById('category1BarChart').getContext('2d');
        var category1BarChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Cold'],
                datasets: [{
                    label: 'Data Count',
                    data: data.map(item => item.count),
                    backgroundColor: 'rgba(75, 192, 192, 0.8)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    display: false
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Resize the chart when the window is resized
        window.addEventListener('resize', function () {
            category1BarChart.resize();
        });
    }
});

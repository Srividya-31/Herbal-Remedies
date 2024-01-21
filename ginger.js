// chartScript.js

// Sample data (replace with your quantitative values)
var data = [14,22,35,29,16,30,18,34,30];

// Calculate percentages
var total = data.reduce((sum, value) => sum + value, 0);
var percentages = data.map(value => (value / total) * 100);

// Function to generate random colors
function getRandomColor() {
    var letters = '0123456789ABCDEF';
    var color = '#';
    for (var i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}

// Generate random colors for each bar
var barColors = percentages.map(() => getRandomColor());

// Chart configuration
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Mangalore','Moodbidri','Bantwal','Puttur','Kadaba','Mulki','Ullal','Sulya','Belthangady'],
        datasets: [{
            data: percentages,
            label: 'Data Count',
            backgroundColor: barColors,
            borderColor: 'rgba(255, 255, 255, 1)',
            borderWidth: 5
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        legend: {
            display: true,
            position: 'bottom', // Set the legend position to 'bottom'
            labels: {
                fontColor: 'black'
            }
        },
        title: {
            display: true,
            text: 'Quantitative Data Bar Chart',
            fontColor: 'black'
        }
    }
});

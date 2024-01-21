// pieChartScript.js
document.addEventListener('DOMContentLoaded', function () {
    // Your Chart.js code here
});

// Sample data (replace with your quantitative values)
var data = [14,22,35,29,16,30,18,34,30];

// Function to generate random colors
function getRandomColor() {
    var letters = '0123456789ABCDEF';
    var color = '#';
    for (var i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}

// Generate random colors for each segment
var pieColors = data.map(() => getRandomColor());

// Chart configuration
var ctx = document.getElementById('myPieChart').getContext('2d');
var myPieChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['Mangalore','Moodbidri','Bantwal','Puttur','Kadaba','Mulki','Ullal','Sulya','Belthangady'],
        datasets: [{
            data: data,
            label: 'Data Count',
            backgroundColor: pieColors,
            borderColor: 'rgba(255, 255, 255, 1)',
            borderWidth: 2
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        legend: {
            display: true,
            position: 'bottom',
            labels: {
                fontColor: 'black'
            }
        },
        title: {
            display: true,
            text: 'hii',
            fontColor: 'black'
        }
    }
});

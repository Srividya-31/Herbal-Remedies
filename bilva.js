// radarChartScript.js

// Sample data (replace with your quantitative values)
var data = [14,22,35,29,16,30,18,34,30];

// Function to generate random color
function getRandomColor() {
    var letters = '0123456789ABCDEF';
    var color = '#';
    for (var i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}

// Generate a random color for the radar chart
var radarColor = getRandomColor();

// Chart configuration
var ctx = document.getElementById('myRadarChart').getContext('2d');
var myRadarChart = new Chart(ctx, {
    type: 'radar',
    data: {
        labels: ['Mangalore','Moodbidri','Bantwal','Puttur','Kadaba','Mulki','Ullal','Sulya','Belthangady'],
        datasets: [{
            data: data,
            backgroundColor: radarColor,
            borderColor: 'rgba(255, 255, 255, 1)',
            borderWidth: 2,
            pointRadius: 4,
            pointBackgroundColor: 'white',
            pointBorderColor: 'rgba(255, 255, 255, 1)',
            pointHoverRadius: 6,
            pointHoverBackgroundColor: 'white',
            pointHoverBorderColor: radarColor
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        legend: {
            display: false
        },
        title: {
            display: true,
            text: 'Quantitative Data Radar Chart',
            fontColor: 'black'
        },
        scale: {
            ticks: {
                beginAtZero: true,
                fontColor: 'black'
            },
            pointLabels: {
                fontColor: 'black'
            },
            gridLines: {
                color: 'rgba(0, 0, 0, 1)'
            }
        }
    }
});

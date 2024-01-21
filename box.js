// boxPlotScript.js

document.addEventListener('DOMContentLoaded', function () {
    // Sample data (replace with your quantitative values)
    var data = [
        [10, 20, 30, 40, 50],  // Dataset 1
        [25, 35, 45, 55, 65]   // Dataset 2
        // Add more datasets as needed
    ];

    // Function to generate random color
    function getRandomColor() {
        var letters = '0123456789ABCDEF';
        var color = '#';
        for (var i = 0; i < 6; i++) {
            color += letters[Math.floor(Math.random() * 16)];
        }
        return color;
    }

    // Generate random colors for each dataset
    var boxColors = data.map(() => getRandomColor());

    // Chart configuration
    var ctx = document.getElementById('myBoxPlot').getContext('2d');
    var myBoxPlot = new Chart(ctx, {
        type: 'horizontalBoxplot',
        data: {
            labels: ['Dataset 1', 'Dataset 2'],
            datasets: data.map((dataset, index) => ({
                label: `Dataset ${index + 1}`,
                data: [dataset],
                backgroundColor: boxColors[index],
                borderColor: 'rgba(255, 255, 255, 1)',
                borderWidth: 2,
                itemRadius: 0,
                itemStyle: 'bar',
                outlierRadius: 4,
                outlierColor: 'rgba(255, 255, 255, 1)',
                outlierBorderColor: boxColors[index],
                outlierBorderWidth: 2
            }))
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
                text: 'Box Plot',
                fontColor: 'black'
            },
            scales: {
                x: {
                    type: 'linear',
                    position: 'bottom',
                    grid: {
                        color: 'rgba(0, 0, 0, 0.1)'
                    },
                    ticks: {
                        fontColor: 'black'
                    }
                }
            }
        }
    });
});

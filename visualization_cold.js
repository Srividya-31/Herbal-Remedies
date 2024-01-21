// visualization_cold.js
document.addEventListener('DOMContentLoaded', function () {
    var ctx = document.getElementById('coldChart').getContext('2d');

    // Function to generate an array of random colors
    function getRandomColors(numColors) {
        var colors = [];
        for (var i = 0; i < numColors; i++) {
            colors.push('#' + Math.floor(Math.random() * 16777215).toString(16));
        }
        return colors;
    }

    var data = [99, 50, 45,68,80,70,89];
    var barColors = getRandomColors(data.length);

    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Ajwain','Amla','Bilvapatra','Brahmi','Ginger','Peppermint','Tulasi'
                ],
            datasets: [{
                label: 'Ajwain',
                label1: 'A',
                data: data,
                backgroundColor: barColors,
                borderColor: barColors,
                borderWidth: 0
            }]
        },
        options: {
            animation: {
                duration: 2000,
                easing: 'easeInOutQuart'
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
});

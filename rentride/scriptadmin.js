// script.js

// Setup for Average Resumption Time chart
const resumptionTimeCtx = document.getElementById('resumptionTimeChart').getContext('2d');
const resumptionTimeChart = new Chart(resumptionTimeCtx, {
    type: 'line',
    data: {
        labels: ['Jan', 'Feb', 'March', 'Apr', 'May', 'June'],
        datasets: [{
            label: 'Average Rented Vehicle',
            data: [8, 13, 9, 3, 9,4],
            borderColor: '#00695c',
            fill: false
        }]
    },
    options: {
        responsive: true,
        scales: {
            x: {
                beginAtZero: true
            },
            y: {
                beginAtZero: true
            }
        }
    }
});

// Setup for vehicle Statistics chart
const vehicleStatsCtx = document.getElementById('vehicleStatsChart').getContext('2d');
const vehicleStatsChart = new Chart(vehicleStatsCtx, {
    type: 'doughnut',
    data: {
        labels: ['Cars', 'Vans'],
        datasets: [{
            data: [9, 6],
            backgroundColor: ['#3498db', '#e74c3c']
        }]
    },
    options: {
        responsive: true
    }
});

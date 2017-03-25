<canvas id="myChart4" width="300" height="100"></canvas>
<script src="js/chart.js"></script>
<script>
    var ctx1 = document.getElementById("myChart4");
    var myChart4 = new Chart(ctx1, {
        type: 'bar',
        data: {
            labels: ["IT", "CSE", "MECH", "ETCX"],
            datasets: [{
                    label: 'No of Teacher',
                    data: [12, 19, 22, 16],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(35, 10, 132, 0.2)',
                        'rgba(85, 99, 66, 0.2)',
                        'rgba(54, 162, 235, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(16,99,132,1)',
                        'rgba(255,33,132,1)',
                        'rgba(54, 162, 235, 1)'
                    ],
                    borderWidth: 1
                }]
        },
        options: {
            scales: {
                yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
            },
            title: {
                display: true,
                text: 'BRANCH VS ADMISSION'
            }

        }
    });

</script>


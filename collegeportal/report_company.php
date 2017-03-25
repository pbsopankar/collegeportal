<canvas id="myChart2" width="100%" height="100%"></canvas>
<script src="js/chart.js"></script>
<script>
    var ctx1 = document.getElementById("myChart2");
    var myChart2 = new Chart(ctx1, {
        type: 'pie',
        data: {
            labels: ["2015", "2016", "2017", "2018"],
            datasets: [{
                    label: 'Company Visited',
                    data: [5, 10, 15, 6],
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


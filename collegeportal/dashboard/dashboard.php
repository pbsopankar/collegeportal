<div class="main-content-inner">
    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <i class="ace-icon fa fa-home home-icon"></i>
                <a href="#">Home</a>
            </li>
            <li class="active">Dashboard</li>
        </ul><!-- /.breadcrumb -->
    </div>

    <div class="page-content">
        <div class="page-header">
            <h1>
                Dashboard
                <small>
                    <i class="ace-icon fa fa-angle-double-right"></i>
                    Overview &amp;Statistics 
                </small>
            </h1>
        </div><!-- /.page-header -->

        <div class="row">
            <div class="col-xs-12">
                <div class="row">
                    <div class="space-6"></div>
                    <div class="vspace-12-sm"></div>
                    <div class="col-sm-12">
                        <div class="widget-box">
                            <div class="widget-header widget-header-flat widget-header-small">
                                <h5 class="widget-title">
                                    <i class="ace-icon fa fa-signal"></i>
                                    Daily Analysis 
                                </h5>
                            </div>

                            <div class="widget-body">
                                <div class="widget-main">
                                    <div id="piechart-placeholder"></div>
                                    <div class="hr hr8 hr-dotted"></div>
                                    <div class="clearfix">
                                        <div class="grid3">
                                            <span class="grey">
                                                <i class="ace-icon fa fa-group"></i>
                                                &nbsp;Total User
                                            </span>
                                            <h4 class="bigger pull-right"><?php echo getCounter(MysqlConnection::TBL_REGISTRATION) ?></h4>
                                        </div>

                                        <div class="grid3">
                                            <span class="grey">
                                                <i class="ace-icon fa fa-home"></i>
                                                &nbsp;Total Printer
                                            </span>
                                            <h4 class="bigger pull-right"><?php echo getCounter(MysqlConnection::TBL_PRINTER) ?></h4>
                                        </div>

                                        <div class="grid3">
                                            <span class="grey">
                                                <i class="ace-icon fa fa-cog"></i>
                                                &nbsp;Today's Order
                                            </span>
                                            <h4 class="bigger pull-right"><?php echo getCounter(MysqlConnection::TBL_ORDER) ?></h4>
                                        </div>
                                    </div>
                                    <canvas id="myChart1" width="300" height="100"></canvas>
                                </div><!-- /.widget-main -->
                            </div><!-- /.widget-body -->
                        </div><!-- /.widget-box -->
                    </div><!-- /.col -->
                </div><!-- /.row -->

                <div class="hr hr32 hr-dotted"></div>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.page-content -->
</div>

<canvas id="myChart1" width="300" height="100"></canvas>
<canvas id="myChart2" width="300" height="100"></canvas>
<script src="../js/chart.js"></script>
<script>
    var ctx1 = document.getElementById("myChart1");
    var myChart1 = new Chart(ctx1, {
        type: 'bar',
        data: {
            labels: ["DISK USAGE", "CPU USAGE"],
            datasets: [{
                    label: '# of Votes',
                    data: [12, 19],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
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
                text: 'RESOURCES CONSUMBTION(BEFORE)'
            }

        }
    });
    var ctx2 = document.getElementById("myChart2");
    var myChart2 = new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: ["DISK USAGE", "CPU USAGE"],
            datasets: [{
                    label: '# of Votes',
                    data: [8, 13],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
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
                text: 'Energy-Efficient Job Dispatching Algorithm'
            }

        }
    });
    var ctx3 = document.getElementById("myChart3");
    var myChart3 = new Chart(ctx3, {
        type: 'pie',
        data: {
            labels: [
                "file1.txt",
                "file2.txt",
                "file3.txt"
            ],
            datasets: [
                {
                    data: [10, 8, 9],
                    backgroundColor: [
                        "#FF6384",
                        "#36A2EB",
                        "#FFCE56"
                    ],
                    hoverBackgroundColor: [
                        "#FF6384",
                        "#36A2EB",
                        "#FFCE56"
                    ]
                }]
        },
        options: {
            title: {
                display: true,
                text: 'DUPLICATE FILES(BEFORE)'
            }

        }
    });
    var ctx4 = document.getElementById("myChart4");
    var myChart4 = new Chart(ctx4, {
        type: 'pie',
        data: {
            labels: [
                "file1.txt",
                "file2.txt",
                "file3.txt"
            ],
            datasets: [
                {
                    data: [1, 10, 1],
                    backgroundColor: [
                        "#FF6384",
                        "#36A2EB",
                        "#FFCE56"
                    ],
                    hoverBackgroundColor: [
                        "#FF6384",
                        "#36A2EB",
                        "#FFCE56"
                    ]
                }]
        },
        options: {
            title: {
                display: true,
                text: 'DUPLICATE FILES(AFTER)'
            }

        }
    });
    var ctx5 = document.getElementById("myChart5");
    var myChart5 = new Chart(ctx5, {
        type: 'line',
        data: {
            labels: ["file1.txt", "file2.txt", "file3.txt"],
            datasets: [
                {
                    label: "My First dataset",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "rgba(75,192,192,0.4)",
                    borderColor: "rgba(75,192,192,1)",
                    borderCapStyle: 'butt',
                    borderDash: [],
                    borderDashOffset: 0.0,
                    borderJoinStyle: 'miter',
                    pointBorderColor: "rgba(75,192,192,1)",
                    pointBackgroundColor: "#fff",
                    pointBorderWidth: 1,
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: "rgba(75,192,192,1)",
                    pointHoverBorderColor: "rgba(220,220,220,1)",
                    pointHoverBorderWidth: 2,
                    pointRadius: 1,
                    pointHitRadius: 10,
                    data: [10, 8, 9],
                    spanGaps: false,
                }
            ]
        },
        options: {
            scales: {
                xAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
            },
            title: {
                display: true,
                text: 'FILES OCCURANCE(BEFORW)'
            }

        }
    });
    var ctx6 = document.getElementById("myChart6");
    var myChart6 = new Chart(ctx6, {
        type: 'line',
        data: {
            labels: ["file1.txt", "file2.txt", "file3.txt"],
            datasets: [
                {
                    label: "My First dataset",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "rgba(75,192,192,0.4)",
                    borderColor: "rgba(75,192,192,1)",
                    borderCapStyle: 'butt',
                    borderDash: [],
                    borderDashOffset: 0.0,
                    borderJoinStyle: 'miter',
                    pointBorderColor: "rgba(75,192,192,1)",
                    pointBackgroundColor: "#fff",
                    pointBorderWidth: 1,
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: "rgba(75,192,192,1)",
                    pointHoverBorderColor: "rgba(220,220,220,1)",
                    pointHoverBorderWidth: 2,
                    pointRadius: 1,
                    pointHitRadius: 10,
                    data: [1, 1, 1],
                    spanGaps: false,
                }
            ]
        },
        options: {
            scales: {
                xAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
            },
            title: {
                display: true,
                text: 'FILES OCCURANCE(AFTER)'
            }

        }
    });
    var ctx7 = document.getElementById("myChart7");
    var myChart7 = new Chart(ctx7, {
        type: 'pie',
        data: {
            labels: [
                "file1.txt",
                "file2.txt",
                "file3.txt"
            ],
            datasets: [
                {
                    data: [10, 10, 30],
                    backgroundColor: [
                        "#FF6384",
                        "#36A2EB",
                        "#FFCE56"
                    ],
                    hoverBackgroundColor: [
                        "#FF6384",
                        "#36A2EB",
                        "#FFCE56"
                    ]
                }]
        },
        options: {
            title: {
                display: true,
                text: 'FILE CLUSTRERING(BEFORE)'
            }

        }
    });
    var ctx8 = document.getElementById("myChart8");
    var myChart8 = new Chart(ctx8, {
        type: 'pie',
        data: {
            labels: [
                "file1.txt",
                "file2.txt",
                "file3.txt"
            ],
            datasets: [
                {
                    data: [2, 3, 4],
                    backgroundColor: [
                        "#FF6384",
                        "#36A2EB",
                        "#FFCE56"
                    ],
                    hoverBackgroundColor: [
                        "#FF6384",
                        "#36A2EB",
                        "#FFCE56"
                    ]
                }]
        },
        options: {
            title: {
                display: true,
                text: 'FILE CLUSTRERING(AFTER)'
            }

        }
    });
</script>



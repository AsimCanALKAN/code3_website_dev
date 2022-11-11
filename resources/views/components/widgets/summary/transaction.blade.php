<div class="col-xl-4">
    <div class="card">
        <div class="card-header pb-0 border-0">
            <div>
                <h4 class="card-title mb-2">Transactions</h4>
                <h2 class="mb-0">{{ $data['total_transactions'] }}</h2>
            </div>
            <ul class="card-list">
                <li class="justify-content-end">Profit Transactions<span class="bg-success circle me-0 ms-2"></span></li>
                <li class="justify-content-end">Loss Transactions<span class="bg-danger circle me-0 ms-2"></span></li>
            </ul>
        </div>
        <div class="card-body pb-0 pt-3">
            <div id="transaction-summary-chart" class="bar-chart"></div>
        </div>

        @push('custom-scripts')
        <script>
            function renderSummaryTransaction(){
    
                var options = {
                    series: [
                        {
                            name: 'Income',
                            data: [50, 18, 70, 40],
                            //radius: 12,	
                        }, 
                        {
                        name: 'Outcome',
                        data: [80, 40, 55, 20]
                        }, 
                        
                    ],
                        chart: {
                        type: 'bar',
                        height: 200,
                        
                        toolbar: {
                            show: false,
                        },
                        
                    },
                    plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '57%',
                        borderRadius:12
                    },
                    
                    },
                    states: {
                    hover: {
                        filter: 'none',
                    }
                    },
                    colors:['#80ec67', '#fe7d65'],
                    dataLabels: {
                    enabled: false,
                    },
                    markers: {
                shape: "circle",
                },
                legend: {
                    position: 'top',
                    horizontalAlign: 'right', 
                    show: false,
                    fontSize: '12px',
                    labels: {
                        colors: '#000000',
                    },
                    markers: {
                        width: 18,
                        height: 18,
                        strokeWidth: 0,
                        strokeColor: '#fff',
                        fillColors: undefined,
                        radius: 12,	
                    }
                },
                stroke: {
                    show: true,
                    width: 4,
                    colors: ['transparent']
                },
                grid: {
                    borderColor: '#eee',
                },
                xaxis: {   
                    categories: ['Sun', 'Mon', 'Tue', 'Wed'],
                    labels: {
                        style: {
                            colors: '#3e4954',
                            fontSize: '13px',
                            fontFamily: 'poppins',
                            fontWeight: 400,
                            cssClass: 'apexcharts-xaxis-label',
                        },
                    },
                    crosshairs: {
                        show: false,
                    }
                    },
                    yaxis: {
                        labels: {
                            offsetX:-16,
                            style: {
                                colors: '#3e4954',
                                fontSize: '13px',
                                fontFamily: 'poppins',
                                fontWeight: 400,
                                cssClass: 'apexcharts-xaxis-label',
                            },
                        },
                    },
                    fill: {
                        opacity: 1,
                        colors:['#80ec67', '#fe7d65'],
                    },
                    tooltip: {
                    y: {
                        formatter: function (val) {
                        return "$ " + val + " thousands"
                        }
                    }
                    },
                    responsive: [
                        {
                            breakpoint: 1600,
                            options: {
                                chart: {
                                    height: 400,
                                }
                            },
                        },
                        {
                            breakpoint: 575,
                            options: {
                                chart: {
                                    height: 250,
                                }
                            },
                        }
                    ]
                };

                var chartBar1 = new ApexCharts(document.querySelector("#transaction-summary-chart"), options);
                chartBar1.render();
            }
            renderSummaryTransaction();
        </script>
        @endpush


    </div>
</div>
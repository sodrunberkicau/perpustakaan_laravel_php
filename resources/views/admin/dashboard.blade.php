@extends('components.admin.head')

@section('head')
    <link href="https://cdn.datatables.net/v/bs5/dt-2.0.8/datatables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css"
        integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0=" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js"
        integrity="sha256-+vh8GkaU7C9/wbSLIcwq82tQ2wTf44aOHA8HlBMwRI8=" crossorigin="anonymous"></script>
    <style>
        :root {
            --primary: #3c8dbc;
            --primary-dark: #367fa9;
            --primary-light: #72afd2;
            --success: #00a65a;
            --success-dark: #008d4c;
            --warning: #f39c12;
            --warning-dark: #db8b0b;
            --danger: #dd4b39;
            --danger-dark: #c23321;
            --info: #00c0ef;
            --info-dark: #00acd6;
            --light: #f4f4f4;
            --dark: #222d32;
            --gray: #d2d6de;
            --gray-dark: #aaaaaa;
            --sidebar: #222d32;
            --sidebar-light: #2c3b41;
            --text: #444444;
            --text-light: #666666;
            --border: #e5e5e5;
        }
    </style>
@endsection

@section('content')
    {{-- CONTENT --}}
    <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark"><i class="fas fa-tachometer-alt me-2"></i>Dashboard</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="#" class="text-decoration-none" style="color: var(--primary);"><i class="fas fa-home me-1"></i>Home</a></li>
                            <li class="breadcrumb-item active text-dark" aria-current="page">
                                <i class="fas fa-tachometer-alt me-1"></i>Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        
        <!--begin::App Content-->
        <div class="app-content">
            <!--begin::Container-->
            <div class="container-fluid">
                <!-- Statistics Cards Row -->
                <div class="row mb-4">
                    <div class="col-lg-3 col-md-6 col-12 mb-3">
                        <!-- Request Box -->
                        <div class="info-box bg-gradient-warning shadow">
                            <span class="info-box-icon">
                                <i class="fas fa-book-open text-white"></i>
                            </span>
                            <div class="info-box-content">
                                <span class="info-box-text text-white">Request Peminjaman Baru</span>
                                <span class="info-box-number text-white display-6 fw-bold">{{ $general['request'] }}</span>
                                <div class="progress bg-white bg-opacity-50">
                                    <div class="progress-bar bg-white" style="width: {{ min($general['request'], 100) }}%"></div>
                                </div>
                                <span class="progress-description text-white opacity-75">
                                    <i class="fas fa-clock me-1"></i>Menunggu persetujuan
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-3">
                        <!-- Borrowed Box -->
                        <div class="info-box bg-gradient-primary shadow">
                            <span class="info-box-icon">
                                <i class="fas fa-book text-white"></i>
                            </span>
                            <div class="info-box-content">
                                <span class="info-box-text text-white">Buku Dipinjam</span>
                                <span class="info-box-number text-white display-6 fw-bold">{{ $general['borrowed'] }}</span>
                                <div class="progress bg-white bg-opacity-50">
                                    <div class="progress-bar bg-white" style="width: {{ min($general['borrowed'], 100) }}%"></div>
                                </div>
                                <span class="progress-description text-white opacity-75">
                                    <i class="fas fa-exchange-alt me-1"></i>Sedang dipinjam
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-3">
                        <!-- Accepted Box -->
                        <div class="info-box bg-gradient-success shadow">
                            <span class="info-box-icon">
                                <i class="fas fa-check-circle text-white"></i>
                            </span>
                            <div class="info-box-content">
                                <span class="info-box-text text-white">Peminjaman Sukses</span>
                                <span class="info-box-number text-white display-6 fw-bold">{{ $general['accepted'] }}</span>
                                <div class="progress bg-white bg-opacity-50">
                                    <div class="progress-bar bg-white" style="width: {{ min($general['accepted'], 100) }}%"></div>
                                </div>
                                <span class="progress-description text-white opacity-75">
                                    <i class="fas fa-calendar-check me-1"></i>Selesai dipinjam
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-3">
                        <!-- Vanished Box -->
                        <div class="info-box bg-gradient-danger shadow">
                            <span class="info-box-icon">
                                <i class="fas fa-exclamation-triangle text-white"></i>
                            </span>
                            <div class="info-box-content">
                                <span class="info-box-text text-white">Buku Hilang</span>
                                <span class="info-box-number text-white display-6 fw-bold">{{ $general['vanished'] }}</span>
                                <div class="progress bg-white bg-opacity-50">
                                    <div class="progress-bar bg-white" style="width: {{ min($general['vanished'], 100) }}%"></div>
                                </div>
                                <span class="progress-description text-white opacity-75">
                                    <i class="fas fa-search me-1"></i>Perlu tindak lanjut
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Date Range Information -->
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="callout callout-info bg-gradient-info border-0 shadow">
                            <div class="d-flex align-items-center">
                                <div class="me-3">
                                    <i class="fas fa-calendar-alt fa-2x text-white"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1 text-white"><strong>Rentang Data</strong></h5>
                                    <p class="mb-0 text-white opacity-90">
                                        Data diambil dari <strong>{{ date('F j', strtotime($compareDate)) }}</strong> 
                                        hingga <strong>{{ date('F j, Y', strtotime($today)) }}</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Charts Row -->
                <div class="row mb-4">
                    <!-- Popular Books Chart -->
                    <div class="col-lg-8">
                        <div class="card card-primary card-outline shadow">
                            <div class="card-header border-0 bg-gradient-primary">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h3 class="card-title text-white mb-0">
                                        <i class="fas fa-chart-bar me-2"></i>Buku Paling Populer
                                    </h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool text-white" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div id="column-chart-book" style="min-height: 350px;"></div>
                            </div>
                            <div class="card-footer bg-light">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="description-block border-end">
                                            <h5 class="description-header text-primary fw-bold">
                                                {{ $popularBook->max('borrowed') ?? 0 }}
                                            </h5>
                                            <span class="description-text text-muted">Peminjaman Tertinggi</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="description-block border-end">
                                            <h5 class="description-header text-success fw-bold">
                                                {{ $popularBook->count() ?? 0 }}
                                            </h5>
                                            <span class="description-text text-muted">Total Buku Populer</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="description-block">
                                            <h5 class="description-header text-warning fw-bold">
                                                {{ $popularBook->avg('borrowed') ? round($popularBook->avg('borrowed'), 1) : 0 }}
                                            </h5>
                                            <span class="description-text text-muted">Rata-rata Peminjaman</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Popular Categories Chart -->
                    <div class="col-lg-4">
                        <div class="card card-success card-outline shadow">
                            <div class="card-header border-0 bg-gradient-success">
                                <h3 class="card-title text-white mb-0">
                                    <i class="fas fa-chart-pie me-2"></i>Kategori Paling Populer
                                </h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool text-white" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div id="pie-chart" style="min-height: 350px;"></div>
                            </div>
                            <div class="card-footer bg-light">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <span class="text-muted">Total Kategori: </span>
                                        <span class="fw-bold text-dark">{{ $popularCategories->count() }}</span>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-outline-success">
                                        <i class="fas fa-eye me-1"></i>Detail
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Readers Chart Row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card card-info card-outline shadow">
                            <div class="card-header border-0 bg-gradient-info">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h3 class="card-title text-white mb-0">
                                        <i class="fas fa-users me-2"></i>Pembaca Terbanyak
                                    </h3>
                                    <div class="card-tools">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-tool text-white" data-card-widget="collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                            <button type="button" class="btn btn-tool text-white" data-card-widget="maximize">
                                                <i class="fas fa-expand"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div id="column-chart" style="min-height: 300px;"></div>
                            </div>
                            <div class="card-footer bg-light">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="d-flex align-items-center">
                                            <div class="rounded-circle bg-info d-flex align-items-center justify-content-center me-3" 
                                                 style="width: 50px; height: 50px;">
                                                <i class="fas fa-user-graduate text-white fa-lg"></i>
                                            </div>
                                            <div>
                                                <div class="text-muted small">Pembaca Aktif</div>
                                                <div class="fw-bold text-dark h5 mb-0">{{ $popularUser->count() }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="d-flex align-items-center">
                                            <div class="rounded-circle bg-success d-flex align-items-center justify-content-center me-3" 
                                                 style="width: 50px; height: 50px;">
                                                <i class="fas fa-book-reader text-white fa-lg"></i>
                                            </div>
                                            <div>
                                                <div class="text-muted small">Total Peminjaman</div>
                                                <div class="fw-bold text-dark h5 mb-0">{{ $popularUser->sum('borrowed') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="d-flex align-items-center">
                                            <div class="rounded-circle bg-warning d-flex align-items-center justify-content-center me-3" 
                                                 style="width: 50px; height: 50px;">
                                                <i class="fas fa-star text-white fa-lg"></i>
                                            </div>
                                            <div>
                                                <div class="text-muted small">Rata-rata per User</div>
                                                <div class="fw-bold text-dark h5 mb-0">{{ $popularUser->avg('borrowed') ? round($popularUser->avg('borrowed'), 1) : 0 }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Container-->
        </div>
        <!--end::App Content-->
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <script>
        // Custom AdminLTE Colors
        const adminLTEColors = {
            primary: '#3c8dbc',
            success: '#00a65a',
            warning: '#f39c12',
            danger: '#dd4b39',
            info: '#00c0ef',
            dark: '#222d32',
            light: '#f4f4f4',
            gray: '#d2d6de'
        };

        //-------------
        // - PIE CHART -
        //-------------
        const pie_chart_options = {
            series: [
                @foreach ($popularCategories as $category)
                    {{ $category->borrowed }},
                @endforeach
            ],
            chart: {
                type: "donut",
                height: 350,
                fontFamily: 'inherit',
                toolbar: {
                    show: true,
                    tools: {
                        download: true,
                        selection: false,
                        zoom: false,
                        zoomin: true,
                        zoomout: true,
                        pan: false,
                        reset: true
                    }
                },
                events: {
                    dataPointMouseEnter: function(event, chartContext, config) {
                        // Set text color to black when hovering
                        const legend = document.querySelectorAll('.apexcharts-legend-text');
                        legend.forEach((text, index) => {
                            if (index === config.dataPointIndex) {
                                text.style.fill = '#000000';
                                text.style.fontWeight = '600';
                            }
                        });
                    },
                    dataPointMouseLeave: function(event, chartContext, config) {
                        // Reset text color when leaving
                        const legend = document.querySelectorAll('.apexcharts-legend-text');
                        legend.forEach((text, index) => {
                            if (index === config.dataPointIndex) {
                                text.style.fill = '';
                                text.style.fontWeight = '';
                            }
                        });
                    }
                }
            },
            labels: [
                @foreach ($popularCategories as $category)
                    '{{ $category->category }}',
                @endforeach
            ],
            dataLabels: {
                enabled: true,
                formatter: function(val, opts) {
                    return opts.w.config.series[opts.seriesIndex] + ' pinjam'
                },
                style: {
                    fontSize: '12px',
                    fontFamily: 'inherit',
                    fontWeight: '600',
                    colors: ['#fff']
                },
                dropShadow: {
                    enabled: false
                }
            },
            colors: [
                adminLTEColors.primary,
                adminLTEColors.success,
                adminLTEColors.warning,
                adminLTEColors.danger,
                adminLTEColors.info,
                adminLTEColors.gray,
                '#6f42c1',
                '#fd7e14'
            ],
            legend: {
                position: 'bottom',
                horizontalAlign: 'center',
                fontSize: '14px',
                fontFamily: 'inherit',
                fontWeight: 400,
                labels: {
                    colors: '#333',
                    useSeriesColors: false
                },
                itemMargin: {
                    horizontal: 10,
                    vertical: 5
                },
                onItemHover: {
                    highlightDataSeries: true
                },
                onItemClick: {
                    toggleDataSeries: true
                }
            },
            plotOptions: {
                pie: {
                    donut: {
                        size: '65%',
                        labels: {
                            show: true,
                            total: {
                                show: true,
                                label: 'Total Peminjaman',
                                fontSize: '16px',
                                fontFamily: 'inherit',
                                fontWeight: '600',
                                color: '#000000',
                                formatter: function(w) {
                                    return w.globals.seriesTotals.reduce((a, b) => a + b, 0)
                                }
                            }
                        }
                    }
                }
            },
            tooltip: {
                theme: 'light',
                style: {
                    fontSize: '14px',
                    fontFamily: 'inherit'
                },
                y: {
                    formatter: function(val) {
                        return val + ' peminjaman'
                    }
                },
                onDatasetHover: {
                    highlightDataSeries: true
                }
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        height: 300
                    },
                    legend: {
                        position: 'bottom'
                    }
                }
            }],
            states: {
                hover: {
                    filter: {
                        type: 'darken',
                        value: 0.1
                    }
                },
                active: {
                    allowMultipleDataPointsSelection: false,
                    filter: {
                        type: 'darken',
                        value: 0.35
                    }
                }
            }
        };

        const pie_chart = new ApexCharts(
            document.querySelector("#pie-chart"),
            pie_chart_options,
        );
        pie_chart.render();

        //-----------------
        // - END PIE CHART -
        //-----------------

        //-------------
        // - COLUMN CHART PEMBACA -
        //-------------
        const columnChartOptions = {
            chart: {
                type: "bar",
                height: 300,
                fontFamily: 'inherit',
                toolbar: {
                    show: true,
                    tools: {
                        download: true,
                        selection: true,
                        zoom: true,
                        zoomin: true,
                        zoomout: true,
                        pan: true,
                        reset: true
                    }
                },
                zoom: {
                    enabled: true
                },
                events: {
                    dataPointMouseEnter: function(event, chartContext, config) {
                        const xAxis = document.querySelectorAll('.apexcharts-xaxis-texts-g text');
                        if (xAxis[config.dataPointIndex]) {
                            xAxis[config.dataPointIndex].style.fill = '#000000';
                            xAxis[config.dataPointIndex].style.fontWeight = '600';
                        }
                        
                        const yAxis = document.querySelectorAll('.apexcharts-yaxis-texts-g text');
                        yAxis.forEach(text => {
                            text.style.fill = '#000000';
                            text.style.fontWeight = '600';
                        });
                    },
                    dataPointMouseLeave: function(event, chartContext, config) {
                        const xAxis = document.querySelectorAll('.apexcharts-xaxis-texts-g text');
                        xAxis.forEach(text => {
                            text.style.fill = '';
                            text.style.fontWeight = '';
                        });
                        
                        const yAxis = document.querySelectorAll('.apexcharts-yaxis-texts-g text');
                        yAxis.forEach(text => {
                            text.style.fill = '';
                            text.style.fontWeight = '';
                        });
                    }
                }
            },
            series: [{
                name: "Jumlah Peminjaman",
                data: [
                    @foreach ($popularUser as $user)
                        {
                            x: '{{ Str::limit($user->name, 20) }}',
                            y: {{ $user->borrowed }},
                        },
                    @endforeach
                ]
            }],
            colors: [adminLTEColors.info],
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '55%',
                    endingShape: 'rounded',
                    borderRadius: 4,
                    dataLabels: {
                        position: 'top'
                    }
                }
            },
            dataLabels: {
                enabled: true,
                formatter: function(val) {
                    return val;
                },
                offsetY: -20,
                style: {
                    fontSize: '12px',
                    colors: ["#000000"],
                    fontWeight: '600'
                }
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            xaxis: {
                type: 'category',
                labels: {
                    style: {
                        fontSize: '13px',
                        fontFamily: 'inherit',
                        fontWeight: 500,
                        colors: '#666666'
                    },
                    rotate: -45,
                    rotateAlways: false
                },
                tooltip: {
                    enabled: false
                }
            },
            yaxis: {
                title: {
                    text: 'Jumlah Peminjaman',
                    style: {
                        fontSize: '14px',
                        fontFamily: 'inherit',
                        fontWeight: 600,
                        color: '#000000'
                    }
                },
                labels: {
                    style: {
                        fontSize: '12px',
                        fontFamily: 'inherit',
                        colors: '#666666'
                    }
                }
            },
            fill: {
                opacity: 1,
                type: 'gradient',
                gradient: {
                    shade: 'light',
                    type: "vertical",
                    shadeIntensity: 0.25,
                    gradientToColors: undefined,
                    inverseColors: true,
                    opacityFrom: 0.85,
                    opacityTo: 0.85,
                    stops: [50, 0, 100]
                }
            },
            tooltip: {
                theme: 'light',
                style: {
                    fontSize: '14px',
                    fontFamily: 'inherit',
                    color: '#000000'
                },
                y: {
                    formatter: function(val) {
                        return val + " peminjaman"
                    },
                    title: {
                        formatter: function() {
                            return "Peminjaman:"
                        }
                    }
                },
                x: {
                    show: true,
                    formatter: function(val) {
                        return "Pembaca: " + val;
                    }
                }
            },
            grid: {
                borderColor: '#f1f1f1',
                strokeDashArray: 4
            },
            states: {
                hover: {
                    filter: {
                        type: 'darken',
                        value: 0.1
                    }
                }
            }
        };

        const columnChart = new ApexCharts(
            document.querySelector("#column-chart"),
            columnChartOptions,
        );
        columnChart.render();

        //-----------------
        // - END COLUMN CHART PEMBACA -
        //-----------------

        //-------------
        // - COLUMN CHART BUKU -
        //-------------
        const columnChartBookOptions = {
            chart: {
                type: "bar",
                height: 350,
                fontFamily: 'inherit',
                toolbar: {
                    show: true,
                    tools: {
                        download: true,
                        selection: true,
                        zoom: true,
                        zoomin: true,
                        zoomout: true,
                        pan: true,
                        reset: true
                    }
                },
                zoom: {
                    enabled: true
                },
                events: {
                    dataPointMouseEnter: function(event, chartContext, config) {
                        const xAxis = document.querySelectorAll('.apexcharts-xaxis-texts-g text');
                        xAxis.forEach(text => {
                            text.style.fill = '#000000';
                            text.style.fontWeight = '600';
                        });
                        
                        const yAxis = document.querySelectorAll('.apexcharts-yaxis-texts-g text');
                        if (yAxis[config.dataPointIndex]) {
                            yAxis[config.dataPointIndex].style.fill = '#000000';
                            yAxis[config.dataPointIndex].style.fontWeight = '600';
                        }
                    },
                    dataPointMouseLeave: function(event, chartContext, config) {
                        const xAxis = document.querySelectorAll('.apexcharts-xaxis-texts-g text');
                        xAxis.forEach(text => {
                            text.style.fill = '';
                            text.style.fontWeight = '';
                        });
                        
                        const yAxis = document.querySelectorAll('.apexcharts-yaxis-texts-g text');
                        yAxis.forEach(text => {
                            text.style.fill = '';
                            text.style.fontWeight = '';
                        });
                    }
                }
            },
            series: [{
                name: "Jumlah Dipinjam",
                data: [
                    @foreach ($popularBook as $book)
                        {
                            x: '{{ Str::limit($book->title, 30) }}',
                            y: {{ $book->borrowed }},
                        },
                    @endforeach
                ]
            }],
            colors: [adminLTEColors.primary],
            plotOptions: {
                bar: {
                    horizontal: true,
                    barHeight: '70%',
                    borderRadius: 4,
                    dataLabels: {
                        position: 'right'
                    }
                }
            },
            dataLabels: {
                enabled: true,
                formatter: function(val) {
                    return val;
                },
                offsetX: 10,
                style: {
                    fontSize: '12px',
                    colors: ["#000000"],
                    fontWeight: '600'
                }
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            xaxis: {
                title: {
                    text: 'Jumlah Dipinjam',
                    style: {
                        fontSize: '14px',
                        fontFamily: 'inherit',
                        fontWeight: 600,
                        color: '#000000'
                    }
                },
                labels: {
                    style: {
                        fontSize: '12px',
                        fontFamily: 'inherit',
                        colors: '#666666'
                    }
                }
            },
            yaxis: {
                labels: {
                    style: {
                        fontSize: '12px',
                        fontFamily: 'inherit',
                        fontWeight: 500,
                        colors: '#666666'
                    },
                    maxWidth: 200
                }
            },
            fill: {
                opacity: 1,
                type: 'gradient',
                gradient: {
                    shade: 'light',
                    type: "horizontal",
                    shadeIntensity: 0.25,
                    gradientToColors: undefined,
                    inverseColors: true,
                    opacityFrom: 0.85,
                    opacityTo: 0.85,
                    stops: [50, 0, 100]
                }
            },
            tooltip: {
                theme: 'light',
                style: {
                    fontSize: '14px',
                    fontFamily: 'inherit',
                    color: '#000000'
                },
                y: {
                    formatter: function(val) {
                        return val + " kali dipinjam"
                    },
                    title: {
                        formatter: function() {
                            return "Dipinjam:"
                        }
                    }
                },
                x: {
                    show: true,
                    formatter: function(val) {
                        return "Buku: " + val;
                    }
                }
            },
            grid: {
                borderColor: '#f1f1f1',
                strokeDashArray: 4
            },
            states: {
                hover: {
                    filter: {
                        type: 'darken',
                        value: 0.1
                    }
                }
            }
        };

        const columnChartBook = new ApexCharts(
            document.querySelector("#column-chart-book"),
            columnChartBookOptions,
        );
        columnChartBook.render();

        //-----------------
        // - END COLUMN CHART BUKU -
        //-----------------

        // Initialize card widgets functionality
        $(document).ready(function() {
            // Card collapse functionality
            $('[data-card-widget="collapse"]').click(function() {
                const card = $(this).closest('.card');
                card.toggleClass('collapsed-card');
                $(this).find('i').toggleClass('fa-minus fa-plus');
            });

            // Card maximize functionality
            $('[data-card-widget="maximize"]').click(function() {
                const card = $(this).closest('.card');
                card.toggleClass('maximized-card');
                $(this).find('i').toggleClass('fa-expand fa-compress');
            });

            // Info box hover effects
            $('.info-box').hover(
                function() {
                    $(this).addClass('shadow-lg');
                    $(this).css('transform', 'translateY(-5px)');
                },
                function() {
                    $(this).removeClass('shadow-lg');
                    $(this).css('transform', 'translateY(0)');
                }
            );

            // Update card stats animation
            $('.info-box-number').each(function() {
                const $this = $(this);
                const countTo = parseInt($this.text());
                
                $({ countNum: 0 }).animate({
                    countNum: countTo
                }, {
                    duration: 2000,
                    easing: 'swing',
                    step: function() {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function() {
                        $this.text(this.countNum);
                    }
                });
            });

            // Add black text color on hover for all chart labels
            function setupChartLabelHover() {
                // Setup for pie chart legend
                const pieLegendItems = document.querySelectorAll('#pie-chart .apexcharts-legend-text');
                pieLegendItems.forEach(item => {
                    item.addEventListener('mouseenter', function() {
                        this.style.fill = '#000000';
                        this.style.fontWeight = '600';
                    });
                    item.addEventListener('mouseleave', function() {
                        this.style.fill = '';
                        this.style.fontWeight = '';
                    });
                });

                // Setup for column chart labels
                const columnXLabels = document.querySelectorAll('#column-chart .apexcharts-xaxis-texts-g text');
                const columnYLabels = document.querySelectorAll('#column-chart .apexcharts-yaxis-texts-g text');
                
                columnXLabels.forEach(label => {
                    label.addEventListener('mouseenter', function() {
                        this.style.fill = '#000000';
                        this.style.fontWeight = '600';
                    });
                    label.addEventListener('mouseleave', function() {
                        this.style.fill = '';
                        this.style.fontWeight = '';
                    });
                });

                columnYLabels.forEach(label => {
                    label.addEventListener('mouseenter', function() {
                        this.style.fill = '#000000';
                        this.style.fontWeight = '600';
                    });
                    label.addEventListener('mouseleave', function() {
                        this.style.fill = '';
                        this.style.fontWeight = '';
                    });
                });

                // Setup for book chart labels
                const bookXLabels = document.querySelectorAll('#column-chart-book .apexcharts-xaxis-texts-g text');
                const bookYLabels = document.querySelectorAll('#column-chart-book .apexcharts-yaxis-texts-g text');
                
                bookXLabels.forEach(label => {
                    label.addEventListener('mouseenter', function() {
                        this.style.fill = '#000000';
                        this.style.fontWeight = '600';
                    });
                    label.addEventListener('mouseleave', function() {
                        this.style.fill = '';
                        this.style.fontWeight = '';
                    });
                });

                bookYLabels.forEach(label => {
                    label.addEventListener('mouseenter', function() {
                        this.style.fill = '#000000';
                        this.style.fontWeight = '600';
                    });
                    label.addEventListener('mouseleave', function() {
                        this.style.fill = '';
                        this.style.fontWeight = '';
                    });
                });
            }

            // Run after charts are rendered
            setTimeout(setupChartLabelHover, 1000);
        });
    </script>

    <style>
        /* AdminLTE-inspired styles */
        .app-main {
            background: linear-gradient(135deg, #f4f6f9 0%, #e9ecef 100%);
            min-height: 100vh;
        }

        .app-content-header {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            color: white;
            padding: 20px 0;
            margin-bottom: 30px;
            border-radius: 0 0 10px 10px;
        }

        .app-content-header h1 {
            color: white;
            font-weight: 600;
        }

        .breadcrumb {
            background: rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            padding: 8px 20px !important;
            margin-bottom: 0;
        }

        .breadcrumb-item.active {
            color: rgba(255, 255, 255, 0.9);
        }

        .breadcrumb-item a {
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .breadcrumb-item a:hover {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: underline;
        }

        /* Info Box Styles */
        .info-box {
            border-radius: 10px;
            overflow: hidden;
            transition: all 0.3s ease;
            border: 1px solid rgba(0,0,0,0.1);
        }

        .info-box-icon {
            width: 70px;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            border-radius: 10px 0 0 10px;
        }

        .info-box-content {
            padding: 15px;
        }

        .info-box-text {
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            display: block;
        }

        .info-box-number {
            font-size: 2rem;
            font-weight: 700;
            display: block;
            margin: 5px 0;
        }

        .progress {
            height: 6px;
            margin: 10px 0;
            border-radius: 3px;
            background: rgba(255,255,255,0.3);
        }

        .progress-bar {
            border-radius: 3px;
        }

        .progress-description {
            font-size: 12px;
            display: block;
            margin-top: 5px;
        }

        /* Card Styles */
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
            margin-bottom: 20px;
        }

        .card:hover {
            box-shadow: 0 5px 20px rgba(0,0,0,0.15);
        }

        .card-header {
            border-radius: 10px 10px 0 0 !important;
            padding: 15px 20px;
            border-bottom: 1px solid rgba(0,0,0,0.05);
        }

        .card-title {
            font-weight: 600;
            margin-bottom: 0;
        }

        .card-tools .btn-tool {
            padding: 0;
            font-size: 14px;
            background: transparent;
            border: none;
            opacity: 0.7;
            transition: opacity 0.3s ease;
        }

        .card-tools .btn-tool:hover {
            opacity: 1;
        }

        .card-footer {
            border-radius: 0 0 10px 10px;
            background: rgba(0,0,0,0.02);
            border-top: 1px solid rgba(0,0,0,0.05);
        }

        /* Callout Styles */
        .callout {
            border-radius: 10px;
            padding: 20px;
            border-left: 5px solid var(--info);
        }

        /* Gradient backgrounds */
        .bg-gradient-primary {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%) !important;
        }

        .bg-gradient-success {
            background: linear-gradient(135deg, var(--success) 0%, var(--success-dark) 100%) !important;
        }

        .bg-gradient-warning {
            background: linear-gradient(135deg, var(--warning) 0%, var(--warning-dark) 100%) !important;
        }

        .bg-gradient-danger {
            background: linear-gradient(135deg, var(--danger) 0%, var(--danger-dark) 100%) !important;
        }

        .bg-gradient-info {
            background: linear-gradient(135deg, var(--info) 0%, var(--info-dark) 100%) !important;
        }

        .bg-gradient-light {
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%) !important;
        }

        /* Description Block */
        .description-block {
            padding: 15px;
        }

        .description-block.border-end {
            border-right: 1px solid rgba(0,0,0,0.1) !important;
        }

        .description-header {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .description-text {
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* Chart label hover effects */
        .apexcharts-legend-text,
        .apexcharts-xaxis-texts-g text,
        .apexcharts-yaxis-texts-g text {
            transition: all 0.3s ease !important;
        }

        .apexcharts-legend-text:hover,
        .apexcharts-xaxis-texts-g text:hover,
        .apexcharts-yaxis-texts-g text:hover {
            fill: #000000 !important;
            font-weight: 600 !important;
        }

        .apexcharts-tooltip {
            color: #000000 !important;
        }

        .apexcharts-tooltip-title {
            color: #000000 !important;
            font-weight: 600 !important;
        }

        .apexcharts-datalabel,
        .apexcharts-datalabel-label,
        .apexcharts-datalabel-value {
            fill: #000000 !important;
            font-weight: 600 !important;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .info-box-icon {
                width: 60px;
                height: 60px;
                font-size: 24px;
            }
            
            .info-box-number {
                font-size: 1.5rem;
            }
            
            .app-content-header {
                padding: 15px 0;
            }
            
            .card-header h3 {
                font-size: 1.1rem;
            }
            
            .description-block {
                padding: 10px;
            }
            
            .description-header {
                font-size: 18px;
            }
        }

        @media (max-width: 576px) {
            .info-box {
                margin-bottom: 15px;
            }
            
            .info-box-icon {
                width: 50px;
                height: 50px;
                font-size: 20px;
            }
            
            .info-box-content {
                padding: 10px;
            }
            
            .breadcrumb {
                font-size: 0.85rem;
                padding: 6px 15px !important;
            }
            
            .card-body {
                padding: 15px;
            }
        }

        /* Animation for stats */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .info-box, .card {
            animation: fadeInUp 0.5s ease-out;
        }

        /* Hover effects */
        .info-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15) !important;
        }

        .card.maximized-card {
            position: fixed !important;
            top: 0 !important;
            left: 0 !important;
            right: 0 !important;
            bottom: 0 !important;
            width: 100% !important;
            height: 100% !important;
            max-width: 100% !important;
            max-height: 100% !important;
            margin: 0 !important;
            z-index: 9999 !important;
            border-radius: 0 !important;
        }

        /* Chart container fixes */
        .apexcharts-canvas {
            border-radius: 0 0 10px 10px;
        }
    </style>
@endsection
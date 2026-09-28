@extends('layouts.app')

@section('title', 'SmesaMart - Dashboard')
@section('header_title', 'Dashboard')

@section('content')
<div class="container-fluid p-0">

    <!-- 1. STATISTIC CARDS ROW (5 CARDS) -->
    <section class="stat-grid">
        
        <!-- Card 1: Total Penjualan -->
        <div class="stat-card">
            <div class="stat-header">
                <span class="stat-label">Total Penjualan</span>
                <div class="stat-icon-wrapper icon-box-green">
                    <i class="bi bi-bag-check"></i>
                </div>
            </div>
            <h3 class="stat-value">128</h3>
        </div>

        <!-- Card 2: Pendapatan -->
        <div class="stat-card">
            <div class="stat-header">
                <span class="stat-label">Pendapatan</span>
                <div class="stat-icon-wrapper icon-box-amber">
                    <i class="bi bi-wallet2"></i>
                </div>
            </div>
            <h3 class="stat-value">Rp3.250.000</h3>
        </div>

        <!-- Card 3: Jumlah Pesanan -->
        <div class="stat-card">
            <div class="stat-header">
                <span class="stat-label">Jumlah Pesanan</span>
                <div class="stat-icon-wrapper icon-box-green">
                    <i class="bi bi-clipboard-check"></i>
                </div>
            </div>
            <h3 class="stat-value">24</h3>
        </div>

        <!-- Card 4: Produk Terjual -->
        <div class="stat-card">
            <div class="stat-header">
                <span class="stat-label">Produk Terjual</span>
                <div class="stat-icon-wrapper icon-box-green">
                    <i class="bi bi-box-seam"></i>
                </div>
            </div>
            <h3 class="stat-value">356</h3>
        </div>

        <!-- Card 5: Total Produk -->
        <div class="stat-card">
            <div class="stat-header">
                <span class="stat-label">Total Produk</span>
                <div class="stat-icon-wrapper icon-box-amber">
                    <i class="bi bi-grid"></i>
                </div>
            </div>
            <h3 class="stat-value">48</h3>
        </div>

    </section>

    <!-- 2. MAIN SECTION (SALES CHART & RECENT ORDERS) -->
    <div class="row g-4">
        
        <!-- Left Column: Penjualan Hari Ini Chart -->
        <div class="col-12 col-xl-7 col-lg-7">
            <div class="chart-card">
                <div class="card-header-custom">
                    <h3 class="card-header-title">Penjualan Hari Ini</h3>
                    <div class="chart-legend">
                        <span class="legend-dot"></span>
                        <span>Transaksi Selesai</span>
                    </div>
                </div>

                <!-- Chart Container -->
                <div style="position: relative; height: 290px; width: 100%;">
                    <canvas id="salesTodayChart"></canvas>
                </div>
            </div>
        </div>

        <!-- Right Column: Pesanan Terbaru List -->
        <div class="col-12 col-xl-5 col-lg-5">
            <div class="orders-card">
                <div class="card-header-custom">
                    <h3 class="card-header-title">Pesanan Terbaru</h3>
                    <a href="#lihat-semua" class="view-all-link">Lihat Semua</a>
                </div>

                <!-- List of Orders -->
                <div class="order-list">
                    
                    <!-- Order 1 -->
                    <div class="order-item">
                        <div>
                            <p class="order-code">#NM202609001</p>
                            <p class="order-price">Rp45.000</p>
                        </div>
                        <span class="status-badge badge-diproses">Diproses</span>
                    </div>

                    <!-- Order 2 -->
                    <div class="order-item">
                        <div>
                            <p class="order-code">#NM202609002</p>
                            <p class="order-price">Rp22.500</p>
                        </div>
                        <span class="status-badge badge-siap">Siap Diambil</span>
                    </div>

                    <!-- Order 3 -->
                    <div class="order-item">
                        <div>
                            <p class="order-code">#NM202609003</p>
                            <p class="order-price">Rp78.000</p>
                        </div>
                        <span class="status-badge badge-selesai">Selesai</span>
                    </div>

                </div>
            </div>
        </div>

    </div>

</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const ctx = document.getElementById('salesTodayChart');
        if (!ctx) return;

        // Hourly labels matching design
        const labels = ['08.00', '10.00', '12.00', '14.00', '16.00', '18.00', '20.00'];
        
        // Sales values in Millions (M) matching visual bar heights
        const dataValues = [0.55, 1.25, 0, 2.55, 2.8, 0, 2.0];

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Transaksi Selesai',
                    data: dataValues,
                    backgroundColor: '#00593b',
                    hoverBackgroundColor: '#03482f',
                    borderRadius: {
                        topLeft: 5,
                        topRight: 5,
                        bottomLeft: 0,
                        bottomRight: 0
                    },
                    borderSkipped: false,
                    barThickness: 28,
                    maxBarThickness: 34
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false // Custom header legend used instead
                    },
                    tooltip: {
                        backgroundColor: '#0f172a',
                        titleFont: { family: 'Plus Jakarta Sans', size: 12, weight: 'bold' },
                        bodyFont: { family: 'Plus Jakarta Sans', size: 12 },
                        padding: 10,
                        cornerRadius: 8,
                        displayColors: false,
                        callbacks: {
                            label: function(context) {
                                if (context.raw === 0) return 'Tidak ada transaksi';
                                const formatted = (context.raw * 1000000).toLocaleString('id-ID');
                                return 'Rp' + formatted;
                            }
                        }
                    }
                },
                scales: {
                    x: {
                        grid: {
                            display: false,
                            drawBorder: false
                        },
                        border: {
                            display: false
                        },
                        ticks: {
                            color: '#94a3b8',
                            font: {
                                family: 'Plus Jakarta Sans',
                                size: 11,
                                weight: '500'
                            },
                            padding: 8
                        }
                    },
                    y: {
                        min: 0,
                        max: 3.0,
                        border: {
                            display: false
                        },
                        grid: {
                            color: '#f1f5f9',
                            drawBorder: false
                        },
                        ticks: {
                            stepSize: 1.0,
                            color: '#94a3b8',
                            font: {
                                family: 'Plus Jakarta Sans',
                                size: 11
                            },
                            padding: 10,
                            callback: function(value) {
                                if (value === 0) return '0';
                                return value.toFixed(1) + 'M';
                            }
                        }
                    }
                }
            }
        });
    });
</script>
@endpush

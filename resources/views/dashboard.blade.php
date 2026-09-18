@extends('layouts.app')

@section('title', 'SmesaMart - Dashboard')
@section('header_title', 'Dashboard')

@push('styles')
<style>
    /* 5-Column Grid for Stat Cards on desktop */
    .stat-grid {
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        gap: 1.25rem;
        margin-bottom: 1.5rem;
    }

    @media (min-width: 576px) {
        .stat-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (min-width: 992px) {
        .stat-grid {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    @media (min-width: 1200px) {
        .stat-grid {
            grid-template-columns: repeat(5, 1fr);
        }
    }

    /* Individual Stat Card */
    .stat-card {
        background: #ffffff;
        border: 1px solid var(--card-border);
        border-radius: var(--card-radius);
        padding: 1.25rem 1.35rem;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.02);
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        min-height: 124px;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .stat-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.04);
    }

    .stat-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 0.85rem;
    }

    .stat-label {
        font-size: 0.85rem;
        font-weight: 500;
        color: var(--text-muted);
        margin: 0;
    }

    /* Stat Icon Badge Containers */
    .stat-icon-wrapper {
        width: 36px;
        height: 36px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.05rem;
    }

    .icon-box-green {
        background-color: var(--brand-green-light);
        color: var(--brand-green);
    }

    .icon-box-amber {
        background-color: #fef3c7;
        color: #d97706;
    }

    .stat-value {
        font-size: 1.55rem;
        font-weight: 800;
        color: var(--text-main);
        margin: 0;
        line-height: 1.1;
    }

    /* Large Main Content Cards */
    .chart-card, .orders-card {
        background: #ffffff;
        border: 1px solid var(--card-border);
        border-radius: var(--card-radius);
        padding: 1.5rem;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.02);
        height: 100%;
    }

    .card-header-custom {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 1.5rem;
    }

    .card-header-title {
        font-size: 1.125rem;
        font-weight: 700;
        color: var(--text-main);
        margin: 0;
    }

    /* Chart Legend Indicator */
    .chart-legend {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 0.825rem;
        color: var(--text-muted);
        font-weight: 500;
    }

    .legend-dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background-color: var(--brand-green);
        display: inline-block;
    }

    /* Order List Items */
    .order-list {
        display: flex;
        flex-direction: column;
        gap: 1.25rem;
    }

    .order-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding-bottom: 1.25rem;
        border-bottom: 1px solid #f8fafc;
    }

    .order-item:last-child {
        border-bottom: none;
        padding-bottom: 0;
    }

    .order-code {
        font-size: 0.95rem;
        font-weight: 700;
        color: var(--text-main);
        margin: 0 0 0.25rem 0;
    }

    .order-price {
        font-size: 0.825rem;
        color: var(--text-muted);
        font-weight: 500;
        margin: 0;
    }

    /* Order Status Badges */
    .status-badge {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 0.4rem 1.1rem;
        border-radius: 50rem;
        font-size: 0.78rem;
        font-weight: 600;
        white-space: nowrap;
    }

    .badge-diproses {
        background-color: #fffbeb;
        color: #d97706;
    }

    .badge-siap {
        background-color: #eff6ff;
        color: #2563eb;
    }

    .badge-selesai {
        background-color: #ecfdf5;
        color: #059669;
    }

    .view-all-link {
        font-size: 0.85rem;
        font-weight: 600;
        color: var(--brand-green);
        text-decoration: none;
        transition: opacity 0.2s ease;
    }

    .view-all-link:hover {
        opacity: 0.8;
        text-decoration: underline;
    }
</style>
@endpush

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

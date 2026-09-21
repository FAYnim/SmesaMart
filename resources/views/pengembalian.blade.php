@extends('layouts.app')

@section('title', 'SmesaMart - Pengembalian')
@section('header_title', 'Pengembalian')
@section('search_placeholder', 'Cari...')
@section('active_nav', 'pengembalian')

@section('header_user_badge')
    <div class="user-avatar-initials">AD</div>
    <div class="top-user-meta d-none d-sm-block">
        <p class="top-user-name">Admin SmesaMart</p>
        <p class="top-user-sub">admin123</p>
    </div>
@endsection

@push('styles')
<style>
    /* Page Header */
    .page-header-wrapper {
        margin-bottom: 1.75rem;
    }

    .page-main-heading {
        font-size: 1.55rem;
        font-weight: 800;
        color: #0f172a;
        margin: 0 0 0.35rem 0;
        line-height: 1.2;
    }

    .page-subheading {
        font-size: 0.875rem;
        color: #64748b;
        margin: 0;
    }

    /* 3 Summary Cards Grid */
    .summary-cards-grid {
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        gap: 1.25rem;
        margin-bottom: 2rem;
    }

    @media (min-width: 768px) {
        .summary-cards-grid {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    .stat-summary-card {
        background-color: #ffffff;
        border: 1px solid #eef2f6;
        border-radius: 16px;
        padding: 1.25rem 1.5rem;
        display: flex;
        align-items: center;
        gap: 1.15rem;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.02);
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .stat-summary-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.04);
    }

    .stat-icon-square {
        width: 44px;
        height: 44px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.25rem;
        flex-shrink: 0;
    }

    .icon-box-amber {
        background-color: #fef3c7;
        color: #d97706;
    }

    .icon-box-teal {
        background-color: #ccfbf1;
        color: #0d9488;
    }

    .icon-box-mint {
        background-color: #dcfce7;
        color: #16a34a;
    }

    .stat-info-meta {
        display: flex;
        flex-direction: column;
        line-height: 1.25;
    }

    .stat-main-number {
        font-size: 1.15rem;
        font-weight: 800;
        color: #0f172a;
        margin: 0 0 0.2rem 0;
    }

    .stat-sub-label {
        font-size: 0.8rem;
        color: #94a3b8;
        font-weight: 500;
        margin: 0;
    }

    /* Return Cards List */
    .return-cards-list {
        display: flex;
        flex-direction: column;
        gap: 1.25rem;
    }

    .return-card {
        background-color: #ffffff;
        border: 1px solid #eef2f6;
        border-radius: 16px;
        padding: 1.35rem 1.75rem;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.02);
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .return-card:hover {
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.04);
    }

    /* Card Top Row */
    .return-card-top {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 1.25rem;
    }

    .order-code-group {
        display: flex;
        align-items: center;
        gap: 0.6rem;
    }

    .order-code-group i {
        color: #00593b;
        font-size: 1.15rem;
    }

    .order-code-title {
        font-size: 1.05rem;
        font-weight: 800;
        color: #0f172a;
        margin: 0;
    }

    /* Badges */
    .status-badge {
        display: inline-flex;
        align-items: center;
        padding: 0.35rem 0.9rem;
        border-radius: 50rem;
        font-size: 0.75rem;
        font-weight: 700;
        line-height: 1;
        white-space: nowrap;
    }

    .badge-menunggu {
        background-color: #fef3c7;
        color: #d97706;
    }

    .badge-diproses {
        background-color: #ccfbf1;
        color: #0d9488;
    }

    .badge-selesai {
        background-color: #dcfce7;
        color: #16a34a;
    }

    /* Card Bottom Row: Grid of 3 columns + button */
    .return-card-bottom {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1.25rem;
        align-items: center;
    }

    @media (min-width: 768px) {
        .return-card-bottom {
            grid-template-columns: 1.2fr 1.5fr 1.5fr auto;
            gap: 1.5rem;
        }
    }

    .return-col-item {
        display: flex;
        flex-direction: column;
        gap: 0.25rem;
    }

    .return-label {
        font-size: 0.72rem;
        font-weight: 700;
        letter-spacing: 0.5px;
        color: #94a3b8;
        text-transform: uppercase;
        margin: 0;
    }

    .return-value {
        font-size: 0.95rem;
        font-weight: 700;
        color: #0f172a;
        margin: 0;
    }

    /* Button Lihat Detail */
    .btn-lihat-detail {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 0.45rem 1.15rem;
        background-color: transparent;
        border: 1.5px solid #00593b;
        color: #00593b;
        font-size: 0.85rem;
        font-weight: 700;
        border-radius: 8px;
        text-decoration: none;
        transition: all 0.15s ease;
        white-space: nowrap;
    }

    .btn-lihat-detail:hover {
        background-color: #00593b;
        color: #ffffff;
    }
</style>
@endpush

@section('content')
<div class="container-fluid p-0">

    <!-- Header Section -->
    <div class="page-header-wrapper">
        <h1 class="page-main-heading">Pengembalian</h1>
        <p class="page-subheading">Kelola permintaan pengembalian pesanan untuk SmesaMart</p>
    </div>

    <!-- 3 Summary Statistics Cards -->
    <div class="summary-cards-grid">
        
        <!-- Card 1: 1 Permintaan / Menunggu -->
        <div class="stat-summary-card">
            <div class="stat-icon-square icon-box-amber">
                <i class="bi bi-clock"></i>
            </div>
            <div class="stat-info-meta">
                <h3 class="stat-main-number">1 Permintaan</h3>
                <span class="stat-sub-label">Menunggu</span>
            </div>
        </div>

        <!-- Card 2: 1 Sedang Diproses / Diproses -->
        <div class="stat-summary-card">
            <div class="stat-icon-square icon-box-teal">
                <i class="bi bi-arrow-repeat"></i>
            </div>
            <div class="stat-info-meta">
                <h3 class="stat-main-number">1 Sedang Diproses</h3>
                <span class="stat-sub-label">Diproses</span>
            </div>
        </div>

        <!-- Card 3: 1 Selesai / Selesai Minggu Ini -->
        <div class="stat-summary-card">
            <div class="stat-icon-square icon-box-mint">
                <i class="bi bi-check2-circle"></i>
            </div>
            <div class="stat-info-meta">
                <h3 class="stat-main-number">1 Selesai</h3>
                <span class="stat-sub-label">Selesai Minggu Ini</span>
            </div>
        </div>

    </div>

    <!-- Return Cards List -->
    <div class="return-cards-list">

        <!-- 1. #NM202608021 - Rina Putri -->
        <div class="return-card">
            <div class="return-card-top">
                <div class="order-code-group">
                    <i class="bi bi-file-earmark-text"></i>
                    <h2 class="order-code-title">#NM202608021</h2>
                </div>
                <span class="status-badge badge-menunggu">Menunggu</span>
            </div>
            <div class="return-card-bottom">
                <div class="return-col-item">
                    <span class="return-label">PELANGGAN</span>
                    <p class="return-value">Rina Putri</p>
                </div>
                <div class="return-col-item">
                    <span class="return-label">PRODUK</span>
                    <p class="return-value">Susu UHT Coklat 1000ml</p>
                </div>
                <div class="return-col-item">
                    <span class="return-label">ALASAN</span>
                    <p class="return-value">Produk rusak</p>
                </div>
                <div>
                    <a href="#detail" class="btn-lihat-detail">Lihat Detail</a>
                </div>
            </div>
        </div>

        <!-- 2. #NM202608017 - Dimas Saputra -->
        <div class="return-card">
            <div class="return-card-top">
                <div class="order-code-group">
                    <i class="bi bi-file-earmark-text"></i>
                    <h2 class="order-code-title">#NM202608017</h2>
                </div>
                <span class="status-badge badge-diproses">Diproses</span>
            </div>
            <div class="return-card-bottom">
                <div class="return-col-item">
                    <span class="return-label">PELANGGAN</span>
                    <p class="return-value">Dimas Saputra</p>
                </div>
                <div class="return-col-item">
                    <span class="return-label">PRODUK</span>
                    <p class="return-value">Minyak Goreng 1L</p>
                </div>
                <div class="return-col-item">
                    <span class="return-label">ALASAN</span>
                    <p class="return-value">Produk tidak sesuai</p>
                </div>
                <div>
                    <a href="#detail" class="btn-lihat-detail">Lihat Detail</a>
                </div>
            </div>
        </div>

        <!-- 3. #NM202608011 - Ayu Lestari -->
        <div class="return-card">
            <div class="return-card-top">
                <div class="order-code-group">
                    <i class="bi bi-file-earmark-text"></i>
                    <h2 class="order-code-title">#NM202608011</h2>
                </div>
                <span class="status-badge badge-selesai">Selesai</span>
            </div>
            <div class="return-card-bottom">
                <div class="return-col-item">
                    <span class="return-label">PELANGGAN</span>
                    <p class="return-value">Ayu Lestari</p>
                </div>
                <div class="return-col-item">
                    <span class="return-label">PRODUK</span>
                    <p class="return-value">Indomie Goreng</p>
                </div>
                <div class="return-col-item">
                    <span class="return-label">ALASAN</span>
                    <p class="return-value">Pesanan salah</p>
                </div>
                <div>
                    <a href="#detail" class="btn-lihat-detail">Lihat Detail</a>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection

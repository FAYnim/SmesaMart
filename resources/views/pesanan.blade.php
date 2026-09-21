@extends('layouts.app')

@section('title', 'SmesaMart - Manajemen Pesanan')
@section('header_title', 'Sistem Manajemen Pesanan')
@section('search_placeholder', 'Cari sesuatu...')
@section('active_nav', 'pesanan')

@push('styles')
<style>
    /* Page Heading */
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

    /* Main Grid Layout: Orders list on left, Detail panel on right */
    .pesanan-layout-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1.5rem;
        align-items: start;
    }

    @media (min-width: 992px) {
        .pesanan-layout-grid {
            grid-template-columns: 1fr 380px;
        }
    }

    @media (min-width: 1200px) {
        .pesanan-layout-grid {
            grid-template-columns: 1fr 400px;
        }
    }

    /* Order Card (Active/Selected) */
    .order-card-selected {
        background-color: #ffffff;
        border: 2px solid #00593b;
        border-radius: 16px;
        padding: 1.25rem 1.5rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 1.25rem;
        box-shadow: 0 2px 6px rgba(0, 89, 59, 0.04);
        transition: all 0.2s ease;
        flex-wrap: wrap;
    }

    .order-card-selected:hover {
        box-shadow: 0 4px 12px rgba(0, 89, 59, 0.08);
    }

    .order-id-group {
        display: flex;
        flex-direction: column;
        gap: 0.3rem;
        min-width: 180px;
    }

    .order-id-top {
        display: flex;
        align-items: center;
        gap: 0.6rem;
    }

    .order-code-text {
        font-size: 1rem;
        font-weight: 800;
        color: #0f172a;
        margin: 0;
    }

    .order-date-text {
        font-size: 0.8rem;
        color: #94a3b8;
        font-weight: 500;
        margin: 0;
    }

    .order-customer-row {
        display: flex;
        align-items: center;
        gap: 0.45rem;
        color: #64748b;
        font-size: 0.85rem;
        font-weight: 500;
    }

    .order-customer-row i {
        font-size: 0.95rem;
        color: #94a3b8;
    }

    /* Meta Columns in Order Card */
    .order-meta-col {
        display: flex;
        flex-direction: column;
        gap: 0.2rem;
    }

    .order-meta-label {
        font-size: 0.75rem;
        color: #94a3b8;
        font-weight: 500;
        margin: 0;
    }

    .order-meta-val {
        font-size: 0.95rem;
        font-weight: 700;
        color: #0f172a;
        margin: 0;
    }

    .order-meta-price {
        font-size: 1.05rem;
        font-weight: 800;
        color: #00593b;
        margin: 0;
    }

    /* Status Badge: Siap Diambil */
    .badge-siap-diambil {
        background-color: #e6f4ea;
        color: #00593b;
        font-size: 0.75rem;
        font-weight: 700;
        padding: 0.4rem 1rem;
        border-radius: 50rem;
        display: inline-flex;
        align-items: center;
        white-space: nowrap;
    }

    /* Next Arrow Action Button */
    .btn-order-arrow {
        width: 36px;
        height: 36px;
        background-color: #00593b;
        color: #ffffff;
        border-radius: 8px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        border: none;
        transition: background-color 0.2s ease, transform 0.15s ease;
        flex-shrink: 0;
    }

    .btn-order-arrow:hover {
        background-color: #03482f;
        color: #ffffff;
        transform: translateX(2px);
    }

    /* Right Order Detail Panel */
    .detail-panel {
        background-color: #ffffff;
        border: 1px solid #f1f5f9;
        border-radius: 18px;
        padding: 1.5rem;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.02);
    }

    .detail-panel-header {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        margin-bottom: 1.25rem;
    }

    .detail-title {
        font-size: 1.2rem;
        font-weight: 800;
        color: #0f172a;
        margin: 0 0 0.25rem 0;
        line-height: 1.2;
    }

    .detail-order-id {
        font-size: 0.8rem;
        color: #94a3b8;
        font-weight: 500;
        margin: 0;
    }

    .btn-close-panel {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background-color: #f8fafc;
        border: 1px solid #f1f5f9;
        color: #64748b;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.2s ease;
        font-size: 0.85rem;
        padding: 0;
    }

    .btn-close-panel:hover {
        background-color: #f1f5f9;
        color: #0f172a;
    }

    /* Status Saat Ini row */
    .detail-status-row {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding-bottom: 1.25rem;
        border-bottom: 1px solid #f8fafc;
        margin-bottom: 1.25rem;
    }

    .status-current-label {
        font-size: 0.875rem;
        color: #475569;
        font-weight: 500;
        margin: 0;
    }

    .badge-diproses {
        background-color: #fffbeb;
        color: #d97706;
        font-size: 0.75rem;
        font-weight: 700;
        padding: 0.35rem 0.9rem;
        border-radius: 50rem;
    }

    /* Detail Section Headings */
    .detail-section-title {
        font-size: 0.7rem;
        font-weight: 800;
        letter-spacing: 0.75px;
        color: #94a3b8;
        text-transform: uppercase;
        margin: 0 0 0.65rem 0;
    }

    /* Customer Info Box */
    .customer-info-box {
        background-color: #f8fafc;
        border-radius: 12px;
        padding: 1rem 1.15rem;
        margin-bottom: 1.5rem;
    }

    .customer-name {
        font-size: 0.95rem;
        font-weight: 800;
        color: #0f172a;
        margin: 0 0 0.25rem 0;
    }

    .customer-phone {
        font-size: 0.825rem;
        color: #64748b;
        margin: 0 0 0.35rem 0;
        font-weight: 500;
    }

    .customer-badge {
        font-size: 0.75rem;
        color: #94a3b8;
        margin: 0;
    }

    /* Ordered Products List */
    .ordered-products-list {
        display: flex;
        flex-direction: column;
        gap: 0.9rem;
        margin-bottom: 1.5rem;
    }

    .ordered-item-row {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        gap: 0.75rem;
    }

    .item-name-text {
        font-size: 0.875rem;
        font-weight: 700;
        color: #0f172a;
        margin: 0 0 0.2rem 0;
    }

    .item-qty-rate {
        font-size: 0.775rem;
        color: #94a3b8;
        margin: 0;
    }

    .item-price-text {
        font-size: 0.875rem;
        font-weight: 700;
        color: #0f172a;
        margin: 0;
        white-space: nowrap;
    }

    /* Financial Summary */
    .financial-summary-wrap {
        display: flex;
        flex-direction: column;
        gap: 0.65rem;
        padding-top: 1rem;
        border-top: 1px solid #f8fafc;
        margin-bottom: 1.5rem;
    }

    .summary-row {
        display: flex;
        align-items: center;
        justify-content: space-between;
        font-size: 0.85rem;
        color: #64748b;
    }

    .summary-total-row {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-top: 0.35rem;
    }

    .total-label {
        font-size: 0.95rem;
        font-weight: 800;
        color: #0f172a;
        margin: 0;
    }

    .total-amount {
        font-size: 1.25rem;
        font-weight: 800;
        color: #00593b;
        margin: 0;
    }

    /* Action Buttons */
    .detail-actions-wrap {
        display: flex;
        flex-direction: column;
        gap: 0.75rem;
    }

    .btn-ready-order {
        background-color: #00593b;
        color: #ffffff;
        font-size: 0.9rem;
        font-weight: 700;
        border: none;
        border-radius: 10px;
        padding: 0.75rem 1rem;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.45rem;
        width: 100%;
        transition: background-color 0.2s ease, transform 0.15s ease;
        box-shadow: 0 2px 6px rgba(0, 89, 59, 0.15);
    }

    .btn-ready-order:hover {
        background-color: #03482f;
        color: #ffffff;
        transform: translateY(-1px);
        box-shadow: 0 4px 10px rgba(0, 89, 59, 0.2);
    }

    .btn-cancel-order {
        background-color: #ffffff;
        color: #475569;
        font-size: 0.9rem;
        font-weight: 600;
        border: 1.5px solid #e2e8f0;
        border-radius: 10px;
        padding: 0.75rem 1rem;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.2s ease;
    }

    .btn-cancel-order:hover {
        background-color: #f8fafc;
        border-color: #cbd5e1;
        color: #0f172a;
    }
</style>
@endpush

@section('content')
<div class="container-fluid p-0">

    <!-- Header Section -->
    <div class="page-header-wrapper">
        <h1 class="page-main-heading">Pesanan</h1>
        <p class="page-subheading">Kelola pesanan pelanggan dan pantau pemenuhan stok UMKM Anda.</p>
    </div>

    <!-- Layout Grid: Order Cards on Left, Order Detail Drawer on Right -->
    <div class="pesanan-layout-grid">

        <!-- LEFT COLUMN: Orders List -->
        <div class="orders-list-col">
            
            <!-- Order Card (Selected Active State) -->
            <div class="order-card-selected">
                
                <!-- Order ID, Date & Customer -->
                <div class="order-id-group">
                    <div class="order-id-top">
                        <span class="order-code-text">#NM202609001</span>
                        <span class="order-date-text">09 Sep 2026 • 08:42</span>
                    </div>
                    <div class="order-customer-row">
                        <i class="bi bi-person"></i>
                        <span>Budi Santoso</span>
                    </div>
                </div>

                <!-- Jumlah Item -->
                <div class="order-meta-col">
                    <span class="order-meta-label">Jumlah Item</span>
                    <span class="order-meta-val">2 Produk</span>
                </div>

                <!-- Total Transaksi -->
                <div class="order-meta-col">
                    <span class="order-meta-label">Total Transaksi</span>
                    <span class="order-meta-price">Rp45.000</span>
                </div>

                <!-- Status Badge -->
                <div>
                    <span class="badge-siap-diambil">Siap Diambil</span>
                </div>

                <!-- Action Chevron Button -->
                <a href="#detail" class="btn-order-arrow" aria-label="Lihat Detail Pesanan">
                    <i class="bi bi-chevron-right"></i>
                </a>

            </div>

        </div>

        <!-- RIGHT COLUMN: Detail Pesanan Panel -->
        <div class="detail-panel">
            
            <!-- Panel Header -->
            <div class="detail-panel-header">
                <div>
                    <h2 class="detail-title">Detail Pesanan</h2>
                    <p class="detail-order-id">ID Pesanan: #NM202609001</p>
                </div>
                <button type="button" class="btn-close-panel" aria-label="Tutup detail">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>

            <!-- Status Saat Ini -->
            <div class="detail-status-row">
                <span class="status-current-label">Status Saat Ini:</span>
                <span class="badge-diproses">Diproses</span>
            </div>

            <!-- Informasi Pelanggan -->
            <div>
                <h3 class="detail-section-title">INFORMASI PELANGGAN</h3>
                <div class="customer-info-box">
                    <h4 class="customer-name">Budi Santoso</h4>
                    <p class="customer-phone">+62 812-3456-7890</p>
                    <p class="customer-badge">Pelanggan Setia (UMKM Member)</p>
                </div>
            </div>

            <!-- Produk Dipesan -->
            <div>
                <h3 class="detail-section-title">PRODUK DIPESAN</h3>
                <div class="ordered-products-list">
                    
                    <!-- Item 1: Beras Premium Pandan Wangi -->
                    <div class="ordered-item-row">
                        <div>
                            <p class="item-name-text">Beras Premium Pandan Wangi</p>
                            <p class="item-qty-rate">1 kg x Rp25.000</p>
                        </div>
                        <span class="item-price-text">Rp25.000</span>
                    </div>

                    <!-- Item 2: Minyak Goreng SunCo Sachet -->
                    <div class="ordered-item-row">
                        <div>
                            <p class="item-name-text">Minyak Goreng SunCo Sachet</p>
                            <p class="item-qty-rate">1 L x Rp20.000</p>
                        </div>
                        <span class="item-price-text">Rp20.000</span>
                    </div>

                </div>
            </div>

            <!-- Rincian Finansial -->
            <div class="financial-summary-wrap">
                <div class="summary-row">
                    <span>Subtotal</span>
                    <span>Rp45.000</span>
                </div>
                <div class="summary-row">
                    <span>Pajak (0%)</span>
                    <span>Rp0</span>
                </div>
                <div class="summary-total-row">
                    <span class="total-label">Total Pembayaran</span>
                    <span class="total-amount">Rp45.000</span>
                </div>
            </div>

            <!-- Tombol Aksi -->
            <div class="detail-actions-wrap">
                <button type="button" class="btn-ready-order">
                    <i class="bi bi-check-lg"></i>
                    <span>Tandai Siap Diambil</span>
                </button>
                <button type="button" class="btn-cancel-order">
                    Batalkan Pesanan
                </button>
            </div>

        </div>

    </div>

</div>
@endsection

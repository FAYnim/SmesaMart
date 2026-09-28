@extends('layouts.app')

@section('title', 'SmesaMart - Manajemen Pesanan')
@section('header_title', 'Sistem Manajemen Pesanan')
@section('search_placeholder', 'Cari sesuatu...')
@section('active_nav', 'pesanan')

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

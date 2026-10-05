@extends('layouts.app')

@section('title', 'SmesaMart - Manajemen Pesanan')
@section('header_title', 'Sistem Manajemen Pesanan')
@section('search_placeholder', 'Cari sesuatu...')
@section('active_nav', 'pesanan')

@section('content')
<div class="container-fluid p-0">

    <div class="page-header-wrapper">
        <h1 class="page-main-heading">Pesanan</h1>
        <p class="page-subheading">Kelola pesanan pelanggan dan pantau pemenuhan stok UMKM Anda.</p>
    </div>

    <div class="pesanan-layout-grid" id="pesananLayoutGrid">

        <div class="orders-list-col">
            
            <div class="order-card" data-order-id="#NM202609001">
                <div class="order-id-group">
                    <div class="order-id-top">
                        <span class="order-code-text">#NM202609001</span>
                        <span class="order-date-text">09 Sep 2026 &bull; 08:42</span>
                    </div>
                    <div class="order-customer-row">
                        <i class="bi bi-person"></i>
                        <span>Budi Santoso</span>
                    </div>
                </div>

                <div class="order-meta-col">
                    <span class="order-meta-label">Jumlah Item</span>
                    <span class="order-meta-val">2 Produk</span>
                </div>

                <div class="order-meta-col">
                    <span class="order-meta-label">Total Transaksi</span>
                    <span class="order-meta-price">Rp45.000</span>
                </div>

                <div>
                    <span class="badge-siap-diambil">Siap Diambil</span>
                </div>

                <button type="button" class="btn-order-detail btn-toggle-order" data-id="#NM202609001">
                    <span>Detail</span>
                    <i class="bi bi-chevron-right"></i>
                </button>
            </div>

            <div class="order-card" data-order-id="#NM202609002">
                <div class="order-id-group">
                    <div class="order-id-top">
                        <span class="order-code-text">#NM202609002</span>
                        <span class="order-date-text">09 Sep 2026 &bull; 10:15</span>
                    </div>
                    <div class="order-customer-row">
                        <i class="bi bi-person"></i>
                        <span>Siti Aminah</span>
                    </div>
                </div>

                <div class="order-meta-col">
                    <span class="order-meta-label">Jumlah Item</span>
                    <span class="order-meta-val">1 Produk</span>
                </div>

                <div class="order-meta-col">
                    <span class="order-meta-label">Total Transaksi</span>
                    <span class="order-meta-price">Rp22.500</span>
                </div>

                <div>
                    <span class="badge-diproses">Diproses</span>
                </div>

                <button type="button" class="btn-order-detail btn-toggle-order" data-id="#NM202609002">
                    <span>Detail</span>
                    <i class="bi bi-chevron-right"></i>
                </button>
            </div>

            <div class="order-card" data-order-id="#NM202609003">
                <div class="order-id-group">
                    <div class="order-id-top">
                        <span class="order-code-text">#NM202609003</span>
                        <span class="order-date-text">08 Sep 2026 &bull; 16:30</span>
                    </div>
                    <div class="order-customer-row">
                        <i class="bi bi-person"></i>
                        <span>Rahmat Hidayat</span>
                    </div>
                </div>

                <div class="order-meta-col">
                    <span class="order-meta-label">Jumlah Item</span>
                    <span class="order-meta-val">3 Produk</span>
                </div>

                <div class="order-meta-col">
                    <span class="order-meta-label">Total Transaksi</span>
                    <span class="order-meta-price">Rp78.000</span>
                </div>

                <div>
                    <span class="badge-selesai">Selesai</span>
                </div>

                <button type="button" class="btn-order-detail btn-toggle-order" data-id="#NM202609003">
                    <span>Detail</span>
                    <i class="bi bi-chevron-right"></i>
                </button>
            </div>

        </div>

        <div class="detail-panel" id="orderDetailPanel">
            
            <div class="detail-panel-header">
                <div>
                    <h2 class="detail-title">Detail Pesanan</h2>
                    <p class="detail-order-id" id="detailOrderId">ID Pesanan: #NM202609001</p>
                </div>
                <button type="button" class="btn-close-panel" id="btnCloseDetailPanel" aria-label="Tutup detail">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>

            <div class="detail-status-row">
                <span class="status-current-label">Status Saat Ini:</span>
                <span id="detailStatusBadge" class="badge-diproses">Diproses</span>
            </div>

            <div>
                <h3 class="detail-section-title">INFORMASI PELANGGAN</h3>
                <div class="customer-info-box">
                    <h4 class="customer-name" id="detailCustomerName">Budi Santoso</h4>
                    <p class="customer-phone" id="detailCustomerPhone">+62 812-3456-7890</p>
                    <p class="customer-badge" id="detailCustomerBadge">Pelanggan Setia (UMKM Member)</p>
                </div>
            </div>

            <div>
                <h3 class="detail-section-title">PRODUK DIPESAN</h3>
                <div class="ordered-products-list" id="detailProductsList">
                    <div class="ordered-item-row">
                        <div>
                            <p class="item-name-text">Beras Premium Pandan Wangi</p>
                            <p class="item-qty-rate">1 kg x Rp25.000</p>
                        </div>
                        <span class="item-price-text">Rp25.000</span>
                    </div>
                    <div class="ordered-item-row">
                        <div>
                            <p class="item-name-text">Minyak Goreng SunCo Sachet</p>
                            <p class="item-qty-rate">1 L x Rp20.000</p>
                        </div>
                        <span class="item-price-text">Rp20.000</span>
                    </div>
                </div>
            </div>

            <div class="financial-summary-wrap">
                <div class="summary-row">
                    <span>Subtotal</span>
                    <span id="detailSubtotal">Rp45.000</span>
                </div>
                <div class="summary-row">
                    <span>Pajak (0%)</span>
                    <span>Rp0</span>
                </div>
                <div class="summary-total-row">
                    <span class="total-label">Total Pembayaran</span>
                    <span class="total-amount" id="detailTotal">Rp45.000</span>
                </div>
            </div>

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

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const orderData = {
            '#NM202609001': {
                id: '#NM202609001',
                statusText: 'Siap Diambil',
                statusClass: 'badge-siap-diambil',
                customerName: 'Budi Santoso',
                customerPhone: '+62 812-3456-7890',
                customerBadge: 'Pelanggan Setia (UMKM Member)',
                items: [
                    { name: 'Beras Premium Pandan Wangi', qtyRate: '1 kg x Rp25.000', price: 'Rp25.000' },
                    { name: 'Minyak Goreng SunCo Sachet', qtyRate: '1 L x Rp20.000', price: 'Rp20.000' }
                ],
                subtotal: 'Rp45.000',
                total: 'Rp45.000'
            },
            '#NM202609002': {
                id: '#NM202609002',
                statusText: 'Diproses',
                statusClass: 'badge-diproses',
                customerName: 'Siti Aminah',
                customerPhone: '+62 857-1122-3344',
                customerBadge: 'Pelanggan Baru',
                items: [
                    { name: 'Susu UHT Coklat 1000ml', qtyRate: '1 pcs x Rp22.500', price: 'Rp22.500' }
                ],
                subtotal: 'Rp22.500',
                total: 'Rp22.500'
            },
            '#NM202609003': {
                id: '#NM202609003',
                statusText: 'Selesai',
                statusClass: 'badge-selesai',
                customerName: 'Rahmat Hidayat',
                customerPhone: '+62 813-9988-7766',
                customerBadge: 'UMKM Member',
                items: [
                    { name: 'Indomie Goreng', qtyRate: '10 pcs x Rp3.500', price: 'Rp35.000' },
                    { name: 'Teh Botol Sosro 450ml', qtyRate: '3 pcs x Rp6.000', price: 'Rp18.000' },
                    { name: 'Gula Pasir 1kg', qtyRate: '1 pcs x Rp25.000', price: 'Rp25.000' }
                ],
                subtotal: 'Rp78.000',
                total: 'Rp78.000'
            }
        };

        const grid = document.getElementById('pesananLayoutGrid');
        const detailPanel = document.getElementById('orderDetailPanel');
        const btnClose = document.getElementById('btnCloseDetailPanel');
        const cards = document.querySelectorAll('.order-card');

        const elId = document.getElementById('detailOrderId');
        const elStatus = document.getElementById('detailStatusBadge');
        const elCustomerName = document.getElementById('detailCustomerName');
        const elCustomerPhone = document.getElementById('detailCustomerPhone');
        const elCustomerBadge = document.getElementById('detailCustomerBadge');
        const elProductsList = document.getElementById('detailProductsList');
        const elSubtotal = document.getElementById('detailSubtotal');
        const elTotal = document.getElementById('detailTotal');

        function renderDetail(orderId) {
            const data = orderData[orderId];
            if (!data) return;

            elId.textContent = 'ID Pesanan: ' + data.id;
            elStatus.textContent = data.statusText;
            elStatus.className = data.statusClass;
            elCustomerName.textContent = data.customerName;
            elCustomerPhone.textContent = data.customerPhone;
            elCustomerBadge.textContent = data.customerBadge;
            elSubtotal.textContent = data.subtotal;
            elTotal.textContent = data.total;

            elProductsList.innerHTML = data.items.map(function (item) {
                return '<div class="ordered-item-row">' +
                    '<div>' +
                    '<p class="item-name-text">' + item.name + '</p>' +
                    '<p class="item-qty-rate">' + item.qtyRate + '</p>' +
                    '</div>' +
                    '<span class="item-price-text">' + item.price + '</span>' +
                    '</div>';
            }).join('');
        }

        function openDetail(orderId, cardElement) {
            cards.forEach(function (c) {
                c.classList.remove('active');
            });
            cardElement.classList.add('active');
            renderDetail(orderId);
            grid.classList.add('detail-open');

            if (window.innerWidth < 992) {
                detailPanel.scrollIntoView({ behavior: 'smooth' });
            }
        }

        function closeDetail() {
            grid.classList.remove('detail-open');
            cards.forEach(function (c) {
                c.classList.remove('active');
            });
        }

        cards.forEach(function (card) {
            card.addEventListener('click', function (e) {
                const orderId = card.getAttribute('data-order-id');
                const isCurrentlyActive = card.classList.contains('active') && grid.classList.contains('detail-open');
                
                if (isCurrentlyActive && e.target.closest('.btn-toggle-order')) {
                    closeDetail();
                } else {
                    openDetail(orderId, card);
                }
            });
        });

        if (btnClose) {
            btnClose.addEventListener('click', function () {
                closeDetail();
            });
        }
    });
</script>
@endpush

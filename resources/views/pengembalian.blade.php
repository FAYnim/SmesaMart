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

@section('content')
<div class="container-fluid p-0">

    <div class="page-header-wrapper">
        <h1 class="page-main-heading">Pengembalian</h1>
        <p class="page-subheading">Kelola permintaan pengembalian pesanan untuk SmesaMart</p>
    </div>

    <div class="summary-cards-grid">
        
        <div class="stat-summary-card">
            <div class="stat-icon-square icon-box-amber">
                <i class="bi bi-clock"></i>
            </div>
            <div class="stat-info-meta">
                <h3 class="stat-main-number">1 Permintaan</h3>
                <span class="stat-sub-label">Menunggu</span>
            </div>
        </div>

        <div class="stat-summary-card">
            <div class="stat-icon-square icon-box-teal">
                <i class="bi bi-arrow-repeat"></i>
            </div>
            <div class="stat-info-meta">
                <h3 class="stat-main-number">1 Sedang Diproses</h3>
                <span class="stat-sub-label">Diproses</span>
            </div>
        </div>

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

    <div class="return-cards-list">

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
                    <button type="button" class="btn-lihat-detail btn-open-return-detail" data-id="#NM202608021">
                        <span>Lihat Detail</span>
                    </button>
                </div>
            </div>
        </div>

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
                    <button type="button" class="btn-lihat-detail btn-open-return-detail" data-id="#NM202608017">
                        <span>Lihat Detail</span>
                    </button>
                </div>
            </div>
        </div>

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
                    <button type="button" class="btn-lihat-detail btn-open-return-detail" data-id="#NM202608011">
                        <span>Lihat Detail</span>
                    </button>
                </div>
            </div>
        </div>

    </div>

</div>

<div class="modal fade modal-detail-return" id="modalDetailPengembalian" tabindex="-1" aria-labelledby="modalDetailPengembalianLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="d-flex align-items-center gap-3">
                    <div class="brand-icon-box" style="width: 36px; height: 36px; font-size: 1rem;">
                        <i class="bi bi-arrow-left-right"></i>
                    </div>
                    <div>
                        <h2 class="modal-title fs-5 fw-bold text-dark m-0" id="modalDetailPengembalianLabel">Detail Pengembalian</h2>
                        <span class="text-muted small" id="returnModalOrderId">#NM202608021</span>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <span id="returnModalStatusBadge" class="status-badge badge-menunggu">Menunggu</span>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
            </div>
            <div class="modal-body">
                <div class="detail-return-section">
                    <div class="detail-return-grid">
                        <div>
                            <span class="detail-return-label">Nama Pelanggan</span>
                            <p class="detail-return-val" id="returnModalCustomer">Rina Putri</p>
                        </div>
                        <div>
                            <span class="detail-return-label">Nomor Telepon</span>
                            <p class="detail-return-val" id="returnModalPhone">+62 812-9988-1122</p>
                        </div>
                        <div>
                            <span class="detail-return-label">Tanggal Pengajuan</span>
                            <p class="detail-return-val" id="returnModalDate">27 Sep 2026, 11:20 WIB</p>
                        </div>
                        <div>
                            <span class="detail-return-label">Opsi Kompensasi</span>
                            <p class="detail-return-val" id="returnModalOption">Penggantian Produk Baru</p>
                        </div>
                    </div>
                </div>

                <div class="detail-return-section">
                    <span class="detail-return-label">Produk Yang Dikembalikan</span>
                    <div class="d-flex align-items-center justify-content-between pt-2">
                        <div class="d-flex align-items-center gap-3">
                            <div class="product-icon-box">
                                <i class="bi bi-box-seam"></i>
                            </div>
                            <div>
                                <h3 class="stok-product-title" id="returnModalProduct">Susu UHT Coklat 1000ml</h3>
                                <span class="text-muted small" id="returnModalProductQty">Jumlah: 1 pcs &bull; Rp22.500</span>
                            </div>
                        </div>
                        <span class="fw-bold text-success" id="returnModalRefundAmount">Rp22.500</span>
                    </div>
                </div>

                <div class="detail-return-section">
                    <span class="detail-return-label">Keterangan Alasan Retur</span>
                    <p class="mt-2 mb-0 text-dark small" id="returnModalReasonDesc">
                        Kemasan kotak bocor di bagian sudut saat barang sampai diterima. Segel penyok dan isi susu merembes keluar membahasi plastik pembungkus.
                    </p>
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-between">
                <button type="button" class="btn btn-sm btn-light border" data-bs-dismiss="modal">Tutup</button>
                <div class="d-flex gap-2">
                    <button type="button" class="btn-reject-return" data-bs-dismiss="modal">
                        <i class="bi bi-x-circle"></i>
                        <span>Tolak</span>
                    </button>
                    <button type="button" class="btn-approve-return" data-bs-dismiss="modal">
                        <i class="bi bi-check-circle"></i>
                        <span>Setujui Retur</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const returnData = {
            '#NM202608021': {
                id: '#NM202608021',
                customer: 'Rina Putri',
                phone: '+62 812-9988-1122',
                date: '27 Sep 2026, 11:20 WIB',
                option: 'Penggantian Produk Baru',
                product: 'Susu UHT Coklat 1000ml',
                qtyPrice: 'Jumlah: 1 pcs \u2022 Rp22.500',
                amount: 'Rp22.500',
                statusText: 'Menunggu',
                statusClass: 'status-badge badge-menunggu',
                reason: 'Kemasan kotak bocor di bagian sudut saat barang sampai diterima. Segel penyok dan isi susu merembes keluar membahasi plastik pembungkus.'
            },
            '#NM202608017': {
                id: '#NM202608017',
                customer: 'Dimas Saputra',
                phone: '+62 856-7788-9900',
                date: '25 Sep 2026, 14:05 WIB',
                option: 'Pengembalian Dana (Refund)',
                product: 'Minyak Goreng 1L',
                qtyPrice: 'Jumlah: 1 pcs \u2022 Rp20.000',
                amount: 'Rp20.000',
                statusText: 'Diproses',
                statusClass: 'status-badge badge-diproses',
                reason: 'Barang yang diterima adalah pouch merek lain yang berbeda dengan pesanan di aplikasi.'
            },
            '#NM202608011': {
                id: '#NM202608011',
                customer: 'Ayu Lestari',
                phone: '+62 819-2233-4455',
                date: '22 Sep 2026, 09:15 WIB',
                option: 'Penggantian Produk Baru',
                product: 'Indomie Goreng',
                qtyPrice: 'Jumlah: 10 pcs \u2022 Rp35.000',
                amount: 'Rp35.000',
                statusText: 'Selesai',
                statusClass: 'status-badge badge-selesai',
                reason: 'Varian rasa mi goreng salah kirim (dipesan varian pedas, yang terkirim varian original). Barang telah berhasil ditukar.'
            }
        };

        const modalEl = document.getElementById('modalDetailPengembalian');
        if (!modalEl) return;
        const modalInstance = new bootstrap.Modal(modalEl);

        const elId = document.getElementById('returnModalOrderId');
        const elStatus = document.getElementById('returnModalStatusBadge');
        const elCustomer = document.getElementById('returnModalCustomer');
        const elPhone = document.getElementById('returnModalPhone');
        const elDate = document.getElementById('returnModalDate');
        const elOption = document.getElementById('returnModalOption');
        const elProduct = document.getElementById('returnModalProduct');
        const elProductQty = document.getElementById('returnModalProductQty');
        const elAmount = document.getElementById('returnModalRefundAmount');
        const elReason = document.getElementById('returnModalReasonDesc');

        const buttons = document.querySelectorAll('.btn-open-return-detail');
        buttons.forEach(function (btn) {
            btn.addEventListener('click', function () {
                const id = btn.getAttribute('data-id');
                const data = returnData[id];
                if (!data) return;

                elId.textContent = data.id;
                elStatus.textContent = data.statusText;
                elStatus.className = data.statusClass;
                elCustomer.textContent = data.customer;
                elPhone.textContent = data.phone;
                elDate.textContent = data.date;
                elOption.textContent = data.option;
                elProduct.textContent = data.product;
                elProductQty.textContent = data.qtyPrice;
                elAmount.textContent = data.amount;
                elReason.textContent = data.reason;

                modalInstance.show();
            });
        });
    });
</script>
@endpush

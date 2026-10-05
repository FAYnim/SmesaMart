@extends('layouts.app')

@section('title', 'SmesaMart - Edit Stok Produk')
@section('header_title', 'Edit Stok Produk')
@section('active_nav', 'stok')

@section('content')
<div class="container-fluid p-0">

    <div class="page-header-wrapper">
        <div class="d-flex align-items-center gap-3">
            <a href="{{ url('/stok') }}" class="btn-back-header">
                <i class="bi bi-arrow-left"></i>
                <span>Kembali</span>
            </a>
            <div>
                <h1 class="page-main-heading">Edit Stok Produk</h1>
                <p class="page-subheading">Perbarui kuantitas dan catatan mutasi inventaris barang</p>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-12 col-xl-8">
            <div class="stok-edit-card">
                <div class="stok-product-banner">
                    <div class="stok-product-icon">
                        <i class="bi bi-box-seam"></i>
                    </div>
                    <div class="stok-product-meta">
                        <h2 class="stok-product-title">Susu UHT Coklat 1000ml</h2>
                        <div class="stok-product-sub">
                            <span><strong class="text-dark">SKU:</strong> SKU-UHT-1000</span>
                            <span>&bull;</span>
                            <span><strong class="text-dark">Kategori:</strong> Minuman</span>
                            <span>&bull;</span>
                            <span><strong class="text-dark">Harga:</strong> Rp22.500</span>
                            <span>&bull;</span>
                            <span class="status-badge badge-stok-aman">Stok Aman (24 pcs)</span>
                        </div>
                    </div>
                </div>

                <form action="#" method="POST" onsubmit="event.preventDefault();">
                    <div class="row g-3 mb-3">
                        <div class="col-12 col-md-6">
                            <label class="stok-form-label">Stok Saat Ini</label>
                            <div class="input-group">
                                <input type="text" class="stok-form-control" value="24" readonly>
                                <span class="input-group-text bg-light text-muted border-start-0 font-monospace">pcs</span>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <label class="stok-form-label">Satuan Kemasan</label>
                            <input type="text" class="stok-form-control" value="Kotak / Karton (1000ml)" readonly>
                        </div>
                    </div>

                    <div class="row g-3 mb-3">
                        <div class="col-12 col-md-6">
                            <label class="stok-form-label">Tipe Penyesuaian</label>
                            <select class="form-select stok-form-control" id="adjustmentType">
                                <option value="add" selected>Tambah Stok (+ Masuk)</option>
                                <option value="subtract">Kurangi Stok (- Keluar)</option>
                                <option value="set">Atur Ulang / Koreksi Fisik (=)</option>
                            </select>
                        </div>

                        <div class="col-12 col-md-6">
                            <label class="stok-form-label">Jumlah Penyesuaian</label>
                            <input type="number" class="stok-form-control" id="adjustmentQty" value="10" min="1" placeholder="Masukkan jumlah">
                        </div>
                    </div>

                    <div class="row g-3 mb-3">
                        <div class="col-12 col-md-6">
                            <label class="stok-form-label">Estimasi Stok Akhir</label>
                            <div class="input-group">
                                <input type="text" class="stok-form-control fw-bold text-success" id="estimatedFinalStock" value="34" readonly>
                                <span class="input-group-text bg-light text-muted border-start-0 font-monospace">pcs</span>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <label class="stok-form-label">Alasan Penyesuaian</label>
                            <select class="form-select stok-form-control">
                                <option value="restock" selected>Penerimaan Supplier (Restock)</option>
                                <option value="opname">Hasil Stok Opname Fisik</option>
                                <option value="damaged">Barang Rusak / Kemasan Bocor</option>
                                <option value="expired">Barang Kadaluarsa</option>
                                <option value="correction">Koreksi Kesalahan Input Sistem</option>
                                <option value="other">Alasan Lainnya</option>
                            </select>
                        </div>
                    </div>

                    <div class="row g-3 mb-3">
                        <div class="col-12 col-md-6">
                            <label class="stok-form-label">Nomor Referensi / Dokumen</label>
                            <input type="text" class="stok-form-control" value="PO-2026-09-0042" placeholder="Contoh: PO-XXXX atau INV-XXXX">
                        </div>

                        <div class="col-12 col-md-6">
                            <label class="stok-form-label">Tanggal Mutasi</label>
                            <input type="date" class="stok-form-control" value="2026-09-28">
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="stok-form-label">Catatan / Keterangan</label>
                        <textarea class="stok-form-control" rows="3" placeholder="Tuliskan catatan tambahan mengenai penyesuaian stok ini...">Penerimaan kiriman rutin dari distributor PT Sumber Pangan Utama, kondisi batch segel utuh dan masa kadaluarsa aman hingga Juli 2027.</textarea>
                    </div>

                    <div class="d-flex align-items-center justify-content-end gap-2 pt-3 border-top">
                        <a href="{{ url('/stok') }}" class="stok-btn-cancel">Batal</a>
                        <button type="submit" class="stok-btn-save">
                            <i class="bi bi-check2"></i>
                            <span>Simpan Perubahan</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-12 col-xl-4">
            <div class="stok-edit-card mb-4">
                <div class="stok-edit-header">
                    <h3 class="stok-card-title">Ringkasan Perubahan</h3>
                    <span class="status-badge badge-stok-aman">Pratinjau</span>
                </div>
                <ul class="stok-summary-list">
                    <li class="stok-summary-item">
                        <span class="stok-summary-label">Stok Awal</span>
                        <span class="stok-summary-val">24 pcs</span>
                    </li>
                    <li class="stok-summary-item">
                        <span class="stok-summary-label">Perubahan</span>
                        <span class="stok-summary-val text-success">+10 pcs</span>
                    </li>
                    <li class="stok-summary-item">
                        <span class="stok-summary-label">Stok Baru</span>
                        <span class="stok-summary-val">34 pcs</span>
                    </li>
                    <li class="stok-summary-item">
                        <span class="stok-summary-label">Batas Minimum</span>
                        <span class="stok-summary-val">10 pcs</span>
                    </li>
                    <li class="stok-summary-item">
                        <span class="stok-summary-label">Status Baru</span>
                        <span class="status-badge badge-stok-aman">Stok Aman</span>
                    </li>
                </ul>
            </div>

            <div class="stok-edit-card">
                <div class="stok-edit-header">
                    <h3 class="stok-card-title">Riwayat Mutasi Terakhir</h3>
                    <span class="text-muted small">Log Terbaru</span>
                </div>
                <div class="stok-timeline">
                    <div class="stok-timeline-item">
                        <div class="stok-timeline-dot"></div>
                        <div class="stok-timeline-date">28 Sep 2026, 08:30 WIB</div>
                        <div class="stok-timeline-text text-success">+24 pcs &bull; Stok Masuk</div>
                        <p class="stok-timeline-desc">Restock supplier PT Sumber Pangan (Admin Smesa)</p>
                    </div>
                    <div class="stok-timeline-item">
                        <div class="stok-timeline-dot" style="background-color: #d97706; box-shadow: 0 0 0 2px #fef3c7;"></div>
                        <div class="stok-timeline-date">26 Sep 2026, 14:15 WIB</div>
                        <div class="stok-timeline-text text-warning">-6 pcs &bull; Penjualan Kasir</div>
                        <p class="stok-timeline-desc">Pesanan #ORD-9821 via POS Kasir</p>
                    </div>
                    <div class="stok-timeline-item">
                        <div class="stok-timeline-dot" style="background-color: #ef4444; box-shadow: 0 0 0 2px #fee2e2;"></div>
                        <div class="stok-timeline-date">22 Sep 2026, 10:00 WIB</div>
                        <div class="stok-timeline-text text-danger">-2 pcs &bull; Barang Rusak</div>
                        <p class="stok-timeline-desc">Kardus kemasan robek saat bongkar muat</p>
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
        const baseStock = 24;
        const typeSelect = document.getElementById('adjustmentType');
        const qtyInput = document.getElementById('adjustmentQty');
        const finalInput = document.getElementById('estimatedFinalStock');

        function updateEstimatedStock() {
            const qty = parseInt(qtyInput.value) || 0;
            const type = typeSelect.value;
            let result = baseStock;

            if (type === 'add') {
                result = baseStock + qty;
            } else if (type === 'subtract') {
                result = Math.max(0, baseStock - qty);
            } else if (type === 'set') {
                result = Math.max(0, qty);
            }

            finalInput.value = result;
        }

        if (typeSelect && qtyInput && finalInput) {
            typeSelect.addEventListener('change', updateEstimatedStock);
            qtyInput.addEventListener('input', updateEstimatedStock);
        }
    });
</script>
@endpush

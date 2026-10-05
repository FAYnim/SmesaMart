@extends('layouts.app')

@section('title', 'SmesaMart - Produk')
@section('header_title', 'Produk')

@section('content')
<div class="container-fluid p-0">

    <!-- 1. PAGE HEADER (TITLE, SUBTITLE & TAMBAH PRODUK BUTTON) -->
    <div class="page-header-wrapper">
        <div>
            <h2 class="page-main-heading">Produk</h2>
            <p class="page-subheading">Kelola produk yang tersedia di toko</p>
        </div>

        <!-- Button Tambah Produk -->
        <button type="button" class="btn-add-product" data-bs-toggle="modal" data-bs-target="#modalTambahProduk">
            <i class="bi bi-plus-lg"></i>
            <span>Tambah Produk</span>
        </button>
    </div>

    <!-- 2. SEARCH BAR -->
    <div class="product-search-wrapper">
        <i class="bi bi-search"></i>
        <input type="text" id="searchInput" class="product-search-input" placeholder="Cari produk...." aria-label="Cari produk">
    </div>

    <!-- 3. PRODUCTS TABLE CARD -->
    <div class="product-card-table">
        <div class="table-responsive">
            <table class="table custom-table" id="productTable">
                <thead>
                    <tr>
                        <th style="width: 80px;">Foto</th>
                        <th>Produk</th>
                        <th style="width: 180px;">Kategori</th>
                        <th style="width: 150px;">Harga</th>
                        <th style="width: 100px;">Stok</th>
                        <th style="width: 110px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <!-- Row 1: Matching Screenshot Exactly -->
                    <tr class="product-row">
                        <td>
                            <div class="product-thumb">
                                <span>UHT</span>
                            </div>
                        </td>
                        <td>
                            <span class="product-name-text">Susu UHT Coklat 1000ml</span>
                        </td>
                        <td>
                            <span class="product-category-text">Minuman</span>
                        </td>
                        <td>
                            <span class="product-price-text">Rp22.500</span>
                        </td>
                        <td>
                            <span class="product-stock-text">24</span>
                        </td>
                        <td>
                            <div class="action-group">
                                <!-- Edit Button -->
                                <button type="button" class="btn-action-edit" title="Edit Produk" data-bs-toggle="modal" data-bs-target="#modalEditProduk">
                                    <i class="bi bi-pencil"></i>
                                </button>
                                <!-- Delete Button -->
                                <button type="button" class="btn-action-delete" title="Hapus Produk" data-bs-toggle="modal" data-bs-target="#modalHapusProduk">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

</div>

<!-- MODAL: TAMBAH PRODUK -->
<div class="modal fade" id="modalTambahProduk" tabindex="-1" aria-labelledby="modalTambahProdukLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahProdukLabel">Tambah Produk Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>
            <form action="#" method="POST" onsubmit="event.preventDefault();">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" placeholder="Contoh: Susu UHT Coklat 1000ml" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Kategori</label>
                        <select class="form-select" required>
                            <option value="" selected disabled>Pilih kategori...</option>
                            <option value="Minuman">Minuman</option>
                            <option value="Makanan">Makanan</option>
                            <option value="Sembako">Sembako</option>
                            <option value="Camilan">Camilan</option>
                        </select>
                    </div>

                    <div class="row g-2 mb-3">
                        <div class="col-6">
                            <label class="form-label">Harga (Rp)</label>
                            <input type="number" class="form-control" placeholder="22500" required>
                        </div>
                        <div class="col-6">
                            <label class="form-label">Jumlah Stok</label>
                            <input type="number" class="form-control" placeholder="24" required>
                        </div>
                    </div>

                    <div class="mb-2">
                        <label class="form-label">Foto Produk (Opsional)</label>
                        <input type="file" class="form-control" accept="image/*">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light rounded-3 px-3" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-add-product px-4">Simpan Produk</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- MODAL: EDIT PRODUK -->
<div class="modal fade" id="modalEditProduk" tabindex="-1" aria-labelledby="modalEditProdukLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEditProdukLabel">Edit Produk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>
            <form action="#" method="POST" onsubmit="event.preventDefault();">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" value="Susu UHT Coklat 1000ml" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Kategori</label>
                        <select class="form-select" required>
                            <option value="Minuman" selected>Minuman</option>
                            <option value="Makanan">Makanan</option>
                            <option value="Sembako">Sembako</option>
                            <option value="Camilan">Camilan</option>
                        </select>
                    </div>

                    <div class="row g-2 mb-3">
                        <div class="col-6">
                            <label class="form-label">Harga (Rp)</label>
                            <input type="number" class="form-control" value="22500" required>
                        </div>
                        <div class="col-6">
                            <label class="form-label">Jumlah Stok</label>
                            <input type="number" class="form-control" value="24" required>
                        </div>
                    </div>

                    <div class="mb-2">
                        <label class="form-label">Ganti Foto Produk (Opsional)</label>
                        <input type="file" class="form-control" accept="image/*">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light rounded-3 px-3" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-add-product px-4">Perbarui Produk</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- MODAL: KONFIRMASI HAPUS -->
<div class="modal fade" id="modalHapusProduk" tabindex="-1" aria-labelledby="modalHapusProdukLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content text-center p-3">
            <div class="modal-body">
                <div class="mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 54px; height: 54px; border-radius: 50%; background-color: #fee2e2; color: #ef4444; font-size: 1.5rem;">
                    <i class="bi bi-exclamation-triangle"></i>
                </div>
                <h6 class="fw-bold text-dark mb-1">Hapus Produk?</h6>
                <p class="text-muted small mb-0">Apakah Anda yakin ingin menghapus produk <strong>"Susu UHT Coklat 1000ml"</strong>? Tindakan ini tidak dapat dibatalkan.</p>
            </div>
            <div class="d-flex gap-2 justify-content-center pb-2 px-2">
                <button type="button" class="btn btn-light rounded-3 flex-fill py-2" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-danger rounded-3 flex-fill py-2" data-bs-dismiss="modal" style="background-color: #ef4444; border: none;">Hapus</button>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Live Search Filter
    document.addEventListener('DOMContentLoaded', function () {
        const searchInput = document.getElementById('searchInput');
        const rows = document.querySelectorAll('#productTable tbody tr.product-row');

        if (searchInput && rows.length > 0) {
            searchInput.addEventListener('input', function () {
                const query = this.value.toLowerCase().trim();

                rows.forEach(row => {
                    const productName = row.querySelector('.product-name-text')?.textContent.toLowerCase() || '';
                    const category = row.querySelector('.product-category-text')?.textContent.toLowerCase() || '';

                    if (productName.includes(query) || category.includes(query)) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                });
            });
        }
    });
</script>
@endpush

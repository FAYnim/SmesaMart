@extends('layouts.app')

@section('title', 'SmesaMart - Stok Produk')
@section('header_title', 'Stok Produk')
@section('active_nav', 'stok')

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

    /* Card Container */
    .stok-card {
        background-color: #ffffff;
        border: 1px solid #eef2f6;
        border-radius: 16px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.02);
        overflow: hidden;
    }

    /* Table Design */
    .table-stok {
        width: 100%;
        margin-bottom: 0;
        border-collapse: separate;
        border-spacing: 0;
    }

    .table-stok thead th {
        background-color: #ffffff;
        color: #64748b;
        font-size: 0.725rem;
        font-weight: 700;
        letter-spacing: 0.5px;
        padding: 1.25rem 1.5rem;
        border-bottom: 1px solid #f1f5f9;
        white-space: nowrap;
    }

    .table-stok tbody tr {
        transition: background-color 0.15s ease;
    }

    .table-stok tbody tr:hover {
        background-color: #fcfdfe;
    }

    .table-stok tbody td {
        padding: 1.15rem 1.5rem;
        vertical-align: middle;
        border-bottom: 1px solid #f8fafc;
        font-size: 0.9rem;
        color: #0f172a;
    }

    .table-stok tbody tr:last-child td {
        border-bottom: none;
    }

    /* Product Item Info */
    .product-info-cell {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .product-icon-box {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        background-color: #f1f5f9;
        color: #64748b;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.2rem;
        flex-shrink: 0;
    }

    .product-title {
        font-size: 0.9rem;
        font-weight: 600;
        color: #0f172a;
        margin: 0;
    }

    /* Stock count */
    .stock-qty {
        font-weight: 700;
        font-size: 0.925rem;
        color: #0f172a;
    }

    /* Status Badges */
    .status-badge {
        display: inline-flex;
        align-items: center;
        padding: 0.35rem 0.85rem;
        border-radius: 50rem;
        font-size: 0.75rem;
        font-weight: 600;
        line-height: 1;
        white-space: nowrap;
    }

    /* Badge: Stok Aman */
    .badge-stok-aman {
        background-color: #e6f4ea;
        color: #00593b;
    }

    /* Badge: Stok Menipis */
    .badge-stok-menipis {
        background-color: #fef3c7;
        color: #d97706;
    }

    /* Badge: Habis */
    .badge-habis {
        background-color: #fee2e2;
        color: #ef4444;
    }

    /* Actions */
    .actions-cell {
        display: flex;
        align-items: center;
        justify-content: flex-end;
        gap: 0.65rem;
    }

    .btn-edit-outline {
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
        padding: 0.35rem 0.75rem;
        background-color: transparent;
        border: 1.5px solid #00593b;
        color: #00593b;
        font-size: 0.8rem;
        font-weight: 600;
        border-radius: 6px;
        text-decoration: none;
        transition: all 0.15s ease;
    }

    .btn-edit-outline:hover {
        background-color: #00593b;
        color: #ffffff;
    }

    .btn-more {
        background: transparent;
        border: none;
        color: #94a3b8;
        font-size: 1.15rem;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 32px;
        height: 32px;
        border-radius: 6px;
        transition: color 0.15s ease, background-color 0.15s ease;
        padding: 0;
    }

    .btn-more:hover {
        color: #0f172a;
        background-color: #f1f5f9;
    }

    /* Card Footer & Pagination */
    .stok-footer {
        padding: 1.15rem 1.5rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
        border-top: 1px solid #f1f5f9;
        font-size: 0.85rem;
        color: #64748b;
        flex-wrap: wrap;
        gap: 1rem;
    }

    .pagination-wrapper {
        display: flex;
        align-items: center;
        gap: 0.35rem;
    }

    .pagination-btn {
        min-width: 32px;
        height: 32px;
        padding: 0 0.4rem;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border: 1px solid #e2e8f0;
        border-radius: 6px;
        background-color: #ffffff;
        color: #64748b;
        font-size: 0.85rem;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.15s ease;
    }

    .pagination-btn:hover:not(.disabled):not(.active) {
        border-color: #cbd5e1;
        background-color: #f8fafc;
        color: #0f172a;
    }

    .pagination-btn.active {
        background-color: #00593b;
        border-color: #00593b;
        color: #ffffff;
    }

    .pagination-btn.disabled {
        opacity: 0.5;
        cursor: not-allowed;
    }
</style>
@endpush

@section('content')
<div class="container-fluid p-0">

    <!-- Header Section -->
    <div class="page-header-wrapper">
        <h1 class="page-main-heading">Stok Produk</h1>
        <p class="page-subheading">Pantau ketersediaan produk di toko</p>
    </div>

    <!-- Table Card Container -->
    <div class="stok-card">
        <div class="table-responsive">
            <table class="table table-stok align-middle mb-0">
                <thead>
                    <tr>
                        <th style="min-width: 260px;">PRODUK</th>
                        <th style="width: 140px;">STOK</th>
                        <th style="width: 160px;">STATUS</th>
                        <th style="width: 150px; text-align: right;" class="pe-4">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <!-- 1. Susu UHT Coklat 1000ml -->
                    <tr>
                        <td>
                            <div class="product-info-cell">
                                <div class="product-icon-box">
                                    <i class="bi bi-box"></i>
                                </div>
                                <span class="product-title">Susu UHT Coklat 1000ml</span>
                            </div>
                        </td>
                        <td>
                            <span class="stock-qty">24</span>
                        </td>
                        <td>
                            <span class="status-badge badge-stok-aman">Stok Aman</span>
                        </td>
                        <td>
                            <div class="actions-cell pe-2">
                                <a href="#" class="btn-edit-outline">
                                    <i class="bi bi-pencil-square"></i>
                                    <span>Edit</span>
                                </a>
                                <button type="button" class="btn-more" aria-label="Menu aksi">
                                    <i class="bi bi-three-dots"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- 2. Indomie Goreng -->
                    <tr>
                        <td>
                            <div class="product-info-cell">
                                <div class="product-icon-box">
                                    <i class="bi bi-box"></i>
                                </div>
                                <span class="product-title">Indomie Goreng</span>
                            </div>
                        </td>
                        <td>
                            <span class="stock-qty">50</span>
                        </td>
                        <td>
                            <span class="status-badge badge-stok-aman">Stok Aman</span>
                        </td>
                        <td>
                            <div class="actions-cell pe-2">
                                <a href="#" class="btn-edit-outline">
                                    <i class="bi bi-pencil-square"></i>
                                    <span>Edit</span>
                                </a>
                                <button type="button" class="btn-more" aria-label="Menu aksi">
                                    <i class="bi bi-three-dots"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- 3. Teh Botol Sosro 450ml -->
                    <tr>
                        <td>
                            <div class="product-info-cell">
                                <div class="product-icon-box">
                                    <i class="bi bi-box"></i>
                                </div>
                                <span class="product-title">Teh Botol Sosro 450ml</span>
                            </div>
                        </td>
                        <td>
                            <span class="stock-qty">8</span>
                        </td>
                        <td>
                            <span class="status-badge badge-stok-menipis">Stok Menipis</span>
                        </td>
                        <td>
                            <div class="actions-cell pe-2">
                                <a href="#" class="btn-edit-outline">
                                    <i class="bi bi-pencil-square"></i>
                                    <span>Edit</span>
                                </a>
                                <button type="button" class="btn-more" aria-label="Menu aksi">
                                    <i class="bi bi-three-dots"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- 4. Beras Premium 5kg -->
                    <tr>
                        <td>
                            <div class="product-info-cell">
                                <div class="product-icon-box">
                                    <i class="bi bi-box"></i>
                                </div>
                                <span class="product-title">Beras Premium 5kg</span>
                            </div>
                        </td>
                        <td>
                            <span class="stock-qty">18</span>
                        </td>
                        <td>
                            <span class="status-badge badge-stok-aman">Stok Aman</span>
                        </td>
                        <td>
                            <div class="actions-cell pe-2">
                                <a href="#" class="btn-edit-outline">
                                    <i class="bi bi-pencil-square"></i>
                                    <span>Edit</span>
                                </a>
                                <button type="button" class="btn-more" aria-label="Menu aksi">
                                    <i class="bi bi-three-dots"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- 5. Minyak Goreng 1L -->
                    <tr>
                        <td>
                            <div class="product-info-cell">
                                <div class="product-icon-box">
                                    <i class="bi bi-box"></i>
                                </div>
                                <span class="product-title">Minyak Goreng 1L</span>
                            </div>
                        </td>
                        <td>
                            <span class="stock-qty">3</span>
                        </td>
                        <td>
                            <span class="status-badge badge-stok-menipis">Stok Menipis</span>
                        </td>
                        <td>
                            <div class="actions-cell pe-2">
                                <a href="#" class="btn-edit-outline">
                                    <i class="bi bi-pencil-square"></i>
                                    <span>Edit</span>
                                </a>
                                <button type="button" class="btn-more" aria-label="Menu aksi">
                                    <i class="bi bi-three-dots"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- 6. Gula Pasir 1kg -->
                    <tr>
                        <td>
                            <div class="product-info-cell">
                                <div class="product-icon-box">
                                    <i class="bi bi-box"></i>
                                </div>
                                <span class="product-title">Gula Pasir 1kg</span>
                            </div>
                        </td>
                        <td>
                            <span class="stock-qty">0</span>
                        </td>
                        <td>
                            <span class="status-badge badge-habis">Habis</span>
                        </td>
                        <td>
                            <div class="actions-cell pe-2">
                                <a href="#" class="btn-edit-outline">
                                    <i class="bi bi-pencil-square"></i>
                                    <span>Edit</span>
                                </a>
                                <button type="button" class="btn-more" aria-label="Menu aksi">
                                    <i class="bi bi-three-dots"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>

        <!-- Card Footer / Pagination -->
        <div class="stok-footer">
            <div>
                Menampilkan 6 dari 6 produk
            </div>
            <div class="pagination-wrapper">
                <a href="#" class="pagination-btn disabled" aria-label="Sebelumnya">
                    <i class="bi bi-chevron-left"></i>
                </a>
                <a href="#" class="pagination-btn active">1</a>
                <a href="#" class="pagination-btn disabled" aria-label="Berikutnya">
                    <i class="bi bi-chevron-right"></i>
                </a>
            </div>
        </div>
    </div>

</div>
@endsection
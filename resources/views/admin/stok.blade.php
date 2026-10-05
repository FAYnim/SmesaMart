@extends('layouts.app')

@section('title', 'SmesaMart - Stok Produk')
@section('header_title', 'Stok Produk')
@section('active_nav', 'stok')

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
                                <a href="{{ url('/stok/edit') }}" class="btn-edit-outline">
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
                                <a href="{{ url('/stok/edit') }}" class="btn-edit-outline">
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
                                <a href="{{ url('/stok/edit') }}" class="btn-edit-outline">
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
                                <a href="{{ url('/stok/edit') }}" class="btn-edit-outline">
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
                                <a href="{{ url('/stok/edit') }}" class="btn-edit-outline">
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
                                <a href="{{ url('/stok/edit') }}" class="btn-edit-outline">
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
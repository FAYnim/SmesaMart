@extends('layouts.app')

@section('title', 'SmesaMart - Pengaturan')
@section('header_title', 'Pengaturan')
@section('search_placeholder', 'Cari sesuatu...')
@section('active_nav', 'pengaturan')

@section('header_user_badge')
    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100&auto=format&fit=crop&q=80" alt="Foto Profil Admin" class="top-user-img">
    <div class="top-user-meta d-none d-sm-block">
        <p class="top-user-name">Admin</p>
        <p class="top-user-sub">admin123</p>
    </div>
@endsection

@push('styles')
<style>
    /* Settings Cards */
    .settings-card {
        background-color: #ffffff;
        border: 1px solid #eef2f6;
        border-radius: 16px;
        padding: 1.75rem 2rem;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.02);
        margin-bottom: 1.75rem;
    }

    .settings-card-header {
        margin-bottom: 1.75rem;
    }

    .settings-card-title {
        font-size: 1.25rem;
        font-weight: 800;
        color: #0f172a;
        margin: 0 0 0.35rem 0;
        line-height: 1.2;
    }

    .settings-card-subtitle {
        font-size: 0.875rem;
        color: #64748b;
        margin: 0;
    }

    /* 3-Column Form Grid */
    .form-grid-3 {
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        gap: 1.5rem;
        margin-bottom: 1.75rem;
    }

    @media (min-width: 768px) {
        .form-grid-3 {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    .form-group-custom {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
    }

    .form-label-custom {
        font-size: 0.875rem;
        font-weight: 700;
        color: #0f172a;
        margin: 0;
    }

    .form-control-custom {
        width: 100%;
        background-color: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 10px;
        padding: 0.65rem 1rem;
        font-size: 0.9rem;
        color: #0f172a;
        outline: none;
        transition: all 0.2s ease;
    }

    .form-control-custom:focus {
        border-color: #00593b;
        box-shadow: 0 0 0 3px rgba(0, 89, 59, 0.08);
    }

    /* Password Input with Eye Icon */
    .password-input-wrapper {
        position: relative;
        display: flex;
        align-items: center;
    }

    .password-input-wrapper .form-control-custom {
        padding-right: 2.75rem;
        letter-spacing: 1px;
    }

    .btn-toggle-eye {
        position: absolute;
        right: 0.75rem;
        top: 50%;
        transform: translateY(-50%);
        background: transparent;
        border: none;
        color: #94a3b8;
        font-size: 1rem;
        cursor: pointer;
        padding: 4px 6px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: color 0.15s ease;
    }

    .btn-toggle-eye:hover {
        color: #0f172a;
    }

    /* Card Action Footer */
    .card-actions-row {
        display: flex;
        justify-content: flex-end;
        align-items: center;
    }

    .btn-submit-settings {
        background-color: #00593b;
        color: #ffffff;
        font-size: 0.9rem;
        font-weight: 700;
        border: none;
        border-radius: 10px;
        padding: 0.75rem 1.75rem;
        transition: all 0.2s ease;
        box-shadow: 0 2px 6px rgba(0, 89, 59, 0.15);
    }

    .btn-submit-settings:hover {
        background-color: #03482f;
        color: #ffffff;
        transform: translateY(-1px);
        box-shadow: 0 4px 12px rgba(0, 89, 59, 0.2);
    }
</style>
@endpush

@section('content')
<div class="container-fluid p-0">

    <!-- 1. CARD: Profil Admin -->
    <div class="settings-card">
        <div class="settings-card-header">
            <h2 class="settings-card-title">Profil Admin</h2>
            <p class="settings-card-subtitle">Kelola informasi akun admin</p>
        </div>

        <form onsubmit="return false;">
            <div class="form-grid-3">
                <!-- Nama -->
                <div class="form-group-custom">
                    <label class="form-label-custom" for="adminName">Nama</label>
                    <input type="text" id="adminName" class="form-control-custom" value="Admin">
                </div>

                <!-- Email -->
                <div class="form-group-custom">
                    <label class="form-label-custom" for="adminEmail">Email</label>
                    <input type="email" id="adminEmail" class="form-control-custom" value="admin@smesamart.com">
                </div>

                <!-- Nomor Telepon -->
                <div class="form-group-custom">
                    <label class="form-label-custom" for="adminPhone">Nomor Telepon</label>
                    <input type="text" id="adminPhone" class="form-control-custom" value="0812-3456-7890">
                </div>
            </div>

            <div class="card-actions-row">
                <button type="button" class="btn-submit-settings">Simpan Perubahan</button>
            </div>
        </form>
    </div>

    <!-- 2. CARD: Password -->
    <div class="settings-card">
        <div class="settings-card-header">
            <h2 class="settings-card-title">Password</h2>
            <p class="settings-card-subtitle">Perbarui password akun admin</p>
        </div>

        <form onsubmit="return false;">
            <div class="form-grid-3">
                <!-- Password Lama -->
                <div class="form-group-custom">
                    <label class="form-label-custom" for="currentPassword">Password Lama</label>
                    <div class="password-input-wrapper">
                        <input type="password" id="currentPassword" class="form-control-custom" value="password123">
                        <button type="button" class="btn-toggle-eye" aria-label="Lihat password">
                            <i class="bi bi-eye-slash"></i>
                        </button>
                    </div>
                </div>

                <!-- Password Baru -->
                <div class="form-group-custom">
                    <label class="form-label-custom" for="newPassword">Password Baru</label>
                    <div class="password-input-wrapper">
                        <input type="password" id="newPassword" class="form-control-custom" value="password123">
                        <button type="button" class="btn-toggle-eye" aria-label="Lihat password">
                            <i class="bi bi-eye-slash"></i>
                        </button>
                    </div>
                </div>

                <!-- Konfirmasi Password -->
                <div class="form-group-custom">
                    <label class="form-label-custom" for="confirmPassword">Konfirmasi Password</label>
                    <div class="password-input-wrapper">
                        <input type="password" id="confirmPassword" class="form-control-custom" value="password123">
                        <button type="button" class="btn-toggle-eye" aria-label="Lihat password">
                            <i class="bi bi-eye-slash"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="card-actions-row">
                <button type="button" class="btn-submit-settings">Ubah Password</button>
            </div>
        </form>
    </div>

</div>
@endsection

@push('scripts')
<script>
    // Password visibility toggle interaction
    document.querySelectorAll('.btn-toggle-eye').forEach(btn => {
        btn.addEventListener('click', function () {
            const input = this.closest('.password-input-wrapper').querySelector('input');
            const icon = this.querySelector('i');
            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.remove('bi-eye-slash');
                icon.classList.add('bi-eye');
            } else {
                input.type = 'password';
                icon.classList.remove('bi-eye');
                icon.classList.add('bi-eye-slash');
            }
        });
    });
</script>
@endpush

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

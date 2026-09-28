# SmesaMart - Platform E-Commerce & Backoffice UMKM

SmesaMart adalah platform web e-commerce dan backoffice terintegrasi yang dirancang untuk mendukung operasional ritel sekolah dan UMKM. Platform ini menyediakan etalase belanja online untuk pelanggan serta panel kontrol administratif untuk manajemen pesanan, inventaris stok, katalog produk, pengembalian, dan pengaturan toko.

---

## 1. Arsitektur & Tech Stack

- **Backend Framework:** Laravel 12.x (PHP 8.5)
- **Frontend Admin / Backoffice:** Bootstrap 5.3 + Bootstrap Icons + Chart.js
- **Frontend Storefront / Landing:** Tailwind CSS (Utility Engine) + Plus Jakarta Sans Typography
- **CSS Modular Architecture:**
  - `public/css/style.css` - Global design tokens (`:root`), typography base, layout shell backoffice (sidebar, navbar, mobile drawer).
  - `public/css/dashboard.css` - Modul styling terpusat untuk seluruh view admin (dashboard, produk, stok, pesanan, pengembalian, pengaturan).
  - `public/css/public.css` - Modul styling storefront publik (utility scrollbar, auth modals, catalog interactions).

---

## 2. Struktur Modul CSS (`public/css/`)

Untuk mempermudah pemeliharaan jangka panjang tanpa perlu mengedit tag `<style>` di setiap file Blade:

```
public/css/
├── style.css       # Token variabel warna, layout sidebar, header topbar, responsivitas drawer
├── dashboard.css   # Styling komponen internal admin (kartu KPI, tabel, badge status, modal, panel detail)
└── public.css      # Styling khusus storefront (halaman katalog belanja & modal autentikasi)
```

### Integrasi di View:
- **Admin Views (`layouts/app.blade.php`):**
  ```html
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
  ```
- **Storefront View (`resources/views/index.blade.php`):**
  ```html
  <link rel="stylesheet" href="{{ asset('css/public.css') }}">
  ```

---

## 3. Inventori Rute & Fitur

| Rute | View Blade | Modul CSS | Deskripsi Fitur |
|---|---|---|---|
| `GET /` | `resources/views/index.blade.php` | `public.css` | Etalase belanja konsumen, filter kategori, pencarian produk, keranjang belanja, dan modal login/daftar. |
| `GET /dashboard` | `resources/views/dashboard.blade.php` | `style.css`, `dashboard.css` | Rangkuman statistik penjualan, kartu metrik KPI, grafik Chart.js, dan pesanan terbaru. |
| `GET /produk` | `resources/views/produk.blade.php` | `style.css`, `dashboard.css` | Katalog produk admin, pencarian produk, tabel data produk, dan modal tambah/edit produk. |
| `GET /stok` | `resources/views/stok.blade.php` | `style.css`, `dashboard.css` | Monitoring kuantitas stok barang, status stok (Aman, Menipis, Habis), dan paginasi. |
| `GET /stok/edit` | `resources/views/stok-edit.blade.php` | `style.css`, `dashboard.css` | Formulir penyesuaian/edit stok produk (dummy), pratinjau kalkulasi mutasi, dan riwayat log stok. |
| `GET /pesanan` | `resources/views/pesanan.blade.php` | `style.css`, `dashboard.css` | Manajemen pesanan 2 kolom: daftar kartu pesanan di sisi kiri dan drawer detail pesanan di sisi kanan. |
| `GET /pengembalian` | `resources/views/pengembalian.blade.php` | `style.css`, `dashboard.css` | Monitoring komplain & retur pelanggan, kartu statistik retur, serta daftar transaksi terkait. |
| `GET /pengaturan` | `resources/views/pengaturan.blade.php` | `style.css`, `dashboard.css` | Konfigurasi profil admin, keamanan password, serta pengaturan operasional toko. |

---

## 4. Instalasi & Menjalankan Proyek

### Prasyarat
- PHP >= 8.2 (Direkomendasikan PHP 8.4 atau 8.5)
- Composer
- Node.js & npm

### Langkah Menjalankan
1. **Clone & Masuk ke Direktori Proyek:**
   ```bash
   git clone <repo-url>
   cd smesamart
   ```

2. **Instal Dependensi:**
   ```bash
   composer install
   npm install
   ```

3. **Konfigurasi Environment:**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Jalankan Server Lokal:**
   ```bash
   php artisan serve
   ```
   Akses melalui browser di `http://127.0.0.1:8000`.

---

## 5. Pengujian & Verifikasi

Jalankan test suite untuk memastikan seluruh fungsionalitas berjalan normal:
```bash
php artisan test
```
Verifikasi rendering view via tinker:
```bash
php artisan tinker --execute "echo view('dashboard')->render() ? 'OK' : 'FAIL';"
```

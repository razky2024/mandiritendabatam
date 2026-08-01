# ⛺ Mandiri Tenda Batam (CV. Mandiri Tenda Project)

> **Web Promotion & Order Management Platform** untuk persewaan tenda pernikahan, tenda roder VIP, tenda sarnafil kerucut, panggung rigid, sound system, & AC standing di Kota Batam.

![Option 1 Theme: Royal Joy & Celebration](https://img.shields.io/badge/Theme-Royal%20Joy%20%26%20Celebration-amber)
![Laravel Version](https://img.shields.io/badge/Laravel-13.x-red)
![PHP Version](https://img.shields.io/badge/PHP-8.3%2F8.4-blue)
![Tailwind CSS](https://img.shields.io/badge/Tailwind%20CSS-v4-06b6d4)
![FilamentPHP](https://img.shields.io/badge/FilamentPHP-v3-orange)

---

## 🌟 Fitur Utama & Keunggulan Aplikasi

1. **Desain Tema "Royal Joy & Celebration" (Option 1)**:
   - Aksesibilitas kontras tinggi dengan warna dasar **Warm Light Cream (`#FAFAF9`)** dan teks **Slate 900 (`#0F172A`)**.
   - **Primary Accent Warm Gold / Amber (`#F59E0B` / `#D97706`)** untuk tag harga, badge *★ Featured*, dan highlight paket mewah.
   - **Main Action CTA Emerald Green (`#059669` / `#047857`)** untuk tombol pemesanan WhatsApp direct & kalkulator estimasi.
2. **Katalog Produk Dinamis dengan Filter Alpine.js**:
   - Filter tanpa reload halaman (*Zero-page-refresh*) untuk kategori Tenda Pernikahan, Tenda Roder, Sarnafil, dan Panggung/Sound.
   - Tampilan harga **Fix Price** & **Custom Quote** dinamis.
   - Modal Lightbox detail kelengkapan paket.
3. **Kalkulator Estimasi Biaya Event Instan**:
   - Slider kapasitas tamu (50 - 1.000 Tamu).
   - Selector jenis event (Resepsi Pernikahan, Corporate/Peresmian, Bazar/Pameran).
   - Checkbox opsi add-on (Standing AC 5 PK, Panggung VIP, Flooring Papan + Karpet, Sound System).
   - Perhitungan total instan dalam Rupiah (IDR) dengan CTA langsung kirim rincian estimasi ke WhatsApp.
4. **Optimasi Foto Produk Otomatis (WebP 1200px)**:
   - Server-side processing `ImageOptimizerService` yang mengompresi foto produk ke WebP (maksimal 1200px, kualitas 80%).
5. **Backoffice Admin Panel (FilamentPHP v3)**:
   - Pengelolaan CRUD Kategori & Produk secara instan.
   - Fitur upload multi-gambar dengan thumbnail & drag-and-drop.
   - Logging otomatis riwayat interaksi WhatsApp & penggunaan kalkulator estimasi (`InquiryLogs`).

---

## ⚙️ Spesifikasi Teknologi (Tech Stack)

* **Core Backend Framework:** PHP Laravel 13
* **Database Management:** MySQL 8.0 / MariaDB
* **Frontend UI Engine:** Laravel Blade + Tailwind CSS v4 + Alpine.js v3
* **Admin Panel Backoffice:** FilamentPHP v3
* **Image Processing Engine:** Intervention Image + GD WebP Extension
* **Structured Data & SEO:** Schema.org `LocalBusiness` JSON-LD & OpenGraph Meta Tags

---

## 🚀 Panduan Instalasi & Penggunaan Lokal

### 1. Prasyarat Sistem
* PHP `>= 8.3` (Extension `gd`, `pdo`, `mbstring`, `openssl`, `curl` diaktifkan)
* Composer v2
* Node.js `>= 18` & npm
* MySQL / MariaDB (Laragon / XAMPP)

### 2. Langkah Kloning & Setup Repository

```bash
# Clone repository
git clone https://github.com/razky2024/mandiritendabatam.git
cd mandiritendabatam

# Install dependensi PHP & Node.js
composer install
npm install

# Copy environment file & generate App Key
cp .env.example .env
php artisan key:generate

# Konfigurasi Database di .env
# DB_DATABASE=mandiritendabatam
# DB_USERNAME=root
# DB_PASSWORD=

# Jalankan Migrasi Database & Seeder
php artisan migrate:fresh --seed

# Buat symbolic link storage
php artisan storage:link

# Publikasi Aset Filament Admin
php artisan filament:assets

# Build Aset Frontend Vite
npm run build
```

### 3. Menjalankan Server Lokal

```bash
# Jalankan server Laravel Development
php artisan serve
```

Buka browser dan akses:
* **Halaman Publik**: `http://127.0.0.1:8000`
* **Panel Admin**: `http://127.0.0.1:8000/admin/login`

---

## 🔑 Kredensial Login Admin Panel

| Parameter | Nilai / Credential |
|---|---|
| **URL Login** | [http://127.0.0.1:8000/admin/login](http://127.0.0.1:8000/admin/login) |
| **Email / Username** | `admin@mandiritendabatam.com` atau `admin` |
| **Password** | `admin` |

---

## 📍 Informasi Usaha & Kontak Resmi

* **Nama Perusahaan:** CV. Mandiri Tenda Project
* **Alamat Kantor / Gudang:** Kios Puri Brata No. 11-12, Kavling Lama / Perumahan Buana Indah 1, Blok C3 No. 1, Batam, Kepulauan Riau 29432.
* **Google Maps Location:** [https://maps.app.goo.gl/Z1RxTpPtZ14hGZZo7](https://maps.app.goo.gl/Z1RxTpPtZ14hGZZo7)
* **Jam Operasional:** Senin - Minggu: 08.00 - 20.00 WIB (Layanan Darurat Event 24 Jam)

---

## 📄 Lisensi
Sistem ini dikembangkan secara profesional untuk CV. Mandiri Tenda Project Batam. All Rights Reserved.

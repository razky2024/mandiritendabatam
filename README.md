# ⛺ Mandiri Tenda Batam (CV. Mandiri Tenda Project)

> **Web Promotion & Order Management Platform** for tent and event equipment rentals in Batam City, Kepulauan Riau, Indonesia. Specializing in luxury wedding tents, VIP roder hall tents, sarnafil pagoda tents, rigid stages, pro sound systems, & standing air conditioners.

![Option 1 Theme: Royal Joy & Celebration](https://img.shields.io/badge/Theme-Royal%20Joy%20%26%20Celebration-amber)
![Laravel Version](https://img.shields.io/badge/Laravel-13.x-red)
![PHP Version](https://img.shields.io/badge/PHP-8.3%2F8.4-blue)
![Tailwind CSS](https://img.shields.io/badge/Tailwind%20CSS-v4-06b6d4)
![FilamentPHP](https://img.shields.io/badge/FilamentPHP-v3-orange)

---

## 🌟 Features & Highlights

1. **"Royal Joy & Celebration" UI Theme Design**:
   - High-contrast accessibility featuring **Warm Light Cream (`#FAFAF9`)** background surface and **Slate 900 (`#0F172A`)** typography.
   - **Primary Brand Accent - Warm Gold / Amber (`#F59E0B` / `#D97706`)** for price tags, featured badges, and luxury package highlights.
   - **Main Action CTA - Emerald Green (`#059669` / `#047857`)** for high-converting direct WhatsApp booking buttons & cost calculator actions.
2. **Dynamic Product Catalog with Alpine.js Tab Filters**:
   - Zero-page-refresh filtering across categories: Wedding Tents, Roder Tents, Sarnafil Pagoda, and Stage/Sound.
   - Support for **Fix Price** packages and **Custom Quote** items.
   - Lightbox modal showcasing complete package specifications and included items.
3. **Interactive Event Cost Estimator**:
   - Guest count range slider (50 to 1,000 guests).
   - Event type selector (Wedding Reception, Corporate Groundbreaking, Bazaar/Exhibition).
   - Add-on selection (Standing AC 5 PK, VIP Stage Upgrade, Wood Flooring + Carpet, Pro Sound & Lighting).
   - Real-time IDR cost calculation (`Rp X.XXX.XXX`) with direct WhatsApp pre-filled quote routing.
4. **Automated Server-Side Media Optimization (WebP 1200px)**:
   - Server-side processing engine `ImageOptimizerService` automatically scales uploaded images to max 1200px and converts PNG/JPG images to WebP format at 80% compression quality.
5. **FilamentPHP Admin Panel Backoffice**:
   - Instant CRUD management for Categories and Products.
   - Drag-and-drop multi-image uploader with thumbnails.
   - Automated `InquiryLogs` tracking to monitor client WhatsApp clicks and estimation usage.

---

## ⚙️ Technology Stack

* **Core Backend Framework:** PHP Laravel 13
* **Database Management:** MySQL 8.0 / MariaDB
* **Frontend UI Engine:** Laravel Blade + Tailwind CSS v4 + Alpine.js v3
* **Admin Panel Backoffice:** FilamentPHP v3
* **Image Processing Engine:** Intervention Image + GD WebP Extension
* **SEO & Structured Data:** Schema.org `LocalBusiness` JSON-LD & OpenGraph Meta Tags

---

## 🚀 Local Installation & Setup Guide

### 1. Prerequisites
* PHP `>= 8.3` (with `gd`, `pdo`, `mbstring`, `openssl`, `curl` extensions enabled)
* Composer v2
* Node.js `>= 18` & npm
* MySQL / MariaDB

### 2. Repository Setup Steps

```bash
# Clone the repository
git clone https://github.com/razky2024/mandiritendabatam.git
cd mandiritendabatam

# Install PHP & Node.js dependencies
composer install
npm install

# Copy environment file & generate application key
cp .env.example .env
php artisan key:generate

# Configure Database in .env file
# DB_DATABASE=mandiritendabatam
# DB_USERNAME=root
# DB_PASSWORD=

# Run Database Migrations & Seeders
php artisan migrate:fresh --seed

# Create storage symbolic link
php artisan storage:link

# Publish Filament Admin assets
php artisan filament:assets

# Build frontend production assets with Vite
npm run build
```

### 3. Running Development Server

```bash
# Start Laravel local development server
php artisan serve
```

Access via browser:
* **Public Website**: `http://127.0.0.1:8000`
* **Admin Panel**: `http://127.0.0.1:8000/admin/login`

---

## 🔑 Admin Panel Access Credentials

| Parameter | Value / Credential |
|---|---|
| **Admin Login URL** | [http://127.0.0.1:8000/admin/login](http://127.0.0.1:8000/admin/login) |
| **Email / Username** | `admin@mandiritendabatam.com` or `admin` |
| **Password** | `admin` |

---

## 📍 Business Location & Official Contact

* **Company Name:** CV. Mandiri Tenda Project
* **Office & Warehouse Address:** Kios Puri Brata No. 11-12, Kavling Lama / Perumahan Buana Indah 1, Blok C3 No. 1, Batam, Kepulauan Riau 29432, Indonesia.
* **Google Maps Location:** [https://maps.app.goo.gl/Z1RxTpPtZ14hGZZo7](https://maps.app.goo.gl/Z1RxTpPtZ14hGZZo7)
* **Operational Hours:** Monday - Sunday: 08:00 - 20:00 WIB (24-Hour Emergency Event Service Available)

---

## 📄 License
Developed for CV. Mandiri Tenda Project Batam. All Rights Reserved.

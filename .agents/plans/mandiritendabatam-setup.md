# Plan: Mandiri Tenda Batam Web Promotion & Admin Platform Setup

## 1. Decisions & Architectural Trade-offs
- Tech Stack: Laravel 13, MySQL 8.0, FilamentPHP v3, Tailwind CSS v4, Alpine.js micro-directives.
- Business Details: CV. Mandiri Tenda Project, Batam (Google Maps: https://maps.app.goo.gl/Z1RxTpPtZ14hGZZo7).
- Image Processing: Intervention Image (v3) to resize images to max width 1200px and convert to WebP format at 80% compression quality.
- Rate Limiting: Apply `throttle:6,1` on `InquiryController` endpoint to prevent spamming.
- Multi-Price Display: Handle `fix` (with IDR formatted cost) vs `custom` (Custom Quote badge + WA request) seamlessly on Blade templates & Filament CRUD.

## 2. Granular Micro-Tasks

### Phase 1: Environment & Core Setup
- [x] **Micro-Task 1.1**: Initialize standard Laravel 12/13 application structure in `c:/laragon/www/mandiritendabatam`.
- [x] **Micro-Task 1.2**: Install required Composer packages (`filament/filament`, `intervention/image`).
- [x] **Micro-Task 1.3**: Configure `.env` database connection (`mandiritendabatam`) and app config.

### Phase 2: Database Migrations, Models & Seeders
- [x] **Micro-Task 2.1**: Create `Category` migration & model with fields (`name`, `slug`, `description`, `sort_order`, `is_active`).
- [x] **Micro-Task 2.2**: Create `Product` migration & model with fields (`category_id`, `name`, `slug`, `price_type`, `price`, `unit`, `short_description`, `full_description`, `included_items`, `is_featured`, `is_active`) and composite index `[is_active, is_featured]`.
- [x] **Micro-Task 2.3**: Create `ProductImage` migration & model with fields (`product_id`, `image_path`, `sort_order`, `is_primary`).
- [x] **Micro-Task 2.4**: Create `InquiryLog` migration & model with fields (`product_id`, `client_name`, `event_date`, `location`, `inquiry_type`, `raw_payload`).
- [x] **Micro-Task 2.5**: Create Seeder with mock categories, packages (fix & custom price types), images, and an admin user.

### Phase 3: FilamentPHP Backoffice Setup
- [x] **Micro-Task 3.1**: Install Filament panel (`php artisan filament:panel admin`).
- [x] **Micro-Task 3.2**: Create `CategoryResource` with CRUD forms and tables.
- [x] **Micro-Task 3.3**: Create `ProductResource` with image upload handling and Intervention Image WebP compression pipeline (max 1200px, 80% quality).
- [x] **Micro-Task 3.4**: Create `InquiryLogResource` read-only dashboard table & metrics.

### Phase 4: Frontend UI (Blade + Tailwind CSS v4 + Alpine.js)
- [x] **Micro-Task 4.1**: Build Glassmorphic Header navigation & Hero Section with Batam event value props.
- [x] **Micro-Task 4.2**: Build dynamic Category Tab Filtering & Product Cards (Fix price IDR format vs Custom Quote modal).
- [x] **Micro-Task 4.3**: Build Product Specification Lightbox Modal.
- [x] **Micro-Task 4.4**: Build Interactive Event Cost Estimator (50-1000 guest slider, event type selection, add-on toggles, live IDR calculation).
- [x] **Micro-Task 4.5**: Implement WhatsApp direct pre-filled link routing & floating WA button.
- [x] **Micro-Task 4.6**: Build `InquiryController` endpoint with `throttle:6,1` rate limiting to log interactions before opening WhatsApp.
- [x] **Micro-Task 4.7**: Integrate OpenGraph social meta tags & Schema.org `LocalBusiness` JSON-LD.

### Phase 5: Empirical Verification & Testing
- [x] **Micro-Task 5.1**: Run `php artisan migrate:fresh --seed` and verify database tables.
- [x] **Micro-Task 5.2**: Test Filament admin panel CRUD, image uploads & WebP conversion.
- [x] **Micro-Task 5.3**: Run frontend asset compilation (`npm run build` or Vite) and verify zero errors.
- [x] **Micro-Task 5.4**: Perform end-to-end verification of WhatsApp routing & estimator calculation.

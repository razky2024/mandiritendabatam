# Product Requirement Document (PRD)
## Project: Mandiri Tenda Batam - Web Promotion & Order Management Platform
**Version:** 1.0  
**Target Execution Engine:** Antigravity AI / Agentic Coding System  
**Primary Tech Stack:** PHP Laravel 12/13, MySQL 8.0, Tailwind CSS v4, Alpine.js, FilamentPHP v3  

---

## 1. Executive Summary & Vision

### 1.1 Project Goals
Mandiri Tenda Batam is a professional tent and event equipment rental service operating in Batam, Indonesia. The goal of this platform is to convert web visitors (couples planning weddings, corporate event organizers, bazaar managers) into high-intent WhatsApp inquiries and leads through a high-performance, visual-first, fast-loading web application.

### 1.2 Core Success Metrics
* **Page Load Speed:** Under 1.5 seconds on 4G mobile networks in Batam (LCP < 1.2s, CLS < 0.05).
* **Conversion Rate:** High WhatsApp click-through rate driven by instant estimation calculator and targeted package CTAs.
* **Admin Efficiency:** Seamless content and media updates via FilamentPHP backoffice with automatic WebP media compression.

---

## 2. System Architecture & High-Level Design

```
+-----------------------------------------------------------------------------------+
|                                 CLIENT / FRONTEND                                 |
|                        (Tailwind CSS v4 + Alpine.js Micro UI)                      |
|                                                                                   |
|  +--------------------+  +-----------------------+  +--------------------------+  |
|  |  Hero & Showcase   |  | Katalog & Filter UI   |  | Interactive Calculator   |  |
|  +--------------------+  +-----------------------+  +--------------------------+  |
+-----------------------------------------+-----------------------------------------+
                                          |
                                          v
+-----------------------------------------------------------------------------------+
|                                LARAVEL BACKEND CORE                               |
|                                                                                   |
|  +--------------------+  +-----------------------+  +--------------------------+  |
|  | Media Optimizer    |  | Inquiry Log Tracker   |  | Dynamic Price Formatters |  |
|  | (Auto WebP 1200px) |  |                       |  | (Fix vs Custom Quote)    |  |
|  +--------------------+  +-----------------------+  +--------------------------+  |
+-----------------------------------------+-----------------------------------------+
                                          |
                     +--------------------+--------------------+
                     |                                         |
                     v                                         v
+------------------------------------------+ +--------------------------------------+
|             MYSQL DATABASE               | |         FILAMENTPHP ADMIN            |
| Categories, Products, Images, Logs       | | Catalog CRUD, Media, Inquiry Tracker |
+------------------------------------------+ +--------------------------------------+
```

---

## 3. Detailed Data Models & Schema Requirements

### 3.1 Entities & Attributes

#### Entity 1: `Category`
* **Purpose:** Groups rental products into distinct business segments.
* **Fields:**
  * `id` (Primary Key, Auto Increment)
  * `name` (String, Required) - e.g., "Tenda Pernikahan", "Tenda Roder", "Sarnafil", "Panggung & Sound"
  * `slug` (String, Unique, Indexed)
  * `description` (Text, Nullable)
  * `sort_order` (Integer, Default: 0)
  * `is_active` (Boolean, Default: true)
  * `timestamps`

#### Entity 2: `Product`
* **Purpose:** Stores individual rental packages or standalone equipment offerings.
* **Fields:**
  * `id` (Primary Key, Auto Increment)
  * `category_id` (Foreign Key -> `categories.id`, Cascade Delete)
  * `name` (String, Required)
  * `slug` (String, Unique, Indexed)
  * `price_type` (Enum: `fix`, `custom`, Default: `fix`)
  * `price` (Decimal 12,2, Nullable) - Required if `price_type` == `fix`
  * `unit` (String, Nullable) - e.g., "paket", "unit/hari", "m2"
  * `short_description` (Text, Nullable)
  * `full_description` (LongText, Nullable)
  * `included_items` (JSON Array, Nullable) - List of string items included in the package
  * `is_featured` (Boolean, Default: false)
  * `is_active` (Boolean, Default: true)
  * `timestamps`
* **Indexes:** `[is_active, is_featured]` for instant catalog queries.

#### Entity 3: `ProductImage`
* **Purpose:** Stores gallery photos for each product package.
* **Fields:**
  * `id` (Primary Key, Auto Increment)
  * `product_id` (Foreign Key -> `products.id`, Cascade Delete)
  * `image_path` (String, Required)
  * `sort_order` (Integer, Default: 0)
  * `is_primary` (Boolean, Default: false)
  * `timestamps`

#### Entity 4: `InquiryLog`
* **Purpose:** Logs client interaction events when clicking WhatsApp or running estimations.
* **Fields:**
  * `id` (Primary Key, Auto Increment)
  * `product_id` (Foreign Key -> `products.id`, Nullable, Null on Delete)
  * `client_name` (String, Nullable)
  * `event_date` (Date, Nullable)
  * `location` (String, Nullable)
  * `inquiry_type` (Enum: `whatsapp_direct`, `calculator_quote`, Default: `whatsapp_direct`)
  * `raw_payload` (Text, Nullable)
  * `timestamps`

---

## 4. Feature Requirements & User Stories

### 4.1 Frontend / Public Experience

#### Requirement 4.1.0: Frontend UI Theme & Aesthetic Standards ("Royal Joy & Celebration")
* **Design Concept:** Option 1: "Royal Joy & Celebration" - A warm, high-contrast, luxury wedding and event aesthetic.
* **Color Palette & Tokens:**
  * **Primary Brand Accent (Warm Gold / Amber):** `#F59E0B` (`amber-500`) / `#D97706` (`amber-600`) - Used for luxury package highlights, price tags, badges, and active tab indicators.
  * **Main Action CTA (Emerald Green):** `#059669` (`emerald-600`) / `#047857` (`emerald-700`) - Used exclusively for WhatsApp buttons, booking actions, and high-conversion CTAs representing prosperity and fresh beginnings.
  * **Background Surface (Warm Off-White / Cream):** `#FAFAF9` (`stone-50`) / `#FEFCE8` (`yellow-50`) - Light, warm cream backdrop for an airy, elegant, and welcoming presentation.
  * **Typography & Body Text (Slate 900):** `#0F172A` (`slate-900`) / `#1E293B` (`slate-800`) - High-contrast charcoal text for optimal readability across mobile and desktop.

#### Requirement 4.1.1: Navigation & Hero Showcase
* **User Story:** As a prospective customer, I want to quickly understand what Mandiri Tenda Batam offers and how to contact them immediately.
* **Specifications:**
  * Sticky header with glassmorphism backdrop on light cream surface (`backdrop-blur-md bg-white/80 border-stone-200`).
  * Hero section with strong value proposition targeting Batam events on warm cream background (`bg-stone-50`).
  * Direct CTAs: "Lihat Katalog" (Warm Gold/Amber button) and "Hitung Estimasi Biaya" (Glass border button).
  * Floating WhatsApp button (Emerald Green `#059669` with ripple animation) accessible across all viewports.

#### Requirement 4.1.2: Dynamic Catalog & Multi-Price Display
* **User Story:** As a customer, I want to filter products by event type and clearly see fixed package costs or request custom quotes.
* **Specifications:**
  * Tab-based category filter powered by Alpine.js without page reloads.
  * **Fix Price Display:** Show exact currency amount in Warm Gold (`#D97706`) (e.g., "Rp 18.500.000") with Emerald Green "Pesan via WA" button.
  * **Custom Price Display:** Show badge "Custom Quote / Hubungi WA" in Amber/Gold tint with dynamic event modal.
  * Modal Lightbox for viewing full package specifications and high-res image previews.

#### Requirement 4.1.3: Interactive Event Cost Estimator
* **User Story:** As an event planner, I want to estimate my tent rental cost based on guest count and event type before contacting the owner.
* **Specifications:**
  * Guest count slider input (Range: 50 to 1,000 guests).
  * Event type selector (Wedding, Corporate/Groundbreaking, Bazaar).
  * Add-on toggles (e.g., Standing AC / Cooling units).
  * Live calculated output formatted in IDR (`Rp X.XXX.XXX`).
  * Instant Emerald Green CTA to send pre-filled payload directly to WhatsApp.

#### Requirement 4.1.4: Direct WhatsApp Pre-filled Routing
* **User Story:** As a customer clicking a CTA, I want my WhatsApp message pre-filled with the exact package or estimation details.
* **Specifications:**
  * Format template for Fixed Price:
    > `"Halo Mandiri Tenda Batam, saya tertarik dengan paket [Nama Paket] seharga [Harga]. Apakah ready untuk tanggal [Tanggal]?"`
  * Format template for Calculator Quote:
    > `"Halo Mandiri Tenda Batam, saya telah menghitung estimasi di web: [Jumlah] Tamu, Acara [Tipe], dengan perkiraan [Nominal]. Mohon info kelanjutannya."`

---

### 4.2 Backoffice / Admin Panel (FilamentPHP)

#### Requirement 4.2.1: Content Management (CRUD)
* Full management of Categories and Products.
* Drag-and-drop multi-image uploader with thumbnail re-ordering.
* Support for toggling Fix vs. Custom price types dynamically.

#### Requirement 4.2.2: Automated Media Optimization Engine
* Automatic server-side processing upon image upload:
  * Resize maximum dimension to 1200px (maintaining aspect ratio).
  * Auto-convert PNG/JPG files to WebP format with 80% compression quality.
  * Generate optimized thumbnail previews to eliminate frontend lag.

#### Requirement 4.2.3: Lead & Inquiry Tracking Dashboard
* Read-only table showing logs of WhatsApp clicks and calculator usages.
* Metrics widget displaying most popular packages and peak inquiry days.

---

## 5. Non-Functional Requirements & Performance Rules

1. **Performance & Lightweight Execution:**
   * No heavy JS frameworks (React/Vue/Angular) on the public frontend. Use Tailwind CSS + Alpine.js micro-directives only.
   * CSS transitions used for all modal, dropdown, and tab states to guarantee 60fps UI feedback.
2. **Security & Data Integrity:**
   * Admin routes protected by Laravel auth & rate limiting (`throttle:6,1` for public endpoints).
   * All user inputs sanitised before logging or generating WA URL parameter strings.
3. **SEO & Local Search Optimization:**
   * Pre-configured OpenGraph meta tags for rich link previews when shared on WhatsApp.
   * Schema.org `LocalBusiness` structured data integrated into the layout.

---

## 6. Antigravity AI Implementation Prompt

> **Instructions for Antigravity AI Agent:**  
> "Please implement the Mandiri Tenda Batam project adhering strictly to this PRD (`prd.md`). Execute database migrations for `categories`, `products`, `product_images`, and `inquiry_logs`. Build the frontend views using Laravel Blade + Tailwind CSS v4 + Alpine.js with smooth transitions. Configure FilamentPHP v3 for the admin backoffice and integrate image auto-compression to WebP (max width 1200px)."

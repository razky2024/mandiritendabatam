<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Admin User (Username/Email: admin or admin@mandiritendabatam.com, password: admin)
        User::updateOrCreate(
            ['email' => 'admin@mandiritendabatam.com'],
            [
                'name' => 'admin',
                'password' => bcrypt('admin'),
            ]
        );

        User::updateOrCreate(
            ['email' => 'admin'],
            [
                'name' => 'admin',
                'password' => bcrypt('admin'),
            ]
        );

        // Categories
        $c1 = Category::updateOrCreate(
            ['slug' => 'tenda-pernikahan'],
            [
                'name' => 'Tenda Pernikahan',
                'description' => 'Sewa paket tenda pernikahan dekorasi VIP dan komplit untuk pesta nikah di Batam.',
                'sort_order' => 1,
                'is_active' => true,
            ]
        );

        $c2 = Category::updateOrCreate(
            ['slug' => 'tenda-roder-event-vip'],
            [
                'name' => 'Tenda Roder & Event VIP',
                'description' => 'Tenda roder aluminium struktur besar untuk acara perusahaan, pameran, dan groundbreaking.',
                'sort_order' => 2,
                'is_active' => true,
            ]
        );

        $c3 = Category::updateOrCreate(
            ['slug' => 'tenda-sarnafil-bazar'],
            [
                'name' => 'Tenda Sarnafil & Bazar',
                'description' => 'Tenda kerucut sarnafil 3x3m & 5x5m cocok untuk booth pameran, event outdoor & kuliner.',
                'sort_order' => 3,
                'is_active' => true,
            ]
        );

        $c4 = Category::updateOrCreate(
            ['slug' => 'panggung-sound-lighting'],
            [
                'name' => 'Panggung, Sound & Lighting',
                'description' => 'Peralatan pendukung event: panggung rigid, sound system profesional, dan lighting stage.',
                'sort_order' => 4,
                'is_active' => true,
            ]
        );

        // Products
        Product::updateOrCreate(
            ['slug' => 'paket-tenda-pernikahan-luxury-batam'],
            [
                'category_id' => $c1->id,
                'name' => 'Paket Tenda Pernikahan Luxury Batam',
                'price_type' => 'fix',
                'price' => 18500000.00,
                'unit' => 'paket',
                'short_description' => 'Paket pernikahan mewah komplit tenda dekorasi VIP 10x20m, pelaminan, dan AC standing.',
                'full_description' => 'Paket Tenda Pernikahan Luxury dirancang khusus untuk mewujudkan pernikahan impian Anda di Batam. Menggunakan kain dekorasi melayu/modern bernuansa elegan, dilengkapi dengan panggung pelaminan mewah, lighting ambience warm white, kursi futura berkain, serta standing AC pendingin ruangan.',
                'included_items' => [
                    'Tenda Dekorasi VIP Full Plafon (Ukuran 10m x 20m)',
                    'Set Panggung Pelaminan Modern / Melayu (Lebar 6-8 Meter)',
                    '100 Pcs Kursi Futura + Cover Ketat & Pita Warna',
                    '2 Unit Standing AC 5 PK + Kipas Blower Heavy Duty',
                    'Panggung Utama + Karpet Merah Red Carpet',
                    'Set Meja Prasmanan & Meja Penerima Tamu Dekorasi'
                ],
                'is_featured' => true,
                'is_active' => true,
            ]
        );

        Product::updateOrCreate(
            ['slug' => 'paket-tenda-pernikahan-standard-elegan'],
            [
                'category_id' => $c1->id,
                'name' => 'Paket Tenda Pernikahan Standard Elegan',
                'price_type' => 'fix',
                'price' => 12000000.00,
                'unit' => 'paket',
                'short_description' => 'Paket tenda semi dekorasi 8x15m komplit pelaminan dan kursi tamu.',
                'full_description' => 'Pilihan favorit keluarga Batam untuk pesta pernikahan rumahan/outdoor yang anggun dan tetap hemat anggaran.',
                'included_items' => [
                    'Tenda Semi Dekorasi Plafon (Ukuran 8m x 15m)',
                    'Panggung Pelaminan Standard Minimalis (5 Meter)',
                    '60 Pcs Kursi Futura + Cover',
                    '2 Unit Kipas Blower Cooling Fan',
                    'Lampu Penerangan LED + Wiring Kabel Kabel'
                ],
                'is_featured' => true,
                'is_active' => true,
            ]
        );

        Product::updateOrCreate(
            ['slug' => 'tenda-roder-aluminium-structural-event'],
            [
                'category_id' => $c2->id,
                'name' => 'Tenda Roder Aluminium Structural Event',
                'price_type' => 'custom',
                'price' => null,
                'unit' => 'm2',
                'short_description' => 'Tenda struktur roder tanpa tiang tengah, bentang luas untuk groundbreaking & perkantoran.',
                'full_description' => 'Tenda Roder (Hall Tent) adalah solusi tepat untuk peresmian pabrik, exhibition, groundbreaking, dan acara besar skala industri di Batam. Tanpa tiang penyangga di tengah sehingga memaksimalkan area ruangan.',
                'included_items' => [
                    'Struktur Aluminium Truss Bentang 10m - 25m',
                    'Cover Atap & Dinding PVC Heavy Duty Waterproof',
                    'Pilihan Dinding Transparan (Glass/Clear PVC) / Solid White',
                    'Instalasi Flooring Kayu + Karpet Buana VIP',
                    'Sistem Pendingin AC Central / Standing 10 PK'
                ],
                'is_featured' => true,
                'is_active' => true,
            ]
        );

        Product::updateOrCreate(
            ['slug' => 'tenda-sarnafil-kerucut-3x3m-5x5m'],
            [
                'category_id' => $c3->id,
                'name' => 'Tenda Sarnafil Kerucut 3x3m & 5x5m',
                'price_type' => 'fix',
                'price' => 750000.00,
                'unit' => 'unit/hari',
                'short_description' => 'Tenda kerucut eksklusif untuk booth pameran, bazar, registrasi, dan posko.',
                'full_description' => 'Tenda Sarnafil berbahan pvc putih bersih rangka aluminium tangguh. Tahan angin laut Batam dan hujan deras.',
                'included_items' => [
                    'Rangka Aluminium Square & Kerucut',
                    'Terpal Dinding PVC yang bisa dibuka-tutup',
                    ' include 1 Set Meja Lipat + 2 Kursi Plastic'
                ],
                'is_featured' => false,
                'is_active' => true,
            ]
        );

        Product::updateOrCreate(
            ['slug' => 'paket-panggung-rigid-sound-system-5000w'],
            [
                'category_id' => $c4->id,
                'name' => 'Paket Panggung Rigid & Sound System 5000W',
                'price_type' => 'custom',
                'price' => null,
                'unit' => 'paket',
                'short_description' => 'Panggung konser/konser kecil + sound system pro audio & lighting stage.',
                'full_description' => 'Peralatan produksi acara lengkap dengan operator sound berpengalaman untuk acara musik, seminar, dan peresmian.',
                'included_items' => [
                    'Panggung Modular Aluminium Rigid 6m x 8m (Tinggi 1m - 1.5m)',
                    'Sound System Active Line Array 5.000 Watt RMS',
                    'Digital Mixer 16 Channel + Microphone Wireless Shure',
                    'Lighting Stage (Par LED 54x3W + Moving Head Beam)'
                ],
                'is_featured' => false,
                'is_active' => true,
            ]
        );
    }
}

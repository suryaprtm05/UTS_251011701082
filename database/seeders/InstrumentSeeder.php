<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstrumentSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('instruments')->insert([
            [
                'name' => 'Kala Makala Concert Ukulele',
                'brand' => 'Kala',
                'price' => 850000,
                'description' => 'Ukulele konser dengan suara cerah dan kayu mahoni pilihan, sangat cocok untuk pemula maupun musisi jalanan.',
                'image' => '1.jpg',
                'type' => 'Ukulele'
            ],
            [
                'name' => 'Casio CT-S200 Keyboard',
                'brand' => 'Casio',
                'price' => 1750000,
                'description' => 'Keyboard portable dengan 61 kunci dan berbagai pilihan suara instrumen menarik.',
                'image' => '2.jpg',
                'type' => 'Keyboard'
            ],
            [
                'name' => 'Roland TD-1DMK V-Drums',
                'brand' => 'Roland',
                'price' => 8500000,
                'description' => 'Drum elektrik dengan mesh head ganda untuk sensasi pukul yang natural dan senyap.',
                'image' => '3.jpg',
                'type' => 'Drum'
            ],
            [
                'name' => 'Meinl HCAJ1NT Headliner Cajon',
                'brand' => 'Meinl',
                'price' => 1950000,
                'description' => 'Cajon akustik perkusi dengan senar internal yang menghasilkan ketukan bass mendalam dan tepian renyah.',
                'image' => '4.jpg',
                'type' => 'Perkusi'
            ],
            [
                'name' => 'Fender Squier Bullet Stratocaster',
                'brand' => 'Fender',
                'price' => 2800000,
                'description' => 'Gitar elektrik bergaya stratocaster yang ikonik, ideal untuk berbagai genre musik rock dan pop.',
                'image' => '5.jpg',
                'type' => 'Gitar Elektrik'
            ],
            [
                'name' => 'Korg Volca Keys Analog Synthesizer',
                'brand' => 'Korg',
                'price' => 2650000,
                'description' => 'Synthesizer analog lead 3-voice dengan looping sequencer internal bergaya vintage.',
                'image' => '6.jpg',
                'type' => 'Synthesizer'
            ],
            [
                'name' => 'Cort Earth 70 Open Pore Acoustic',
                'brand' => 'Cort',
                'price' => 1450000,
                'description' => 'Gitar akustik dengan finishing open pore yang menghasilkan resonansi suara hangat dan jernih.',
                'image' => '7.jpg',
                'type' => 'Gitar'
            ],
            [
                'name' => 'Ibanez Gio GRX40 Electric Guitar',
                'brand' => 'Ibanez',
                'price' => 2450000,
                'description' => 'Gitar elektrik dengan konfigurasi pickup H-S-S yang fleksibel untuk permainan cepat dan distorsi bertenaga.',
                'image' => '8.jpg',
                'type' => 'Gitar Elektrik'
            ],
            [
                'name' => 'Yamaha YFL-222 Flute',
                'brand' => 'Yamaha',
                'price' => 5900000,
                'description' => 'Flute student series dengan bahan nikel silver berlapis perak, menghasilkan intonasi stabil.',
                'image' => '9.jpg',
                'type' => 'Alat Musik Tiup'
            ],
            [
                'name' => 'Stentor Student I Acoustic Violin 4/4',
                'brand' => 'Stentor',
                'price' => 2100000,
                'description' => 'Biola akustik buatan tangan dari kayu padat pilihan, ideal untuk pelajar musik klasik.',
                'image' => '10.jpg',
                'type' => 'Biola'
            ],
        ]);
    }
}
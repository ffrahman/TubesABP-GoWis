<?php

namespace Database\Seeders;

use App\Models\PaketWisata;
use Illuminate\Database\Seeder;

class PaketWisataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaketWisata::create([
            'nama_paket' => 'Paket Wisata 1',
            'gambar' => 'https://lzd-img-global.slatic.net/g/p/a5465ef16f452de5a3ccdd098cf05ca5.jpg_720x720q80.jpg_.webp',
            'harga' => '70.000',
            'durasi' => '4',
            'deskripsi' => 'Villa (4 tempat tidur), makan pagi, akses masuk wisata',
        ]);
        PaketWisata::create([
            'nama_paket' => 'Paket Wisata 2',
            'gambar' => 'https://lzd-img-global.slatic.net/g/p/a5465ef16f452de5a3ccdd098cf05ca5.jpg_720x720q80.jpg_.webp',
            'harga' => '100.000',
            'durasi' => '7',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci',
        ]);
        PaketWisata::create([
            'nama_paket' => 'Paket Wisata 3',
            'gambar' => 'https://lzd-img-global.slatic.net/g/p/a5465ef16f452de5a3ccdd098cf05ca5.jpg_720x720q80.jpg_.webp',
            'harga' => '200.000',
            'durasi' => '1',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci',
        ]);
        PaketWisata::create([
            'nama_paket' => 'Paket Wisata 4',
            'gambar' => 'https://lzd-img-global.slatic.net/g/p/a5465ef16f452de5a3ccdd098cf05ca5.jpg_720x720q80.jpg_.webp',
            'harga' => '1.000',
            'durasi' => '3',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci',
        ]);
        PaketWisata::create([
            'nama_paket' => 'Paket Wisata 5',
            'gambar' => 'https://lzd-img-global.slatic.net/g/p/a5465ef16f452de5a3ccdd098cf05ca5.jpg_720x720q80.jpg_.webp',
            'harga' => '10.000',
            'durasi' => '7',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci',
        ]);
        PaketWisata::create([
            'nama_paket' => 'Paket Wisata 6',
            'gambar' => 'https://lzd-img-global.slatic.net/g/p/a5465ef16f452de5a3ccdd098cf05ca5.jpg_720x720q80.jpg_.webp',
            'harga' => '50.000',
            'durasi' => '2',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci',
        ]);
    }
}
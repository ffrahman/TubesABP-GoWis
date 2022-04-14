<?php

namespace Database\Seeders;

use App\Models\Sewa;
use Illuminate\Database\Seeder;

class SewaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sewa::create([
        //     'nama_kendaran' => 'Toyota Avanza',
        //     'harga' => 'Rp. 450.000',
        //     'gambar' => 'https://salsawisata.b-cdn.net/wp-content/uploads/2021/01/rental-xenia-avanza-e1614778899586.png',
        //     'penumpang' => '6',
        // ]);
        // Sewa::create([
        //     'nama_kendaran' => 'Grand New Innova',
        //     'harga' => 'Rp. 650.000',
        //     'gambar' => 'https://salsawisata.b-cdn.net/wp-content/uploads/2021/02/sewa-mobil-kijang-grand-new-innova-e1614777723937.png',
        //     'penumpang' => '7',
        // ]);
        Sewa::create([
            'nama_kendaran' => 'Pajero Sport',
            'harga' => 'Rp. 1.800.000',
            'gambar' => 'https://salsawisata.b-cdn.net/wp-content/uploads/2021/03/sewa-mobil-pajero-e1614778579958.png',
            'penumpang' => '5',
        ]);
        Sewa::create([
            'nama_kendaran' => 'Grand Fortuner',
            'harga' => 'Rp. 1.600.000',
            'gambar' => 'https://salsawisata.b-cdn.net/wp-content/uploads/2021/02/sewa-mobil-grand-fortuner-e1614778346725.png',
            'penumpang' => '5',
        ]);
        Sewa::create([
            'nama_kendaran' => 'Toyota Alphard',
            'harga' => 'Rp. 3.500.000',
            'gambar' => 'https://salsawisata.b-cdn.net/wp-content/uploads/2021/02/sewa-mobil-alphard-e1614777974145.png',
            'penumpang' => '4',
        ]);
        Sewa::create([
            'nama_kendaran' => 'Kawasaki KLX',
            'harga' => 'Rp. 190.000',
            'gambar' => 'https://salsawisata.b-cdn.net/wp-content/uploads/2021/02/sewa-motor-klx-e1614777837320.png',
            'penumpang' => '2',
        ]);
        Sewa::create([
            'nama_kendaran' => 'Yamaha Nmax',
            'harga' => 'Rp. 200.000',
            'gambar' => 'https://salsawisata.b-cdn.net/wp-content/uploads/2021/02/sewa-motor-nmx-e1614777899444.png',
            'penumpang' => '2',
        ]);
        Sewa::create([
            'nama_kendaran' => 'Honda Scoopy',
            'harga' => 'Rp. 150.000',
            'gambar' => 'https://salsawisata.b-cdn.net/wp-content/uploads/2021/02/sewa-motor-scoopy-e1614777824399.png',
            'penumpang' => '2',
        ]);
        Sewa::create([
            'nama_kendaran' => 'Honda Supra X',
            'harga' => 'Rp. 100.000',
            'gambar' => 'https://salsawisata.b-cdn.net/wp-content/uploads/2021/02/sewa-motor-supra-x-e1614777874764.png',
            'penumpang' => '2',
        ]);
        Sewa::create([
            'nama_kendaran' => 'Honda Vario CBS',
            'harga' => 'Rp. 120.000',
            'gambar' => 'https://salsawisata.b-cdn.net/wp-content/uploads/2021/02/sewa-motor-vario-cbs-e1614777850230.png',
            'penumpang' => '2',
        ]);
    }
}
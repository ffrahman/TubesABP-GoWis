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
        Sewa::create([
            'nama_kendaraan' => 'Pajero Sport',
            'harga' => '1.800.000',
            'image' => 'https://salsawisata.b-cdn.net/wp-content/uploads/2021/03/sewa-mobil-pajero-e1614778579958.png',
            'penumpang' => '5',
        ]);
        Sewa::create([
            'nama_kendaraan' => 'Grand Fortuner',
            'harga' => '1.600.000',
            'image' => 'https://salsawisata.b-cdn.net/wp-content/uploads/2021/02/sewa-mobil-grand-fortuner-e1614778346725.png',
            'penumpang' => '5',
        ]);
        Sewa::create([
            'nama_kendaraan' => 'Toyota Alphard',
            'harga' => '3.500.000',
            'image' => 'https://salsawisata.b-cdn.net/wp-content/uploads/2021/02/sewa-mobil-alphard-e1614777974145.png',
            'penumpang' => '4',
        ]);
        Sewa::create([
            'nama_kendaraan' => 'Kawasaki KLX',
            'harga' => '190.000',
            'image' => 'https://salsawisata.b-cdn.net/wp-content/uploads/2021/02/sewa-motor-klx-e1614777837320.png',
            'penumpang' => '2',
        ]);
        Sewa::create([
            'nama_kendaraan' => 'Yamaha Nmax',
            'harga' => '200.000',
            'image' => 'https://salsawisata.b-cdn.net/wp-content/uploads/2021/02/sewa-motor-nmx-e1614777899444.png',
            'penumpang' => '2',
        ]);
        Sewa::create([
            'nama_kendaraan' => 'Honda Scoopy',
            'harga' => '150.000',
            'image' => 'https://salsawisata.b-cdn.net/wp-content/uploads/2021/02/sewa-motor-scoopy-e1614777824399.png',
            'penumpang' => '2',
        ]);
        Sewa::create([
            'nama_kendaraan' => 'Honda Supra X',
            'harga' => '100.000',
            'image' => 'https://salsawisata.b-cdn.net/wp-content/uploads/2021/02/sewa-motor-supra-x-e1614777874764.png',
            'penumpang' => '2',
        ]);
        Sewa::create([
            'nama_kendaraan' => 'Honda Vario CBS',
            'harga' => '120.000',
            'image' => 'https://salsawisata.b-cdn.net/wp-content/uploads/2021/02/sewa-motor-vario-cbs-e1614777850230.png',
            'penumpang' => '2',
        ]);
    }
}
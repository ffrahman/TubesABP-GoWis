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
            'nama_kendaran' => 'Kendaraan 1',
            'harga' => 'Rp. 1.000.000',
            'gambar' => 'https://salsawisata.b-cdn.net/wp-content/uploads/2021/01/rental-xenia-avanza-e1614778899586.png',
            'penumpang' => '2',
        ]);
        Sewa::create([
            'nama_kendaran' => 'Kendaraan 2',
            'harga' => 'Rp. 1.000.000',
            'gambar' => 'https://salsawisata.b-cdn.net/wp-content/uploads/2021/01/rental-xenia-avanza-e1614778899586.png',
            'penumpang' => '2',
        ]);
        Sewa::create([
            'nama_kendaran' => 'Kendaraan 3',
            'harga' => 'Rp. 1.000.000',
            'gambar' => 'https://salsawisata.b-cdn.net/wp-content/uploads/2021/01/rental-xenia-avanza-e1614778899586.png',
            'penumpang' => '2',
        ]);
        Sewa::create([
            'nama_kendaran' => 'Kendaraan 4',
            'harga' => 'Rp. 1.000.000',
            'gambar' => 'https://salsawisata.b-cdn.net/wp-content/uploads/2021/01/rental-xenia-avanza-e1614778899586.png',
            'penumpang' => '2',
        ]);
        Sewa::create([
            'nama_kendaran' => 'Kendaraan 5',
            'harga' => 'Rp. 1.000.000',
            'gambar' => 'https://salsawisata.b-cdn.net/wp-content/uploads/2021/01/rental-xenia-avanza-e1614778899586.png',
            'penumpang' => '2',
        ]);
        Sewa::create([
            'nama_kendaran' => 'Kendaraan 6',
            'harga' => 'Rp. 1.000.000',
            'gambar' => 'https://salsawisata.b-cdn.net/wp-content/uploads/2021/01/rental-xenia-avanza-e1614778899586.png',
            'penumpang' => '2',
        ]);
        Sewa::create([
            'nama_kendaran' => 'Kendaraan 7',
            'harga' => 'Rp. 1.000.000',
            'gambar' => 'https://salsawisata.b-cdn.net/wp-content/uploads/2021/01/rental-xenia-avanza-e1614778899586.png',
            'penumpang' => '2',
        ]);
        Sewa::create([
            'nama_kendaran' => 'Kendaraan 8',
            'harga' => 'Rp. 1.000.000',
            'gambar' => 'https://salsawisata.b-cdn.net/wp-content/uploads/2021/01/rental-xenia-avanza-e1614778899586.png',
            'penumpang' => '2',
        ]);
        Sewa::create([
            'nama_kendaran' => 'Kendaraan 9',
            'harga' => 'Rp. 1.000.000',
            'gambar' => 'https://salsawisata.b-cdn.net/wp-content/uploads/2021/01/rental-xenia-avanza-e1614778899586.png',
            'penumpang' => '2',
        ]);
    }
}
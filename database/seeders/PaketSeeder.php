<?php

namespace Database\Seeders;

use App\Models\Paket;
use Illuminate\Database\Seeder;

class PaketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Paket::create([
            'nama' => 'Paket Wisata Cikole',
            'image' => 'https://phinemo.com/wp-content/uploads/2019/10/grafika-cikole-1-1024x678.jpg',
            'harga' => '700.000',
            'durasi' => '4',
            'deskripsi' => 'Villa (4 tempat tidur), makan pagi, akses masuk wisata',
        ]);
        Paket::create([
            'nama' => 'Paket Wisata Ciwidey',
            'image' => 'https://www.tagar.id/Asset/uploads2019/1609746660436-wisata-kawah-putih.jpeg',
            'harga' => '500.000',
            'durasi' => '2',
            'deskripsi' => 'Villa (4 tempat tidur), makan pagi, akses masuk wisata',
        ]);
        Paket::create([
            'nama' => 'Paket Wisata Lodge Maribaya',
            'image' => 'http://assets.rappler.com/612F469A6EA84F6BAE882D2B94A4B421/img/A84A9BE00FE94182900B95074899BE19/thelodge2.jpg',
            'harga' => '1.000.000',
            'durasi' => '2',
            'deskripsi' => 'Villa (3 kamar tidur), makan pagi dan malam.',
        ]);
        Paket::create([
            'nama' => 'Paket Wisata Lembang Park Zoo',
            'image' => 'https://kelanamakan.com/wp-content/uploads/2020/10/1-LembangParkZoo_01.jpg',
            'harga' => '400.000',
            'durasi' => '3',
            'deskripsi' => 'Villa (2 tempat tidur), akses masuk wisata',
        ]);
        Paket::create([
            'nama' => 'Paket Wisata Asia Africa',
            'image' => 'https://travelspromo.com/wp-content/uploads/2020/01/The-Great-Asia-Africa-Lembang.jpg',
            'harga' => '800.000',
            'durasi' => '7',
            'deskripsi' => 'Villa (4 tempat tidur), Makan pagi, Akses masuk wisata',
        ]);
        Paket::create([
            'nama' => 'Paket Wisata De Ranch',
            'image' => 'https://origin.pegipegi.com/jalan/images/pict1L/Y8/Y991608/Y991608182.jpg',
            'harga' => '900.000',
            'durasi' => '2',
            'deskripsi' => 'Hottel (2 tempat tidur), Makan pagi dan malam',
        ]);
    }
}
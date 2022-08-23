<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name'=> 'Chitato',
            'price'=> 11500,
            'thumbnail'=> 'chitato.jpg',
            'desc'=> 'Enak Tau',
            'category_id'=> 1,
        ]);

        Product::create([
            'name'=> 'Doritos',
            'price'=> 12000,
            'thumbnail'=> 'doritos.jpg',
            'desc'=> 'Enak dah Mantap',
            'category_id'=> 1,
        ]);

        Product::create([
            'name'=> 'Chitato',
            'price'=> 11500,
            'thumbnail'=> 'chitato.jpg',
            'desc'=> 'Enak Tau',
            'category_id'=> 1,
        ]);

        Product::create([
            'name'=> 'Doritos',
            'price'=> 12000,
            'thumbnail'=> 'doritos.jpg',
            'desc'=> 'Enak dah Mantap',
            'category_id'=> 1,
        ]);

        Product::create([
            'name'=> 'Chitato',
            'price'=> 11500,
            'thumbnail'=> 'chitato.jpg',
            'desc'=> 'Enak Tau',
            'category_id'=> 1,
        ]);

        Product::create([
            'name'=> 'Doritos',
            'price'=> 12000,
            'thumbnail'=> 'doritos.jpg',
            'desc'=> 'Enak dah Mantap',
            'category_id'=> 1,
        ]);

        Product::create([
            'name'=> 'Indomie Goreng',
            'price'=> 3500,
            'thumbnail'=> 'indomie.jpg',
            'desc'=> 'Lejat Bergiji',
            'category_id'=> 2,
        ]);

        Product::create([
            'name'=> 'Pocari Sweat',
            'price'=> 7000,
            'thumbnail'=> 'pocari.jpg',
            'desc'=> 'Segar',
            'category_id'=> 3,
        ]);

        Product::create([
            'name'=> 'Scarlett Whitening',
            'price'=> 60000,
            'thumbnail'=> 'scarlett.jpg',
            'desc'=> 'Putih Berkilau',
            'category_id'=> 4,
        ]);

        Product::create([
            'name'=> 'Bodrex',
            'price'=> 5000,
            'thumbnail'=> 'bodrex.jpg',
            'desc'=> 'Obat Sakit Kepala',
            'category_id'=> 5,
        ]);
    }
}

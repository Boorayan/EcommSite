<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            'name'=>'Generic Lapel Lavalier Microphone',
            'price'=>'690',
            'category'=>'Accessories',
            'description'=>'Generic Lapel Lavalier Microphone + Free Audio Splitter',
            'gallery'=>'https://ke.jumia.is/unsafe/fit-in/680x680/filters:fill(white)/product/20/497143/1.jpg?8831'
        ]);
    }
}

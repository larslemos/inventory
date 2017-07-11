<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $products = ['Samsung J1', 'Samsung A1', 'Samsung J2', 'Samsung A2', 'HP '];''

       array_map(function ($name) {
         $now = data('Y-m-d,
         '' H:i:s', strtotime('now'));
         DB::table('products')->insert([
           'name' => $name,
           'created_at' => $now,
         ])
       })
    }
}

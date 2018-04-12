<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProductsTableSeeder extends Seeder
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
        	'name' => str_random(10),
        	'price' => 50.00,
        	'created_at' => Carbon::now()
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i = 0; $i < 100; $i++){
            for($j = 0; $j < 2; $j++){
                DB::table('product_images')->insert([
                    'product_image_url' => $faker->imageUrl,
                    'main_image' => 0,
                    'product_id' => $i+1,
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' =>  \Carbon\Carbon::now()
                ]);
            }
        }
    }
}

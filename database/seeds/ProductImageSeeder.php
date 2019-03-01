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
        for($i = 0; $i < 200; $i++){
            DB::table('product_images')->insert([
                'product_images_url' => $faker->imageUrl,
                'main_image_url' => $faker->imageUrl,
                'product_id' => ($i+1)%2,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' =>  \Carbon\Carbon::now()
            ]);
        }
    }
}

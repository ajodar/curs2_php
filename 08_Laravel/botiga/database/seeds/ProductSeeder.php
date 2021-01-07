<?php

use App\Product;
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
        $faker = Faker\Factory::create();

        for( $i=0; $i<9 ; $i++ ){
            $product = new Product;

            $product->name = $faker->word();
            $product->description = $faker->sentence(6,true);
            $product->category_id = $faker->numberBetween(1, 5);
            $product->price = $faker->randomFloat(2, 0, 1000);
            $product->image = $faker ->imageUrl( 640, 480);

            $product->save();
        }

    }
}

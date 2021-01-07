<?php

use App\Shop;
use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();


        for($i=0; $i<10; $i++){

            $shop = new Shop;

            $shop->name = $faker->company() ;
            $shop->adress = $faker->address() ;
            $shop->phone = $faker->phoneNumber() ;
            $shop->email = $faker->email() ;
            $shop->schedule = $faker->sentence() ;
            $shop->country_id = $faker->numberBetween(1,2) ;

            $shop->save();

        }



    }
}

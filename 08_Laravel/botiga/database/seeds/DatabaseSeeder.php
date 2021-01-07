<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(CategorySeeder::class);

        // Puc afegir-ne d'altres... així no he de fer php artisan db::seed--class=CategorySeeder
        // $this->call(CountrySeeder::class);
        // $this->call(ShopsSeeder::class);
    }
}

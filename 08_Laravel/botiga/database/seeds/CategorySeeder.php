<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category;
        $category->name = "Alimentació 2";
        $category->description = "Productes d'alimentació";
        $category->color = "#ff0000";

        $category = new Category;
        $category->name = "Begudes 2";
        $category->description = "Productes per beure";
        $category->color = "#ffff00";

        $category = new Category;
        $category->name = "Neteja 2";
        $category->description = "Productes per netejar";
        $category->color = "#ff00ff";
    }
}

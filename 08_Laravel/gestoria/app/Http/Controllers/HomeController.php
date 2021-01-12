<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $product = Product::find(1);
        return view('home')
            ->with('product', $product);
    }

    public function crearProducte(){
        $product = new Product;

        $product->category_id = 1;
        $product->price = 10.50;
        $product->image = 'producte1.jpg';

        $product->{'name:es'} = "Naranjas de Valencia";
        $product->{'description:es'} = "Las mejores naranjas del mundo";

        $product->{'name:en'} = "Valencian orange";
        $product->{'description:en'} = "World best oranges";


        $product->save();
    }
}

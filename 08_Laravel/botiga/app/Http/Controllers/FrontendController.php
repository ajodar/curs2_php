<?php

namespace App\Http\Controllers;

use App\Category;
use App\Country;
use App\Product;
use App\Shop;
use Illuminate\Http\Request;
use Producte;

class FrontendController extends Controller
{
    //
    public function quisom(){
        $client = "aaaa";
        $producte = "bbb";
        return view('frontend.quisom', ['client'=> $client, 'producte'=> $producte]);
    }

    public function filosofia(){
        $client = "aaaa";
        $producte = "bbb";
        return view('frontend.filosofia', compact('client','producte'));
    }

    public function sostenibilitat(){
        $client = "aaaa";
        $producte = "bbb";
        return view('frontend.sostenibilitat')
            ->with('client', $client)
            ->with('producte', $producte);
    }

    public function equip(){
        return view('frontend.equip');
    }

    public function contacte(){
        return view('frontend.contacte');
    }

    public function categories(){
        // Recupero categoria i camps
        $categories = Category::all();
        //L'envio a la vista
        return view('frontend.categories')
        ->with('categories', $categories);
    }

    public function categoria($id){
        $categoria = Category::find($id);
        // $productes = Product::where('category_id',$id)->get();

        // $productes = Product::where('price', '>', 20)
        //     ->where(function($query){
        //         $query->where('category_id',1)
        //         ->orWhere('category_id', 2);
        //     })
        //     ->get();

        return view('frontend.categoria')
        ->with('categoria', $categoria);
        // ->with('productes', $productes);
    }

    public function product($id){
        $product = Product::find($id);
        return view('frontend.product')
        ->with('product', $product);
    }

    public function botigues(){
        $countries = Country::get();

        return view('frontend.botigues')
        ->with('countries', $countries);
    }

    public function botiga($id){
        $botiga= Shop::find($id);

        return view('frontend.botiga')
        ->with('botiga', $botiga);
    }

    public function botigaSearch(){
        return view('frontend.botiga_search');
    }

    public function botigaResultSearch(){
        $nom = $_POST["nom"];
        $botigues = Shop::where('name', 'like', '%'.$nom.'%')->get();

        return view('frontend.botigues_results_search')
        ->with('botigues',$botigues);
    }

    public function productSearch(){
        $categories = Category::get();

        return view('frontend.product_search')
        ->with('categories', $categories);
    }

    public function productResultSearch(){
        $nom = $_POST["nom"];
        $minim = $_POST["minim"];
        $maxim = $_POST["maxim"];
        $categoria = $_POST["categoria"];

        $query = Product::where('name', 'like', '%'.$nom.'%')
            ->where('price', '>=',$minim)
            ->where('price', '<=', $maxim)
        ;

        if($categoria!=0){
            $query->where('category_id', $categoria);
        }

        $productes = $query->get();

        return view('frontend.product_results_search')
        ->with('productes', $productes);
    }

    public function productes(){
        $productes = Product::get();

        return view('frontend.productes')
            ->with('productes', $productes);
    }
}

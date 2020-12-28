<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
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

    public function alimentacio(){
        // Recupero categoria i camps
        $categoria = Category::find(1);
        //L'envio a la vista
        return view('frontend.alimentacio')
        ->with('categoria',$categoria);
    }

    public function categoria($id){
        $categoria = Category::find($id);
        return view('frontend.categoria')
        ->with('categoria', $categoria);
    }

    public function product($id){
        $product = Product::find($id);
        return view('frontend.product')
        ->with('product', $product);
    }
}

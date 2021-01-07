<?php

namespace App\Http\Controllers;

use App\Shop;
use App\Country;
use Illuminate\Http\Request;


class ShopsController extends Controller
{
    public function index(){
        $shops = Shop::withTrashed()->get();

        return view('shops.index')
            ->with('shops', $shops);
    }

    public function create(){
        $countries = Country::orderBy('name','ASC')->get();

        return view('shops.create')
            ->with('countries', $countries);
    }

    public function store(Request $request){

        $validation = $request->validate(Shop::$rules);


        $name = $_POST['name'];
        $adress = $_POST['adress'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $schedule = $_POST['schedule'];
        $country_id = $_POST['country_id'];

        $shop = new Shop;
        $shop->name = $name;
        $shop->adress = $adress;
        $shop->phone = $phone;
        $shop->email = $email;
        $shop->schedule = $schedule;
        $shop->country_id = $country_id;

        $shop->save();

        return redirect()->route('shops.index');

    }

    public function edit($id){
        $shop = Shop::find($id);
        $countries = Country::orderBy('name','ASC')->get();

        return view('shops.edit')
            ->with('countries', $countries)
            -> with('shop', $shop);
    }

    public function update($id){
        //Agafo valors del questionari
        $name = $_POST['name'];
        $adress = $_POST['adress'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $schedule = $_POST['schedule'];
        $country_id = $_POST['country_id'];


        //Busques object: mirar documentació
        $shop = Shop::find($id);

        //Posa els valors del form
        $shop->name = $name;
        $shop->adress = $adress;
        $shop->phone = $phone;
        $shop->email = $email;
        $shop->schedule = $schedule;
        $shop->country_id = $country_id;

        $shop->save();

        return redirect()->route('shops.index');
    }

    public function destroy($id){
        $shop = Shop::find($id);
        $shop->delete();

        return redirect()->route('shops.index');
    }

    public function restore($id){
        Shop::withTrashed()->where('id',$id)->restore();

        return redirect()->route('shops.index');

    }


}

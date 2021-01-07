<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(){

        $categories = Category::withTrashed()->get();

        return view('categories.index')
            ->with('categories', $categories);

    }

    public function create(){
        return view('categories.create');
    }

    public function store(Request $request){

        $validation = $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $name = $_POST["name"];
        $description = $_POST["description"];
        $color = $_POST["color"];

        $category = new Category;
        $category->name = $name;
        $category->description = $description;
        $category->color = $color;

        $category->save();

        return redirect()->route('categories.index');

    }

    public function edit($id){
        $category = Category::find($id);

        return view('categories.edit')
            -> with('category', $category);
    }

    public function update(Request $request, $id){

        //Validació:
        $validation = $request->validate(
            // Validar des del model:
            Category::$rules

            //Per no copiar a més d'un lloc l'array, està al model:
            // ['name' => 'required',
            // 'description' => 'required']


        );

        //Agafo valors del questionari
        $name = $request["name"];
        $description = $request["description"];
        $color = $request["color"];

        //Busques object: mirar documentació
        $category = Category::find($id);

        //Posa els valors del form
        $category->name = $name;
        $category->description = $description;
        $category->color = $color;

        $category->save();

        return redirect()->route('categories.index');

    }

    public function destroy($id){
        $category= Category::find($id);
        $category->delete();

        return redirect()->route('categories.index');

    }

    public function restore($id){
        Category::withTrashed()->where('id',$id)->restore();

        return redirect()->route('categories.index');
    }
}

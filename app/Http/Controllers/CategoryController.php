<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class CategoryController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $categorys = Category::all();
        return view('category', compact('categorys'));
    }

    public function create(){
        return view('createcategory');
    }

    public function store(Request $request){
        $request->validate([
            'category' =>'required',
        ]);

        Category::create([
            'category' => $request->category,
        ]);

        return redirect('/');
    }

    public function show($id){
        $category = Category::FindOrFail($id);
        // $categories = Category::FindOrFail($category->product->productname);
        return view('showcategories', compact('category'));
    }

    public function destroy($id){
        Product::destroy($id);
        return back();
    }
}

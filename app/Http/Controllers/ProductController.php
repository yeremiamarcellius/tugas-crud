<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductController extends Controller
{
    //

    public function __construct(){
        $this->middleware('auth')->except('home');
    }

    public function home(){
        $products = Product::all();
        return view('welcome', compact('products'));
    }

    public function show($id){
        $product = Product::FindOrFail($id);
        return view('show', compact('product'));
    }

    public function create(){
        $categories=Category::all();
        return view('create', compact('categories'));
    }

    public function store(Request $request){
        $request->validate([
            'name' =>'required',
            'price'=>'required',
            'stock'=>'required',
            'date'=>'required',
            'category_id'=>'required'
        ]);
        
        Product::create([
            'productname' => $request->name,
            'description' => $request->desc,
            'price' => $request->price,
            'stock' => $request->stock,
            'expireddate' => $request->date,
            'category_id'=>$request->category_id
        ]);

        return redirect('/');
    }

    public function edit($id){
        $product = Product::FindOrFail($id);
        $categories = Category::all();
        return view('update', compact('product', 'categories'));
    }

    public function update(Request $request, $id){
        Product::FindOrFail($id)->update([
            'productname' => $request->name,
            'description' => $request->desc,
            'price' => $request->price,
            'stock' => $request->stock,
            'expireddate' => $request->date,
            'category_id'=>$request->category_id
        ]);
        return redirect('/');
    }

    public function destroy($id){
        Product::destroy($id);
        return back();
    }
}

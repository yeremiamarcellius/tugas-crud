<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    //
    public function home(){
        $products = Product::all();
        
        return view('welcome', compact('products'));
    }

    public function show($id){
        $product = Product::FindOrFail($id);
        return view('show', compact('product'));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        Product::create([
            'productname' => $request->name,
            'description' => $request->desc,
            'price' => $request->price,
            'stock' => $request->stock,
            'expireddate' => $request->date
        ]);

        return redirect('/');
    }

    public function edit($id){
        $product = Product::FindOrFail($id);
        return view('update', compact('product'));
    }

    public function update(Request $request, $id){
        Product::FindOrFail($id)->update([
            'productname' => $request->name,
            'description' => $request->desc,
            'price' => $request->price,
            'stock' => $request->stock,
            'expireddate' => $request->date
        ]);
        return redirect('/');
    }

    public function destroy($id){
        Product::destroy($id);
        return back();
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function cari(Request $request){
        $name = $request->name;
        $products = Product::where('name','like',"%".$name."%")->paginate(2);
        return view('product', [
            'products' => $products,
            'categories' => Category::all()
        ]);

    }
    public function render()
    {
        $products = Product::paginate(11);
        return view('product', [
            'products' => $products,
            'categories' => Category::all()
        ]);
       
    }
}

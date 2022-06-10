<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function shop(){
        $product = Product::get();

        return view('client.shop', compact('product'));
    }

    public function shop_detail($id){
        $product = Product::findOrFail($id);

        return view('client.detail', compact('product'));
    }
}

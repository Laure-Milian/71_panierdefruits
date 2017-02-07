<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getIndex() {
    	$products = \App\Product::all();
    	return view('list', ['products' => $products]);
    }

    public function getShow($id) {
    	$product = \App\Product::find($id);
    	return view('show', ['product' => $product]);
    }

}

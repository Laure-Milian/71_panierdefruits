<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Comment;

class ProductController extends Controller
{
    public function getIndex() {
    	$products = Product::all();
        return view('list', ['products' => $products]);
    }

    public function getShow($id) {
        $product = Product::find($id);
        $comments = Comment::where('product_id', $id)->get();
    	return view('show', ['product' => $product, 'comments' => $comments]);
    }


    public function postSubtract(Request $request, $id) {
    	$product = Product::find($id);
    	$product->stock--;
    	$product->save();
        return response($product->stock);
    }

    public function postAdd(Request $request, $id) {
    	$product = Product::find($id);
    	$product->stock++;
    	$product->save();
    	return response($product->stock);
    }

    public function getCreate() {
		return view('create');    	
    }

    public function postCreateProduct(Request $request) {
    	$product = new Product;
    	$product->name = $request->name;
    	$product->description = $request->description;
    	$product->price = $request->price;
    	$product->stock = $request->stock;
    	$product->save();
    	return redirect('products')->with('success', ['Le produit', $product->name, 'a bien été ajouté']
        );
    }

    public function postDelete($id) {
    	$product = Product::find($id);
    	$product->forceDelete();
    	return redirect('products')->with('success', ['Le produit', $product->name, 'a bien été supprimé']);
    }

    public function getEdit($id) {
    	$product = Product::find($id);
    	return view('edit', ['product' => $product]);
    }

    public function postEdit($id, Request $request) {
    	$product = Product::find($id);
    	$product->name = $request->name;
    	$product->description = $request->description;
    	$product->price = $request->price;
    	$product->stock = $request->stock;
    	$product->save();
    	return redirect('products')->with('success', ['Le produit', $product->name, 'a bien été modifié']); 
    }

}

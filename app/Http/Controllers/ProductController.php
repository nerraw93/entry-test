<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class ProductController extends Controller
{
    //
    public function index() {
    	$products = Products::all();
    	return view('home', compact('products'));
    }

    public function create() {
    	return view('create');
    }

    public function store(Request $request) {
    	$product = new Products();
    	$product->name = $request->get('name');
    	$product->price = $request->get('price');
    	$product->save();

    	return redirect('/')->with('success', 'Information has been added!');
    }

    public function edit($id) {
    	$products = Products::find($id);

    	return view('edit', compact('products', 'id'));
    }

    public function update(Request $request, $id) {
    	$product = Products::find($id);
    	$product->name = $request->get('name');
    	$product->price = $request->get('price');
    	$product->save();

    	return redirect('/')->with('success', 'Information has been updated!');
    }

    public function destroy($id) {
    	$product = Products::find($id);
    	$product->delete();

    	return redirect('/')->with('success', 'Information has been deleted!');
    }
}

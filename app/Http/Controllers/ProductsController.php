<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
        public function index(){ 
            $products = Products::all();
            return view('Products.products_list', compact('products'));
        }
        
        public function store(Request $request){
            $products = new products();
            $products->name = $request->name;
            $products->price = $request->price;
            // dd($request);die;
            $validatedData = $request->validate([
                'price' => ['required', 'unique:products', 'max:1000000'],
                'name' => ['required'],
            ]);
            // dd($products);die;

            $products->save();   
            return redirect()->route('products_list');
        }
    
        public function show_add_form(){
            return view('products.products_add');
        }
        
        public function show($id){
            $products = products::find($id);
            return view('products.products_show', compact('products'));
        }
    
        public function edit( Request $request,$id){
            $products = products::where('id',$id)->update([
                'name'=>$request->post('name'),
                'price'=>$request->post('price')
            ]);
            return redirect()->route('products_list');
        }
    
        public function delete(Request $request,$id){
            products::where('id',$id)->delete();
            return redirect()->route('products_list');
        }
    
    
}

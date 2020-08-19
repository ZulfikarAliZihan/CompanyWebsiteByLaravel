<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
     public function index(){
        $product=Product::orderBy('id','desc')->get();
       
        return view('index')->with("products",$product);
    }
    public function insert(){
        
        return view('insert');
    }
    public function add(Request $request){
        
        $this->validate($request,[
            'name'=>'required',  
        ]);
        $product=new Product();
        $product->name=$request->name;
        
        if($request->hasFile('media')){
            $product->image=$request->media->store('public/images/products');
        }
        $product->save();
        return back();
        
    }
}

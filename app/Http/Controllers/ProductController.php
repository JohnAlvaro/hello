<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use App\Product;

class ProductController extends Controller
{

  public function index(){

    $products = Product::paginate(3);
    //$product = Product::find($id);
    return view('index')->with('products',$products);
  }


  public function add(Request $request){
      $product = new Product();
      $product->name= $request->name;
      $product->precio= (double)$request->precio;
      $product->description= $request->description;
      $product->save();

      return Redirect::to('/');
    }

    public function edit($id){
      $pro = Product::find($id);
      $products = Product::paginate(3);


      return view('edit')->with('products',$products)
                         ->with('pro',$pro);
    }

    public function update(Request $request,$id){

      $product = Product::find($id);
      $product->name = $request->name;
      $product->precio =(double)$request->precio;
      $product->description = $request->description;
      $product->save();
      return Redirect::to('/');
    }

    public function delete($id){
      $product = Product::find($id);
      $product->delete();
      return Redirect::to('/');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Categories;



class ProductController extends Controller
{
    //
    function index()
    {
        // $products DB::table('products')->paginate(3);
    $products = Product::paginate(3);
    // dd($products->toArray());
    // $age =27;

    return view('products.index',["products"=>$products]);
    }


    function destroy ($id){
        // dd("destroy $id");
        $product = Product::find($id);
        $product->delete();
        // return redirect()->route("product.index");
        return redirect()->back();

    }
    function edit ($id){
        // dd("edit $id");
        $product = Product::find($id);
        return view("products.edit",["product"=>$product]);

    }
    function update ($id,Request $request){
        // dd($request->all());
        $product = Product::find($id);
        $product->update($request->all());
        return redirect()->route("product.index");

    }
    function show (){



        // dd("hi");
        //  $product = Product::find($id);
        //  $product->create($request->all());
        //  return redirect()->route("products.create");
        return view("products.show");


    }
    function create (Request $request){
        // dd($product);
        $product=new Product;
        $product->name=$request->name;
        $product->price=$request->price;
        $product->amount=$request->amount;
        $product->save();
        return redirect()->route("product.index");

        // $product = Product::find($request);

        // $product = Product::post($request);
        // dd($request["name"]);
        // return view("products.index",["name"=>$product["name"],"price"=>$product["price"],"amount"=>$product["amount"]
        //     // "name"=>$product["name"],"price"=>$product["price"],"amount"=>$product["amount"]
        // ]);

    }

}

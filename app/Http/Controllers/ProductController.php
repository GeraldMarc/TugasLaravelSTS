<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function GetAll(){
        $products = Product::select('id','name','unit_price')->get();

        return response()->json([
                    'message' => 'success',
                    'data' => $products,
                ], 200);
    }

    public function GetByID($product_id){
        $product = Product::find($product_id);

        return response()->json([
                    'message' => 'success',
                    'data' => $product,
                ], 200);
    }

    public function Store(Request $request){
        $product = new Product();
        $product->sku = $request->sku;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->unit_price = $request->unit_price;
        $product->product_category_id = $request->product_category_id; 
        $product->save();

        
        return response()->json([
                    'message' => 'success',
                ], 200);
    }

    public function Update(Request $request, $product_id){
        $product = Product::find($product_id);
        $product->sku = $request->sku;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->unit_price = $request->unit_price;
        $product->product_category_id = $request->product_category_id;
        $product->save();

        return response()->json([
            'message' => 'success'
        ], 200);
    }

    public function Delete(Request $request, $product_id){
        $product = Product::find($product_id);
        $product->delete();

        return response()->json([
                    'message' => 'success'
                ], 200);
    }
}

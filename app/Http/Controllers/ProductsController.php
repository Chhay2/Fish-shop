<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    public function insertProduct(Request $request)
    {
        $validateDate = $request->validate([
            'name' => 'required|string',
            'category_id'=>'required|exists:categories,id',
            'price' => 'required|numeric',
            'immage' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'description' => 'nullable|string',
            ]) ;
            $product = Products::create($validateDate);
       return response()->json(['message'=>'success']);
    }
    
}

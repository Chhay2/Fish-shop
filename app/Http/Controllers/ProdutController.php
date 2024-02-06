<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProdutController extends Controller
{
    //insert
    public function InsertProduct(Request $request)
    {
        $product = new Products();
        $validateDate = $request->validate([
            'name' => 'required|string',
            'category_id'=>'required|exists:categories,id',
            'price' => 'required|numeric',
            'immage' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'description' => 'nullable|string',
            ]) ;
            $product = Products::create($validateDate);
       return response()->json(['product'=>$product]);
    }

    //view all product
    public function ViewProduct(){
        $product = Products::all();
        return response()->json(['product'=>$product]);
    }

    //view product by id
    public function getProductbyID($id){
        $product = Products::find($id);
        return response()->json(['product'=>$product]);
    }

    //updat product
    public function updateProduct(Request $request, $id)
    {
    $product = Products::find($id);

    if (!$product) {
        return response()->json(['error' => 'Product not found'], 404);
    }

    $validatedData = $request->validate([
        'name' => 'string',
        'category_id' => 'exists:categories,id',
        'price' => 'numeric',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        'description' => 'nullable|string',
    ]);

    $product->update($validatedData);

    return response()->json(['message' => 'Product updated successfully', 'product' => $product]);
    }

    //delete product
    public function deleteProduct($id)
{
    $product = Products::find($id);

    if (!$product) {
        return response()->json(['error' => 'Product not found'], 404);
    }

    $product->delete();

    return response()->json(['message' => 'Product deleted successfully']);
}

    
}

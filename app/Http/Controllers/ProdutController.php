<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProdutController extends Controller
{
    //insert
    public function InsertProduct(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'name' => 'required|string',
            'category_id' => 'required|integer|min:1|max:10',
            'price' => 'required|numeric|min:0',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust validation rules as needed
            'description' => 'nullable|string',
        ]);

        // Handle image upload
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);

        // Create new product
        $product = Products::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'image' => $imageName, // Assuming 'image' column stores the filename
            'description' => $request->description,
        ]);

        return response()->json(['message' => 'Product created successfully', 'product' => $product], 201);
    }

    //view all product
    public function ViewProduct(){
        $products = Products::all();
        return response()->json(['products' => $products]);
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

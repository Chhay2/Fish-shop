<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class CategoriesController extends Controller
{
    public function getallcategory(){
        $category = Categories::all();
        return response()->json(['category'  =>$category]);
}
    public function insertcategory( Request $request){
        $category = new Categories();
        $category->name = $request->name;
        $category->save();
        return response()->json(['c'=>$category]);
}

    public function getcategorybyID($id){
        $category = Categories::find($id);
        return response()->json(['c'=>$category]);

}
}
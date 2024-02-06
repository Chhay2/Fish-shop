<?php

use App\Http\Controllers\CategoriesController;
// use App\Http\Controllers\ProductController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProdutController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::post('/createuser',[UsersController::class,'storeUsers']);

Route::get('/getcategory',[CategoriesController::class,'getallcategory']);

Route::post('/insertcategory',[CategoriesController::class,'insertcategory']);

Route::get('/getcategorybyID/{id}',[CategoriesController::class,'getcategorybyID']);


// Route::post('/insertproduct',[ProductsController::class,'insertProduct']);

//Product
Route::post('/InsertProduct',[ProdutController::class,'InsertProduct']);

Route::get('/viewproductbyID/{id}',[ProdutController::class,'getProductbyID']);
Route::get('/ViewProduct',[ProdutController::class,'ViewProduct']);
Route::put('/products/{id}', [ProdutController::class, 'updateProduct']);
Route::delete('/products/{id}', [ProdutController::class, 'deleteProduct']);
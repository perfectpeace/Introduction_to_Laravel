<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
 

 Route::post("/product/create",[ProductController::class,'create']);
//  Route::post("/product/create",[ProductController::class,'create']);
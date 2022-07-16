<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingController extends Controller
{
     public function test($user_id,$product_id) {
        return "User ID:${user_id} wants to delete Product ID:${product_id}";
     } 
     public function createProduct(Request $req){
        return $req;
     }
} 

<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;  

class ProductController extends Controller
{
      
    public function create(Request $req)
    {
            try {
                //  Validate 
               $Validator=Validator::make(request()->all(),[
                    "name"=>"required|string|min:3|max:10",
                    "price"=>"required|numeric",
                    "description"=>"nullable|string"
               ]);
          if($validator->fails()){
            
          }
        // Store 
      return request()->all();
            } catch (\Throwable $th) {
                throw $th;
            }
    } 


 
}

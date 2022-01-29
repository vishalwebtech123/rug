<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductlistController extends Controller
{
    public function getAllProducts() {
      $product = Product::get()->toJson(JSON_PRETTY_PRINT);
      return response($product, 200); 
    }
}

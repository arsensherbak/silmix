<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductShowController extends Controller
{
    public function __invoke(Product $product)
    {

        return view('main.product.show', compact('product'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Pipelines\ProductPipeline;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = ProductPipeline::apply(Product::query());

        return response()->json($products->paginate(1));
    }
}

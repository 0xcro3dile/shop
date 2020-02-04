<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with(['category', 'images'])->paginate(14);
        $CurrencyCode = env('CURRENCY_code', 'SDG');
        return view('admin.products.products')->with(['products' => $products,
            'currency_code' => $CurrencyCode,

        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Carosel;
use App\Models\Client;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $carosels = Carosel::select('image')->where('status', 1)->get();
        $aboutUs = AboutUs::select('image')->where('status', 1)->first();
        $totalClient = Client::where('status', 1)->count();
        $totalProduct = Product::where('status', 1)->count();
        $productCategories = ProductCategory::select('category_name')->where('status', 1)->get();
        $products = Product::where('status', 1)->get();

        return view('index', compact('carosels', 'aboutUs', 'totalClient', 'totalProduct',
            'productCategories', 'products'));
    }
}

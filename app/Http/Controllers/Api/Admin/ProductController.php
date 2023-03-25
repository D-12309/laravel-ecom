<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Offer;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $successStatus = 200;

    public function category(Request $request) {
        $result['categories'] =  Category::all();
        return response()->json(['data'=> $result], $this-> successStatus);
    }

    public function brand(Request $request) {
        $result['brands'] = Brand::all();
        return response()->json(['data'=> $result], $this-> successStatus);
    }

    public function offer(Request $request) {
        $result['offers'] = Offer::all();
        return response()->json(['data'=> $result], $this-> successStatus);
    }

    public function product(Request $request) {
        $result['product'] = Product::with(['productImages','category','brand'])->get();
        return response()->json(['data'=> $result], $this-> successStatus);
    }
}

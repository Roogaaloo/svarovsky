<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index(){
                $categories = Category::all();

        return view('categories.list', compact('categories'));
    }

    public function show($href){
        $category = DB::table('categories')->where('status', 1)->where('href', $href)->first();
        $products = DB::table('products')->where('category', $href)->where('status', 1)->get();

        $p = '';
        foreach($products as $product){
            $p = $product->name;
        }

        return view('categories.detail', compact('category', 'products', 'p'));
    }

    public function showProducts($href, $id){
        $product = DB::table('products')->where('category', $href)->where('status', 1)->where('href', $id)->first();

        $category_href = $product->category;

        return view('categories.product', compact('product', 'category_href'));
    }
}

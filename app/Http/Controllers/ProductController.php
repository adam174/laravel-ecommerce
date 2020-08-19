<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoryId = request('category_id');
        $categoryName = null;
        $categories = Category::get();
        if($categoryId) {
            $category = Category::find($categoryId);
            $categoryName = ucfirst($category->name);

            $products = $category->allProducts();
        }else{
            $products = Product::take(10)->get();
        }

        return view('product.index', compact('products', 'categoryName','categories'));
    }

    public function search(Request $request)
    {
        $categories = Category::get();
        $query = $request->input('query');

        $products = Product::where('name','LIKE',"%$query%")->paginate(10);

        return view('product.catalog',compact('products','categories'));
    }

    public function show(Product $product)
    {
        $categories = Category::get();
        return view('product.show', compact('product','categories'));

    }

}

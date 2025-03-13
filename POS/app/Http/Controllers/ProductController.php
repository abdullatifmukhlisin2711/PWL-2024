<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $categories =[
            ['name' => 'Food & Beverage', 'route' => '/category/food-beverage'],
            ['name' => 'Beuty & Health', 'route' => '/category/beuty-health'],
            ['name' => 'Home Care', 'route' => '/category/home-care'],
            ['name' => 'Baby & Kid', 'route' => '/category/baby-kid']
        ];
        return view('blog.products', ['categories' => $categories]);
    }
}

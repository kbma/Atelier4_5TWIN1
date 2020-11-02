<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ApiProductController extends Controller
{
    public function index(){
        return Product::all()->toJson();
    }

    public function show($id)
    {
        return Product::find($id)->toJson();
    }
}

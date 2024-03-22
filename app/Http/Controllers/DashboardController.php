<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Dashboard;

class DashboardController extends Controller
{
    public function index()
    {
        $products = Product::where('Category', 'Foods')->get();
        return view('dashboard', compact('products'));
    }
}

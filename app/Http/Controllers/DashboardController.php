<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Dashboard;

class DashboardController extends Controller
{
    public function showFoods()
    {
        $products = Product::where('Category', 'Foods')->get();
        return view('dashboard', compact('products'));
    }

    public function showChips() 
    {
        $chips = Product::where('Category', 'Chips')->get();
        return view('ctchips', compact('chips'));
    }

    public function showDrinks() 
    {
        $drinks = Product::where('Category', 'Drinks')->get();
        return view('ctDrinks', compact('drinks'));
    }


    public function login()
    {
        return view('dashboard');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userx;


class UserxController extends Controller
{
    public function index()
    {
        $users = Userx::all();
        return view('users', compact('users'));
    }
    
}

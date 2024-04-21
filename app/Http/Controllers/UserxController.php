<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userx;
use Illuminate\Support\Facades\Hash; // Import Hash class

class UserxController extends Controller
{
    public function index()
    {
        $users = Userx::all();
        return view('users', compact('users'));
    }
    
    public function createUser(Request $request)
    {
        // Validate the request data
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'email' => 'required',
            'balance' => 'required',
            'stud_id' => 'required',
        ]);

        // Create a new product instance
        $users = new Userx();
        $users->username = $request->username;
        $users->password =  Hash::make($request->password);
        $users->email = $request->email;
        $users->balance = $request->balance;
        $users->Student_ID = $request->stud_id;
        // Save the product to the database
        $users->save();

        // Redirect back to the page with a success message
        return redirect()->back()->with('success', 'User added successfully.');
    }




}
